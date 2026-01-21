<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in as Admin!") }}
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1: Pasar -->
                <div
                    class="relative bg-white dark:bg-navy-800 overflow-hidden shadow-lg sm:rounded-xl border-l-4 border-gold-500">
                    <div class="p-6 flex items-center">
                        <div class="p-3 rounded-full bg-navy-100 dark:bg-navy-700 text-navy-800 dark:text-gold-500">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Total Pasar</p>
                            <p class="text-3xl font-bold text-navy-900 dark:text-white">
                                {{ \App\Models\Market::count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Harga Pangan -->
                <div
                    class="relative bg-white dark:bg-navy-800 overflow-hidden shadow-lg sm:rounded-xl border-l-4 border-blue-500">
                    <div class="p-6 flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 dark:bg-navy-700 text-blue-600 dark:text-blue-400">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Items Harga Pangan</p>
                            <p class="text-3xl font-bold text-navy-900 dark:text-white">
                                {{ \App\Models\FoodPrice::count() }}</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Berita -->
                <div
                    class="relative bg-white dark:bg-navy-800 overflow-hidden shadow-lg sm:rounded-xl border-l-4 border-green-500">
                    <div class="p-6 flex items-center">
                        <div class="p-3 rounded-full bg-green-100 dark:bg-navy-700 text-green-600 dark:text-green-400">
                            <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Berita Terpublikasi</p>
                            <p class="text-3xl font-bold text-navy-900 dark:text-white">{{ \App\Models\Post::count() }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>