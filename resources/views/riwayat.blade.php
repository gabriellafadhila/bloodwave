<!DOCTYPE html>
<html lang="en"> <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Bloodwave - Darah Anda, Harapan Mereka</title>
</head>
<body class="bg-cream-medium">

<!-- Header -->
<header class="bg-red-dark shadow-md">
    <div class="flex justify-between items-center py-2 px-5 border-b-2 border-cream-dark">
        <div class="flex items-center">
            <!-- Logo -->
            <img src="img/logo.png" alt="Bloodwave" class="w-28 h-12 ml-6">
        </div>

<!-- Navigasi Bar Start-->
        <div class="flex items-center space-x-2">
            <a href="#" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Beranda</a>
            <a href="#" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Riwayat Donor</a>
            <a href="#" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Event</a>
            <a href="#" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Let's Read</a>
            <a href="#" class="px-2 py-2 bg-cream-medium text-red-dark font-semibold rounded-lg text-sm">Masuk</a>
            <a href="#" class="px-2 py-2 bg-cream-medium text-red-dark font-semibold rounded-lg text-sm">Daftar</a>
        </div>
    </div>
</header>
<!-- Navigasi Bar Start-->

<!-- Box Welcome Start-->
<div class="max-w-md mx-auto bg-red-medium rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="md:flex">
        <div class="p-8">
            <h2 class="text-5xl font-semibold text-cream-dark mt-4">Hai, Allisa!</h2>
            <p class="font-poppins text-cream-dark mt-4">Masukkan riwayat donor anda</p>
            
            <div class="flex gap-32">
                <form action="">
                    <div class="py-1">
                        <span class="px-1 text-sm text-cream-medium">Username</span>
                        <input placeholder="" type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-cream-medium shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    </div>
                    <div class="py-1">
                        <span class="px-1 text-sm text-cream-medium">Email </span>
                        <input placeholder="" type="email" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-cream-medium shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    </div>
                    <div class="py-1">
                        <span class="px-1 text-sm text-cream-medium">Password</span>
                        <input placeholder="" type="password" x-model="password" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-cream-medium  placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                    </div>
                </form>
                
                    <div class="flex flex-col py-7 gap-7">
                        <label class="w-72 h-32 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                            </svg>
                            <span class="mt-2 text-red-dark font-semibold leading-normal">Select a file</span>
                            <input type='file' class="hidden" />
                        </label>
                        <button class="py-2 px-4 bg-transparent text-cream-medium font-semibold border border-cream-medium rounded hover:bg-cream-dark hover:text-red-dark hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0">Simpan</button>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Box Welcome End-->

<!-- Recent Donor Start-->
<div class ="flex flex-row md:max-w-2xl mx-auto gap-5 w-full justify-center">
    <div class="bg-white p-4 w-full rounded-md text-center">
    <div class="flex justify-between bg-gradient-to-tr from-red-medium to-red-medium rounded-md py-2 px-4 text-white font-bold text-md">
        <div>
            <span>Donor Terakhir</span>
        </div>
    </div>

    <div>
        <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
            <div class="px-2 flex">
                <span>Sabtu, 07 Oktober 2023 </span>
            </div>
        </div>
    </div>

    <div class="flex justify-between border-t-2 text-sm font-normal mt-4 space-x-4">
        <div class="px-2">
            <span>18.00 WIB</span>
        </div>
    </div>

    <div class="flex justify-between border-t-2 text-sm font-normal mt-4 space-x-4">
        <div class="px-2">
            <span>RS Jaya Medika</span>
        </div>
    </div>
    </div>
    <div class="bg-white p-4 w-full rounded-md text-center">
        <div class="flex justify-between bg-gradient-to-tr from-red-medium to-red-medium rounded-md py-2 px-4 text-white font-bold text-md">
            <div>
                <span>Donor Terakhir</span>
            </div>
        </div>

        <div>
            <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
                <div class="px-2 flex">
                    <span>Sabtu, 07 Oktober 2023 </span>
                </div>
            </div>
        </div>

        <div class="flex justify-between border-t-2 text-sm font-normal mt-4 space-x-4">
            <div class="px-2">
                <span>18.00 WIB</span>
            </div>
        </div>

        <div class="flex justify-between border-t-2 text-sm font-normal mt-4 space-x-4">
            <div class="px-2">
                <span>RS Jaya Medika</span>
            </div>
        </div>
    </div>
    <!-- <div class="p-4 w-fit bg-slate-600">
        <div class="bg-white p-4 rounded-md text-center">
            <div>
                <div>
                    <div>
                        <div class="flex justify-between bg-gradient-to-tr from-red-medium to-red-medium rounded-md py-2 px-4 text-white font-bold text-md">
                            <div>
                                <span>Donor Terakhir</span>
                            </div>
                        </div>

                    <div>
                        <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
                            <div class="px-2 flex">
                                <span>Sabtu, 07 Oktober 2023 </span>
                            </div>
                        </div>
                    </div>

                        <div class="flex justify-between border-t-2 text-sm font-normal mt-4 space-x-4">
                            <div class="px-2">
                                <span>18.00 WIB</span>
                            </div>
                        </div>

                        <div class="flex justify-between border-t-2 text-sm font-normal mt-4 space-x-4">
                            <div class="px-2">
                                <span>RS Jaya Medika</span>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 w-fit bg-slate-600">
            <div class="bg-white p-4 rounded-md text-center">
                <div>
                    <div>
                        <div>
                            <div class="flex justify-between bg-gradient-to-tr from-red-medium to-red-medium rounded-md py-2 px-4 text-white font-bold text-md">
                                <div>
                                    <span>Donor Terakhir</span>
                                </div>
                            </div>
    
                        <div>
                            <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
                                <div class="px-2 flex">
                                    <span>Selasa, 07 November 2023 </span>
                                </div>
                            </div>
                        </div>
    
                            <div class="flex justify-between border-t-2 text-sm font-normal mt-4 space-x-4">
                                <div class="px-2">
                                    <span>18.00 WIB</span>
                                </div>
                            </div>
    
                            <div class="flex justify-between border-t-2 text-sm font-normal mt-4 space-x-4">
                                <div class="px-2">
                                    <span>RS Terdekat</span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>


