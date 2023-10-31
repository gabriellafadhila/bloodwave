<!DOCTYPE html>
<html lang="en"> <html lang="es">
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
                
    
                    <label class="w-72 h-32 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">Select a file</span>
                        <input type='file' class="hidden" />

                    </label>
            </div>
        </div>
    </div>
</div>



    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Event Name</div>
        <p class="block mt-1 text-lg leading-tight font-medium text-black">Event Date</p>
        <p class="mt-2 text-gray-500">Event Description</p>
        <p class="mt-2 text-gray-500">Event Details...</p>
    </div>
    </div>



    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8 flex">
        <div class="pr-4">
        <p class="text-4xl font-bold">18th</p>
        </div>
        <div>
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Event Name</div>
        <p class="mt-2 text-gray-500">Event Description</p>
        <p class="mt-2 text-gray-500">Event Details...</p>
        </div>
    </div>
    </div>



    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8 flex items-center">
        <div class="pr-4">
        <p class="text-4xl font-bold">18th</p>
        </div>
        <div>
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">November, 2023</div>
        <p class="mt-2 text-gray-500 text-sm">9:20 AM - 9: 40 AM</p>
        <p class="mt-2 text-gray-500">Event Details...</p>
        </div>
    </div>
    </div>


    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8 flex items-center">
        <div class="pr-4">
        <p class="text-4xl font-bold">18th</p>
        </div>
        <div>
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">November, 2023</div>
        <p class="mt-2 text-gray-500 text-sm">9:20 AM - 9: 40 AM</p>
        <p class="mt-2 text-gray-500">Event Details...</p>
        </div>
    </div>
    </div>



    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-3">
    <div class="p-4 flex items-center">
        <div class="pr-4 bg-blue-500 p-2 rounded-lg text-center">
        <p class="text-4xl font-bold text-white">18th</p>
        <p class="text-sm text-white">November, 2023</p>
        </div>
        <div class="ml-4">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">9:20 AM - 9:40 AM</div>
        <p class="mt-2 text-gray-500">Event Details...</p>
        </div>
    </div>
    </div>


    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8 flex items-center">
        <div class="pr-4 bg-blue-200 p-2 rounded-lg text-center">
        <p class="text-4xl font-bold text-white">18th</p>
        <p class="text-sm text-white">November, 2023</p>
        </div>
        <div class="ml-4">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Clinic Appointment</div>
        <p class="mt-2 text-gray-500">9:20 AM - 9:40 AM</p>
        <p class="mt-2 text-gray-500">Dr. John Doe, General Practitioner</p>
        <p class="mt-2 text-gray-500">123 Main St, Anytown</p>
        </div>
    </div>
    </div>




    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-5">
    <div class="p-8 flex items-center">
        <div class="pr-4 bg-blue-200 p-2 rounded-lg text-center">
        <p class="text-4xl font-bold text-white">18th</p>
        <p class="text-sm text-white">November, 2023</p>
        </div>
        <div class="ml-4">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Clinic Appointment</div>
        <p class="mt-2 text-gray-500">9:20 AM - 9:40 AM</p>
        <p class="mt-2 text-gray-500">Dr. John Doe, General Practitioner</p>
        <img class="h-16 w-16 rounded-full mx-auto" src="https://randomuser.me/api/portraits/men/75.jpg" alt="Doctor's Image">
        <p class="mt-2 text-gray-500">Patient: Jane Doe</p>
        <img class="h-16 w-16 rounded-full mx-auto" src="https://randomuser.me/api/portraits/women/50.jpg" alt="Patient's Image">
        </div>
    </div>
    </div>


    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-3">
    <div class="md:flex">
        <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:w-48" src="https://randomuser.me/api/portraits/men/75.jpg" alt="Doctor's image">
        </div>
        <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Dr. John Doe</div>
        <p class="block mt-1 text-lg leading-tight font-medium text-black">Specialty: Cardiology</p>
        <p class="mt-2 text-gray-500">Available Time Slots:</p>
        <ul class="list-disc unlisted list-inside flex gap-3">
            <li>10:00 - 11:00</li>
            <li>13:00 - 14:00</li>
            <li>16:00 - 17:00</li>
        </ul>
        <button class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Book Appointment
        </button>
        </div>
    </div>
    </div>



    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-3">
    <div class="md:flex">
        <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Patient: Jane Doe</div>
        <p class="block mt-1 text-lg leading-tight font-medium text-black">Appointment Time: 13:00 - 14:00</p>
        <p class="mt-2 text-gray-500">Doctor: Dr. John Doe</p>
        <button class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            View Details
        </button>
        <button class="mt-5 ml-3 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Cancel Appointment
        </button>
        </div>
    </div>
    </div>


    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-3">
    <div class="md:flex">
        <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Patient: Jane Doe</div>
        <p class="block mt-1 text-lg leading-tight font-medium text-black">Appointment Time: 13:00 - 14:00</p>
        <p class="mt-2 text-gray-500">Doctor: Dr. John Doe</p>
        <div class="mt-5 relative flex">
            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://randomuser.me/api/portraits/men/75.jpg" alt="Avatar 1">
            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white -ml-4" src="https://randomuser.me/api/portraits/women/74.jpg" alt="Avatar 2">
            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white -ml-4" src="https://randomuser.me/api/portraits/men/76.jpg" alt="Avatar 3">
            <span class="inline-block h-10 w-10 rounded-full ring-2 ring-white -ml-4 bg-indigo-500 text-white flex items-center justify-center">+3</span>
        </div>
        <button class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            View Details
        </button>
        <button class="mt-5 ml-3 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            Cancel Appointment
        </button>
        </div>
    </div>
    </div>
<!-- Box Welcome Start-->