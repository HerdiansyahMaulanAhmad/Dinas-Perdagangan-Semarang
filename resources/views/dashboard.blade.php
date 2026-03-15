<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <!-- Market List Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-bold mb-6 text-gray-800 dark:text-white">{{ __('Pasar di Kota Semarang') }}</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($markets as $market)
                            <div class="border border-gray-200 dark:border-gray-700 rounded-lg p-5 hover:shadow-lg transition-shadow duration-300 bg-gray-50 dark:bg-gray-900">
                                @if($market->image)
                                    <img src="{{ Storage::url($market->image) }}" alt="{{ $market->name }}" class="w-full h-48 object-cover rounded-md mb-4 shadow-sm">
                                @else
                                    <div class="w-full h-48 bg-gray-200 dark:bg-gray-800 rounded-md mb-4 flex items-center justify-center text-gray-500 dark:text-gray-400 shadow-sm">
                                        <svg class="w-12 h-12 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    </div>
                                @endif
                                
                                <h4 class="font-bold text-lg text-gray-900 dark:text-gray-100">{{ $market->name }}</h4>
                                
                                <div class="mt-2">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full {{ $market->type == 'modern' ? 'bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200' : 'bg-emerald-100 text-emerald-800 dark:bg-emerald-900 dark:text-emerald-200' }}">
                                        {{ ucfirst($market->type) }}
                                    </span>
                                </div>
                                
                                <div class="mt-4 flex items-start text-sm text-gray-600 dark:text-gray-400">
                                    <svg class="w-5 h-5 mr-2 flex-shrink-0 mt-0.5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <span class="line-clamp-2" title="{{ $market->address }}">{{ $market->address }}</span>
                                </div>
                            </div>
                        @endforeach
                        
                        @if($markets->isEmpty())
                            <div class="col-span-full flex flex-col items-center justify-center p-8 text-center bg-gray-50 dark:bg-gray-900 rounded-lg border border-dashed border-gray-300 dark:border-gray-700">
                                <svg class="w-16 h-16 text-gray-400 dark:text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                <p class="text-gray-500 dark:text-gray-400 text-lg">{{ __('Belum ada data pasar yang tersedia.') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
