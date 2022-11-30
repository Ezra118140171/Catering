<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Restu Catering</title>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />

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
                                <a href="/" class="py-2 mx-6 text-lg font-bold text-white">Home</a>
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
        
        {{-- foto --}}
        <div id="default-carousel" class="relative" data-carousel="slide">
        <!-- Carousel wrapper -->
            <div class="relative h-[500px] overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src="{{asset('images/ayam.jpeg')}}" class="absolute block w-full  h-[500px]   -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/pindang.jpg')}}" class="absolute block w-full  h-[500px]  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{asset('images/ayam.jpeg')}}" class="absolute block w-full  h-[500px]  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
        </div>

        <div class="flex">
            <div class="mx-auto">
                <a href="{{ route('login') }}" type="button" class="focus:outline-none text-white bg-emerald-700 hover:bg-green-800 focus:ring-0 focus:ring-green-300 font-semibold rounded-full text-[36px] mt-8 px-12 py-1 mr-2 mb-2 dark:hover:bg-green-700 dark:focus:ring-green-800">Pesan Sekarang</a>
            </div>
        </div>
    <footer class="w-full h-[350px] bg-gradient-to-b  from-lime-900 to-slate-300 mt-8">
        <div class="flex mx-auto w-4/5">
            <div class=" flex gap-[400px] mt-8 items-center">
                <div class="">
                    <p class="text-black text-3xl font-bold mb-4 text-center">Jam Operasional</p>
                    <table class="w-[280px]">
                        <tr class="font-medium text-2xl">
                            <td>Senin</td>
                            <td class="text-right">12.00 ; 17.00</td>
                        </tr>
                        <tr class="font-medium text-2xl">
                            <td>Selasa</td>
                            <td class="text-right">12.00 ; 17.00</td>
                        </tr>
                        <tr class="font-medium text-2xl">
                            <td>Rabu</td>
                            <td class="text-right">12.00 ; 17.00</td>
                        </tr>
                        <tr class="font-medium text-2xl">
                            <td>Kamis</td>
                            <td class="text-right">12.00 ; 17.00</td>
                        </tr>
                        <tr class="font-medium text-2xl">
                            <td>Jumat</td>
                            <td class="text-right">12.00 ; 17.00</td>
                        </tr>
                        <tr class="font-medium text-2xl">
                            <td>Sabtu</td>
                            <td class="text-right">12.00 ; 17.00</td>
                        </tr>
                        <tr class="font-medium text-2xl">
                            <td>Minggu</td>
                            <td class="text-right">12.00 ; 17.00</td>
                        </tr>
                    </table>
                </div>
                <div class="">
                    <p class="font-semibold text-2xl mb-4">Restu Catering</p>
                    <p class="text-xl font-normal mb-4"><span class="font-semibold">Alamat :</span>Jalan Kaswari, Way Hui, Kec. Jati Agung, Lampung Selatan</p>
                    <p class="text-xl font-normal"><span class="font-semibold">No Telp :</span> +62 823 7286 8406</p>
                </div>
            </div>
        </div>
    </footer>

    
    

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
        
    </body>
</html>
