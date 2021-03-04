<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"  content="@yield('description')" />
    <title>ICW | @yield('title')</title>

    {{-- seo--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta property="og:title" content="Indonesian Corrosion Week -  @yield('title')" />
    <meta property="og:description" content=" Indonesian Corrossion Week (ICW) 2021 merupakan sebuah event besar, yang diselenggarakan oleh
                    Indonesian Association Corrossion Student Chapter, Institut Teknologi Sepuluh Nopember." />
    <meta property="og:image" content="https://res.cloudinary.com/dogxsl2bo/image/upload/v1614678168/ms-icon-310x310_du9pa0.png" />

    <link rel="shortcut icon" href="{{\Illuminate\Support\Facades\URL::to('favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{\Illuminate\Support\Facades\URL::to('favicon.ico')}}">


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scroll-to.js') }}" defer></script>
    <script src="{{ asset('js/alert.js') }}" defer></script>
</head>
<body onload="reScroll(this)">
    <x-alerts/>

    <header id="header">
        @include('pages._navbar', $events)
    </header>

    <div class="antialiased bg-bgsection-0">
        {{ $slot }}
    </div>

        @include('pages.footer._footer')
    </footer>


</body>
<style>
    *{
        font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
    }
</style>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>
