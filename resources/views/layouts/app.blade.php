<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracast Voteing</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gary-background antialiased">

        <header class="flex items-center justify-between  px-8 py-4">
            <a href=""><img src="{{ asset('logo.svg') }}" alt=""></a>
        <div class="flex items-center">

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
                        <img src="avatar-svgrepo-com.svg" alt="" class="w-10 h-10 rounded-full">
                    </a>
                </div>
        </div>
        </header>
<main class="container mx-auto max-w-custom flex">
    <div class="w-70 mr-5" >
        Ad idea goes here    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis tempora facere rerum laboriosam aut nesciunt laborum recusandae deserunt voluptates, tenetur nihil officia eum nam dolore corrupti. Iusto eaque perspiciatis, tenetur laborum tempore ex provident aut! Odit corporis illum porro quas, consectetur ducimus enim nisi eum. Ullam doloremque cupiditate cum distinctio impedit. Magni quisquam quia soluta aut at corrupti doloremque harum. Harum odio commodi esse ex, cupiditate reprehenderit quo culpa voluptas provident repellendus dolorem fugiat cum vel laboriosam amet earum perspiciatis, saepe quod beatae sit ab qui ipsa. Rem qui saepe deserunt nam deleniti vel numquam ipsum animi repellendus, quos provident?

    </div>
    <div class="w-175">
        <nav class="flex items-center jusstify-between text-sm">
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
    </body>
</html>
