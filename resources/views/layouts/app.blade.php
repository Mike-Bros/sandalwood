<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
{{--<link rel="icon" type="image/png" href="{{ asset('img/blue-feather-trans.png') }}">--}}

<!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <style src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></style>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

    @yield('scripts-top')
    @yield('styles')

</head>
<body>
<div id="sandalwood-app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container-fluid">

            <?php if(App::environment(['local', 'development'])) : ?>
            <responsive-indicator></responsive-indicator>
            <?php endif; ?>

            {{--<a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/img/roofmaxx_logo.png') }}" alt="Image" height="42"/></a>--}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->

                @include('_partials._primary_nav')

            </div>
        </div>
    </nav>

    {{--@can('superadmin')
        <nav class="navbar navbar-expand-md navbar-dark navbar-admin">
            <div class="container-fluid">
                <a class="navbar-brand pl-1" href="{{ url('/admin') }}">
                    Admin
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                    <!-- Left Side Of Navbar -->

                    @include('_partials._admin_nav')
                    @include('_partials._admin_nav_right')

                </div>
            </div>
        </nav>
    @endcan--}}

    @include('_partials._alerts')
    <alerts-section></alerts-section>
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container text-center">
            <span class="text-muted">&copy; {{date('Y')}} Mike Bros.</span>
        </div>
    </footer>

</div>
@yield('scripts-bottom')
</body>
</html>
