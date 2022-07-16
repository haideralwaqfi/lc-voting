<x-app-layout>
    <a href="/" class="flex itemes-center font-semibold hover:underline">
        <div class="flex items-center">
            <svg class="w-4 h-4 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
            </svg>
        </div>
        <span class="ml-2">
            All comments
        </span>18</a>

    <div class="idea-container mt-4 bg-white flex rounded-xl">
        <div class="flex flex-none px-4 py-6">
            <div>
                <a href="">
                    <img src="download.png" class="w-14 h-14 rounded-xl" alt="">
                </a>
            </div>
        </div>
        <div class="mx-4 py-6">
            <h4 class="text-xl font-semibold">
                <a href="" class="hover:underline">A Random Title</a>
            </h4>
            <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Unde architecto veniam fugit eligendi quam molestiae numquam ratione magni beatae laboriosam
                assumenda ducimus omnis iste ab sapiente perferendis voluptatem excepturi consectetur, incidunt id.
                Ullam deserunt ipsam deleniti, nesciunt quis rem accusantium aut delectus mollitia quo ut
                necessitatibus esse repellat, culpa eos magnam adipisci assumenda vitae. Aliquam dignissimos iusto
                libero assumenda, voluptatem saepe. Magni tempora iure explicabo temporibus consequatur repellat, ea
                mollitia maiores doloremque at, provident corrupti architecto, deleniti expedita. Sit ex
                consequuntur ipsum, sequi odit quasi. Repellat autem itaque consectetur, corrupti minima aliquid
                quos, saepe quaerat, non magni voluptas harum distinctio.</div>
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center text-xs font-semi-bold space-x-2 text-gray-400 ">
                    <div class="font-bold text-black">Haider Alwaqfi</div>
                    <div>&bull;</div>
                    <div>10 Hours ago</div>
                    <div>&bull;</div>
                    <div>Category 1</div>
                    <div>&bull;</div>
                    <div class="font-bold text-gray-500">Comments 3</div>

                </div>
                <div class="hidden flex items-center space-x-2">
                    <button
                        class="relative bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-full h-7 px-4 transition duration-150 ease-in">
                        <img class="h-7" src="three-dots-svgrepo-com.svg" alt="">
                        <ul class="absolute w-44 text-left bg-white shadow-lg rounded-xl py-3 ml-8 border-gray-600">
                            <li><a href="#"
                                    class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                    as Spam</a></li>
                            <li><a href="#"
                                    class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in ">Delete</a>
                            </li>
                        </ul>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons-containers flex items-center justify-between mt-6">
        <div class="flex items-center space-x-2 ml-4">
            <button type="button"
                class="lex items-center justify-center w-32 h-11 text-xs bg-blue-400 font-semibold rounded-xl border border-blue-200 text-white hover:border-blue-600 transition duration-150 ease-in px-6 py-3">
                <span class="">Reply</span>
            </button>
            <button type="button"
                class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 space-x-2">

                <span class="">Stutas</span>
                <svg class="text-gray-500 w-5" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
            </button>
        </div>
        <div class="flex items-center space-x-2">
            <div class="bg-white h-11 font-semibold text-center rounded-xl px-3 ">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                class="w-32 h-11 uppercase text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 space-x-2">
                <span class="">vote</span>
            </button>
        </div>

    </div>
    <div class="comments-container relative space-y-6 ml-22 my-8">
        <div class="is-admin comment-container mt-4 bg-white relative flex rounded-xl">
            <div class="flex flex-none px-4 py-6">
                <div class="text-center uppercase text-blue-600 font-bold text-xxs space-y-3">
                    <a href="">
                        <img src="download.png" class="w-14 h-14 rounded-xl" alt="">
                    </a>
                    <div>Admin</div>
                </div>
            </div>
            <div class="mx-4 py-6">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">Status changed to "Under Construction"</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Unde architecto veniam fugit eligendi quam molestiae numquam ratione magni beatae laboriosam
                    assumenda ducimus omnis iste ab sapiente perferendis voluptatem excepturi consectetur, incidunt id.
                    Ullam deserunt ipsam deleniti, nesciunt quis rem accusantium aut delectus mollitia quo ut
                    necessitatibus esse repellat, culpa eos magnam adipisci assumenda vitae. Aliquam dignissimos iusto
                    libero assumenda, voluptatem saepe. Magni tempora iure explicabo temporibus consequatur repellat, ea
                    mollitia maiores doloremque at, provident corrupti architecto, deleniti expedita. Sit ex
                    consequuntur ipsum, sequi odit quasi. Repellat autem itaque consectetur, corrupti minima aliquid
                    quos, saepe quaerat, non magni voluptas harum distinctio.</div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semi-bold space-x-2 text-gray-400 ">
                        <div class="font-bold text-black">Haider Alwaqfi</div>
                        <div>&bull;</div>
                        <div>10 Hours ago</div>


                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-full h-7 px-4 transition duration-150 ease-in">
                            <img class="h-7" src="three-dots-svgrepo-com.svg" alt="">
                            <ul class="absolute hidden w-44 text-left bg-white shadow-lg rounded-xl py-3 ml-8 border-gray-600">
                                <li><a href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                        as Spam</a></li>
                                <li><a href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in ">Delete</a>
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-container relative mt-4 bg-white flex rounded-xl">
            <div class="flex flex-none px-4 py-6">
                <div>
                    <a href="">
                        <img src="download.png" class="w-14 h-14 rounded-xl" alt="">
                    </a>
                </div>
            </div>
            <div class="mx-4 py-6">
                <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline">A Random Title</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Unde architecto veniam fugit eligendi quam molestiae numquam ratione magni beatae laboriosam
                    assumenda ducimus omnis iste ab sapiente perferendis voluptatem excepturi consectetur, incidunt id.
                    Ullam deserunt ipsam deleniti, nesciunt quis rem accusantium aut delectus mollitia quo ut
                    necessitatibus esse repellat, culpa eos magnam adipisci assumenda vitae. Aliquam dignissimos iusto
                    libero assumenda, voluptatem saepe. Magni tempora iure explicabo temporibus consequatur repellat, ea
                    mollitia maiores doloremque at, provident corrupti architecto, deleniti expedita. Sit ex
                    consequuntur ipsum, sequi odit quasi. Repellat autem itaque consectetur, corrupti minima aliquid
                    quos, saepe quaerat, non magni voluptas harum distinctio.</div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semi-bold space-x-2 text-gray-400 ">
                        <div class="font-bold text-black">Haider Alwaqfi</div>
                        <div>&bull;</div>
                        <div>10 Hours ago</div>


                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button
                            class="relative bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-full h-7 px-4 transition duration-150 ease-in">
                            <img class="h-7" src="three-dots-svgrepo-com.svg" alt="">
                            <ul class="absolute hidden w-44 text-left bg-white shadow-lg rounded-xl py-3 ml-8 border-gray-600">
                                <li><a href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                        as Spam</a></li>
                                <li><a href="#"
                                        class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in ">Delete</a>
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
