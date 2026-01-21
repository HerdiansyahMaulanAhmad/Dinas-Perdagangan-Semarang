<aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-navy-800 border-r border-navy-700">
    <a href="{{ route('admin.dashboard') }}"
        class="flex items-center justify-center mx-auto text-2xl font-bold text-white">
        <span class="text-gold-500">DINDAG</span>&nbsp;SMG
    </a>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <div class="space-y-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center px-4 py-2 {{ request()->routeIs('admin.dashboard') ? 'text-gray-100 bg-navy-700' : 'text-gray-400 hover:bg-navy-700 hover:text-gray-100' }} transition-colors duration-200 transform rounded-md">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <span class="mx-4 font-medium">Dashboard</span>
                </a>

                <a href="{{ route('admin.prices.index') }}"
                    class="flex items-center px-4 py-2 {{ request()->routeIs('admin.prices.*') ? 'text-gray-100 bg-navy-700' : 'text-gray-400 hover:bg-navy-700 hover:text-gray-100' }} transition-colors duration-200 transform rounded-md">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="mx-4 font-medium">Harga Pangan</span>
                </a>

                <a href="{{ route('admin.markets.index') }}"
                    class="flex items-center px-4 py-2 {{ request()->routeIs('admin.markets.*') ? 'text-gray-100 bg-navy-700' : 'text-gray-400 hover:bg-navy-700 hover:text-gray-100' }} transition-colors duration-200 transform rounded-md">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span class="mx-4 font-medium">Data Pasar</span>
                </a>

                <a href="{{ route('admin.posts.index') }}"
                    class="flex items-center px-4 py-2 {{ request()->routeIs('admin.posts.*') ? 'text-gray-100 bg-navy-700' : 'text-gray-400 hover:bg-navy-700 hover:text-gray-100' }} transition-colors duration-200 transform rounded-md">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    <span class="mx-4 font-medium">Berita & Artikel</span>
                </a>

                <div class="relative pt-4">
                    <span class="px-4 text-xs font-semibold tracking-wider text-gray-500 uppercase">Master Data</span>
                </div>

                <a href="{{ route('admin.categories.index') }}"
                    class="flex items-center px-4 py-2 {{ request()->routeIs('admin.categories.*') ? 'text-gray-100 bg-navy-700' : 'text-gray-400 hover:bg-navy-700 hover:text-gray-100' }} transition-colors duration-200 transform rounded-md">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    <span class="mx-4 font-medium">Kategori</span>
                </a>
                <a href="{{ route('admin.commodities.index') }}"
                    class="flex items-center px-4 py-2 {{ request()->routeIs('admin.commodities.*') ? 'text-gray-100 bg-navy-700' : 'text-gray-400 hover:bg-navy-700 hover:text-gray-100' }} transition-colors duration-200 transform rounded-md">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span class="mx-4 font-medium">Komoditas</span>
                </a>
            </div>
        </nav>

        <div class="mt-6 border-t border-navy-700 pt-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="flex items-center px-4 py-2 text-gray-400 hover:bg-red-600 hover:text-white transition-colors duration-200 transform rounded-md">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="mx-4 font-medium">Logout</span>
                </a>
            </form>
        </div>
    </div>
</aside>