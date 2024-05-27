<header class="grid grid-cols-3 items-center justify-between py-4">
    <h1 class="text-xl font-normal tracking-normal">
        <span class="font-semibold">Real</span>Estate
    </h1>

    <nav class="flex items-center justify-center gap-20">
        <a href="" class="font-medium text-pallette-black transition duration-300">Buy</a>
        <a href=""
            class="font-medium text-pallette-gray-500 transition duration-300 hover:text-pallette-blue-500">Sell</a>
        <a href=""
            class="font-medium text-pallette-gray-500 transition duration-300 hover:text-pallette-blue-500">Rent</a>
    </nav>

    <aside class="flex items-center justify-end gap-12">
        <button
            class="flex items-center justify-between rounded-full bg-pallette-blue-600 px-5 py-2 font-semibold text-white">
            <i class="fa-solid fa-plus mr-6"></i>
            <p>Add Listing</p>
        </button>


        <button class="flex items-center">
            <i class="fa-solid fa-angle-down mr-4 text-sm text-pallette-gray-300"></i>
            <img src="{{ asset('/images/avatar.avif') }}" alt="User's image"
                class="h-8 w-8 rounded-full object-cover grayscale">
        </button>

    </aside>
</header>
