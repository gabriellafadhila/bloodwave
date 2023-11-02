<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<header class="bg-red-dark shadow-md">
    <div class="flex justify-between items-center py-2 px-5 border-b-2 border-grey-200">
        <div class="flex items-center">
        <!-- Logo -->
        <img src="img/logo.png" alt="Bloodwave" class="w-28 h-12 ml-6">
        </div>

        <!-- Navigasi Bar-->
        <div class="flex items-center space-x-2">
            <a href="{{url('home')}}" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Beranda</a>
            <a href="#" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Riwayat Donor</a>
            <a href="#" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Event</a>
            <a href="#" class="px-2 py-2 bg-red-dark text-cream-medium font-semibold rounded-lg text-sm">Let's Read</a>
            <a href="{{url('login')}}" class="px-2 py-2 bg-cream-medium text-red-dark font-semibold rounded-lg text-sm">Masuk</a>
            <a href="{{url('register')}}" class="px-2 py-2 bg-cream-medium text-red-dark font-semibold rounded-lg text-sm">Daftar</a>
        </div>
    </div>
</header>
<body>
<div class="bg-cream-medium flex justify-center items-center w-full h-screen ">
<!-- Left: Image -->
<div class="w-full h-screen hidden lg:block">
  <img src="img/login.png" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
  <h1 class="text-2xl font-semibold mb-4">Masuk</h1>
  <form action="{{url('login/process')}}" method="POST">
    @csrf
    <!-- Username Input -->
    <div class="mb-4">
      <label for="username" class="block text-gray-600">Nama Pengguna/Email</label>
      <input type="text" id="username" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>
    <!-- Password Input -->
    <div class="mb-4">
      <label for="password" class="block text-gray-600">Kata Sandi</label>
      <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>
    <!-- Remember Me Checkbox -->
    <div class="mb-4 flex items-center">
      <input type="checkbox" id="remember" name="remember" class="text-blue-500">
      <label for="remember" class="text-gray-600 ml-2">Ingat akun</label>
    </div>
    <!-- Forgot Password Link -->
    <div class="mb-6 text-red-dark">
      <a href="#" class="hover:underline">Lupa Kata Sandi?</a>
    </div>
    <!-- Login Button -->
    <button type="submit" class="bg-red-dark hover:bg-red-medium text-white font-semibold rounded-md py-2 px-4 w-full">Masuk</button>
  </form>
  <!-- Sign up  Link -->
  <div class="mt-65 text-red-dark text-center">
    <a href="#" class="hover:underline">Daftar</a>
  </div>
</div>
</div>

</body>
</html>

