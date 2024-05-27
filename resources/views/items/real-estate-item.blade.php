@php
    $fmt = new NumberFormatter('sk_SK', NumberFormatter::CURRENCY);
    $fmtArea = new NumberFormatter('sk_SK', NumberFormatter::DECIMAL);
@endphp
<article
    class="mx-auto w-full max-w-sm rounded-xl border border-pallette-gray-200 p-2 shadow-transparent transition duration-300 hover:border-transparent hover:shadow-xl sm:max-w-full">
    <img src="{{ $real_estate['image'] }}" alt="" class="h-64 w-full rounded-lg object-cover">
    <div class="p-4">
        <h3 class="text-xl font-semibold">{{ $fmt->formatCurrency($real_estate['price'], 'EUR') }}</h3>

        <p class="mb-4 font-medium text-pallette-gray-500">{{ $real_estate['address'] }}</p>

        <div class="flex flex-wrap gap-6">
            @include('includes.icon-group', [
                'icon' => '<i class="fa-solid fa-bath"></i>',
                'amount' => $real_estate['bathrooms'],
            ])
            @include('includes.icon-group', [
                'icon' => '<i class="fa-solid fa-bed"></i>',
                'amount' => $real_estate['bedrooms'],
            ])
            @include('includes.icon-group', [
                'icon' => '<i class="fa-regular fa-square"></i>',
                'amount' => $fmtArea->format($real_estate['area']) . ' m²',
            ])
        </div>
    </div>
</article>
