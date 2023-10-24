<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Bloodwave - Darah Anda, Harapan Mereka</title>
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-red-dark shadow-md">
    <div class="flex justify-between items-center py-2 px-5 border-b-2 border-grey-200">
        <div class="flex items-center">
        <!-- Logo -->
        <img src="img/logo.png" alt="Bloodwave" class="w-28 h-12 ml-6">
        </div>

        <!-- Navigasi Bar-->
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

<!-- Start Landing Page -->
<div class="bg-cream-medium">
    <div class="flex justify-between items-center py-0 px-5">
        <div class="w-1/2 ml-8">
            <p class="font-poppins text-red-dark mt-4">Selamat Datang di</p>
            <h2 class="text-5xl font-semibold text-red-dark mt-4">BLOODWAVE</h2>
            <p class="font-poppins text-red-dark mt-4">Satu kantong Darah Selamatkan beribu nyawa <br>Donorkan Darahmu mari berkontribusi untuk sesama</p>
            <button class="mt-4 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm rounded-lg px-4 py-2">AYO DONOR</button>
        </div>
        <div class="w-1/4">
            <img src="img/hero.png" alt="" class="w-48 h-auto">
        </div>
    </div>
</div>
<!-- End Landing Page -->

<!-- Start Home fitur -->
<div class="bg-red-medium py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
        <div class="mx-auto flex max-w-xs flex-col gap-y-4 border border-cream-dark rounded p-4">
                <dt class="text-base leading-7 text-cream-medium">Pegang Kendali Penuh Donormu</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-cream-medium sm:text-4xl">Riwayat Donor</dd>
        </div>
        <div class="mx-auto flex max-w-xs flex-col gap-y-4 border border-cream-dark rounded p-4">
                <dt class="text-base leading-7 text-cream-medium">Temukan Event Donor Terdekat</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-cream-medium sm:text-4xl">Event</dd>
        </div>
        <div class="mx-auto flex max-w-xs flex-col gap-y-4 border border-cream-dark rounded p-4">
                <dt class="text-base leading-7 text-cream-medium">Temukan informasi mengenai kesehatan</dt>
                <dd class="order-first text-3xl font-semibold tracking-tight text-cream-medium sm:text-4xl">Let's Read</dd>
        </div>
        </dl>
    </div>
</div>
<!-- End Home fitur -->

<!-- Start Testimoni -->
<!-- component -->
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>

        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
            <!-- component -->
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
            </div>
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="#" class="text-xl font-medium text-indigo-500">John Doe</a>
            </div>
            </div>

            <!-- component -->
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
            </div>
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="#" class="text-xl font-medium text-indigo-500">John Doe</a>
            </div>
            </div>

            <!-- component -->
            <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
                <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
            </div>
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">Design Tools</h2>
                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="#" class="text-xl font-medium text-indigo-500">John Doe</a>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimoni -->
</body>
</html>