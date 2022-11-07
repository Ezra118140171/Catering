<x-app-layout>
    <x-slot name="header">
            {{ __('Kas') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="mt-4 mx-4 flex justify-end">
            <a href="{{ route('kas.create') }}" class="inline-flex items-center py-2 px-3 text-md font-medium text-center text-white bg-emerald-500 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
                Tambah Kas Keluar
            </a>
        </div>
        <div class="p-6 border-b border-gray-200">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="text-center font-bold">
                        <td class="border px-6 py-4">Nama Transaksi</td>
                        <td class="border px-6 py-4">Tanggal</td>
                        <td class="border px-3 py-4">Masuk</td>
                        <td class="border px-6 py-4">Keluar</td>
                        <td class="border px-6 py-4">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-6 py-4">contoh</td>
                        <td class="border px-6 py-4">makanan</td>
                        <td class="border px-3 py-4">Rp. 1.900.000</td>
                        <td class="border px-6 py-4 flex justify-center">
                            -
                        </td>
                        <td class="border px-6 py-2">
                            <div class="flex justify-center gap-3">
                                <a href="#"
                                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-yellow-500 rounded-lg hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-blue-300" style="transform: scale(0.75)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-100 bg-indigo-500 rounded-lg hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-blue-300" style="transform: scale(0.75)">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
