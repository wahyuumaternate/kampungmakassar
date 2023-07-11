<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

    <link href="{{ asset('login/login.css') }}" rel="stylesheet">
    <title>{{ @$title != '' ? "$title - " : '' }}{{ config('app.name') }}</title>
</head>
<body>
    @yield('body')

    <script src="{{ asset('login/login.js') }}"></script>
</body>
</html>