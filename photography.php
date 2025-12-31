<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        }
        #map { height: 300px; border-radius: 0.75rem; }
        .gallery-img {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-img:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen p-4 md:p-8">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <header class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">📷 Photography Dashboard</h1>
                    <p class="text-gray-300">Analyzing 1,247 photos from your collection</p>
                </div>
                <div class="hidden md:flex items-center gap-4">
                    <div class="glass-card rounded-xl px-4 py-2">
                        <span class="text-gray-600 text-sm">Last Updated</span>
                        <p class="font-semibold text-gray-800">Today, 2:34 PM</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Stats Overview -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="glass-card rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white text-xl">📸</div>
                    <div>
                        <p class="text-gray-500 text-sm">Total Photos</p>
                        <p class="text-2xl font-bold text-gray-800">1,247</p>
                    </div>
                </div>
            </div>
            <div class="glass-card rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center text-white text-xl">🔭</div>
                    <div>
                        <p class="text-gray-500 text-sm">Lenses Used</p>
                        <p class="text-2xl font-bold text-gray-800">6</p>
                    </div>
                </div>
            </div>
            <div class="glass-card rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center text-white text-xl">📍</div>
                    <div>
                        <p class="text-gray-500 text-sm">Locations</p>
                        <p class="text-2xl font-bold text-gray-800">23</p>
                    </div>
                </div>
            </div>
            <div class="glass-card rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center text-white text-xl">⭐</div>
                    <div>
                        <p class="text-gray-500 text-sm">Best Shots</p>
                        <p class="text-2xl font-bold text-gray-800">48</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <!-- Lens Usage Pie Chart -->
            <div class="glass-card rounded-xl p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">🔭 Lens Usage Distribution</h2>
                <div class="relative h-72">
                    <canvas id="lensChart"></canvas>
                </div>
            </div>

            <!-- Aperture Histogram -->
            <div class="glass-card rounded-xl p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">📊 Aperture Usage Histogram</h2>
                <div class="relative h-72">
                    <canvas id="apertureChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Camera Body Stats & Map -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <!-- Camera Body Stats -->
            <div class="glass-card rounded-xl p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">📷 Camera Body Statistics</h2>
                <div class="space-y-4">
                    <div class="camera-stat">
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-gray-700">Sony A7 IV</span>
                            <span class="text-gray-500">542 shots (43%)</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-3 rounded-full" style="width: 43%"></div>
                        </div>
                    </div>
                    <div class="camera-stat">
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-gray-700">Canon EOS R5</span>
                            <span class="text-gray-500">389 shots (31%)</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-red-500 to-red-600 h-3 rounded-full" style="width: 31%"></div>
                        </div>
                    </div>
                    <div class="camera-stat">
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-gray-700">Nikon Z6 II</span>
                            <span class="text-gray-500">198 shots (16%)</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 h-3 rounded-full" style="width: 16%"></div>
                        </div>
                    </div>
                    <div class="camera-stat">
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-gray-700">Fujifilm X-T5</span>
                            <span class="text-gray-500">118 shots (10%)</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-green-500 to-green-600 h-3 rounded-full" style="width: 10%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Stats -->
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 rounded-lg p-3">
                        <p class="text-sm text-gray-500">Avg Shutter Count</p>
                        <p class="text-lg font-semibold text-gray-800">1/250s</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3">
                        <p class="text-sm text-gray-500">Most Used ISO</p>
                        <p class="text-lg font-semibold text-gray-800">ISO 400</p>
                    </div>
                </div>
            </div>

            <!-- Location Map -->
            <div class="glass-card rounded-xl p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">📍 Photo Locations</h2>
                <div id="map"></div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">New York (156)</span>
                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">Paris (98)</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">Tokyo (87)</span>
                    <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-sm">London (72)</span>
                </div>
            </div>
        </div>

        <!-- Best Shots Gallery -->
        <div class="glass-card rounded-xl p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-800">⭐ Best Shots Gallery</h2>
                <select id="galleryFilter" class="px-4 py-2 border border-gray-300 rounded-lg bg-white text-gray-700">
                    <option value="all">All Categories</option>
                    <option value="landscape">Landscape</option>
                    <option value="portrait">Portrait</option>
                    <option value="street">Street</option>
                    <option value="wildlife">Wildlife</option>
                </select>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="gallery">
                <!-- Gallery items will be populated by JS -->
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-8 text-center text-gray-400 text-sm">
            <p>Photography Dashboard © 2024 | Data synced from Lightroom & Capture One</p>
        </footer>
    </div>

    <script>
        // Sample photo data
        const photos = [
            { id: 1, category: 'landscape', title: 'Mountain Sunrise', lens: '24-70mm', aperture: 'f/8', camera: 'Sony A7 IV', rating: 5, url: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop' },
            { id: 2, category: 'portrait', title: 'Golden Hour Portrait', lens: '85mm', aperture: 'f/1.8', camera: 'Canon EOS R5', rating: 5, url: 'https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=400&h=300&fit=crop' },
            { id: 3, category: 'street', title: 'City Lights', lens: '35mm', aperture: 'f/2.8', camera: 'Fujifilm X-T5', rating: 5, url: 'https://images.unsplash.com/photo-1519501025264-65ba15a82390?w=400&h=300&fit=crop' },
            { id: 4, category: 'wildlife', title: 'Eagle in Flight', lens: '100-400mm', aperture: 'f/5.6', camera: 'Sony A7 IV', rating: 5, url: 'https://images.unsplash.com/photo-1611689342806-0863700ce1e4?w=400&h=300&fit=crop' },
            { id: 5, category: 'landscape', title: 'Ocean Sunset', lens: '16-35mm', aperture: 'f/11', camera: 'Nikon Z6 II', rating: 4, url: 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=400&h=300&fit=crop' },
            { id: 6, category: 'portrait', title: 'Studio Session', lens: '50mm', aperture: 'f/1.4', camera: 'Canon EOS R5', rating: 5, url: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=300&fit=crop' },
            { id: 7, category: 'street', title: 'Rainy Streets', lens: '35mm', aperture: 'f/4', camera: 'Fujifilm X-T5', rating: 4, url: 'https://images.unsplash.com/photo-1428592953211-077101b2021b?w=400&h=300&fit=crop' },
            { id: 8, category: 'landscape', title: 'Northern Lights', lens: '14mm', aperture: 'f/2.8', camera: 'Sony A7 IV', rating: 5, url: 'https://images.unsplash.com/photo-1531366936337-7c912a4589a7?w=400&h=300&fit=crop' },
        ];

        // Lens Usage Pie Chart
        const lensCtx = document.getElementById('lensChart').getContext('2d');
        new Chart(lensCtx, {
            type: 'doughnut',
            data: {
                labels: ['24-70mm f/2.8', '70-200mm f/2.8', '85mm f/1.4', '35mm f/1.8', '16-35mm f/4', '100-400mm f/4.5-5.6'],
                datasets: [{
                    data: [312, 245, 198, 187, 165, 140],
                    backgroundColor: [
                        '#3B82F6',
                        '#10B981',
                        '#F59E0B',
                        '#EF4444',
                        '#8B5CF6',
                        '#EC4899'
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            padding: 15,
                            usePointStyle: true,
                            font: { size: 12 }
                        }
                    }
                }
            }
        });

        // Aperture Histogram
        const apertureCtx = document.getElementById('apertureChart').getContext('2d');
        new Chart(apertureCtx, {
            type: 'bar',
            data: {
                labels: ['f/1.4', 'f/1.8', 'f/2.8', 'f/4', 'f/5.6', 'f/8', 'f/11', 'f/16', 'f/22'],
                datasets: [{
                    label: 'Number of Photos',
                    data: [89, 156, 234, 198, 167, 189, 112, 67, 35],
                    backgroundColor: 'rgba(59, 130, 246, 0.8)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1,
                    borderRadius: 6,
                    hoverBackgroundColor: 'rgba(59, 130, 246, 1)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(0,0,0,0.05)' }
                    },
                    x: {
                        grid: { display: false }
                    }
                }
            }
        });

        // Location Map
        const map = L.map('map').setView([40, -30], 2);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Sample locations with markers
        const locations = [
            { lat: 40.7128, lng: -74.0060, name: 'New York', count: 156 },
            { lat: 48.8566, lng: 2.3522, name: 'Paris', count: 98 },
            { lat: 35.6762, lng: 139.6503, name: 'Tokyo', count: 87 },
            { lat: 51.5074, lng: -0.1278, name: 'London', count: 72 },
            { lat: 41.9028, lng: 12.4964, name: 'Rome', count: 54 },
            { lat: 37.7749, lng: -122.4194, name: 'San Francisco', count: 48 },
            { lat: -33.8688, lng: 151.2093, name: 'Sydney', count: 42 },
            { lat: 55.7558, lng: 37.6173, name: 'Moscow', count: 38 },
        ];

        locations.forEach(loc => {
            const marker = L.circleMarker([loc.lat, loc.lng], {
                radius: Math.sqrt(loc.count) * 1.5,
                fillColor: '#3B82F6',
                color: '#1E40AF',
                weight: 2,
                opacity: 1,
                fillOpacity: 0.7
            }).addTo(map);
            marker.bindPopup(`<strong>${loc.name}</strong><br>${loc.count} photos`);
        });

        // Gallery rendering
        function renderGallery(filter = 'all') {
            const gallery = document.getElementById('gallery');
            const filteredPhotos = filter === 'all' ? photos : photos.filter(p => p.category === filter);
            
            gallery.innerHTML = filteredPhotos.map(photo => `
                <div class="gallery-img relative rounded-xl overflow-hidden cursor-pointer group" data-category="${photo.category}">
                    <img src="${photo.url}" alt="${photo.title}" class="w-full h-48 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-white font-semibold">${photo.title}</h3>
                            <p class="text-gray-300 text-sm">${photo.lens} • ${photo.aperture}</p>
                            <div class="flex items-center gap-1 mt-1">
                                ${'⭐'.repeat(photo.rating)}
                            </div>
                        </div>
                    </div>
                    <span class="absolute top-2 right-2 px-2 py-1 bg-white/90 rounded-full text-xs font-medium text-gray-700 capitalize">${photo.category}</span>
                </div>
            `).join('');
        }

        // Initial render
        renderGallery();

        // Filter functionality
        document.getElementById('galleryFilter').addEventListener('change', (e) => {
            renderGallery(e.target.value);
        });
    </script>
</body>
</html>
