<x-app-layout>
    <x-slot name="header">
            {{ __('Form Kas Keluar') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <div class="p-6">
                <form action="{{route('kas.post')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-6 mt-4">
                        <div>
                            <x-input-label for="name" :value="__('Foto')"/>
                            <div class="flex justify-center items-center w-full">
                                <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-600 border-dashed cursor-pointer  hover:bg-gray-100 dark:border-gray-500 dark:hover:border-gray-300 dark:hover:bg-gray-400">
                                    <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                        <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                        <p class="mb-2 text-sm text-gray-800"><span class="font-semibold">Tekan untuk mengirim gambar</span> atau tempatkan gambar disini dengan format</p>
                                        <p class="text-xs text-gray-800">SVG, PNG, JPG atau GIF (MAX. 800x400px)</p>
                                    </div>
                                    <input id="dropzone-file" name="foto" type="file" class="hidden" />
                                </label>
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="judul" :value="__('Judul Transaksi')"/>
                            <x-text-input type="judul"
                                     name="nama_transaksi"
                                     id="nama_transaksi"
                                     value=""
                                     required
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="Uang" :value="__('Tanggal Transaksi')"/>
                            <x-text-input type="date"
                                     name="tgl_transaksi"
                                     id="tgl_transaksi"
                            />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="Uang" :value="__('Uang Keluar')"/>
                            <x-text-input type="text"
                                     name="uang_keluar"
                                     id="uang_keluar"
                            />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <x-primary-button>
                            {{ __('Tambah') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
