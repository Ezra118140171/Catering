<x-app-layout>
    <x-slot name="header">
            {{ __('Informasi Pesanan') }}
    </x-slot>

    <div class="bg-white overflow-y-auto h-max shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <div class="max-w-xl flex grid grid-cols-2 gap-4 justify-center place-content-center h-max">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
