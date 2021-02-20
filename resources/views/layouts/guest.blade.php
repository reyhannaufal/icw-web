<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scroll-to.js') }}" defer></script>
    <script src="{{ asset('js/change-title.js') }}"></script>
    <script src="{{ asset('js/alert.js') }}" defer></script>
</head>
<body onload="reScroll(this)">
    <x-alerts/>

    <header>
        @include('pages._navbar', $events)
    </header>

    <div class="antialiased bg-bgsection-0">
        {{ $slot }}
    </div>

    <footer class="bg-bgnav-0">
        @include('pages.footer._footer')
    </footer>
</body>
<style>
    *{
        font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
    }
</style>
{{--<script src="https://unpkg.com/turbolinks"></script>--}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>
