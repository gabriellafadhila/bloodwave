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
                background-color:#952323;
                border-radius: 10px;
                color: black;
                transition: all .3s;
            }

            .sidebar-active:hover{
                color: #952323;
            }

            .submenu{
                height: auto;
                transition: all .3s;
            }

            .grow-flex{
                flex-grow: 4;
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
                        <span id="search-bar-input" class="flex items-center dark:bg-slate-500 hidden border-2 border-red-dark p-2 rounded-2xl">
                            <i id="close-input" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-red-dark text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </i>

                            <input type="search" name="search" id="search" class="bg-transparent dark:text-red-dark outline-none">

                            <i class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-red-dark text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </i>
                        </span>
                        

                        <span id="search-bar-open" class="flex items-center">
                            <i class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-red-dark text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </i>
                        </span>
                    </span>
                        <i id="collapse" class="hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-red-dark text-gray-600">
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-red-dark text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                                <sup class="bg-rose-500 p-2 rounded-lg text-white leading-3 text-xs">4</sup>                                  
                            </i>
                        </span>

                        <section id="notification" class="absolute notification top-11 right-0 w-80 dark:bg-slate-600 bg-tr dark:border-2 dark:border-red-dark bg-gray-100 px-2 rounded-lg ">
                            <div>
                                <div class="flex justify-between mt-2">
                                    <span class="px-2 font-medium text-lg dark:text-red-dark">
                                        Notifications
                                    </span>
                                    
                                    <span class="px-2 bg-rose-500 p-1 rounded-lg text-white">
                                        New
                                    </span>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg my-4 dark:bg-slate-700 dark:text-red-dark">
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 dark:text-red-dark text-gray-600">
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
                <div class="w-full h-full px-4 py-2">
                    <!--Home-->
                        <a href="" class="flex items-center p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </i>
                            <span class="px-4 text-lg"> Home </span>
                        </a>
                    <!--End Home-->

                    <!--Content Section-->
                        <p class="text-lg text-white p-2 border-t-2 my-2">Content Section</p>

                        <a href="" class="flex items-center p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </i>
                            <span class="px-4 text-lg">Category</span>
                        </a>

                        <div class="mt-2">
                            <div class="flex items-center justify-between p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
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
                                    <a href="" class="flex items-center align-baseline w-3/4 p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
                                        <p>Articles</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
                                        <p>Posts</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
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
                        <p class="text-lg text-white p-2 border-t-2 my-2">User Section</p>

                        <div class="mt-2">
                            <div class="flex items-center justify-between p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
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
                                    <a href="" class="flex items-center align-baseline w-3/4 p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
                                        <p>Admin</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
                                        <p>Teachers</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
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
                        <p class="text-lg text-white p-2 border-t-2 my-2">Setting</p>

                        <div class="mt-2 ">
                            <div class="flex items-center justify-between p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
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
                                    <a href="" class="flex items-center align-baseline w-3/4 p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
                                        <p>Header Setting</p>
                                        <i class="flex justify-end grow-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                            </svg>                                      
                                        </i>
                                    </a>
                                </div>
                                
                                <div class="flex items-center w-full">
                                    <a href="" class="flex items-center w-3/4 p-2 text-white hover:text-cream-medium active:text-cream-medium transition-all duration-300">
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
           <!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.x.x/dist/alpine.min.js" defer></script>
    <title>Admin</title>
</head>

<body>
    <div class="bg-white shadow h-full w-full" x-data="{ images: [] }">
        <form action="{{url('/admin/artikel/submit')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="heading text-center font-bold text-2xl m-5 text-gray-800 bg-white">New Post</div>
        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
            <input name="judul" class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Title" type="text">
            <textarea name="isi" class="description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" spellcheck="false" placeholder="Describe everything about this post here"></textarea>

            <!-- icons -->
            <div class="icons flex text-gray-500 m-2">
                <label id="select-image">
                    <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                    </svg>
                   <input hidden type="file" multiple @change="images = Array.from($event.target.files).map(file => ({url: URL.createObjectURL(file), name: file.name, preview: ['jpg', 'jpeg', 'png', 'gif'].includes(file.name.split('.').pop().toLowerCase()), size: file.size > 1024 ? file.size > 1048576 ? Math.round(file.size / 1048576) + 'mb' : Math.round(file.size / 1024) + 'kb' : file.size + 'b'}))" x-ref="fileInput">

                </label>
                <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
            </div>

            <!-- Preview image here -->
            <div id="preview" class="my-4 flex">
                <template x-for="(image, index) in images" :key="index">
                    <div class="relative w-32 h-32 object-cover rounded ">
                         <div x-show="image.preview" class="relative w-32 h-32 object-cover rounded">
                    <img :src="image.url" class="w-32 h-32 object-cover rounded">
                    <button @click="images.splice(index, 1)" class="w-6 h-6 absolute text-center flex items-center top-0 right-0 m-2 text-white text-lg bg-red-500 hover:text-red-700 hover:bg-gray-100 rounded-full p-1"><span class="mx-auto">×</span></button>
                <div x-text="image.size" class="text-xs text-center p-2"></div>
                </div>
                <div x-show="!image.preview" class="relative w-32 h-32 object-cover rounded">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-white stroke-indigo-500" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg> -->
                     <svg class="fill-current  w-32 h-32 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                  </svg>
                    <button @click="images.splice(index, 1)" class="w-6 h-6 absolute text-center flex items-center top-0 right-0 m-2 text-white text-lg bg-red-500 hover:text-red-700 hover:bg-gray-100 rounded-full p-1"><span class="mx-auto">×</span></button>
                       <div x-text="image.size" class="text-xs text-center p-2"></div>
                </div>
                      
                    </div>
                </template>
            </div>
            <!-- Buttons -->
            <div class="buttons flex justify-end">
                <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Post</button>
            </div>
        </div>
        </form>
    </div>

   
</body>

</html>
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
</div>