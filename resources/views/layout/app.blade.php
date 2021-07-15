<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Comics')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <div id="app">

        <header id="site_header">
            @include('partials.header')
        </header>

        <main id="site_main">
            @yield('content')
        </main>

        <footer id="site_footer"></footer>
        @include('partials.footer')

    </div>

    <!-- VUEJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <!-- JS -->
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>