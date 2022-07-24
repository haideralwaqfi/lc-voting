<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles />

    <!-- Scripts -->

</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
        <a href="/"><img src="{{ asset('logo.svg') }}" alt="logo"></a>
        <div x-data="{ isOpen: false }" class="flex items-center  mt-4 md:mt-0 space-x-2 ">
            @if (Route::has('login'))
                <button @click="isOpen = !isOpen" class="relative transition duration-150 ease-in px-4 py-3">
                    <a href="#" class="absolute">
                        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                            class="w-10 h-10 rounded-full">
                    </a>
                    <div class="px-6 py-4">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <ul x-cloak x-show.origin.top.left="isOpen" x-transition @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-14 right-0">
                                    <a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                                </ul>
                            </form>
                    </button>
                @else
                    <button @click="isOpen = !isOpen" class="relative transition duration-150 ease-in px-4 py-3">
                        <ul x-cloak x-show.origin.top.left="isOpen" x-transition @click.away="isOpen = false"
                            @keydown.escape.window="isOpen = false"
                            class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 md:top-9 right-0">
                            <a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"
                                href="{{ route('login') }}">Log in</a>
                            @if (Route::has('register'))
                                <a class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3"
                                    href="{{ route('register') }}">Register</a>

                        </ul>
                @endif
                </button>
            @endauth

        </div>

        @endif




        </div>
    </header>

    <main class="container mx-auto max-w-custom flex flex-col md:flex-row">
        <div class="w-70 mx-auto md:mx-0 md:mr-5">
            <div class="bg-white flex flex-col items-center md:sticky md:top-8 border-2 border-blue rounded-xl mt-16"
                style="
                          border-image-source: linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            border-image-slice: 1;
                            background-image: linear-gradient(to bottom, #ffffff, #ffffff), linear-gradient(to bottom, rgba(50, 138, 241, 0.22), rgba(99, 123, 255, 0));
                            background-origin: border-box;
                            background-clip: content-box, border-box;
                    ">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="text-xs mt-4">
                        @auth
                            Let us know what you would like and we'll take a look over!
                        @else
                            Please Log in to create an idea.
                        @endauth

                    </p>
                </div>
                @auth
                    <livewire:create-idea/>
                @else
                    <div class="space-x-4 px-4 py-6 flex flex-row">
                        <a class="flex items-center bg-blue-200 transition duration-150 ease-in border border-blue-200  hover:border-blue-400 px-3 py-2 rounded-xl "
                            href="/login">Login</a>
                        <a class="flex items-center bg-gray-200 transition duration-150 ease-in border border-gray-200  hover:border-gray-400 px-3 py-2 rounded-xl "
                            href="/register">Register</a>
                    </div>

                @endauth

            </div>
        </div>
        <div class="w-full px-2 md:px-0 md:w-175">
<livewire:status-filter />

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
    <livewire:scripts />
</body>

</html>
