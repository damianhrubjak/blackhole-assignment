@extends('layouts.master')

@section('title', 'Home')

@section('main')

    <section class="page-wrapper pb-8">

        <div class="mb-7 mt-1 h-0.5 w-full rounded-full bg-pallette-gray-200"></div>

        <div class="w- grid grid-cols-[minmax(0,0.75fr),minmax(0,2fr)] gap-8">
            @include('includes.filter-section')

            <div class="w-full">
                <div class="mb-10 flex items-baseline justify-between">

                    <h3 class="text-lg font-semibold">
                        Showing {{ count($real_estates) }} search results
                    </h3>

                    <div class="rounded-full border border-pallette-gray-200 px-4 py-2">
                        <span class="font-medium text-pallette-gray-700">Sort by:</span>
                        <select name="" id="" class="bg-transparent font-semibold">
                            <option value="newest">Newest</option>
                            <option value="oldest">Oldest</option>
                            <option value="most_expensive">Most expensive</option>
                            <option value="least_expensive">Least expensive</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    @foreach ($real_estates as $real_estate)
                        @include('items.real-estate-item', [compact('real_estate')])
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
