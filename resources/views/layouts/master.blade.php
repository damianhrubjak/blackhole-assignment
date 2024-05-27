<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>

    <div class="page-wrapper relative flex gap-10">
        <main class="w-[calc(100%-29.5rem)]">
            @include('includes.header')

            @yield('main')
        </main>
        @include('includes.map')
    </div>

    <section data-scripts>
        @yield('scripts')
    </section>

</body>

</html>
