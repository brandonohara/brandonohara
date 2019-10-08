<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Brandon O'Hara | Montana Web Developer</title>
    <meta name="description" content="Montana based web developer specializing in creating web applications in Laravel, VueJS and Angular. Currently overseeing engineering at Trak Software as Chief Technology Officer, building a web application to simplify and streamline communication in sponsorship activation and management.">
    <meta name="keywords" content="Laravel, Developer, Montana, Web Development, PHP">
    <link rel="icon" type="image/png" href="/favicon.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="css/animate.css" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://file.myfontastic.com/pYeegn2higGJFinpKiriRf/icons.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('flash::message')

        @include('navigation.topnavigation')

        @yield('content')

        @include('navigation.footer')
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
