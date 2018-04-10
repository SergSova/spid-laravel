<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Page')</title>

    @include('site.seo.meta')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/lib/jquery.mCustomScrollbar.css')}}">
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css">
    @yield('styles')
</head>
<body class="{{$body_class??''}}" data-alias="{{$body_class??''}}">
@if(\Request::route()->getName()!='home')
    @include('site.menu')
@endif

@yield('body')

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function () {
        $('.preloader').delay(1000).fadeOut(300, function () {
            var scroll_up = 0;

            
        });
        $('.preloader svg').delay(1000).fadeOut(300);
    });
</script>
<script src="{{asset('assets/js/libs/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/preloader.js')}}"></script>
@if(isset($model) && method_exists($model,'getNext'))
    <script>
        var next_page = '{{$model->getNext()['alias']}}';
        var prev_page = '{{$model->getPrev()['alias']}}';
    </script>
@endif

@yield('scripts')
</body>
</html>
