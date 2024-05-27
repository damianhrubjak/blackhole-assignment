<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>

    <div class="page-wrapper relative flex gap-10">
        <main class="w-full xl:w-[calc(100%-22.5rem)] 2xl:w-[calc(100%-29.5rem)]">
            @include('includes.header')

            @yield('main')
        </main>
        @include('includes.map')
    </div>

    <section data-scripts>
        @vite('resources/js/app.js')

        @yield('scripts')
    </section>

</body>

</html>
