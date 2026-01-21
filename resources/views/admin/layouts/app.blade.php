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
    <div class="flex h-screen bg-gray-100 dark:bg-navy-900" x-data="{ sidebarOpen: false }">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top header -->
            <header
                class="flex justify-between items-center py-4 px-6 bg-white dark:bg-navy-800 border-b border-gray-200 dark:border-navy-700">
                <div class="flex items-center">
                    <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 focus:outline-none lg:hidden">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    @isset($header)
                        <h2 class="font-semibold text-xl text-navy-800 dark:text-gold-500 leading-tight ml-4">
                            {{ $header }}
                        </h2>
                    @endisset
                </div>

                <div class="flex items-center">
                    <div class="relative" x-data="{ dropdownOpen: false }">
                        <button @click="dropdownOpen = ! dropdownOpen"
                            class="relative z-10 block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                            <img class="h-full w-full object-cover"
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=E5B82E&color=102A43"
                                alt="Your avatar">
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false"
                            class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                        <div x-show="dropdownOpen"
                            class="absolute right-0 mt-2 w-48 bg-white dark:bg-navy-700 rounded-md overflow-hidden shadow-xl z-20"
                            style="display: none;">
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-navy-600 hover:text-white">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-red-600 hover:text-white">Logout</a>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 dark:bg-navy-900">
                <div class="container mx-auto px-6 py-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
</body>

</html>