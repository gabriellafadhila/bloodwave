@vite('resources/css/app.css')
<!-- Header -->
<header class="bg-red-dark shadow-md">
    <div class="flex justify-between items-center py-2 px-5 border-b-2 border-grey-200">
        <div class="flex items-center">
        <!-- Logo -->
        <img src="img/logo.png" alt="Bloodwave" class="w-15 h-10 ml-4">
        </div>

         <!-- Navigasi Bar-->
       <div class="flex items-center space-x-2">
       <div class="flex items-center space-x-2">
        <a href="{{url('home')}}" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Beranda</a>
        <a href="{{url('riwayat')}}" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Riwayat Donor</a>
        <a href="{{url('event')}}" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Event</a>
        <a href="{{url('letsread')}}" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Let's Read</a>
        @@if(Auth::user())
        <a href="{{url('profil')}}" class="px-2 py-2 bg-cream-medium text-red-dark font-semibold rounded-lg text-sm">{{auth()->user()->nama}}</a>
        
        @else
        <a href="{{url('login')}}" class="px-2 py-2 bg-cream-medium text-red-dark font-semibold rounded-lg text-sm">Masuk</a>
        <a href="{{url('register')}}" class="px-2 py-2 bg-cream-medium text-red-dark font-semibold rounded-lg text-sm">Daftar</a>
        @endif
    </div>
    </div>
</header>
<div style="background-image: url('/img/abc.png');" class="flex items-center justify-center bg-gradient-to-t h-screen p-6 bg-cover bg-no-repeat bg-center w-full">
        <div class="w-full md:w-1/2 lg:w-1/3">
            <div class="flex flex-col space-y-4">
                <div>
                    <h2 class="uppercase text-white font-bold text-center text-2xl">Notifikasi</h2>
                </div>
                <!-- Item -->
                <div class="flex justify-between py-6 px-4 bg-white/70 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col space-y-1">
                            <span class="font-bold">Allisa</span>
                            <span class="text-sm">Silahkan kembali donor darah pada 2023-09-07</span>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <!-- Item -->
                <div class="flex justify-between py-6 px-4 bg-white/70 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col space-y-1">
                            <span class="font-bold">Allisa</span>
                            <span class="text-sm">Berhasil memasukkan riwayat donor pada 2023-10-07</span>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <!-- Item -->
                <div class="flex justify-between py-6 px-4 bg-white/70 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col space-y-1">
                            <span class="font-bold">Allisa</span>
                            <span class="text-sm">Hallo Allisa!, jangan lupa donor darah besok ya!</span>
                        </div>
                    </div>
                </div>
                <!-- Item -->
                <!-- Item -->
                  <div class="flex justify-between py-6 px-4 bg-white/70 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col space-y-1">
                            <span class="font-bold">Allisa</span>
                            <span class="text-sm">Akun Anda terdeteksi login pada 2023-10-01 via IP 10.200.33.70 app client : Mozilla/5.0 (Windows NT 10.0; Win65; x64) AppleWebKit/537.36...</span>
                        </div>
                    </div>
                </div>
                <!-- Item -->
            </div>
        </div>
    </div>
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
                        <a class="ml-3  cursor-pointer hover: text-cream-dark">
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