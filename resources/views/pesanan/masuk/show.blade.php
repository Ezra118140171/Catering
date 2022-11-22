<x-app-layout>
    <x-slot name="header">
            {{ __('Informasi Pesanan') }}
    </x-slot>

    <div class="bg-white overflow-y-auto h-max shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <div class="max-w-xl grid grid-cols-2 gap-4 justify-center place-content-center h-max">
                <div class="text-xl text-gray-800">Nama Pelanggan</div>
                <div class="text-xl text-gray-800">:&Tab;Ezra</div>
                <div class="text-xl text-gray-800">Harga</div>
                <div class="text-xl text-gray-800">:&Tab;Rp. 30.000</div>
                <div class="text-xl text-gray-800">Menu</div>
                <div class="text-xl text-gray-800">:&Tab;Ayam Pop</div>
                <div class="text-xl text-gray-800">Jenis Pembelian</div>
                <div class="text-xl text-gray-800">:&Tab;Harian</div>
                <div class="">
                    <div class="text-xl text-gray-800">Bukti Pembayaran :</div>
                    <div class="bg-gray-400 rounded-lg border border-gray-400 shadow-md">
                        <a href="#" class="align-middle">
                            <img class="rounded-t-lg" src="{{ asset('images/pindang.jpg') }}" style="visibility: hidden">
                        </a>
                    </div>
                    <div class="pt-4 flex justify-items-start">
                        <a href="#"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-100 bg-red-500 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Tolak
                        </a>
                        <a href="#"
                            class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-100 bg-emerald-500 rounded-lg hover:bg-emerald-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Terima
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
