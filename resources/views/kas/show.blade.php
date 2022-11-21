<x-app-layout>
    <x-slot name="header">
            {{ __('Informasi Kas') }}
    </x-slot>

    <div class="bg-white overflow-y-auto h-max shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">

            <div class="max-w-xl grid grid-cols-2 gap-4 justify-center place-content-center h-max">
                <div class="text-xl text-gray-800">Nama Transaksi</div>
                <div class="text-xl text-gray-800">:&Tab;{{ $kas->nama_transaksi }}</div>
                <div class="text-xl text-gray-800">Tanggal</div>
                <div class="text-xl text-gray-800">:&Tab;{{ $kas->tgl_transaksi }}</div>
                <div class="">
                    <div class="text-xl text-gray-800">Bukti Pengeluaran</div>
                    <div class="mt-4     bg-gray-400 rounded-lg border border-gray-400 shadow-md">
                        <a href="#" class="align-middle">
                            <img class="rounded-t-lg" src="{{ asset('imgKas/'. $kas->foto) }}" >
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
