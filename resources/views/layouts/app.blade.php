<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The page supports both dark and light color schemes,
         and the page author prefers / default is light. -->
    <meta name="color-scheme" content="light dark">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('img/candle.svg') }}">

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>

    <!-- Required DarkMode JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.1/dist/js/darkmode.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <style src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></style>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.1/dist/css/bootstrap-nightshade.min.css"
          rel="stylesheet">

    {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">--}}

    @yield('scripts-top')
    @yield('styles')

</head>
<body>
<div id="sandalwood-app">

    @include('_partials._primary_nav')

</div>

@include('_partials._alerts')
<alerts-section></alerts-section>
<main class="py-4">
    @yield('content')
</main>
<div class="fixed-bottom">
    <footer class="text-center text-lg-start bg-dark text-muted">
        <div class="container text-center p-4">
            <span class="text-muted">&copy; {{date('Y')}} Mike Bros.</span>
        </div>
    </footer>
</div>
@yield('scripts-bottom')
</body>
</html>
