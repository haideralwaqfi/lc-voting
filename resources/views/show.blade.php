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
        </span>18
    </a>

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
                        <ul x-cloak x-show="isOpen" x-transition.origin.top.left.duration.500ms
                            @click.away="isOpen=false" @keydown.escape.window="isOpen=false"
                            class="absolute w-44 text-left bg-white shadow-lg rounded-xl py-3 ml-8 border-gray-600">
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
            <div x-data="{ isOpen: false }" class="relative">
                <button @click="isOpen = !isOpen" type="button"
                    class="lex items-center justify-center w-32 h-11 text-xs bg-blue-400 font-semibold rounded-xl border border-blue-200 text-white hover:border-blue-600 transition duration-150 ease-in px-6 py-3">
                    <span class="">Reply</span>
                </button>
                <div x-cloak x-show="isOpen" x-transition.origin.top.left.duration.500ms @click.away="isOpen=false"
                    @keydown.escape.window="isOpen=false"
                    class="absolute z-10 w-104 text-left font-semi-bold bg-white shadow-dialog rounded-xl mt-2 shadow-lg">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Enter Your Comment"></textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="lex items-center justify-center w-1/2 h-11 text-xs bg-blue-400 font-semibold rounded-xl border border-blue-200 text-white hover:border-blue-600 transition duration-150 ease-in px-6 py-3">
                                Post comment
                            </button>
                            <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-500 w-5 transform -rotate-45" xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div x-data="{ isOpen: false }" class="relative w-96">
                <button type="button" @click="isOpen = !isOpen"
                    class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 space-x-2">
                    <span class="">Stutas</span>
                    <svg class="text-gray-500 w-5" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-cloak x-show="isOpen" x-transition.origin.top.left.duration.500ms @click.away="isOpen=false"
                    @keydown.escape.window="isOpen=false"
                    class="absolute z-20 w-full text-left font-semi-bold bg-white shadow-dialog rounded-xl mt-2 shadow-lg">
                    <form action="" class="space-y-4 px-4 py-4">

                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked class="bg-gray-200 text-green-500 border-none"
                                        name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-gray-500 border-none"
                                        name="radio-direct" value="1">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-yellow-500 border-none"
                                        name="radio-direct" value="1">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-blue-500 border-none"
                                        name="radio-direct" value="1">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="bg-gray-200 text-red-500 border-none"
                                        name="radio-direct" value="1">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>
                        <textarea class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2"
                            name="update_comment" id="update_comment" cols="30" rows="4"
                            placeholder="Add an Update Comment (Optional)"></textarea>
                        <div class="flex item-center justify-between space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                                <svg class="text-gray-500 w-5 transform -rotate-45" xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                                <span class="">Attach</span>
                            </button>
                            <button type="submit"
                                class="lex items-center justify-center w-1/2 h-11 text-xs bg-blue-400 font-semibold rounded-xl border border-blue-200 text-white hover:border-blue-600 transition duration-150 ease-in px-6 py-3">
                                <span class="">Update</span></button>

                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input class="rounded-md bg-gray-200" type="checkbox" name="notify_voters">
                                <span class="ml-2 text-sm">Notify All Voters!</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>

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
                    <div x-data="{ isOpen: false }" class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 border border-gray-300 rounded-full h-7 px-4 transition duration-150 ease-in">
                            <img class="h-7" src="three-dots-svgrepo-com.svg" alt="">
                            <ul x-cloak x-show="isOpen" x-transition.origin.top.left.duration.500ms
                                @click.away="isOpen=false" @keydown.escape.window="isOpen=false"
                                class="absolute w-44 text-left bg-white shadow-lg rounded-xl py-3 ml-8 border-gray-600 z-10">
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
                            <ul
                                class="absolute hidden w-44 text-left bg-white shadow-lg rounded-xl py-3 ml-8 border-gray-600">
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
