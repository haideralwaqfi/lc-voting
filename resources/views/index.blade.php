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
</x-app-layout>
