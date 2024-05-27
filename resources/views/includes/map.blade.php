<aside class="sticky right-0 top-0 h-screen w-[27rem] self-stretch py-4">
    <div class="relative h-full w-full">
        <div class="absolute left-0 top-0 w-full p-4">
            <form class="flex w-full items-center rounded-full bg-white p-4 shadow-xl">
                <i class="fa-solid fa-magnifying-glass ml-2 mr-3 text-pallette-gray-300"></i>
                <input type="text" class="grow px-2 font-medium" value="Forest Hill, San Francisco, CA">
                <button type="reset"
                    class="self-stretch px-2 text-sm text-pallette-gray-300 transition duration-300 hover:text-pallette-black">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </form>
        </div>
        <img src="{{ asset('/images/map.png') }}" alt="User's image" class="h-full rounded-lg object-cover">
        <div class="absolute bottom-0 left-0 w-full px-2 py-4">
            <div class="flex h-11 w-full items-stretch justify-stretch gap-2">
                <button
                    class="h-full w-32 rounded-lg bg-pallette-blue-600 px-6 py-1 font-semibold text-white">Map</button>
                <button
                    class="h-full w-32 rounded-lg bg-white px-6 py-1 font-semibold text-pallette-blue-600">Sattelite</button>
                <button class="h-full w-11 rounded-lg bg-white text-pallette-blue-600"><i
                        class="fa-solid fa-location-crosshairs"></i></button>
                <div class="flex flex-grow items-center justify-evenly rounded-lg bg-white">
                    <button
                        class="flex h-full w-11 items-center justify-center text-sm text-pallette-gray-500 transition duration-300 hover:text-pallette-blue-500">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                    <div class="h-5 w-0.5 rounded-lg bg-pallette-gray-200"></div>
                    <button
                        class="flex h-full w-11 items-center justify-center text-sm text-pallette-gray-500 transition duration-300 hover:text-pallette-blue-500">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</aside>
