<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive 3D Globe</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <style>
        body { margin: 0; overflow: hidden; }
        #globe-container { width: 100vw; height: 100vh; }
        .marker-label {
            position: absolute;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            pointer-events: none;
            transform: translate(-50%, -100%);
            white-space: nowrap;
        }
    </style>
</head>
<body class="bg-gray-900">
    <div id="globe-container"></div>
    
    <!-- Controls Panel -->
    <div class="fixed top-4 left-4 bg-gray-800/90 backdrop-blur p-4 rounded-xl shadow-xl text-white max-w-xs">
        <h1 class="text-xl font-bold mb-3 text-cyan-400">🌍 Interactive Globe</h1>
        <div class="space-y-2 text-sm">
            <p><span class="text-cyan-300">🖱️ Drag:</span> Rotate globe</p>
            <p><span class="text-cyan-300">🔍 Scroll:</span> Zoom in/out</p>
            <p><span class="text-cyan-300">📍 Click:</span> Add marker</p>
        </div>
        <div class="mt-4 space-y-3">
            <div>
                <label class="text-xs text-gray-400">Rotation Speed</label>
                <input type="range" id="rotationSpeed" min="0" max="100" value="20" class="w-full accent-cyan-500">
            </div>
            <div>
                <label class="text-xs text-gray-400">Atmosphere Intensity</label>
                <input type="range" id="atmosphereIntensity" min="0" max="100" value="50" class="w-full accent-cyan-500">
            </div>
            <button id="resetView" class="w-full bg-cyan-600 hover:bg-cyan-700 px-3 py-2 rounded text-sm transition">
                Reset View
            </button>
            <button id="clearMarkers" class="w-full bg-red-600 hover:bg-red-700 px-3 py-2 rounded text-sm transition">
                Clear Markers
            </button>
        </div>
    </div>

    <!-- Info Panel -->
    <div id="infoPanel" class="fixed bottom-4 left-4 bg-gray-800/90 backdrop-blur p-4 rounded-xl shadow-xl text-white max-w-xs hidden">
        <h3 class="font-bold text-cyan-400" id="locationName">Location</h3>
        <p class="text-sm text-gray-300" id="locationCoords">Lat: 0, Lon: 0</p>
    </div>

    <!-- Markers List -->
    <div class="fixed top-4 right-4 bg-gray-800/90 backdrop-blur p-4 rounded-xl shadow-xl text-white max-w-xs max-h-96 overflow-y-auto">
        <h2 class="text-lg font-bold mb-3 text-cyan-400">📍 Markers</h2>
        <ul id="markersList" class="space-y-2 text-sm">
            <li class="text-gray-400 italic">Click on globe to add markers</li>
        </ul>
    </div>

    <script>
        // Scene setup
        const container = document.getElementById('globe-container');
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio);
        container.appendChild(renderer.domElement);

        camera.position.z = 4;

        // Lighting
        const ambientLight = new THREE.AmbientLight(0x404040, 0.5);
        scene.add(ambientLight);

        const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight.position.set(5, 3, 5);
        scene.add(directionalLight);

        const pointLight = new THREE.PointLight(0x88ccff, 0.5);
        pointLight.position.set(-5, -3, -5);
        scene.add(pointLight);

        // Procedural texture generation
        function createProceduralTexture(width, height) {
            const canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;
            const ctx = canvas.getContext('2d');

            // Ocean base
            const oceanGradient = ctx.createLinearGradient(0, 0, 0, height);
            oceanGradient.addColorStop(0, '#0a4a7a');
            oceanGradient.addColorStop(0.5, '#0d5a8f');
            oceanGradient.addColorStop(1, '#0a4a7a');
            ctx.fillStyle = oceanGradient;
            ctx.fillRect(0, 0, width, height);

            // Add ocean texture noise
            for (let i = 0; i < 5000; i++) {
                const x = Math.random() * width;
                const y = Math.random() * height;
                const alpha = Math.random() * 0.1;
                ctx.fillStyle = `rgba(100, 180, 255, ${alpha})`;
                ctx.fillRect(x, y, 2, 2);
            }

            // Procedural continents using noise-like patterns
            const continents = [
                // North America
                { cx: 0.2, cy: 0.35, rx: 0.15, ry: 0.15, color: '#2d5a3d' },
                { cx: 0.15, cy: 0.25, rx: 0.08, ry: 0.08, color: '#3d6a4d' },
                // South America
                { cx: 0.28, cy: 0.65, rx: 0.06, ry: 0.15, color: '#2d6a3d' },
                // Europe
                { cx: 0.5, cy: 0.3, rx: 0.08, ry: 0.06, color: '#4d7a5d' },
                // Africa
                { cx: 0.52, cy: 0.55, rx: 0.1, ry: 0.15, color: '#8a7a4d' },
                // Asia
                { cx: 0.7, cy: 0.35, rx: 0.2, ry: 0.15, color: '#5d7a4d' },
                { cx: 0.65, cy: 0.28, rx: 0.12, ry: 0.08, color: '#6d8a5d' },
                // Australia
                { cx: 0.85, cy: 0.7, rx: 0.06, ry: 0.05, color: '#9a6a3d' },
                // Antarctica
                { cx: 0.5, cy: 0.95, rx: 0.4, ry: 0.05, color: '#e0e8f0' },
                // Greenland
                { cx: 0.38, cy: 0.18, rx: 0.04, ry: 0.05, color: '#c0d0e0' },
            ];

            continents.forEach(cont => {
                const cx = cont.cx * width;
                const cy = cont.cy * height;
                const rx = cont.rx * width;
                const ry = cont.ry * height;

                // Draw main continent shape
                ctx.beginPath();
                ctx.ellipse(cx, cy, rx, ry, 0, 0, Math.PI * 2);
                ctx.fillStyle = cont.color;
                ctx.fill();

                // Add terrain variation
                for (let i = 0; i < 50; i++) {
                    const angle = Math.random() * Math.PI * 2;
                    const dist = Math.random() * 0.8;
                    const px = cx + Math.cos(angle) * rx * dist;
                    const py = cy + Math.sin(angle) * ry * dist;
                    const size = Math.random() * rx * 0.3;
                    
                    ctx.beginPath();
                    ctx.ellipse(px, py, size, size * 0.7, Math.random() * Math.PI, 0, Math.PI * 2);
                    const brightness = Math.random() * 30 - 15;
                    ctx.fillStyle = adjustColor(cont.color, brightness);
                    ctx.fill();
                }

                // Add edge irregularity
                for (let i = 0; i < 30; i++) {
                    const angle = Math.random() * Math.PI * 2;
                    const px = cx + Math.cos(angle) * rx * (0.8 + Math.random() * 0.4);
                    const py = cy + Math.sin(angle) * ry * (0.8 + Math.random() * 0.4);
                    const size = Math.random() * rx * 0.2;
                    
                    ctx.beginPath();
                    ctx.ellipse(px, py, size, size * 0.8, 0, 0, Math.PI * 2);
                    ctx.fillStyle = cont.color;
                    ctx.fill();
                }
            });

            // Add mountain ranges (lighter spots)
            const mountains = [
                { x: 0.18, y: 0.35, w: 0.05, h: 0.02 }, // Rockies
                { x: 0.27, y: 0.6, w: 0.01, h: 0.1 }, // Andes
                { x: 0.5, y: 0.32, w: 0.03, h: 0.01 }, // Alps
                { x: 0.7, y: 0.35, w: 0.08, h: 0.02 }, // Himalayas
            ];

            mountains.forEach(m => {
                for (let i = 0; i < 20; i++) {
                    const x = (m.x + (Math.random() - 0.5) * m.w) * width;
                    const y = (m.y + (Math.random() - 0.5) * m.h) * height;
                    ctx.beginPath();
                    ctx.arc(x, y, 3 + Math.random() * 5, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(200, 200, 200, ${0.3 + Math.random() * 0.3})`;
                    ctx.fill();
                }
            });

            // Add country borders (subtle lines)
            ctx.strokeStyle = 'rgba(255, 255, 255, 0.15)';
            ctx.lineWidth = 1;
            
            // Simplified border lines
            const borders = [
                [[0.22, 0.38], [0.18, 0.42]],
                [[0.5, 0.32], [0.55, 0.35]],
                [[0.52, 0.5], [0.55, 0.55]],
                [[0.65, 0.35], [0.7, 0.38]],
            ];

            borders.forEach(border => {
                ctx.beginPath();
                ctx.moveTo(border[0][0] * width, border[0][1] * height);
                ctx.lineTo(border[1][0] * width, border[1][1] * height);
                ctx.stroke();
            });

            return new THREE.CanvasTexture(canvas);
        }

        function adjustColor(color, amount) {
            const hex = color.replace('#', '');
            const r = Math.max(0, Math.min(255, parseInt(hex.substr(0, 2), 16) + amount));
            const g = Math.max(0, Math.min(255, parseInt(hex.substr(2, 2), 16) + amount));
            const b = Math.max(0, Math.min(255, parseInt(hex.substr(4, 2), 16) + amount));
            return `rgb(${r}, ${g}, ${b})`;
        }

        // Create bump map
        function createBumpMap(width, height) {
            const canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;
            const ctx = canvas.getContext('2d');

            ctx.fillStyle = '#000000';
            ctx.fillRect(0, 0, width, height);

            // Add noise for terrain
            for (let x = 0; x < width; x += 2) {
                for (let y = 0; y < height; y += 2) {
                    const noise = Math.random() * 50;
                    ctx.fillStyle = `rgb(${noise}, ${noise}, ${noise})`;
                    ctx.fillRect(x, y, 2, 2);
                }
            }

            return new THREE.CanvasTexture(canvas);
        }

        // Create specular map
        function createSpecularMap(width, height) {
            const canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;
            const ctx = canvas.getContext('2d');

            // Ocean is shiny, land is not
            ctx.fillStyle = '#4488aa';
            ctx.fillRect(0, 0, width, height);

            return new THREE.CanvasTexture(canvas);
        }

        // Create globe
        const globeGeometry = new THREE.SphereGeometry(1, 64, 64);
        const texture = createProceduralTexture(2048, 1024);
        const bumpMap = createBumpMap(1024, 512);
        
        const globeMaterial = new THREE.MeshPhongMaterial({
            map: texture,
            bumpMap: bumpMap,
            bumpScale: 0.02,
            specular: new THREE.Color(0x333333),
            shininess: 5,
        });

        const globe = new THREE.Mesh(globeGeometry, globeMaterial);
        scene.add(globe);

        // Atmosphere glow
        const atmosphereGeometry = new THREE.SphereGeometry(1.02, 64, 64);
        const atmosphereMaterial = new THREE.ShaderMaterial({
            vertexShader: `
                varying vec3 vNormal;
                void main() {
                    vNormal = normalize(normalMatrix * normal);
                    gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
                }
            `,
            fragmentShader: `
                varying vec3 vNormal;
                uniform float intensity;
                void main() {
                    float atmosphere = pow(0.7 - dot(vNormal, vec3(0.0, 0.0, 1.0)), 2.0);
                    gl_FragColor = vec4(0.3, 0.6, 1.0, 1.0) * atmosphere * intensity;
                }
            `,
            uniforms: {
                intensity: { value: 1.0 }
            },
            blending: THREE.AdditiveBlending,
            side: THREE.BackSide,
            transparent: true,
        });

        const atmosphere = new THREE.Mesh(atmosphereGeometry, atmosphereMaterial);
        scene.add(atmosphere);

        // Outer glow
        const outerGlowGeometry = new THREE.SphereGeometry(1.15, 64, 64);
        const outerGlowMaterial = new THREE.ShaderMaterial({
            vertexShader: `
                varying vec3 vNormal;
                void main() {
                    vNormal = normalize(normalMatrix * normal);
                    gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
                }
            `,
            fragmentShader: `
                varying vec3 vNormal;
                uniform float intensity;
                void main() {
                    float glow = pow(0.5 - dot(vNormal, vec3(0.0, 0.0, 1.0)), 3.0);
                    gl_FragColor = vec4(0.2, 0.5, 1.0, 1.0) * glow * intensity * 0.5;
                }
            `,
            uniforms: {
                intensity: { value: 1.0 }
            },
            blending: THREE.AdditiveBlending,
            side: THREE.BackSide,
            transparent: true,
        });

        const outerGlow = new THREE.Mesh(outerGlowGeometry, outerGlowMaterial);
        scene.add(outerGlow);

        // Stars background
        const starsGeometry = new THREE.BufferGeometry();
        const starPositions = [];
        for (let i = 0; i < 10000; i++) {
            const x = (Math.random() - 0.5) * 200;
            const y = (Math.random() - 0.5) * 200;
            const z = (Math.random() - 0.5) * 200;
            starPositions.push(x, y, z);
        }
        starsGeometry.setAttribute('position', new THREE.Float32BufferAttribute(starPositions, 3));
        const starsMaterial = new THREE.PointsMaterial({ color: 0xffffff, size: 0.1 });
        const stars = new THREE.Points(starsGeometry, starsMaterial);
        scene.add(stars);

        // Markers
        const markers = [];
        const markerGroup = new THREE.Group();
        scene.add(markerGroup);

        function createMarker(lat, lon, name) {
            const phi = (90 - lat) * (Math.PI / 180);
            const theta = (lon + 180) * (Math.PI / 180);

            const x = -Math.sin(phi) * Math.cos(theta);
            const y = Math.cos(phi);
            const z = Math.sin(phi) * Math.sin(theta);

            // Marker pin
            const markerGeometry = new THREE.SphereGeometry(0.02, 16, 16);
            const markerMaterial = new THREE.MeshBasicMaterial({ color: 0xff4444 });
            const marker = new THREE.Mesh(markerGeometry, markerMaterial);
            marker.position.set(x * 1.02, y * 1.02, z * 1.02);

            // Marker stem
            const stemGeometry = new THREE.CylinderGeometry(0.003, 0.003, 0.05, 8);
            const stemMaterial = new THREE.MeshBasicMaterial({ color: 0xff4444 });
            const stem = new THREE.Mesh(stemGeometry, stemMaterial);
            stem.position.set(x * 1.045, y * 1.045, z * 1.045);
            stem.lookAt(0, 0, 0);
            stem.rotateX(Math.PI / 2);

            // Glow ring
            const ringGeometry = new THREE.RingGeometry(0.025, 0.035, 32);
            const ringMaterial = new THREE.MeshBasicMaterial({ 
                color: 0xff6666, 
                transparent: true, 
                opacity: 0.6,
                side: THREE.DoubleSide 
            });
            const ring = new THREE.Mesh(ringGeometry, ringMaterial);
            ring.position.set(x * 1.021, y * 1.021, z * 1.021);
            ring.lookAt(0, 0, 0);

            const markerGroup3D = new THREE.Group();
            markerGroup3D.add(marker);
            markerGroup3D.add(stem);
            markerGroup3D.add(ring);
            markerGroup3D.userData = { lat, lon, name };

            markerGroup.add(markerGroup3D);
            markers.push({ group: markerGroup3D, lat, lon, name });

            updateMarkersList();
            return markerGroup3D;
        }

        function updateMarkersList() {
            const list = document.getElementById('markersList');
            if (markers.length === 0) {
                list.innerHTML = '<li class="text-gray-400 italic">Click on globe to add markers</li>';
                return;
            }
            list.innerHTML = markers.map((m, i) => `
                <li class="flex justify-between items-center bg-gray-700/50 p-2 rounded">
                    <span>${m.name}</span>
                    <button onclick="removeMarker(${i})" class="text-red-400 hover:text-red-300 text-xs">✕</button>
                </li>
            `).join('');
        }

        window.removeMarker = function(index) {
            markerGroup.remove(markers[index].group);
            markers.splice(index, 1);
            updateMarkersList();
        };

        // Add some initial markers
        createMarker(40.7128, -74.0060, 'New York');
        createMarker(51.5074, -0.1278, 'London');
        createMarker(35.6762, 139.6503, 'Tokyo');
        createMarker(-33.8688, 151.2093, 'Sydney');
        createMarker(48.8566, 2.3522, 'Paris');

        // Mouse controls
        let isDragging = false;
        let previousMousePosition = { x: 0, y: 0 };
        let autoRotate = true;
        let rotationSpeed = 0.002;
        let targetRotationX = 0;
        let targetRotationY = 0;

        container.addEventListener('mousedown', (e) => {
            isDragging = true;
            autoRotate = false;
            previousMousePosition = { x: e.clientX, y: e.clientY };
        });

        container.addEventListener('mousemove', (e) => {
            if (!isDragging) return;

            const deltaX = e.clientX - previousMousePosition.x;
            const deltaY = e.clientY - previousMousePosition.y;

            globe.rotation.y += deltaX * 0.005;
            globe.rotation.x += deltaY * 0.005;
            globe.rotation.x = Math.max(-Math.PI / 2, Math.min(Math.PI / 2, globe.rotation.x));

            markerGroup.rotation.y = globe.rotation.y;
            markerGroup.rotation.x = globe.rotation.x;

            previousMousePosition = { x: e.clientX, y: e.clientY };
        });

        container.addEventListener('mouseup', () => {
            isDragging = false;
        });

        container.addEventListener('mouseleave', () => {
            isDragging = false;
        });

        // Zoom with scroll
        container.addEventListener('wheel', (e) => {
            e.preventDefault();
            camera.position.z += e.deltaY * 0.002;
            camera.position.z = Math.max(1.5, Math.min(10, camera.position.z));
        });

        // Click to add marker
        const raycaster = new THREE.Raycaster();
        const mouse = new THREE.Vector2();

        container.addEventListener('click', (e) => {
            if (Math.abs(e.clientX - previousMousePosition.x) > 5 || 
                Math.abs(e.clientY - previousMousePosition.y) > 5) return;

            mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
            mouse.y = -(e.clientY / window.innerHeight) * 2 + 1;

            raycaster.setFromCamera(mouse, camera);
            const intersects = raycaster.intersectObject(globe);

            if (intersects.length > 0) {
                const point = intersects[0].point;
                
                // Convert to lat/lon
                const lat = 90 - Math.acos(point.y) * 180 / Math.PI;
                const lon = ((270 + Math.atan2(point.x, point.z) * 180 / Math.PI) % 360) - 180;

                // Adjust for globe rotation
                const adjustedLon = lon - (globe.rotation.y * 180 / Math.PI);
                const normalizedLon = ((adjustedLon + 180) % 360) - 180;

                const markerName = `Marker ${markers.length + 1}`;
                createMarker(lat, normalizedLon, markerName);

                // Show info panel
                document.getElementById('infoPanel').classList.remove('hidden');
                document.getElementById('locationName').textContent = markerName;
                document.getElementById('locationCoords').textContent = 
                    `Lat: ${lat.toFixed(2)}°, Lon: ${normalizedLon.toFixed(2)}°`;
            }
        });

        // Controls
        document.getElementById('rotationSpeed').addEventListener('input', (e) => {
            rotationSpeed = e.target.value / 10000;
        });

        document.getElementById('atmosphereIntensity').addEventListener('input', (e) => {
            const intensity = e.target.value / 50;
            atmosphereMaterial.uniforms.intensity.value = intensity;
            outerGlowMaterial.uniforms.intensity.value = intensity;
        });

        document.getElementById('resetView').addEventListener('click', () => {
            camera.position.z = 4;
            globe.rotation.x = 0;
            globe.rotation.y = 0;
            markerGroup.rotation.x = 0;
            markerGroup.rotation.y = 0;
            autoRotate = true;
        });

        document.getElementById('clearMarkers').addEventListener('click', () => {
            while (markers.length > 0) {
                markerGroup.remove(markers[0].group);
                markers.shift();
            }
            updateMarkersList();
            document.getElementById('infoPanel').classList.add('hidden');
        });

        // Highlight effect on hover
        let highlightedRegion = null;

        // Animation loop
        function animate() {
            requestAnimationFrame(animate);

            if (autoRotate) {
                globe.rotation.y += rotationSpeed;
                markerGroup.rotation.y = globe.rotation.y;
            }

            // Animate marker rings
            markers.forEach((m, i) => {
                const ring = m.group.children[2];
                if (ring) {
                    ring.material.opacity = 0.4 + Math.sin(Date.now() * 0.005 + i) * 0.3;
                    ring.scale.setScalar(1 + Math.sin(Date.now() * 0.003 + i) * 0.2);
                }
            });

            // Rotate stars slowly
            stars.rotation.y += 0.0001;
            stars.rotation.x += 0.00005;

            renderer.render(scene, camera);
        }

        animate();

        // Handle window resize
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    </script>
</body>
</html>
