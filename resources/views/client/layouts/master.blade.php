<!DOCTYPE html>
<html lang="en">

@if (!request()->is('auth/*'))
@endif
@include('client.layouts.partials.header')


<body>

    @if (!request()->is('auth/*'))
        @include('client.layouts.partials.nav')
    @endif

    <main style="">
        @yield('front-content')
    </main>

    @if (!request()->is('auth/*'))
        @include('client.layouts.partials.footer')
    @endif
</body>


</html>
