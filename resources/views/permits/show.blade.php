<x-app-layout>
    <div class="bg-navy-900 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-gold-500 font-semibold tracking-wide uppercase">Layanan Online</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    Status Permohonan
                </p>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-8">
                    <div class="border-b border-gray-200 pb-5 mb-5">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Detail Permohonan: <span
                                class="text-navy-900 font-bold">{{ $permit->tracking_number }}</span>
                        </h3>
                    </div>

                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Nama Pemohon</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $permit->applicant_name }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Nama Usaha</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $permit->business_name }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Jenis Izin</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $permit->type }}</dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Tanggal Pengajuan</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $permit->created_at->format('d F Y') }}</dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">Status Saat Ini</dt>
                            <dd class="mt-2">
                                @if($permit->status === 'pending')
                                    <span class="px-4 py-2 rounded-full text-sm font-bold bg-yellow-100 text-yellow-800">
                                        Menunggu Verifikasi
                                    </span>
                                @elseif($permit->status === 'approved')
                                    <span class="px-4 py-2 rounded-full text-sm font-bold bg-green-100 text-green-800">
                                        Disetujui
                                    </span>
                                @elseif($permit->status === 'rejected')
                                    <span class="px-4 py-2 rounded-full text-sm font-bold bg-red-100 text-red-800">
                                        Ditolak
                                    </span>
                                @else
                                    <span class="px-4 py-2 rounded-full text-sm font-bold bg-blue-100 text-blue-800">
                                        Sedang Diproses
                                    </span>
                                @endif
                            </dd>
                        </div>
                    </dl>

                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <a href="{{ route('permits.create') }}" class="text-navy-900 hover:text-navy-700 font-medium">
                            &larr; Kembali ke Layanan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>