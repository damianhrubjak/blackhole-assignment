@php
    $fmt = new NumberFormatter('sk_SK', NumberFormatter::CURRENCY);
    $fmt->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, 0);
    $fmtArea = new NumberFormatter('sk_SK', NumberFormatter::DECIMAL);
    $fmtArea->setAttribute(NumberFormatter::MAX_FRACTION_DIGITS, 0);
@endphp
<aside class="w-full">
    <form>
        <div class="flex items-baseline justify-between">
            <h2 class="text-xl font-semibold">Filters</h2>

            <button type="reset" class="flex items-center">
                <p class="border-b border-gray-300 leading-none text-pallette-gray-500">
                    Reset filters
                </p>
                <span
                    class="ml-3 flex h-5 w-5 items-center justify-center rounded-full bg-gray-200 align-middle text-xs font-semibold text-pallette-blue-500">5</span>
            </button>
        </div>

        <article class="mt-4">
            <h4 class="filter-heading">Property Type</h4>

            <div class="mt-3 grid grid-cols-1 gap-2">
                @include('includes.checkbox', ['name' => 'house', 'label' => 'House'])
                @include('includes.checkbox', ['name' => 'apartment', 'label' => 'Apartment'])
                @include('includes.checkbox', ['name' => 'room', 'label' => 'Room'])
                @include('includes.checkbox', ['name' => 'townhall', 'label' => 'Townhall'])
                @include('includes.checkbox', ['name' => 'parking', 'label' => 'Parking'])
            </div>
        </article>
        <article class="mt-4">
            <h4 class="filter-heading">Style of Home</h4>

            <div class="mt-3 grid grid-cols-1 gap-2">
                @include('includes.checkbox', ['name' => 'a-frame', 'label' => 'A-frame'])
                @include('includes.checkbox', ['name' => 'bungalow', 'label' => 'Bungalow'])
                @include('includes.checkbox', ['name' => 'cottage', 'label' => 'Cottage'])
                @include('includes.checkbox', ['name' => 'dome', 'label' => 'Dome'])
                @include('includes.checkbox', ['name' => 'spanish', 'label' => 'Spanish'])
            </div>
        </article>
        <article class="mt-4 grid grid-cols-2 gap-4">
            <div class="w-full">
                <label class="filter-heading" for="min-price-select">Min. price</label>
                <fieldset class="filter-select-control">
                    <select name="min-price" id="min-price-select">
                        @for ($i = 1; $i <= 20; $i++)
                            <option value="{{ $i * 100000 }}">{{ $fmt->formatCurrency($i * 100000, 'EUR') }}</option>
                        @endfor
                    </select>
                </fieldset>
            </div>
            <div class="w-full">
                <label class="filter-heading" for="max-price-select">Max. price</label>
                <fieldset class="filter-select-control">
                    <select name="max-price" id="max-price-select">
                        @for ($i = 1; $i <= 20; $i++)
                            <option value="{{ $i * 100000 }}">{{ $fmt->formatCurrency($i * 100000, 'EUR') }}</option>
                        @endfor
                    </select>
                </fieldset>
            </div>
        </article>
        <article class="mt-4 grid grid-cols-2 gap-4">
            <div class="w-full">
                <label class="filter-heading" for="bedroom-select">Bedroom</label>
                <fieldset class="filter-select-control">
                    <select name="bedroom" id="bedroom-select">
                        @for ($i = 0; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i === 0 ? 'Any' : $i }}</option>
                        @endfor
                    </select>
                </fieldset>
            </div>
            <div class="w-full">
                <label class="filter-heading" for="bathroom-select">Bathroom</label>
                <fieldset class="filter-select-control">
                    <select name="bathroom" id="bathroom-select">
                        @for ($i = 0; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i === 0 ? 'Any' : $i }}</option>
                        @endfor
                    </select>
                </fieldset>
            </div>
        </article>
        <article class="mt-4 grid grid-cols-2 gap-4">
            <div class="w-full">
                <label class="filter-heading" for="area-min-select">Size (Min)</label>
                <fieldset class="filter-select-control">
                    <select name="area-min" id="area-min-select">
                        @for ($i = 1; $i <= 20; $i++)
                            <option value="{{ $i * 500 }}">{{ $fmtArea->format($i * 500) }} m²</option>
                        @endfor
                    </select>
                </fieldset>
            </div>
            <div class="w-full">
                <label class="filter-heading" for="area-max-select">Size (Max)</label>
                <fieldset class="filter-select-control">
                    <select name="area-max" id="area-max-select">
                        @for ($i = 1; $i <= 20; $i++)
                            <option value="{{ $i * 500 }}">{{ $fmtArea->format($i * 500) }} m²</option>
                        @endfor
                    </select>
                </fieldset>
            </div>
        </article>
        <article class="mt-4">
            <h4 class="filter-heading">Accessibility Features</h4>

            <div class="mt-3 grid grid-cols-1 gap-2">
                @include('includes.checkbox', [
                    'name' => 'extra-wide-doorways',
                    'label' => 'Extra-wide doorways',
                ])
                @include('includes.checkbox', ['name' => 'ramps', 'label' => 'Ramps'])
                @include('includes.checkbox', ['name' => 'grab-bars', 'label' => 'Grab bars'])
                @include('includes.checkbox', [
                    'name' => 'lower-counter-heights',
                    'label' => 'Lower counter heights',
                ])
                @include('includes.checkbox', ['name' => 'spanissh', 'label' => 'Spanish'])
            </div>
        </article>
    </form>
</aside>
