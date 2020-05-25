<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @isset($title) {{ $title }} | Brandon O'Hara @else Brandon O'Hara | Montana Web Developer @endisset </title>
    @isset($description)
        <meta name="description" content="{{ $description }}">
    @else
        <meta name="description" content="Montana based web developer specializing in creating web applications in Laravel, VueJS and Angular. Currently overseeing engineering at Trak Software as Chief Technology Officer, building a web application to simplify and streamline communication in sponsorship activation and management.">
    @endisset
    <meta name="keywords" content="Laravel, Developer, Montana, Web Development, PHP">
    <link rel="icon" type="image/png" href="/favicon.png">

    @yield('metatags')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="layout-{{ isset($navigation) ? $navigation : 'animated' }}">
    <div id="app">
        @include('flash::message')

        @include('partials.topnavigation', [
            'type' => isset($navigation) ? $navigation : 'animated'
        ])

        @yield('content')

        @include('partials.footer')
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-38384000-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-38384000-1');
    </script>

</body>
</html>
