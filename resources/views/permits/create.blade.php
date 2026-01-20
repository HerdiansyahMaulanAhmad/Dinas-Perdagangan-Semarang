<x-app-layout>
    <div class="bg-navy-900 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-gold-500 font-semibold tracking-wide uppercase">Layanan Online</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-4xl">
                    SI-PERIZIN
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-300 mx-auto">
                    Sistem Perizinan Usaha Perdagangan Kota Semarang.
                </p>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-navy-900 mb-6">Ajukan Permohonan Baru</h3>

                    <form action="{{ route('permits.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                            <!-- Applicant Name -->
                            <div class="sm:col-span-3">
                                <label for="applicant_name" class="block text-sm font-medium text-gray-700">Nama
                                    Pemohon</label>
                                <div class="mt-1">
                                    <input type="text" name="applicant_name" id="applicant_name"
                                        class="shadow-sm focus:ring-gold-500 focus:border-gold-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Nama Lengkap">
                                </div>
                            </div>

                            <!-- NIK -->
                            <div class="sm:col-span-3">
                                <label for="nik" class="block text-sm font-medium text-gray-700">NIK (Nomor Induk
                                    Kependudukan)</label>
                                <div class="mt-1">
                                    <input type="text" name="nik" id="nik"
                                        class="shadow-sm focus:ring-gold-500 focus:border-gold-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                        placeholder="16 Digit NIK">
                                </div>
                            </div>

                            <!-- Business Name -->
                            <div class="sm:col-span-4">
                                <label for="business_name" class="block text-sm font-medium text-gray-700">Nama
                                    Usaha</label>
                                <div class="mt-1">
                                    <input type="text" name="business_name" id="business_name"
                                        class="shadow-sm focus:ring-gold-500 focus:border-gold-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Contoh: Toko Semabako Jaya">
                                </div>
                            </div>

                            <!-- Type -->
                            <div class="sm:col-span-2">
                                <label for="type" class="block text-sm font-medium text-gray-700">Jenis Izin</label>
                                <div class="mt-1">
                                    <select id="type" name="type"
                                        class="shadow-sm focus:ring-gold-500 focus:border-gold-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                        <option>SIUP (Surat Izin Usaha Perdagangan)</option>
                                        <option>TDP (Tanda Daftar Perusahaan)</option>
                                        <option>Izin Reklame</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="pt-8">
                            <div class="flex justify-end">
                                <button type="button"
                                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gold-500">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-navy-900 hover:bg-navy-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gold-500">
                                    Kirim Permohonan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="bg-gray-50 px-8 py-4 border-t border-gray-200">
                    <h4 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Cek Status Permohonan</h4>
                    <p class="text-sm text-gray-600 mb-4">Sudah mengajukan? Masukkan nomor resi/tracking Anda di URL
                        untuk melihat status (Contoh feature).</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>