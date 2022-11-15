<x-app-layout>
    <x-slot name="header">
            {{ __('Riwayat Pemesanan') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="text-center font-bold">
                        <td class="border px-6 py-4">Nama</td>
                        <td class="border px-6 py-4">Harga</td>
                        <td class="border px-6 py-4">Jenis</td>
                        <td class="border px-6 py-4">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-6 py-4">contoh</td>
                        <td class="border px-6 py-4">makanan</td>
                        <td class="border px-6 py-4">alamat</td>
                        <td class="border px-6 py-4">
                            <div class="flex justify-center">
                                <a href="{{route('pesanan.riwayat.show')}}"
                                    class="inline-flex items-center py-2 px-3 text-sm font-semibold text-center text-gray-100 bg-green-500 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
