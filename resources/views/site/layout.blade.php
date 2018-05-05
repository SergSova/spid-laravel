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
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lib/jquery.mCustomScrollbar.css')}}">
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css">
@yield('styles')

<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P9RH2F3');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="{{$body_class??''}}" data-alias="{{$body_class??''}}">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9RH2F3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@if(\Request::route()->getName()!='index')
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
