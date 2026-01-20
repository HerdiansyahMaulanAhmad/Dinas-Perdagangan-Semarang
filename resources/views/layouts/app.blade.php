<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dinas Perdagangan Kota Semarang') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-900 flex flex-col min-h-screen">

    <!-- Navbar -->
    <header
        class="sticky top-0 z-50 bg-navy-900 border-b border-gold-600 shadow-md transform transition-transform duration-300"
        x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center space-x-3">
                            <!-- Logo Placeholder -->
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center border-2 border-gold-500">
                                <span class="text-navy-900 font-bold text-xl">DP</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-white font-bold text-lg leading-tight">DINAS PERDAGANGAN</span>
                                <span class="text-gold-400 text-sm font-medium tracking-wide">KOTA SEMARANG</span>
                            </div>
                        </a>
                    </div>
                    <!-- Desktop Menu -->
                    <div class="hidden sm:ml-10 sm:flex sm:space-x-8 items-center">
                        <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                            Beranda
                        </x-nav-link>
                        <x-nav-link href="{{ route('prices.index') }}" :active="request()->routeIs('prices.*')">
                            Harga Pangan
                        </x-nav-link>
                        <x-nav-link href="{{ route('markets.index') }}" :active="request()->routeIs('markets.*')">
                            Pasar
                        </x-nav-link>
                        <x-nav-link href="{{ route('permits.create') }}" :active="request()->routeIs('permits.*')">
                            Pelayanan
                        </x-nav-link>
                        <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.*')">
                            Berita
                        </x-nav-link>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-navy-800 focus:outline-none focus:bg-navy-800 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-navy-800">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    Beranda
                </x-responsive-nav-link>
                <!-- Add other mobile links here -->
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-navy-900 border-t-4 border-gold-600 text-white pt-10 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-gold-500 font-bold text-lg mb-4">Kontak Kami</h3>
                    <p class="mb-2 text-gray-300"><i class="fas fa-map-marker-alt mr-2"></i> Jl. Pemuda No. 148,
                        Semarang</p>
                    <p class="mb-2 text-gray-300"><i class="fas fa-phone mr-2"></i> (024) 354 1234</p>
                    <p class="text-gray-300"><i class="fas fa-envelope mr-2"></i> disdag@semarangkota.go.id</p>
                </div>
                <!-- Quick Links -->
                <div>
                    <h3 class="text-gold-500 font-bold text-lg mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-gold-400 transition">PPID</a></li>
                        <li><a href="#" class="hover:text-gold-400 transition">SP4N Lapor</a></li>
                        <li><a href="#" class="hover:text-gold-400 transition">Portal Semarang</a></li>
                    </ul>
                </div>
                <!-- Social Media -->
                <div>
                    <h3 class="text-gold-500 font-bold text-lg mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-2xl"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-navy-800 text-center text-gray-400 text-sm">
                &copy; {{ date('Y') }} Dinas Perdagangan Kota Semarang. All rights reserved.
            </div>
        </div>
    </footer>
</body>

</html>