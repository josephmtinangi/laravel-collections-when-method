<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    @include('partials.navbar')
    
    @yield('content')

    <!-- Scripts -->
    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/vendor/what-input.js"></script>
    <script src="/js/vendor/foundation.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
