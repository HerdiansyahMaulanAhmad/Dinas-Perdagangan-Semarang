<x-app-layout>
    <div class="bg-navy-900 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-gold-500 font-semibold tracking-wide uppercase">Informasi Terkini</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Daftar Harga Pangan
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-300 mx-auto">
                    Pantau pergerakan harga komoditas pokok di pasar-pasar Kota Semarang.
                </p>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Filters (Mockup) -->
                    <div class="mb-6 flex flex-wrap gap-4">
                        <select
                            class="rounded-md border-gray-300 shadow-sm focus:border-gold-500 focus:ring focus:ring-gold-200 focus:ring-opacity-50">
                            <option>Semua Pasar</option>
                            <option>Pasar Johar</option>
                            <option>Pasar Bulu</option>
                        </select>
                        <select
                            class="rounded-md border-gray-300 shadow-sm focus:border-gold-500 focus:ring focus:ring-gold-200 focus:ring-opacity-50">
                            <option>Semua Komoditas</option>
                            <option>Beras</option>
                            <option>Telur</option>
                        </select>
                        <button class="bg-navy-900 text-white px-4 py-2 rounded-md hover:bg-navy-800 transition">
                            Tampilkan
                        </button>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Komoditas
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Pasar
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Harga
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Perubahan
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($prices as $price)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $price->commodity->name ?? 'Komoditas' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $price->market->name ?? 'Pasar' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Rp
                                                {{ number_format($price->price, 0, ',', '.') }} /
                                                {{ $price->commodity->unit ?? 'kg' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ \Carbon\Carbon::parse($price->date)->format('d M Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if($price->change_direction === 'up')
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Naik
                                                </span>
                                            @elseif($price->change_direction === 'down')
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Turun
                                                </span>
                                            @else
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                    Stabil
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                            Belum ada data harga terbaru.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $prices->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>