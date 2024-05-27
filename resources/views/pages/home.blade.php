@extends('layouts.master')

@section('title', 'Home')

@section('main')

    <section class="pb-8">

        <div class="mb-7 mt-1 h-0.5 w-full rounded-full bg-pallette-gray-200"></div>

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-[0.75fr,minmax(0,2fr)]">
            @include('includes.filter-section')

            <div class="w-full">
                <div class="mb-10 flex flex-row flex-wrap items-baseline gap-4">

                    <h3 class="text-lg font-bold">
                        Showing {{ count($real_estates) }} search results
                    </h3>

                    <div class="ml-auto mr-0 rounded-full border border-pallette-gray-200 px-4 py-2">
                        <span class="font-medium text-pallette-gray-700">Sort by:</span>
                        <select name="" id="" class="bg-transparent font-bold">
                            <option value="newest">Newest</option>
                            <option value="oldest">Oldest</option>
                            <option value="most_expensive">Most expensive</option>
                            <option value="least_expensive">Least expensive</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    @foreach ($real_estates as $real_estate)
                        @include('items.real-estate-item', [compact('real_estate')])
                    @endforeach
                </div>
            </div>
        </div>

        <button class="fixed bottom-4 left-4 z-40 h-12 w-12 rounded-lg bg-pallette-blue-500 text-white lg:hidden xl:hidden"
            id="filter-button">
            <i class="fa-solid fa-filter pointer-events-none"></i>
        </button>

        <button class="fixed bottom-4 right-4 z-40 h-12 w-12 rounded-lg bg-pallette-blue-500 text-white xl:hidden"
            id="map-button">
            <i class="fa-solid fa-map pointer-events-none"></i>
        </button>

    </section>

@endsection
