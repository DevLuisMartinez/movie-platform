<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie Platform</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-slate-900">

        <nav class="flex items-center justify-between flex-wrap bg-slate-800 p-6 text-lg text-white" x-data="{ open:false }">
            <div class="flex items-center flex-shrink-0 text-white mr-10">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                <span class="font-semibold text-xl tracking-tight">Movie Platform</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-white border-teal-400 hover:text-white hover:border-white" x-data @click="open=!open">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>

            <div class="desktop-menu w-full flex-grow lg:flex lg:items-center lg:w-auto hidden">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-cyan-300 mr-4 hover:bg-sky-500/10 rounded-md cursor-pointer px-3 py-2">
                    Home
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-cyan-300 mr-4 hover:bg-sky-500/10 rounded-md cursor-pointer px-3 py-2">
                    Series
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-cyan-300 mr-4 hover:bg-sky-500/10 rounded-md cursor-pointer px-3 py-2">
                    New Series
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-cyan-300 mr-4 hover:bg-sky-500/10 rounded-md cursor-pointer px-3 py-2">
                    Movies
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer px-3 py-2">
                    New Movies
                    </a>
                </div>
            </div>

            <div class="mobile-menu w-full block flex-grow lg:flex lg:items-center lg:w-auto" x-show="open">
                <div class="text-sm lg:flex-grow">
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Home
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Series
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    New Series
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Movies
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white">
                    New Movies
                    </a>
                </div>
            </div>
        </nav>


        <div class="grid grid-cols-6 text-lg text-white">
            <div class="sidebar col-span-1 bg-gray-900 px-4">
                <div class="pt-5">
                    <h3>Genres</h3>
                    <div class="my-5 text-slate-500">
                        <ul class="px-5">
                            <li class="py-2 px-5 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full">Action movies</a>
                            </li>
                            <li class="py-2 px-5 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full">Horror</a>
                            </li>
                            <li class="py-2 px-5 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full">Science fiction</a>
                            </li>
                            <li class="py-2 px-5 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full">Animation</a>
                            </li>
                            <li class="py-2 px-5 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full">Drama</a>
                            </li>
                            <li class="py-2 px-5 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full">Documentary</a>
                            </li>
                            <li class="py-2 px-5 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full">Adventure</a>
                            </li>
                            <li class="py-2 px-5 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full">Comedy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="pt-5">
                    <h3>Release Year</h3>
                    <div class="my-5 text-slate-500">
                        <ul class="grid grid-cols-2 gap-4 px-5">
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">2023</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">2022</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">2021</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">2020</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">2019</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">2018</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">2017</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">2016</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="pt-5">
                    <h3>Movies by letter</h3>
                    <div class="my-5 text-slate-500">
                        <ul class="grid grid-cols-4 gap-4 px-5 text-center">
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">A</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">B</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">C</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">D</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">E</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">F</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">G</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">H</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">I</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">J</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">K</a>
                            </li>
                            <li class="py-2 hover:text-cyan-300 hover:bg-sky-500/10 rounded-md cursor-pointer">
                                <a href="#" class="block w-full text-center">L</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="movie-container col-span-5 bg-gray-950 px-4 py-2">
                <div class="p-5">
                    <h2>New Movies<h2>
                    <div class="grid grid-cols-6 gap-6 py-5">
                        <div class="col-span-1 hover:text-cyan-300">
                            <a href="#">
                                <div class="">
                                    <img class="movie-image rounded-md" src="{{ url('/images/no-image.jpeg') }}" alt="no-image">
                                </div>
                                <div class="text-center p-3 bg-sky-500/10 mt-3 rounded-md">
                                    <p class="text-sm">Oppenheimer</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-1 hover:text-cyan-300">
                            <a href="#">
                                <div class="">
                                    <img class="movie-image rounded-md" src="{{ url('/images/no-image.jpeg') }}" alt="no-image">
                                </div>
                                <div class="text-center p-3 bg-sky-500/10 mt-3 rounded-md">
                                    <p class="text-sm">Oppenheimer</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-1 hover:text-cyan-300">
                            <a href="#">
                                <div class="">
                                    <img class="movie-image rounded-md" src="{{ url('/images/no-image.jpeg') }}" alt="no-image">
                                </div>
                                <div class="text-center p-3 bg-sky-500/10 mt-3 rounded-md hover:bg-sky-500/10">
                                    <p class="text-sm">Oppenheimer</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-1 hover:text-cyan-300">
                            <a href="#">
                                <div class="">
                                    <img class="movie-image rounded-md" src="{{ url('/images/no-image.jpeg') }}" alt="no-image">
                                </div>
                                <div class="text-center p-3 bg-sky-500/10 mt-3 rounded-md">
                                    <p class="text-sm">Oppenheimer</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-1 hover:text-cyan-300">
                            <a href="#">
                                <div class="">
                                    <img class="movie-image rounded-md" src="{{ url('/images/no-image.jpeg') }}" alt="no-image">
                                </div>
                                <div class="text-center p-3 bg-sky-500/10 mt-3 rounded-md">
                                    <p class="text-sm">Oppenheimer</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-1 hover:text-cyan-300">
                            <a href="#">
                                <div class="">
                                    <img class="movie-image rounded-md" src="{{ url('/images/no-image.jpeg') }}" alt="no-image">
                                </div>
                                <div class="text-center p-3 bg-sky-500/10 mt-3 rounded-md">
                                    <p class="text-sm">Oppenheimer</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-1 hover:text-cyan-300">
                            <a href="#">
                                <div class="">
                                    <img class="movie-image rounded-md" src="{{ url('/images/no-image.jpeg') }}" alt="no-image">
                                </div>
                                <div class="text-center p-3 bg-sky-500/10 mt-3 rounded-md">
                                    <p class="text-sm">Oppenheimer</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-1 hover:text-cyan-300">
                            <a href="#">
                                <div class="">
                                    <img class="movie-image rounded-md" src="{{ url('/images/no-image.jpeg') }}" alt="no-image">
                                </div>
                                <div class="text-center p-3 bg-sky-500/10 mt-3 rounded-md">
                                    <p class="text-sm">Oppenheimer</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <div>
        
          @vite('resources/js/app.js')
    </body>
</html>
