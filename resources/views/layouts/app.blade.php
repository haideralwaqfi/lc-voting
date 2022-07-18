<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracast Voteing</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
<livewire:styles/>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans bg-gary-background antialiased">

        <header class="flex flex-col md:flex-row items-center justify-between  px-8 py-4">
            <a href=""><img src="{{ asset('logo.svg') }}" alt=""></a>
        <div class="flex items-center mt-2 md:mt-0">

                @if (Route::has('login'))
                    <div class="top-0 right-0 px-6 py-4">
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div>
                    <a href="">
                        <img src="{{ asset('avatar-svgrepo-com.svg') }}" alt="" class="w-10 h-10 rounded-full">
                    </a>
                </div>
        </div>
        </header>
<main class="container mx-auto max-w-custom flex flex-col md:flex-row">
    <div class="w-70 mr-5 mx-auto md:mx-0 md:mr-5" >
        <div class="border-2 border-blue-100 rounded-xl mt-16 bg-white md:sticky  top-8">
            <div class="text-center px-6 py-2 pt-6">
                <h3 class="font-semi-bold">Add new Idea</h3>
                <p class="text-xs mt-4 text-center">Let us new what you wuld like to and we will take a look</p>
            </div>
            <form class="space-y-4 px-4 py-6" action="#" method="POST">
                <input id="idea" type="text" placeholder="Enter Your Idea" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2 border-none">
                <div class="w">
                    <select name="category_add" id="category_add" class="bg-gray-100 text-sm w-full border-none rounded-xl px-4 py-2">
                        <option value="Category One">Category One</option>
                        <option value="Category Two">Category Two</option>
                        <option value="Category Three">Category Three</option>
                        <option value="Category Four">Category Four</option>
                    </select>
                </div>
                <div>
                    <textarea name="idea" id="idea" cols="30" rows="4" class="bg-gray-100 text-sm rounded-xl border-none w-full placeholder-gray-900 " placeholder="Describe Your Idea"></textarea>
                </div>
                <div class="flex item-center justify-between space-x-3">
                    <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                        <svg class="text-gray-500 w-5 transform -rotate-45" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                          </svg>
                        <span class="">Attach</span>
                    </button>
                        <button type="submit" class="lex items-center justify-center w-1/2 h-11 text-xs bg-blue-400 font-semibold rounded-xl border border-blue-200 text-white hover:border-blue-600 transition duration-150 ease-in px-6 py-3">
                            <span class="">Submit</span></button>

                </div>


            </form>
        </div>
    </div>
    <div class="md:w-175 px-2 md:px-0 w-full">
        <nav class="flex items-center jusstify-between text-sm hidden md:flex">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li ><a class="border-b-4 pb-3 border-blue-500" href="">All Ideas(87)</a></li>
                <li ><a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500" href="">Considering (6)</a></li>
                <li ><a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500" href="">In Progress (1)</a></li>
            </ul>
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">

                <li ><a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500" href="">Implamented (10)</a></li>
                <li ><a class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500" href="">Closed (55)</a></li>
            </ul>
        </nav>
        <div class="mt-8">
            {{$slot}}
        </div>
    </div>
</main>
<livewire:scripts/>
    </body>
</html>
