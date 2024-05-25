<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>

    @include('includes.header')

    <main>
        @yield('main')
    </main>

    <section data-scripts>
        @yield('scripts')
    </section>

</body>

</html>
