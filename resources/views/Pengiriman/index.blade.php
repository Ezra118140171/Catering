<x-app-layout>
    <x-slot name="header">
            {{ __('Pengiriman') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="text-center font-bold">
                        <td class="border px-6 py-4">Nama</td>
                        <td class="border px-6 py-4">Pesanan</td>
                        <td class="border px-6 py-4">Alamat</td>
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
                                <input id="link-checkbox" type="checkbox" value="" class="w-6 h-6 text-emerald-600 bg-gray-100 rounded border-gray-300 focus:ring-emerald-500 dark:focus:ring-emerald-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
