<x-app-layout>
    <div class="bg-navy-900 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-gold-500 font-semibold tracking-wide uppercase">Peta Lokasi</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Pasar di Kota Semarang
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-300 mx-auto">
                    Temukan lokasi pasar tradisional dan modern terdekat.
                </p>
            </div>
        </div>
    </div>

    <!-- Map Container -->
    <div id="map" class="w-full h-[600px] z-0"></div>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-2xl font-bold text-navy-900 mb-6">Daftar Pasar</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($markets as $market)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <div class="h-48 bg-gray-200 w-full object-cover flex items-center justify-center text-gray-400">
                            <!-- Placeholder for Image -->
                            <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="p-4">
                            <h4 class="text-lg font-bold text-navy-900">{{ $market->name }}</h4>
                            <p class="text-sm text-gold-600 font-semibold uppercase">{{ $market->type }}</p>
                            <p class="mt-2 text-gray-600 text-sm">{{ $market->address }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-10">
                        <p class="text-gray-500">Data pasar belum tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Leaflet CSS & JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize map centered on Semarang
            var map = L.map('map').setView([-6.966667, 110.416664], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Add markers
            @foreach($markets as $market)
                L.marker([{{ $market->latitude }}, {{ $market->longitude }}]).addTo(map)
                    .bindPopup("<b>{{ $market->name }}</b><br>{{ $market->address }}");
            @endforeach
        });
    </script>
</x-app-layout>