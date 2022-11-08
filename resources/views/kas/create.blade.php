<x-app-layout>
    <x-slot name="header">
            {{ __('Form Kas Keluar') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <form>
                <div class="mb-6">
                    <label for="inputimage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tambahkan Gambar</label>
                    <input type="file" id="inputimage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" placeholder="Masukan Bukti Gambar">
                </div>
                <div class="mb-6">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                    <input type="text" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full">
                </div>
                <div class="mb-6">
                    <label for="pricesum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Total Uang Keluar</label>
                    <input type="text" id="pricesum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full">
                </div>
                <div class="mb-6">
                    <label for="transactionname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Transaksi</label>
                    <input type="text" id="transactionname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full">
                </div>
                <div class="mb-6">
                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Keterangan</label>
                    <input type="text" id="keterangan" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300">
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
