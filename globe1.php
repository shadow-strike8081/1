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
            background: rgba(0,0,0,0.8);
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 14px;
            pointer-events: none;
            transform: translate(-50%, -100%);
            white-space: nowrap;
            border: 1px solid rgba(255,255,255,0.2);
        }
        .marker-label::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            border: 4px solid transparent;
            border-top-color: rgba(0,0,0,0.8);
        }
    </style>
</head>
<body class="bg-gray-900">
    <div id="globe-container"></div>
    
    <!-- UI Controls -->
    <div class="fixed top-4 left-4 bg-gray-800/90 backdrop-blur p-4 rounded-xl text-white max-w-xs">
        <h1 class="text-xl font-bold mb-3 flex items-center gap-2">
            <span class="text-2xl">🌍</span> Interactive Globe
        </h1>
        <div class="text-sm text-gray-300 space-y-1">
            <p>🖱️ Drag to rotate</p>
            <p>🔍 Scroll to zoom</p>
            <p>📍 Click markers for info</p>
        </div>
        <div class="mt-4 space-y-3">
            <div>
                <label class="text-sm text-gray-400">Auto Rotation</label>
                <input type="checkbox" id="autoRotate" checked class="ml-2 accent-blue-500">
            </div>
            <div>
                <label class="text-sm text-gray-400">Rotation Speed</label>
                <input type="range" id="rotationSpeed" min="0.1" max="2" step="0.1" value="0.5" class="w-full accent-blue-500">
            </div>
            <div>
                <label class="text-sm text-gray-400">Atmosphere</label>
                <input type="checkbox" id="showAtmosphere" checked class="ml-2 accent-blue-500">
            </div>
        </div>
    </div>
    
    <!-- Country Info Panel -->
    <div id="countryInfo" class="fixed bottom-4 left-4 bg-gray-800/90 backdrop-blur p-4 rounded-xl text-white hidden">
        <h2 id="countryName" class="text-lg font-bold"></h2>
        <p id="countryDetails" class="text-sm text-gray-300"></p>
    </div>
    
    <!-- Marker Labels Container -->
    <div id="labels-container"></div>

    <script>
        // Scene setup
        const container = document.getElementById('globe-container');
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio);
        container.appendChild(renderer.domElement);

        camera.position.z = 3;

        // Lighting
        const ambientLight = new THREE.AmbientLight(0x404040, 0.5);
        scene.add(ambientLight);
        
        const sunLight = new THREE.DirectionalLight(0xffffff, 1.2);
        sunLight.position.set(5, 3, 5);
        scene.add(sunLight);

        // Procedural Earth Texture
        function createProceduralTexture() {
            const canvas = document.createElement('canvas');
            canvas.width = 2048;
            canvas.height = 1024;
            const ctx = canvas.getContext('2d');

            // Ocean base
            const oceanGradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
            oceanGradient.addColorStop(0, '#1a4a6e');
            oceanGradient.addColorStop(0.5, '#0d3d5c');
            oceanGradient.addColorStop(1, '#1a4a6e');
            ctx.fillStyle = oceanGradient;
            ctx.fillRect(0, 0, canvas.width, canvas.height);

            // Simplex-like noise function
            function noise(x, y, seed = 0) {
                const X = Math.floor(x) & 255;
                const Y = Math.floor(y) & 255;
                const xf = x - Math.floor(x);
                const yf = y - Math.floor(y);
                
                const hash = (a, b) => {
                    const n = Math.sin(a * 12.9898 + b * 78.233 + seed) * 43758.5453;
                    return n - Math.floor(n);
                };
                
                const aa = hash(X, Y);
                const ab = hash(X, Y + 1);
                const ba = hash(X + 1, Y);
                const bb = hash(X + 1, Y + 1);
                
                const u = xf * xf * (3 - 2 * xf);
                const v = yf * yf * (3 - 2 * yf);
                
                return aa * (1 - u) * (1 - v) + ba * u * (1 - v) + ab * (1 - u) * v + bb * u * v;
            }

            function fbm(x, y, octaves = 6) {
                let value = 0;
                let amplitude = 0.5;
                let frequency = 1;
                for (let i = 0; i < octaves; i++) {
                    value += amplitude * noise(x * frequency, y * frequency, i * 100);
                    amplitude *= 0.5;
                    frequency *= 2;
                }
                return value;
            }

            // Generate continents with procedural noise
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const data = imageData.data;

            for (let y = 0; y < canvas.height; y++) {
                for (let x = 0; x < canvas.width; x++) {
                    const nx = x / canvas.width * 8;
                    const ny = y / canvas.height * 4;
                    
                    // Latitude factor (more land near equator and temperate zones)
                    const lat = Math.abs(y / canvas.height - 0.5) * 2;
                    const latFactor = 1 - Math.pow(lat, 0.8);
                    
                    // Continental noise
                    let n = fbm(nx, ny, 6);
                    n = n * latFactor;
                    
                    // Polar ice
                    const polarFactor = Math.pow(lat, 4);
                    
                    const idx = (y * canvas.width + x) * 4;
                    
                    if (polarFactor > 0.7) {
                        // Ice caps
                        const iceNoise = noise(nx * 4, ny * 4);
                        if (iceNoise > 0.3) {
                            data[idx] = 230 + Math.random() * 25;
                            data[idx + 1] = 235 + Math.random() * 20;
                            data[idx + 2] = 245;
                        }
                    } else if (n > 0.42) {
                        // Land
                        const elevation = (n - 0.42) / 0.58;
                        
                        if (elevation > 0.6) {
                            // Mountains
                            const mountain = 100 + elevation * 80;
                            data[idx] = mountain;
                            data[idx + 1] = mountain - 10;
                            data[idx + 2] = mountain - 20;
                        } else if (lat < 0.25) {
                            // Tropical forests
                            data[idx] = 34 + Math.random() * 20;
                            data[idx + 1] = 100 + Math.random() * 40;
                            data[idx + 2] = 34 + Math.random() * 20;
                        } else if (lat < 0.5) {
                            // Temperate
                            data[idx] = 60 + Math.random() * 30;
                            data[idx + 1] = 120 + Math.random() * 40;
                            data[idx + 2] = 50 + Math.random() * 20;
                        } else {
                            // Tundra
                            data[idx] = 140 + Math.random() * 30;
                            data[idx + 1] = 150 + Math.random() * 30;
                            data[idx + 2] = 130 + Math.random() * 20;
                        }
                    }
                }
            }

            ctx.putImageData(imageData, 0, 0);

            // Add country-like borders
            ctx.strokeStyle = 'rgba(255,255,255,0.1)';
            ctx.lineWidth = 1;
            for (let i = 0; i < 50; i++) {
                ctx.beginPath();
                let x = Math.random() * canvas.width;
                let y = Math.random() * canvas.height;
                ctx.moveTo(x, y);
                for (let j = 0; j < 10; j++) {
                    x += (Math.random() - 0.5) * 100;
                    y += (Math.random() - 0.5) * 50;
                    ctx.lineTo(x, y);
                }
                ctx.stroke();
            }

            return new THREE.CanvasTexture(canvas);
        }

        // Create bump map
        function createBumpMap() {
            const canvas = document.createElement('canvas');
            canvas.width = 1024;
            canvas.height = 512;
            const ctx = canvas.getContext('2d');
            
            ctx.fillStyle = '#808080';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
            
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const data = imageData.data;
            
            for (let i = 0; i < data.length; i += 4) {
                const noise = Math.random() * 30;
                data[i] = 128 + noise;
                data[i + 1] = 128 + noise;
                data[i + 2] = 128 + noise;
            }
            
            ctx.putImageData(imageData, 0, 0);
            return new THREE.CanvasTexture(canvas);
        }

        // Globe
        const globeGeometry = new THREE.SphereGeometry(1, 64, 64);
        const globeMaterial = new THREE.MeshPhongMaterial({
            map: createProceduralTexture(),
            bumpMap: createBumpMap(),
            bumpScale: 0.02,
            specular: new THREE.Color(0x333333),
            shininess: 5
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
                void main() {
                    float intensity = pow(0.7 - dot(vNormal, vec3(0.0, 0.0, 1.0)), 2.0);
                    gl_FragColor = vec4(0.3, 0.6, 1.0, 1.0) * intensity;
                }
            `,
            blending: THREE.AdditiveBlending,
            side: THREE.BackSide,
            transparent: true
        });
        const atmosphere = new THREE.Mesh(atmosphereGeometry, atmosphereMaterial);
        atmosphere.scale.set(1.2, 1.2, 1.2);
        scene.add(atmosphere);

        // Star field
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

        // Location markers data
        const locations = [
            { name: 'New York', lat: 40.7128, lon: -74.0060, info: 'USA - Pop: 8.3M' },
            { name: 'London', lat: 51.5074, lon: -0.1278, info: 'UK - Pop: 8.9M' },
            { name: 'Tokyo', lat: 35.6762, lon: 139.6503, info: 'Japan - Pop: 13.9M' },
            { name: 'Sydney', lat: -33.8688, lon: 151.2093, info: 'Australia - Pop: 5.3M' },
            { name: 'Paris', lat: 48.8566, lon: 2.3522, info: 'France - Pop: 2.1M' },
            { name: 'Cairo', lat: 30.0444, lon: 31.2357, info: 'Egypt - Pop: 20.9M' },
            { name: 'Rio de Janeiro', lat: -22.9068, lon: -43.1729, info: 'Brazil - Pop: 6.7M' },
            { name: 'Mumbai', lat: 19.0760, lon: 72.8777, info: 'India - Pop: 20.7M' },
            { name: 'Beijing', lat: 39.9042, lon: 116.4074, info: 'China - Pop: 21.5M' },
            { name: 'Cape Town', lat: -33.9249, lon: 18.4241, info: 'South Africa - Pop: 4.6M' }
        ];

        // Convert lat/lon to 3D position
        function latLonToVector3(lat, lon, radius) {
            const phi = (90 - lat) * (Math.PI / 180);
            const theta = (lon + 180) * (Math.PI / 180);
            const x = -radius * Math.sin(phi) * Math.cos(theta);
            const y = radius * Math.cos(phi);
            const z = radius * Math.sin(phi) * Math.sin(theta);
            return new THREE.Vector3(x, y, z);
        }

        // Create markers
        const markers = [];
        const markerGroup = new THREE.Group();
        
        locations.forEach((loc, index) => {
            const pos = latLonToVector3(loc.lat, loc.lon, 1.02);
            
            // Marker pin
            const markerGeom = new THREE.SphereGeometry(0.02, 16, 16);
            const markerMat = new THREE.MeshBasicMaterial({ 
                color: new THREE.Color().setHSL(index / locations.length, 0.8, 0.5)
            });
            const marker = new THREE.Mesh(markerGeom, markerMat);
            marker.position.copy(pos);
            marker.userData = loc;
            markers.push(marker);
            markerGroup.add(marker);
            
            // Marker glow
            const glowGeom = new THREE.SphereGeometry(0.03, 16, 16);
            const glowMat = new THREE.MeshBasicMaterial({
                color: markerMat.color,
                transparent: true,
                opacity: 0.3
            });
            const glow = new THREE.Mesh(glowGeom, glowMat);
            glow.position.copy(pos);
            markerGroup.add(glow);
            
            // Marker pole
            const poleGeom = new THREE.CylinderGeometry(0.003, 0.003, 0.05, 8);
            const poleMat = new THREE.MeshBasicMaterial({ color: 0xffffff });
            const pole = new THREE.Mesh(poleGeom, poleMat);
            const polePos = latLonToVector3(loc.lat, loc.lon, 1.0);
            pole.position.copy(polePos);
            pole.lookAt(pos);
            pole.rotateX(Math.PI / 2);
            markerGroup.add(pole);
        });
        
        scene.add(markerGroup);

        // Raycaster for marker interaction
        const raycaster = new THREE.Raycaster();
        const mouse = new THREE.Vector2();

        // Mouse/Touch controls
        let isDragging = false;
        let previousMousePosition = { x: 0, y: 0 };
        let targetRotationX = 0;
        let targetRotationY = 0;
        let currentRotationX = 0;
        let currentRotationY = 0;
        let autoRotate = true;
        let rotationSpeed = 0.5;
        let targetZoom = 3;

        container.addEventListener('mousedown', (e) => {
            isDragging = true;
            previousMousePosition = { x: e.clientX, y: e.clientY };
        });

        container.addEventListener('mousemove', (e) => {
            if (isDragging) {
                const deltaX = e.clientX - previousMousePosition.x;
                const deltaY = e.clientY - previousMousePosition.y;
                
                targetRotationY += deltaX * 0.005;
                targetRotationX += deltaY * 0.005;
                targetRotationX = Math.max(-Math.PI / 2, Math.min(Math.PI / 2, targetRotationX));
                
                previousMousePosition = { x: e.clientX, y: e.clientY };
            }
            
            // Update mouse for raycaster
            mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
            mouse.y = -(e.clientY / window.innerHeight) * 2 + 1;
        });

        container.addEventListener('mouseup', () => {
            isDragging = false;
        });

        container.addEventListener('mouseleave', () => {
            isDragging = false;
        });

        // Zoom
        container.addEventListener('wheel', (e) => {
            e.preventDefault();
            targetZoom += e.deltaY * 0.001;
            targetZoom = Math.max(1.5, Math.min(6, targetZoom));
        }, { passive: false });

        // Touch support
        let touchStartDistance = 0;
        
        container.addEventListener('touchstart', (e) => {
            if (e.touches.length === 1) {
                isDragging = true;
                previousMousePosition = { x: e.touches[0].clientX, y: e.touches[0].clientY };
            } else if (e.touches.length === 2) {
                touchStartDistance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
            }
        });

        container.addEventListener('touchmove', (e) => {
            e.preventDefault();
            if (e.touches.length === 1 && isDragging) {
                const deltaX = e.touches[0].clientX - previousMousePosition.x;
                const deltaY = e.touches[0].clientY - previousMousePosition.y;
                
                targetRotationY += deltaX * 0.005;
                targetRotationX += deltaY * 0.005;
                targetRotationX = Math.max(-Math.PI / 2, Math.min(Math.PI / 2, targetRotationX));
                
                previousMousePosition = { x: e.touches[0].clientX, y: e.touches[0].clientY };
            } else if (e.touches.length === 2) {
                const distance = Math.hypot(
                    e.touches[0].clientX - e.touches[1].clientX,
                    e.touches[0].clientY - e.touches[1].clientY
                );
                const delta = touchStartDistance - distance;
                targetZoom += delta * 0.01;
                targetZoom = Math.max(1.5, Math.min(6, targetZoom));
                touchStartDistance = distance;
            }
        }, { passive: false });

        container.addEventListener('touchend', () => {
            isDragging = false;
        });

        // Click on markers
        container.addEventListener('click', (e) => {
            mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
            mouse.y = -(e.clientY / window.innerHeight) * 2 + 1;
            
            raycaster.setFromCamera(mouse, camera);
            const intersects = raycaster.intersectObjects(markers);
            
            if (intersects.length > 0) {
                const loc = intersects[0].object.userData;
                const infoPanel = document.getElementById('countryInfo');
                document.getElementById('countryName').textContent = loc.name;
                document.getElementById('countryDetails').textContent = loc.info;
                infoPanel.classList.remove('hidden');
                
                // Pulse animation
                intersects[0].object.scale.set(1.5, 1.5, 1.5);
                setTimeout(() => {
                    intersects[0].object.scale.set(1, 1, 1);
                }, 300);
            }
        });

        // UI Controls
        document.getElementById('autoRotate').addEventListener('change', (e) => {
            autoRotate = e.target.checked;
        });

        document.getElementById('rotationSpeed').addEventListener('input', (e) => {
            rotationSpeed = parseFloat(e.target.value);
        });

        document.getElementById('showAtmosphere').addEventListener('change', (e) => {
            atmosphere.visible = e.target.checked;
        });

        // Highlighted country regions (procedural)
        let hoveredRegion = null;
        
        function checkGlobeHover() {
            raycaster.setFromCamera(mouse, camera);
            const intersects = raycaster.intersectObject(globe);
            
            if (intersects.length > 0) {
                const point = intersects[0].point;
                const lat = 90 - Math.acos(point.y) * 180 / Math.PI;
                const lon = Math.atan2(point.z, -point.x) * 180 / Math.PI;
                
                // Simple region detection based on coordinates
                let region = getRegion(lat, lon);
                if (region !== hoveredRegion) {
                    hoveredRegion = region;
                    if (region) {
                        document.getElementById('countryName').textContent = region;
                        document.getElementById('countryDetails').textContent = 'Hover region';
                        document.getElementById('countryInfo').classList.remove('hidden');
                    }
                }
            }
        }
        
        function getRegion(lat, lon) {
            if (lat > 60) return 'Arctic Region';
            if (lat < -60) return 'Antarctic Region';
            if (lat > 25 && lat < 50 && lon > -130 && lon < -60) return 'North America';
            if (lat > -55 && lat < 15 && lon > -80 && lon < -35) return 'South America';
            if (lat > 35 && lat < 70 && lon > -10 && lon < 40) return 'Europe';
            if (lat > -35 && lat < 35 && lon > -20 && lon < 55) return 'Africa';
            if (lat > 10 && lat < 55 && lon > 60 && lon < 150) return 'Asia';
            if (lat > -45 && lat < -10 && lon > 110 && lon < 155) return 'Australia';
            return 'Ocean';
        }

        // Animation loop
        function animate() {
            requestAnimationFrame(animate);
            
            // Auto rotation
            if (autoRotate && !isDragging) {
                targetRotationY += 0.001 * rotationSpeed;
            }
            
            // Smooth rotation
            currentRotationX += (targetRotationX - currentRotationX) * 0.1;
            currentRotationY += (targetRotationY - currentRotationY) * 0.1;
            
            globe.rotation.x = currentRotationX;
            globe.rotation.y = currentRotationY;
            markerGroup.rotation.x = currentRotationX;
            markerGroup.rotation.y = currentRotationY;
            
            // Smooth zoom
            camera.position.z += (targetZoom - camera.position.z) * 0.1;
            
            // Marker animation (pulse)
            const time = Date.now() * 0.003;
            markers.forEach((marker, i) => {
                const scale = 1 + Math.sin(time + i) * 0.1;
                marker.scale.set(scale, scale, scale);
            });
            
            // Stars rotation
            stars.rotation.y += 0.0001;
            
            // Check hover
            checkGlobeHover();
            
            renderer.render(scene, camera);
        }

        // Handle resize
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        animate();
    </script>
</body>
</html>
