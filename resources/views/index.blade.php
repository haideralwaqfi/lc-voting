<x-app-layout>
<div class="filters flex space-x-6">
    <div class="w-1/3">
        <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
            <option value="Category One">Category One</option>
            <option value="Category Two">Category Two</option>
            <option value="Category Three">Category Three</option>
            <option value="Category Four">Category Four</option>
        </select>
    </div>
    <div class="w-1/3">
        <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
            <option value="Filter One">Filter One</option>
            <option value="Filter Two">Filter Two</option>
            <option value="Filter Three">Filter Three</option>
            <option value="Filter Four">Filter Four</option>
        </select>
    </div>
    <div class="w-2/3 relative">
        <div class="absolute flex items-center h-full ml-2">
            <img src="search-svgrepo-com.svg" class="w-4 text-gray-400" alt="">
        </div>

        <input type="search" name="" class="w-full bg-white placeholder-gray-900 rounded-xl px-4 py-2 border-none pl-8" placeholder="Find an idea" id="">
    </div>
</div>
<div class="container flex space-y-6 my-6">
    <div class="idea-container bg-white flex rounded-xl hover:shadow-md transition duration-150 ease-in">
        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes</div>
            </div>
            <div class="mt-8">
                <button class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-300 hover:border-gray-400 transition duration-150 ease-in">vote</button>
            </div>
        </div>
        <div class="flex px-2 py-6 flex-none">
            <a href="">
                <img src="download.png" class="w-14 h-14 rounded-xl" alt="">
            </a>
        </div>
        <div class="mx-4 py-6">
            <h4 class="text-xl font-semibold">
                <a href="" class="hover:underline">A Random Title</a>
            </h4>
            <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde architecto veniam fugit eligendi quam molestiae numquam ratione magni beatae laboriosam assumenda ducimus omnis iste ab sapiente perferendis voluptatem excepturi consectetur, incidunt id. Ullam deserunt ipsam deleniti, nesciunt quis rem accusantium aut delectus mollitia quo ut necessitatibus esse repellat, culpa eos magnam adipisci assumenda vitae. Aliquam dignissimos iusto libero assumenda, voluptatem saepe. Magni tempora iure explicabo temporibus consequatur repellat, ea mollitia maiores doloremque at, provident corrupti architecto, deleniti expedita. Sit ex consequuntur ipsum, sequi odit quasi. Repellat autem itaque consectetur, corrupti minima aliquid quos, saepe quaerat, non magni voluptas harum distinctio.</div>
            <div class="flex items-center-justify-between mt-6">
                <div class="flex items-center text-xs font-semi-bold space-x-2 text-gray-400 ">
                    <div>10 Hours ago</div>
                    <div>&bull;</div>
                    <div>Category 1</div>
                    <div>&bull;</div>
                    <div>Comments 3</div>
                    <div>&bull;</div>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                        Open
                    </div>
                    <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 px-4 transition duration-150 ease-in">
                        <img class="h-7" src="three-dots-svgrepo-com.svg" alt="">
                        <ul class="absolute w-44 text-left bg-white shadow-lg rounded-xl py-3 ml-8">
                            <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                            <li><a href="#" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete</a></li>
                        </ul>
                    </button>
                </div>
        </div>

        </div>
    </div>
</div>
</x-app-layout>