<!-- Recent Donor End-->

<!-- Riwayat Start-->
</div></div>
<div></div>
<div class="max-w-md mx-auto bg-red-medium rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8">
        <div class="tracking-wide text-2xl text-white font-semibold text-center">Riwayat Donor</div>
    </div>
    </div>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8">
        <div class="tracking-wide text-medium text-red-dark -500 font-bold">RS Maju Jaya</div>
        <p class="block mt-1 text-lg leading-tight text-black">Jumat, 7 Juli 2023, 15.00 WIB</p>
    </div>
    </div>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8">
        <div class="tracking-wide text-medium text-red-dark -500 font-bold">PMI Jayabaya</div>
        <p class="block mt-1 text-lg leading-tight text-black">Senin, 7 Agustus 2023, 15.00 WIB</p>
    </div>
    </div>
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8">
        <div class="tracking-wide text-medium text-red-dark -500 font-bold">RSUK</div>
        <p class="block mt-1 text-lg leading-tight text-black">Kamis, 7 September 2023, 15.00 WIB</p>
    </div>
</div>
<!-- Riwayat End-->


<!-- Start Footer -->
<footer class="w-full text-gray-700 bg-red-dark body-font">
        <div
            class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                <img src="img/logo.png" alt="Bloodwave" class="w-28 h-12 ml-8">
                </a>
                <p class="mt-2 text-sm text-cream-medium font-semibold">Darah Anda, Harapan Mereka</p>
                <div class="mt-4">
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a class="text-cream-medium cursor-pointer hover:text-cream-dark">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-cream-medium cursor-pointer hover: text-cream-dark">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-cream-medium cursor-pointer hover:text-cream-dark">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-cream-medium cursor-pointer hover:text-cream-dark">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-cream-medium uppercase title-font">About</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-cream-medium cursor-pointer hover:text-gray-900">Company</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-cream-medium  cursor-pointer hover:text-gray-900">Careers</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-cream-medium cursor-pointer hover:text-gray-900">Blog</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-cream-medium  uppercase title-font">Support</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-cream-medium  cursor-pointer hover:text-gray-900">Contact Support</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-cream-medium  cursor-pointer hover:text-gray-900">Help Resources</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-cream-medium  cursor-pointer hover:text-gray-900">Release Updates</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-cream-medium  uppercase title-font">Platform
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-cream-medium cursor-pointer hover:text-gray-900">Terms &amp; Privacy</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-cream-medium  cursor-pointer hover:text-gray-900">Pricing</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-cream-medium cursor-pointer hover:text-gray-900">FAQ</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-cream-medium  uppercase title-font">Contact</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-cream-medium cursor-pointer hover:text-gray-900">Send a Message</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-cream-medium  cursor-pointer hover:text-gray-900">Request a Quote</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-cream-medium  cursor-pointer hover:text-gray-900">+123-456-7890</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-red-dark">
            <div class="container px-5 py-4 mx-auto">
                <p class="text-sm text-white capitalize xl:text-center">© 2023 Bloodwave Present </p>
        </div>
    </footer>
</div>
<!-- End Footer -->