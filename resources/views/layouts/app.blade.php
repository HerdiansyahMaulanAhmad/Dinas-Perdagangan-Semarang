<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-white dark:bg-gray-800 shadow-inner mt-12">
                <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Lokasi Koordinat Kantor</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                            Lokasi Koordinat Peta Dinas Perdagangan Kota Semarang.
                        </p>
                          <!-- Map Embed -->
                        <div class="w-full h-80 overflow-hidden rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 pointer-events-auto">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15840.457811904663!2d110.35334469999997!3d-6.99596395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f5e1f0eec86b%3A0x67341fe223253b21!2sDinas%20Perdagangan%20Kota%20Semarang!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-gray-200 dark:border-gray-700 text-center">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            &copy; {{ date('Y') }} Dinas Perdagangan Kota Semarang. Hak Cipta Dilindungi.
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
