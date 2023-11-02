<!-- component -->
@vite('resources/css/app.css')
<!DOCTYPE html>
<html id="html" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
                    .comment-hight{
                height: calc(100vh - 6rem);
            }

            .comment-hight::-webkit-scrollbar{
                display: none;
            }

            .sidebar-hight{
                height: calc(100vh - 2.75rem);
            }

            .sidebar-hight::-webkit-scrollbar{
                display: none;
            }

            .sidebar-active{
                background-color: rgba(251, 146, 60, .9);
                border-radius: 10px;
                color: black;
                transition: all .3s;
            }

            .sidebar-active:hover{
                color: white;
            }

            .submenu{
                height: auto;
                transition: all .3s;
            }

            .grow-flex{
                flex-grow: 4;
            }

            .card1{
                border-radius: 20px;
                background-color: #ff9e6d;
                transition: all .3s;
                scale: .98;
                outline: none;
            }

            .card1:hover{
                border-radius: 20px;
                background: linear-gradient(145deg, #ff9e6d, #e6855c);
                box-shadow:  10px 10px 20px #99593d,
                            -5px -5px 10px #ffcf8f;
                scale: 1;
                outline: none;

            }

            .card2{
                scale: .98;
                background-color: #57d5e6;
                border-radius: 20px;
                transition: all .3s;
                outline: none;

            }

            .card2:hover{
                scale: 1;
                border-radius: 20px;
                background: linear-gradient(145deg, #57d5e6, #68feff);
                box-shadow:  10px 10px 20px #34808a,
                            -5px -5px 10px #7affff;
                outline: none;

            }

            .card3{
                scale: .98;
                background-color: #6dffac;
                border-radius: 20px;
                transition: all .3s;
                outline: none;

            }

            .card3:hover{
                scale: 1;
                border-radius: 20px;
                background: linear-gradient(145deg, #6dffac, #5ce691);
                box-shadow:  10px 10px 20px #3d9961,
                            -5px -5px 10px #8fffe1;
                outline: none;

            }
            .card4{
                scale: .98;
                background-color: #ff6dc5;
                border-radius: 20px;
                transition: all .3s;
                outline: none;

            }

            .card4:hover{
                scale: 1;
                border-radius: 20px;
                background: linear-gradient(145deg, #ff6dc5, #e65ca6);
                box-shadow:  10px 10px 20px #993d6e,
                            -5px -5px 10px #ff8fff;
                outline: none;

            }
            .card5{
                scale: .98;
                background-color: #ff6d6d;
                border-radius: 20px;
                transition: all .3s;
                outline: none;

            }

            .card5:hover{
                scale: 1;
                border-radius: 20px;
                background: linear-gradient(145deg, #ff6d6d, #e65c5c);
                box-shadow:  10px 10px 20px #993d3d,
                            -5px -5px 10px #ff8f8f;
                outline: none;

            }
            .card6{
                scale: .98;
                background-color: #9492ff;
                border-radius: 20px;
                transition: all .3s;
                outline: none;

            }

            .card6:hover{
                scale: 1;
                border-radius: 20px;
                background: linear-gradient(145deg, #9492ff, #8583e6);
                box-shadow:  10px 10px 20px #595899,
                            -5px -5px 10px #cfccff;
                outline: none;

            }
            .card7{
                scale: .98;
                background-color: #f5f583;
                border-radius: 20px;
                transition: all .3s;
                outline: none;

            }

            .card7:hover{
                scale: 1;
                border-radius: 20px;
                background: linear-gradient(145deg, #ffff89, #e6d673);
                box-shadow:  10px 10px 20px #998f4d,
                            -5px -5px 10px #ffffb3;
                outline: none;

            }
            .card8{
                scale: .98;
                background-color: #e2acff;
                border-radius: 20px;
                transition: all .3s;
                outline: none;

            }

            .card8:hover{
                scale: 1;
                border-radius: 20px;
                background: linear-gradient(145deg, #e2acff, #b378db);
                box-shadow:  10px 10px 20px #886799,
                            -5px -5px 10px #fff1ff;
                outline: none;
            }

            .hight-screen::-webkit-scrollbar{
                display: none;
            }

            .notification{
                display: none;
            }
    </style>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }

        // Whenever the user explicitly chooses light mode
        localStorage.theme = 'light'

        // Whenever the user explicitly chooses dark mode
        localStorage.theme = 'dark'

        // Whenever the user explicitly chooses to respect the OS preference
        localStorage.removeItem('theme')
    </script>
</head>
<body class="dark:bg-slate-500 transition-all duration-300" >

     <!-- Side Header + Icons -->
        <header class="bg-cream-medium shadow-md border-b-2 border-cream-medium">
            <div class="flex justify-between items-center py-2 px-5 border-b border-red-dark shadow-border">
                <div class="flex items-center">
                <!-- Logo -->
                <img src="img/logomerah.png" alt="Bloodwave" class="w-15 h-10 ml-4">
                </div>
        
                 <!-- Search Bar -->
                 <section class="flex">
                    <span  class="md:flex hidden mx-4">
                        <span id="search-bar-input" class="flex items-center dark:bg-slate-500 hidden border-2 border-blue-500 p-2 rounded-2xl">
                            <i id="close-input" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-gray-100 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </i>

                            <input type="search" name="search" id="search" class="bg-transparent dark:text-white outline-none">

                            <i class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-gray-100 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </i>
                        </span>
                        

                        <span id="search-bar-open" class="flex items-center">
                            <i class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-gray-300 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </i>
                        </span>
                    </span>
                        <i id="collapse" class="hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-gray-300 text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 9V4.5M9 9H4.5M9 9L3.75 3.75M9 15v4.5M9 15H4.5M9 15l-5.25 5.25M15 9h4.5M15 9V4.5M15 9l5.25-5.25M15 15h4.5M15 15v4.5m0-4.5l5.25 5.25" />
                            </svg>                              
                        </i>
                    </span>
                </section>
                <!-- End Search Bar -->

                <!-- Header Panel -->
                <section class="mx-6 flex">
                    <!-- Notificatiion Bar-->
                    <span class="relative flex items-center">
                        <span id="notification-toggle">
                            <i class="flex items-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-gray-300 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                                <sup class="bg-rose-500 p-2 rounded-lg text-white leading-3 text-xs">4</sup>                                  
                            </i>
                        </span>

                        <section id="notification" class="absolute notification top-11 right-0 w-80 dark:bg-slate-600 bg-tr dark:border-2 dark:border-blue-500 bg-gray-100 px-2 rounded-lg ">
                            <div>
                                <div class="flex justify-between mt-2">
                                    <span class="px-2 font-medium text-lg dark:text-gray-50">
                                        Notifications
                                    </span>
                                    
                                    <span class="px-2 bg-rose-500 p-1 rounded-lg text-white">
                                        New
                                    </span>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg my-4 dark:bg-slate-700 dark:text-white">
                                <ul class="list-none px-0">
                                    <li>
                                        <div class="flex p-2">
                                            <div class="flex items-center">
                                                <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" class="rounded-xl" width="100" alt="avatar">
                                            </div>
                                            <div class="p-2 items-center">
                                                <h4 class="text-lg font-semibold">Admin</h4>
                                                <p class="text-base">Lorem ipsum dolor sit amet consectetur.</p>
                                                <p class="text-sm text-gray-500 dark:text-white">30 Min ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="flex p-2">
                                            <div class="flex items-center">
                                                <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" class="rounded-xl" width="100" alt="avatar">
                                            </div>
                                            <div class="p-2">
                                                <h4 class="text-lg font-semibold">Admin</h4>
                                                <p class="text-base">Lorem ipsum dolor sit amet consectetur.</p>
                                                <p class="text-sm text-gray-500 dark:text-white">30 Min ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <hr>
                                    <li>
                                        <div class="flex p-2">
                                            <div class="flex items-center">
                                                <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" class="rounded-xl" width="100" alt="avatar">
                                            </div>
                                            <div class="p-2">
                                                <h4 class="text-lg font-semibold">Admin</h4>
                                                <p class="text-base">Lorem ipsum dolor sit amet consectetur.</p>
                                                <p class="text-sm text-gray-500 dark:text-white">30 Min ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </span>
                    <!-- End Notifcatiion Bar-->

                    <!--Comment Bar-->
                    <span class="relative flex items-center">
                        <span id="comment-toggle">
                            <i class="flex items-center cursor-pointer mx-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-gray-300 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                  </svg>                                  
                                <sup class="bg-rose-500 p-2 rounded-lg text-white leading-3 text-xs">2</sup>                                  
                            </i>
                        </span>

                        <section id="comment" class="absolute notification top-11 right-0 w-80 dark:bg-slate-600 bg-tr dark:border-2 dark:border-blue-500 bg-gray-100 p-2 rounded-lg">

                            <div class="border-b-2 border-blue-500 rounded-lg dark:border-0">
                                <input type="search" name="search" class="p-2 rounded-lg outline-none w-full" id="" placeholder="Search ...">
                            </div>


                            <div class="my-2 rounded-lg bg-white dark:bg-slate-700 overflow-auto comment-hight">
                                <ul class="list-none">
                                    <li class="flex justify-between items-center p-2">
                                        <div class="p-2">
                                            <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" width="100" class="rounded-lg" alt="avatar">
                                        </div>
                                        <h2 class="text-base font-semibold dark:text-white">Admin</h2>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>                                              
                                        </i>
                                    </li>
                                    <hr>
                                    <li class="flex justify-between items-center p-2">
                                        <div class="p-2">
                                            <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" width="100" class="rounded-lg" alt="avatar">
                                        </div>
                                        <h2 class="text-base font-semibold dark:text-white">Admin</h2>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>                                              
                                        </i>
                                    </li>
                                    <hr>
                                    <li class="flex justify-between items-center p-2">
                                        <div class="p-2">
                                            <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" width="100" class="rounded-lg" alt="avatar">
                                        </div>
                                        <h2 class="text-base font-semibold dark:text-white">Admin</h2>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>                                              
                                        </i>
                                    </li>
                                    <hr>
                                    <li class="flex justify-between items-center p-2">
                                        <div class="p-2">
                                            <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" width="100" class="rounded-lg" alt="avatar">
                                        </div>
                                        <h2 class="text-base font-semibold dark:text-white">Admin</h2>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>                                              
                                        </i>
                                    </li>
                                    <hr>
                                    <li class="flex justify-between items-center p-2">
                                        <div class="p-2">
                                            <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" width="100" class="rounded-lg" alt="avatar">
                                        </div>
                                        <h2 class="text-base font-semibold dark:text-white">Admin</h2>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>                                              
                                        </i>
                                    </li>
                                    <hr>
                                    <li class="flex justify-between items-center p-2">
                                        <div class="p-2">
                                            <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" width="100" class="rounded-lg" alt="avatar">
                                        </div>
                                        <h2 class="text-base font-semibold dark:text-white">Admin</h2>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>                                              
                                        </i>
                                    </li>
                                    <hr>
                                    <li class="flex justify-between items-center p-2">
                                        <div class="p-2">
                                            <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" width="100" class="rounded-lg" alt="avatar">
                                        </div>
                                        <h2 class="text-base font-semibold dark:text-white">Admin</h2>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                            </svg>                                              
                                        </i>
                                    </li>
                                    <hr>
                                </ul>
                            </div>
                        </section>

                    </span>
                    <!-- End Comment Bar-->
                    
                    <!--User Information-->
                    <span class="relative flex items-center">
                        <span id="user-toggle" class="flex cursor-pointer">
                            <div class="flex items-center">
                                <img src="https://tailwindcomponents.com/storage/avatars/ZUtuXtHvclQWZKMPFh1ZiQlzxb3CI6sPfs1efYkn.jpg" class="rounded-md" width="40" alt="avatar">
                            </div>                                
                            <span class="flex items-center mx-4">
                                <h4 class="font-medium dark:text-gray-200 text-gray-700">Admin</h4>
                            </span>
                            <i class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 dark:text-gray-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>                                      
                            </i>
                        </span>

                        <div id="user" class="notification">
                            <ul class="absolute right-0 my-8 w-full z-30">
                                <div class="mx-4 bg-slate-200 dark:bg-slate-600 rounded-lg">
                                    <li class="">
                                        <a href="" class="text-gray-600 hover:text-gray-800 dark:text-gray-200 dark:hover:text-white transition duration-300">
                                            <i class="flex justify-between items-center p-4 border-b-2 border-b-white">
                                                <p class="">Setting</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.107-1.204l-.527-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>                                                  
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-gray-600 hover:text-gray-800 dark:text-gray-200 dark:hover:text-white transition duration-300">
                                            <i class="flex justify-between items-center p-4 border-b-2 border-b-white">
                                                <p>User</p> 
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                                </svg>                                                                                                
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-gray-600 hover:text-gray-800 dark:text-gray-200 dark:hover:text-white transition duration-300">
                                            <i class="flex justify-between items-center p-4 border-b-2 border-b-white">
                                                <p>Messages</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                                </svg>                                                    
                                            </i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-gray-600 hover:text-gray-800 dark:text-gray-200 dark:hover:text-white transition duration-300">
                                            <i class="flex justify-between items-center p-4">
                                                <p>Logout</p>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                                                </svg>
                                            </i>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </div>

                    </span>
                <!--End User Information-->

            </div>
    <!--Body-->

    <section class="flex z-50">
        <!--Sidebar-->
        <aside id="sidebar" class="mt-11 max-w-1/6 min-w-1/6 md:w-1/6 hidden md:block">
            <div class="bg-red-medium w-fit h-fit">
                <div class="w-full px-4 py-2">
                    <!--Home-->
                        <a href="" class="flex items-center p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </i>
                            <span class="px-4 text-lg"> Home </span>
                        </a>
                    <!--End Home-->

                    <!--Content Section-->
                        <p class="text-lg text-gray-300 p-2 border-t-2 my-2">Content Section</p>

                        <a href="" class="flex items-center p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </i>
                            <span class="px-4 text-lg">Category</span>
                        </a>

                        <div class="mt-2">
                            <div class="flex items-center justify-between p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                <div id="posts" class="flex items-center w-full">
                                    <span class="flex items-center w-full cursor-pointer">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                                            </svg>                                                                  
                                        </i>
                                        <p class="px-4 text-lg">Posts</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg id="post-angle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                            <svg id="post-down-angle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>                                                                                
                                        </i>
                                    </span>
                                    
                                </div>

                            </div>

                            <div id="post-menu" class="grid grid-rows-3 grid-flow-row h-0 hidden">
                                <div class="flex items-center w-full transition-all duration-300">
                                    <a href="" class="flex items-center align-baseline w-3/4 p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                        <p>Articles</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                        <p>Posts</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                        <p>Courses</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    <!--End Content Section-->

                    <!--User Section-->
                        <p class="text-lg text-gray-300 p-2 border-t-2 my-2">User Section</p>

                        <div class="mt-2">
                            <div class="flex items-center justify-between p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                <div id="users" class="flex items-center w-full cursor-pointer">
                                    <span class="flex items-center w-full">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                            </svg>                                                                 
                                        </i>
                                        <p class="px-4 text-lg">Users</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg id="user-angle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                            <svg id="user-down-angle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>                                   
                                        </i>
                                    </span>
                                    
                                </div>

                            </div>

                            <div id="user-menu" class="grid grid-rows-3 grid-flow-row h-0 hidden">
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center align-baseline w-3/4 p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                        <p>Admin</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                        <p>Teachers</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                        <p>Students</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    <!--End User Section-->

                    <!-- Setting Section -->
                        <p class="text-lg text-gray-300 p-2 border-t-2 my-2">Setting</p>

                        <div class="mt-2 ">
                            <div class="flex items-center justify-between p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                <div id="setting" class="flex items-center w-full">
                                    <span class="flex items-center w-full cursor-pointer">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>                                                                
                                        </i>
                                        <p class="px-4 text-lg">General Setting</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg id="setting-angle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                            <svg id="setting-down-angle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>                                     
                                        </i>
                                    </span>
                                    
                                </div>

                            </div>

                            <div id="setting-menu" class="grid grid-rows-2 grid-flow-row h-0 hidden ">
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center align-baseline w-3/4 p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                        <p>Header Setting</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-gray-200 hover:text-orange-400 active:text-orange-600 transition-all duration-300">
                                        <p>Footer Setting</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>   
                            </div>
                        </div>
                    <!--End Setting Section-->
                </div>
            </div>
        </aside>

        <!--Cards-->
            <section id="main-body" class="mt-11 md:w-5/6 w-full dark:bg-slate-500">
                <div class="p-2">
                    <div class="flex flex-wrap justify-between">
                        <div class="md:w-1/4 sm:w-1/2 w-full">
                            <div class="border-2 card1 border-gray-50 shadow-lg m-4 p-2">
                                <a href="" class="leading-10">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-2xl leading-10">$50</p>
                                            <p class="text-lg leading-10">Profit</p>
                                        </div>
                                        <div>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                </svg>                                      
                                            </i>
                                        </div>
                                    </div>
                                   <div class="border-t-2 border-white"></div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm leading-10">Last Update: 27 Nov 22 17:30</p>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>                                      
                                        </i>
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                        <div class="md:w-1/4 sm:w-1/2 w-full">
                            <div class="card2 border-2 border-gray-50 shadow-lg m-4 p-2">
                                <a href="" class="leading-10">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-2xl leading-10">$50</p>
                                            <p class="text-lg leading-10">Profit</p>
                                        </div>
                                        <div>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                </svg>                                      
                                            </i>
                                        </div>
                                    </div>
                                   <div class="border-t-2 border-white"></div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm leading-10">Last Update: 27 Nov 22 17:30</p>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>                                      
                                        </i>
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                        <div class="md:w-1/4 sm:w-1/2 w-full">
                            <div class="card3 border-2 border-gray-50 shadow-lg m-4 p-2">
                                <a href="" class="leading-10">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-2xl leading-10">$50</p>
                                            <p class="text-lg leading-10">Profit</p>
                                        </div>
                                        <div>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                </svg>                                      
                                            </i>
                                        </div>
                                    </div>
                                   <div class="border-t-2 border-white"></div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm leading-10">Last Update: 27 Nov 22 17:30</p>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>                                      
                                        </i>
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                        <div class="md:w-1/4 sm:w-1/2 w-full">
                            <div class="card4 border-2 border-gray-50 shadow-lg m-4 p-2">
                                <a href="" class="leading-10">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-2xl leading-10">$50</p>
                                            <p class="text-lg leading-10">Profit</p>
                                        </div>
                                        <div>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                </svg>                                      
                                            </i>
                                        </div>
                                    </div>
                                   <div class="border-t-2 border-white"></div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm leading-10">Last Update: 27 Nov 22 17:30</p>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>                                      
                                        </i>
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                        <div class="md:w-1/4 sm:w-1/2 w-full">
                            <div class="card5 border-2 border-gray-50 shadow-lg m-4 p-2">
                                <a href="" class="leading-10">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-2xl leading-10">$50</p>
                                            <p class="text-lg leading-10">Profit</p>
                                        </div>
                                        <div>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                </svg>                                      
                                            </i>
                                        </div>
                                    </div>
                                   <div class="border-t-2 border-white"></div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm leading-10">Last Update: 27 Nov 22 17:30</p>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>                                      
                                        </i>
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                        <div class="md:w-1/4 sm:w-1/2 w-full">
                            <div class="card6 border-2 border-gray-50 shadow-lg m-4 p-2">
                                <a href="" class="leading-10">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-2xl leading-10">$50</p>
                                            <p class="text-lg leading-10">Profit</p>
                                        </div>
                                        <div>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                </svg>                                      
                                            </i>
                                        </div>
                                    </div>
                                   <div class="border-t-2 border-white"></div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm leading-10">Last Update: 27 Nov 22 17:30</p>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>                                      
                                        </i>
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                        <div class="md:w-1/4 sm:w-1/2 w-full">
                            <div class="card7 border-2 border-gray-50 shadow-lg m-4 p-2">
                                <a href="" class="leading-10">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-2xl leading-10">$50</p>
                                            <p class="text-lg leading-10">Profit</p>
                                        </div>
                                        <div>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                </svg>                                      
                                            </i>
                                        </div>
                                    </div>
                                   <div class="border-t-2 border-white"></div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm leading-10">Last Update: 27 Nov 22 17:30</p>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>                                      
                                        </i>
                                    </div>
                                </a>
                            </div>
                           
                        </div>
                        <div class="md:w-1/4 sm:w-1/2 w-full">
                            <div class="card8 border-2 border-gray-50 shadow-lg m-4 p-2">
                                <a href="" class="leading-10">
                                    <div class="flex justify-between items-center">
                                        <div>
                                            <p class="text-2xl leading-10">$50</p>
                                            <p class="text-lg leading-10">Profit</p>
                                        </div>
                                        <div>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                                </svg>                                      
                                            </i>
                                        </div>
                                    </div>
                                   <div class="border-t-2 border-white"></div>
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm leading-10">Last Update: 27 Nov 22 17:30</p>
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>                                      
                                        </i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 px-4">
                    <hr>

                    <h2 class="text-lg font-semibold p-2 dark:text-gray-50">User Section</h2>
                    <h4 class="text-base text-gray-500 p-1 dark:text-gray-200">This Section Show Your User Information</h4>
                    <p class="p-2 dark:text-gray-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio nobis voluptas? Fugit maiores repellat aut commodi in. Nobis officiis blanditiis sequi iste molestias pariatur ut nam corrupti provident distinctio consequatur iure enim praesentium necessitatibus aliquid, numquam exercitationem error fuga tempora, voluptatum omnis eveniet harum fugit aut? Tempore, ea. Nisi.</p>
                    <p class="p-2 dark:text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum similique mollitia voluptas deserunt autem debitis repudiandae nulla, id harum distinctio numquam quod quibusdam. Dolorem ex iste accusantium doloribus culpa tempore fugiat commodi expedita, doloremque sed facere magni et totam unde ipsa fugit repudiandae eos quo cupiditate. Aliquid vero debitis recusandae!</p>
                    <p class="p-2 dark:text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum similique mollitia voluptas deserunt autem debitis repudiandae nulla, id harum distinctio numquam quod quibusdam. Dolorem ex iste accusantium doloribus culpa tempore fugiat commodi expedita, doloremque sed facere magni et totam unde ipsa fugit repudiandae eos quo cupiditate. Aliquid vero debitis recusandae!</p>
                    <p class="p-2 dark:text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum similique mollitia voluptas deserunt autem debitis repudiandae nulla, id harum distinctio numquam quod quibusdam. Dolorem ex iste accusantium doloribus culpa tempore fugiat commodi expedita, doloremque sed facere magni et totam unde ipsa fugit repudiandae eos quo cupiditate. Aliquid vero debitis recusandae!</p>
                    <p class="p-2 dark:text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum similique mollitia voluptas deserunt autem debitis repudiandae nulla, id harum distinctio numquam quod quibusdam. Dolorem ex iste accusantium doloribus culpa tempore fugiat commodi expedita, doloremque sed facere magni et totam unde ipsa fugit repudiandae eos quo cupiditate. Aliquid vero debitis recusandae!</p>
                </div>

                <footer class="w-full flex items-center justify-center border-t-2 mt-6 dark:border-t-slate-600 border-t-slate-500">
                    <p class="text-center p-4 text-lg text-gray-600 dark:text-gray-50 font-normal">Designed By <i class="text-rose-500 dark:text-emerald-400 font-semibold dark:hover:text-emerald-200 hover:text-slate-600 transition-all duration-300"> <a href="mailto:bloodwave@gmail.com">Bloodwave </a></i> </p>
                </footer>

            </section>
        <!--End Cards-->
    </section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {


    function removeclasses(){
        $("#open").removeClass("md:inline");
        $("#open").removeClass("hidden");
        $("#close").removeClass("md:hidden");
        $("#close").removeClass("inline");
    }

    function toggleFullScreen(){
        if((document.fullScreenElement && document.fullScreenElement !== null) || (!document.mozFullScreen && !document.webkitIsFullScreen)){
            if(document.documentElement.requestFullscreen){
                document.documentElement.requestFullscreen();
            }
            else if (document.documentElement.mozRequestFullscreen){
                document.documentElement.mozRequestFullscreen();
            }
            else if (document.documentElement.webkitRequestFullscreen){
                document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
            }
        }
        else {
            if(document.cancelFullScreen){
                document.cancelFullScreen();
            }
            else if (document.mozCancelFullScreen){
                document.mozCancelFullScreen();
            }
            else if (document.webkitCancelFullScreen){
                document.webkitCancelFullScreen();
            }
        }
    }

    if($("#html").hasClass("dark")){
        $("#lightmode").removeClass("hidden");
    }
    else{
        $("#darkmode").removeClass("hidden");
    }

    $("#lightmode").click(function () { 
        $("#html").removeClass("dark");
        $("#darkmode").removeClass("hidden");
        $("#lightmode").addClass("hidden");
    });
    $("#darkmode").click(function () { 
        $("#html").addClass("dark");
        $("#lightmode").removeClass("hidden");
        $("#darkmode").addClass("hidden");
    });
    
    $("#open").click(function () {
        $("#sidebar").fadeOut("300");
        $("#main-body").animate({width:"100%"}, 300);
        setTimeout(function(){
            removeclasses(),
            $("#open").addClass("hidden");
            $("#close").removeClass("hidden");
        },300)
    });

    $("#close").click(function () { 
        $("#sidebar").fadeIn("300");
        $("#main-body").animate({width:"83.333333333333333%"}, 300);
        setTimeout(function(){
            removeclasses(),
            $("#open").removeClass("hidden");
            $("#close").addClass("hidden");
        },300)
    });

    $("#show-header").click(function () {
        
        $("#main-header").toggleClass("hidden");
    });

    $("#search-bar-open").click(function () { 
        $("#search-bar-input").removeClass("hidden");
        $("#search-bar-open").addClass("hidden");
        $("#search").animate({width:"12rem"},300)
    });

    $("#close-input").click(function () { 
        $("#search").animate({width:"0"},300)
        setTimeout(function(){
            $("#search-bar-input").addClass("hidden");
            $("#search-bar-open").removeClass("hidden");
            $("#search").val('');
        },300);
    });

    $("#notification-toggle").click(function () { 
        $("#notification").fadeToggle();
    });

    $("#comment-toggle").click(function () { 
        $("#comment").fadeToggle();
    });

    $("#user-toggle").click(function () { 
        
        $("#user").fadeToggle();
    });

    $("#posts").click(function () { 
        $("#posts").addClass("active");
        $("#post-menu").toggleClass("hidden");
        $("#post-menu").toggleClass("h-0");
        $("#post-angle").toggleClass("hidden");
        $("#post-down-angle").toggleClass("hidden");
    });

    $("#users").click(function () { 
        $("#users").addClass("active");
        $("#user-menu").toggleClass("hidden");
        $("#user-menu").toggleClass("h-0");
        $("#user-angle").toggleClass("hidden");
        $("#user-down-angle").toggleClass("hidden");
    });

    $("#setting").click(function () { 
        $("#setting").addClass("active");
        $("#setting-menu").toggleClass("hidden");
        $("#setting-menu").toggleClass("h-0");
        $("#setting-angle").toggleClass("hidden");
        $("#setting-down-angle").toggleClass("hidden");
    });

    $("#full-screen").click(function () { 
        toggleFullScreen()
        $("#full-icon").toggleClass("hidden");
        $("#collapse").toggleClass("hidden");
    });


});
    </script>
</body>
</html>