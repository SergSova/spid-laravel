<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Page')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css">

    @yield('styles')
</head>
<body>

@include('site.menu')

@yield('body')

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

@if(isset($model))
    <script>
        var next_page = '{{$model->getNext()['alias']}}';
        var prev_page = '{{$model->getPrev()['alias']}}';
    </script>
@endif

@yield('scripts')
</body>
</html>
