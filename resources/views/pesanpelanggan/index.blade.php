<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <header class="shadow mb-2 bg-emerald-700">
            <div class="relative flex max-w-screen-xl flex-col overflow-hidden px-4 py-4 md:mx-auto md:flex-row md:items-center">
                <a href="#home" class="flex items-center whitespace-nowrap text-2xl font-black">
                    <img src="{{asset('images/namalogo.png')}}" class="h-auto w-40" alt="" srcset="" style="">
                </a>
                <input type="checkbox" class="peer hidden" id="navbar-open" />
                <label class="absolute top-5 right-7 cursor-pointer md:hidden" for="navbar-open">
                    <span class="sr-only">Toggle Navigation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
                <nav aria-label="Header Navigation" class="peer-checked:mt-8 peer-checked:max-h-56 flex max-h-0 w-full flex-col items-center justify-between overflow-hidden transition-all md:ml-24 md:max-h-full md:flex-row md:items-start">
                    <ul class="flex flex-col items-center space-y-2 md:ml-auto md:flex-row md:space-y-0">
                            @if (Route::has('login'))
                                @auth
                                <li>
                                    <a href="{{route('welcome')}}" class="py-2 mx-6 text-lg font-bold text-white">Home</a>
                                </li>
                                @if (auth()->user()->hasRole('user'))
                                <li>
                                    <a href="{{route('menu.index')}}" class="py-2 mx-6 text-lg font-bold text-white">Menu</a>
                                </li>
                                @endif
                                @if (auth()->user()->hasRole('user'))
                                <li>
                                    <a href="{{ route('langganan.index') }}" class="py-2 mx-6 text-lg font-bold text-white">Langganan</a>
                                </li>
                                @endif
                                @if (auth()->user()->hasRole('user'))
                                <li>
                                    <a href="{{route('pesanpelanggan.index')}}" class="py-2 mx-6 text-lg font-bold text-white">Pesanan</a>
                                </li>
                                @endif
                                @if (auth()->user()->hasRole('user'))
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <li>
                                        <button class="py-2 mx-6 text-lg font-bold text-white">Logout</button>
                                    </li>
                                </form>
                                @endif
                                
                                @if (auth()->user()->hasRole('admin'))
                                <li>
                                    <a href="{{ url('/dashboard') }}" class=" py-2 mx-6 text-lg font-bold text-white dark:text-white">Dashboard</a>
                                </li>
                                @endif
                                @else
                                <li>
                                    <a href="{{ route('login') }}" class=" mx-6 text-lg font-bold text-white dark:text-white">Log in</a>
                                </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}" class="ml-4 mx-6 text-lg font-bold text-white dark:text-white">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                    </ul>
                </nav>
            </div>
        </header>
        {{-- akhir navbar --}}
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="mx-4 flex justify-end" style="visibility: hidden;">
                <a href="" class="inline-flex items-center py-2 px-3 text-md font-medium text-center text-white bg-emerald-500 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                    Tambah Menu Baru
                </a>
            </div>
            <div class=" p-6 border-b-2 border-emerald-600">
                <!-- Alamat -->
                <div class=" mx-auto" style="width: 85%;">
                    <p class="text-4xl mb-8 mt-6">Alamat Pengantaran</p>
                    <div class="flex" style="gap: 17%;">
                        <div class="block" style="flex-basis: 208px;">
                            <p class="font-medium text-3xl">desintauli</p>
                            <p class="font-medium text-3xl">089632402790</p>
                        </div>
                        <p class="text-3xl" style="flex-basis: 631px;">Jl. P. Antasari, Kec Kedamaian, Kota Bandar Lampung </p>
                        <a href="index.html" class="text-2xl text-blue-700 hover:underline ">ubah</a>
                    </div>
                </div>
                <hr class="my-8 h-px mx-auto bg-gray-200 border-0 dark:bg-gray-700" style="width:85% ;">
                <!--End Alamat -->

                <!-- Pemesanan -->
                <div class="mx-auto" style="width: 85%;">
                    <p class="text-4xl mt-6">Makanan Dipesan</p>

                    <Table class="border-b-2 border-black" style="width: 100%;">
                    <tr  class="border-b-2 border-black" style="height:75px; ">
                        <th style="width:10%">
                        <div class="flex items-center mx-auto">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4  text-green-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600" style="margin-left:75px;">
                        </div>
                            <th class="text-center" style="width: 22.5%;"></th>
                        <th class="text-center text-2xl font-normal" style="width: 22.5%;">Menu</th>
                        <th class="text-center text-2xl font-normal" style="width: 22.5%;">Kuantitas</th>
                        <th class="text-center text-2xl font-normal" style="width: 22.5%;">Harga</th>
                    </tr>
                    <tr >
                        <td style="width:10% ">
                        <div class="flex items-center mx-auto mt-4">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4  text-green-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600" style="margin-left:75px;">
                        </div>
                        </td>
                        <td style="width: 22.5%;">
                        <div class="mt-4"  style="margin-bottom: 20px;">
                            <img src="{{ asset('images/food.png') }}" alt="" class="rounded mx-auto">
                        </div>
                        </td>
                        <td style="width: 22.5%;">
                        <div class="mt-4" style="margin-bottom: 20px;" >
                        <p class="text-2xl text-center font-medium">Ayam Pop</p>
                        </div>
                    </td>
                    <td style="width: 22.5%;">
                    <div class="mt-4   border-4 border-black mx-auto content-center justify-center" style="width: 60%;margin-bottom: 20px;">
                        <button><i class="fa-solid fa-plus"></button></i> &nbsp;<input type="number" style="width: 100px; "> &nbsp;<button><i class="fa-solid fa-minus"></i></button>
                    </div>
                    </td>
                    <td style="width: 22.5%;">
                    <div class="mt-4"  style="margin-bottom: 20px;">
                        <p class="text-2xl text-center font-medium">Rp. 30.000</p>
                    </div>
                    </td>
                    </tr>
                    <tr >
                        <td style="width:10% ">
                        <div class="flex items-center mx-auto " style="margin-top: 40px;margin-bottom: 20px;">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4  text-green-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600" style="margin-left:75px;">
                        </div>
                        </td>
                        <td style="width: 22.5%;" >
                        <div class="" style="margin-top: 40px;margin-bottom: 20px;">
                            <img src="{{ asset('images/food.png') }}" alt="" class="rounded mx-auto">
                        </div>
                        </td>
                        <td style="width: 22.5%;" >
                        <div class="" style="margin-top: 40px;margin-bottom: 20px;">
                        <p class="text-2xl text-center font-medium">Ayam Pop</p>
                        </div>
                    </td>
                    <td style="width: 22.5%;" >
                    <div class=" border-4 border-black mx-auto content-center justify-center" style="width: 60%; margin-top: 40px;margin-bottom: 20px;">
                        <button><i class="fa-solid fa-plus"></button></i> &nbsp;<input type="number" style="width: 100px; "> &nbsp;<button><i class="fa-solid fa-minus"></i></button>
                    </div>
                    </td>
                    <td style="width: 22.5%;" >
                    <div class="" style="margin-top: 40px; margin-bottom: 20px;">
                        <p class="text-2xl text-center font-medium">Rp. 30.000</p>
                    </div>
                    </td>
                    </tr>

                    </Table >

                    </div>
                <!-- End Pemesanan -->

                <!-- Total Harga -->
                <div class="mt-4 mb-4" style="width: 90%;">
                    <div class="">
                        <p class="text-3xl text-right">Total Harga &nbsp;&nbsp;&nbsp;<span class="mr-8">:</span>Rp. 60.000</p>
                    </div>
                </div>
                <!-- End Total Harga -->

                <!-- Tombol Pesan-->
                <div class="pb-5" style="padding-bottom: 70px;">
                    <div class="relative" style="width: 93%;">
                        <a href="{{ route('payment.index') }}" type="button" class="focus:outline-none text-center absolute right-0 text-white bg-green-700 hover:bg-green-800 focus:ring-4  focus:ring-green-300 font-medium rounded-lg text-2xl px-10 py-1  mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style="width:192px">Pesan</a>
                    </div>
                </div>
                <!--End Tombol Pesan-->
            </div>

        </div>
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    </body>
</html>
