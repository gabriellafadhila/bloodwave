<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
@vite('resources/css/app.css')
<style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css')</style>
<style>
        /* CSS Kustom untuk Shadow pada Border */
        .shadow-border {
            border: 2px solid #ccc; /* Atur border dengan warna dan lebar sesuai kebutuhan */
        }
        .shadow-border:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Atur shadow pada border ketika dihover */
        }
</style>


<header class="bg-cream-medium shadow-md border-b-2 border-cream-medium">
    <div class="flex justify-between items-center py-2 px-5 border-b border-red-dark shadow-border">
        <div class="flex items-center">
        <!-- Logo -->
        <img src="img/logomerah.png" alt="Bloodwave" class="w-15 h-10 ml-4">
        </div>

        <!-- Navigasi Bar-->
        <div class="flex items-center space-x-2">
        <a href="#" class="px-2 py-2 bg-read-dark text-red-dark font-semibold hover:text-white rounded-lg text-sm">Beranda</a>
        <a href="#" class="px-2 py-2 bg-read-dark text-red-dark font-semibold hover:text-white rounded-lg text-sm">Riwayat Donor</a>
        <a href="#" class="px-2 py-2 bg-read-dark text-red-dark font-semibold hover:text-white rounded-lg text-sm">Event</a>
        <a href="#" class="px-2 py-2 bg-read-dark text-red-dark font-semibold hover:text-white rounded-lg text-sm">Let's Read</a>
        <a href="#" class="px-2 py-2 bg-red-dark text-white hover:bg-cream-dark font-bold rounded-lg text-sm">Masuk</a>
        </div>
    </div>
</header>
    <div class="bg-cream-medium text-white-500 w-full h-screen overflow-hidden">
        <div class="hidden md:flex w-full h-screen">
            <div class="hidden md:block w-full h-screen py-20">
            <img src="img/bgregister.png">
        </div>
            <div class="w-full md:w-full py-10 px-5 md:px-10">
                <div class="text-center mb-10">
                    <h1 class="font-bold text-3xl text-red-900">BLOODWAVE</h1>
                    <p>Enter your information to register</p>
                </div>
                <div>
                <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Email</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                <input type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="nimahahaha@gmail.com">
                            </div>
                        </div>
                    </div>
                        <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Nama</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-Account-outline text-gray-400 text-lg"></i></div>
                                <input type="nama" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Nimahahaha">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Nomor Telepon</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-Phone-outline text-gray-400 text-lg"></i></div>
                                <input type="Nomor Telepon" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="08123456789">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Umur</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-Face-outline text-gray-400 text-lg"></i></div>
                                <input type="Umur" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="20">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-semibold px-1">Password</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                <input type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="************">
                            </div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button class="block w-full max-w-xs mx-auto bg-red-dark hover:bg-cream-dark focus:bg-red-dark text-white rounded-lg px-3 py-3 font-bold">REGISTER NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>