<header class="flex flex-wrap items-center justify-between py-4">
    <h1 class="text-xl font-normal tracking-normal md:w-1/3">
        <span class="font-bold">Real</span>Estate
    </h1>

    <button id="hamburger-btn" class="flex h-8 w-8 items-center justify-center md:hidden">
        <i class="fa-solid fa-bars"></i>
    </button>

    <div id="menu-content" style="--menu-height:0px"
        class="max-h-[var(--menu-height)] w-full overflow-hidden transition-all duration-500 md:max-h-full md:w-2/3">
        <div class="get-height flex w-full flex-col justify-between pt-8 md:flex-row md:pt-0">
            <nav
                class="flex w-full flex-col items-end justify-center gap-4 md:w-1/2 md:flex-row md:items-center md:gap-10 lg:gap-20">
                <a href="" class="font-semibold text-pallette-black transition duration-300">Buy</a>
                <a href=""
                    class="font-semibold text-pallette-gray-500 transition duration-300 hover:text-pallette-blue-500">Sell</a>
                <a href=""
                    class="font-semibold text-pallette-gray-500 transition duration-300 hover:text-pallette-blue-500">Rent</a>
            </nav>

            <aside class="mt-6 flex w-full items-center justify-end gap-4 md:mt-0 md:w-1/2 md:gap-6 lg:gap-12">
                <button
                    class="flex items-center justify-between rounded-full bg-pallette-blue-600 px-5 py-2 font-bold text-white">
                    <i class="fa-solid fa-plus mr-3 lg:mr-6"></i>
                    <p>Add Listing</p>
                </button>


                <button class="flex items-center">
                    <i class="fa-solid fa-angle-down mr-4 text-sm text-pallette-gray-300"></i>
                    <img src="{{ asset('/images/avatar.avif') }}" alt="User's image"
                        class="h-8 w-8 rounded-full object-cover grayscale">
                </button>

            </aside>
        </div>
    </div>
</header>
