<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="prefetch" onload="this.rel='stylesheet'" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="@yield('bodyClass')">
    <div class="main__wrapper" id="app">
    @yield('content')



    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQVUQKyG3f6xsvj1HeRoxckTm1iNYVdGQ" type="text/javascript"></script>
</body>
</html>