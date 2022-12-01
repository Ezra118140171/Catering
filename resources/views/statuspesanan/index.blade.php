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
                                    <a href="/" class="py-2 mx-6 text-lg font-bold text-white">Pesanan</a>
                                </li>
                                @endif
                                @if (auth()->user()->hasRole('user'))
                                <li>
                                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 mx-6 font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-600 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent text-4xl text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>                                    
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class=" py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#" class="overflow-visible block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile Saya</a>
                                        </li>
                                        </ul>
                                        <div class="py-1">
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <a type="button" class="py-2 mx-6 text-lg font-bold text-white">Logout</a>
                                            </form>                                        
                                        </div>
                                    </div>
                                </li>
                                
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

        <div class="flex overflow-hidden">
            <div class="mx-auto" style="width: 95%;">
                <p class="text-5xl mb-6 mt-6 font-extrabold">Pesanan</p>
                <p class="font-semibold text-4xl" style="margin-left:65px">Menu Dipesan</p>
            </div>
        </div>

        <div class="flex">
            <div class="mx-auto">
                <table class="" style="width: 1300px;">
                    <tr class="border-b-2 border-black" style="height:90px;">
                        <th class="text-center font-medium " style="width: 30%;font-size: 28px; ">Menu</th>
                        <th class="text-center font-medium " style="width:10% ;font-size: 28px; ">Kuantitas</th>
                        <th class="text-center font-medium " style="width:25% ;font-size: 28px; ">Jenis</th>
                        <th class="text-center font-medium " style="width: 25%;font-size: 28px; ">Status</th>
                        <th class="text-center font-medium " style="width:10% ;font-size: 28px; ">Aksi</th>
                    </tr>
                    <tr>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">Ayam Pop</td>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">1</td>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">Harian</td>
                        <td>
                            <div class="bg-green-400 rounded-full">
                                <p class="py-1 text-white text-sm text-center" style="padding-right:40px; padding-left:40px;margin-top: 40px;margin-bottom: 20px; ">Selesai</p>
                            </div>
                        </td>
                        <td> <div class="flex items-center mx-auto"style="margin-top: 40px;margin-bottom: 20px;">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4  text-green-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600" style="margin-left:75px;">
                        </div></td>
                    </tr>
                    <tr>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">Ayam Pop</td>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">1</td>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">Langganan</td>
                        <td>
                            <div class="bg-yellow-400 rounded-full">
                                <p class="py-1 text-white text-sm text-center" style="padding-right:40px; padding-left:40px;margin-top: 40px;margin-bottom: 20px; ">Diproses</p>
                            </div>
                        </td>
                        <td> <div class="flex items-center mx-auto"style="margin-top: 40px;margin-bottom: 20px;">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4  text-green-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600" style="margin-left:75px;">
                        </div></td>
                    </tr>
                    <tr>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">Ayam Pop</td>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">1</td>
                        <td class="text-center font-medium text-2xl" style="margin-bottom: 20px; margin-top: 40px;">Harian</td>
                        <td>
                            <div class="bg-red-400 rounded-full">
                                <p class="py-1 text-white text-sm text-center" style="padding-right:40px; padding-left:40px;margin-top: 40px;margin-bottom: 20px; ">Menunggu Pembayaran</p>
                            </div>
                        </td>
                        <td> <div class="flex items-center mx-auto"style="margin-top: 40px;margin-bottom: 20px;">
                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4  text-green-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-0 dark:bg-gray-700 dark:border-gray-600" style="margin-left:75px;">
                        </div></td>
                    </tr>
                </table>
            </div>
        </div>


            <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    </body>
</html>