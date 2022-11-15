<x-app-layout>
    <x-slot name="header">
            {{ __('Katalog Menu') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="mt-4 mx-4 flex justify-end">
            <a href="{{ route('katalog.create') }}" class="inline-flex items-center py-2 px-3 text-md font-medium text-center text-white bg-emerald-500 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
                Tambah Menu Baru
            </a>
        </div>
        <div class="p-6 border-b-2 border-red-600">
            {{-- KARTU --}}
            <div class="col-span-1">
                <div class="max-w-3xl mx-2 px-3 mb-3">
                    <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                        <div
                            class="max-w-xl bg-gray-400 rounded-lg border border-gray-400 shadow-md">
                            <a href="#" class="align-middle">
                                <img class="rounded-t-lg" src="{{ asset('images/pindang.jpg') }}">
                            </a>
                            <div class="p-5">
                                <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pindang</h5>
                                <h2 class="mb-8 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Rp. 10000</h2>

                                <div class="flex justify-between">
                                    <a href="#"
                                        class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-100 bg-red-500 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('katalog.edit')}}"
                                        class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-100 bg-yellow-500 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- akhir kartu --}}
        </div>
    </div>
</x-app-layout>
