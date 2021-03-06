<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('head.title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    @yield('head.css')
</head>
<body>
@include('partials.navbar')
@yield('body.content')
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
@yield('body.js')
</body>
</html>
