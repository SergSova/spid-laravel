<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 28.03.2018
 * Time: 9:24
 */

/**
 * @var \App\Post $model
 * @var \App\Post $prev
 * @var \App\Post $next
 * @var \App\Post $post
 * @var \App\Post $morePosts
 */

$body_class = 'one_blog';
?>
@extends('site.layout')

@section('title', strip_tags($model->mod_title))

@section('styles')
    @parent
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900&amp;subset=cyrillic,latin-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/blog/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/footer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/media.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/one-blog.css')}}">
@endsection

@section('body')
    <div id="p_prldr">
        <div class="preo_prego">
            <div class="cube-all">
                <div class="thecube">
                    <div class="cube c1"></div>
                    <div class="cube c2"></div>
                    <div class="cube c4"></div>
                    <div class="cube c3"></div>
                </div>
            </div>
            <span class="svg_anm"></span>
        </div>
    </div>
    <main>
        <div class="wrapper">
            <div class="fixid-container">
                <div class="content">
                    <div class="content-head">
                        <div class="wrapper-breadcrumb-filter">
                            <div class="bread-crumbs" id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                                     class="button">
                                    <a href="{{route('blog')}}" itemprop="item">
                                        <span itemprop="name" class="label1">@lang('menu.blog')</span>
                                        <meta itemprop="position" content="1">
                                    </a>
                                </div>
                                <div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                                     class="button">
                                    <a href="{{route('blog.fitred',$model->category->slug)}}" itemprop="item">
                                        <span itemprop="name" class="label1">{{$model->category->title}}</span>
                                        <meta itemprop="position" content="2">
                                    </a>
                                </div>
                                <div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                                     class="button">
                                    <span itemprop="name" class="label1">{{strip_tags($model->mod_title)}}</span>
                                    <meta itemprop="position" content="3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-wrapper scroll-container" id="scroll">
                        <div class="article-wrap">
                            <div class="blog-main one-blog translate-block">
                                <article class="video">
                                    <div class="content-article">
                                        <figure>
                                            <div class="blog-image">
                                                <img src="{{$model->mainImage}}">
                                                <h1>{!! $model->mod_title !!}</h1>
                                            </div>
                                            <figcaption>
                                                <div class="blog-news-content">
                                                    <div class="blog-news">
                                                        <div class="blog-news-category">
                                                            <span><img src="{{ $model->category->icon }}" alt="{{ $model->category->title }}"></span>
                                                        </div>
                                                        <div class="blog-title">
                                                            <h3>{{ $model->category->title }}</h3>
                                                        </div>
                                                        <div class="blog-content">
                                                            {!! $model->{'content_'.app()->getLocale()} !!}
                                                            <div class="share-with">
                                                                <img src="{{asset('assets/img/blog/icon-filter/fb-square.png')}}">@lang('site.share')
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="blog-social">
                                                        <div class="blog-social-comments">
                                                            <span> Disqus count </span>
                                                        </div>
                                                        <div class="athor-date">
                                                            <div class="flexibal">
                                                                @if($model->authorImage)
                                                                    <div class="athor"><img src="{{$model->authorImage}}"></div>
                                                                @endif
                                                                {{$model->author}}
                                                            </div>
                                                            <div class="flexibal">
                                                                <div class="">
                                                                    <img src="{{asset('assets/img/blog/icon-filter/calendar.png')}}">
                                                                </div>
                                                                {{$model->full_data}}
                                                            </div>
                                                        </div>
                                                        <div class="blog-social-right">
                                                            <span class="eya">{{$model->viewers}}</span>
                                                            <span class="fab fa-facebook-f">{{$model->followers}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </article>
                                <div class="disqus-thread">
                                    <div id="disqus_thread"></div>
                                </div>

                                <div class="blog-navi">
                                    <div class="blog-prev">
                                        <a href="{{$prev->url}}">
                                            <img src="{{$prev->mainImage}}">
                                            <div class="blog-navi-text">
                                                <img src="{{asset('assets/img/blog/icon-filter/blog-nav-arr-prev.png')}}">
                                                {!! $prev->mod_title !!}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog-next">
                                        <a href="{{$next->url}}">
                                            <img src="{{$next->mainImage}}">
                                            <div class="blog-navi-text">
                                                {!! $next->mod_title !!}
                                                <img src="{{asset('assets/img/blog/icon-filter/blog-nav-arr-next.png')}}">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside class="blog-narrow translate-block">
                            <div class="small-translate translate-block">
                                @each('blog.blog_narrow_item', $morePosts,'post')
                            </div>
                        </aside>
                        <div class="ajax-blog"></div>
                    </div>
                    {{--                    <div class="about-description">
                                            <h4>ИНТЕРНЕТ МАГАЗИН ОБУВИ В УКРАИНЕ - PREGO</h4>
                                            <div class="about-description-p">
                                                <p>Торговая марка PREGO - Прего появилась на рынке Украины не так давно, но уже успела
                                                    зарекомендовать себя и получить доверие покупателя. Впервые была представлена в магазинах
                                                    сети Взуттевый Глянц и Ботик (Botik), но современный мир не стоит на месте, наряду с
                                                    обычными магазинами мы все чаще покупаем разные товары, в том числе и брендовую обувь
                                                    в интернет магазине, поэтому с радостью представляем Вам, уважаемый клиент - обновленный
                                                    интернет магазин обуви PREGO.
                                                    Торговая марка PREGO - Прего появилась на рынке Украины не так давно, но уже успела
                                                    зарекомендовать себя и получить доверие покупателя. Впервые была представлена в магазинах
                                                    сети Взуттевый Глянц и Ботик (Botik), но современный мир не стоит на месте, наряду с
                                                    обычными магазинами мы все чаще покупаем разные товары, в том числе и брендовую обувь
                                                    в интернет магазине, поэтому с радостью представляем Вам, уважаемый клиент - обновленный
                                                    интернет магазин обуви PREGO.</p>
                                                <p>Торговая марка PREGO - Прего появилась на рынке Украины не так давно, но уже успела
                                                    зарекомендовать себя и получить доверие покупателя. Впервые была представлена в магазинах
                                                    сети Взуттевый Глянц и Ботик (Botik), но современный мир не стоит на месте, наряду с
                                                    обычными магазинами мы все чаще покупаем разные товары, в том числе и брендовую обувь
                                                    в интернет магазине, поэтому с радостью представляем Вам, уважаемый клиент - обновленный
                                                    интернет магазин обуви PREGO.
                                                    Торговая марка PREGO - Прего появилась на рынке Украины не так давно, но уже успела
                                                    зарекомендовать себя и получить доверие покупателя. Впервые была представлена в магазинах
                                                    сети Взуттевый Глянц и Ботик (Botik), но современный мир не стоит на месте, наряду с
                                                    обычными магазинами мы все чаще покупаем разные товары, в том числе и брендовую обувь
                                                    в интернет магазине, поэтому с радостью представляем Вам, уважаемый клиент - обновленный
                                                    интернет магазин обуви PREGO.</p>
                                            </div>
                                            <div class="SeoText">
                                                <span class="on">@lang('site.read_more')</span>
                                                <span class="off">@lang('site.close')</span>
                                            </div>
                                        </div>--}}
                    <footer>
                        <div class="footer_wrapper">
                            <div class="footer__local">
                                <div class="footer__local_logo">
                                    <a target="_blank" href="{{route('home')}}">
                                        <img src="{{asset('assets/img/blog/icon-filter/logo.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="footer__local_i">
                                    <div class="footer__local_site_info">
                                        Copyright © 2018 Drugstore. @lang('site.reserved')
                                    </div>
                                </div>
                                <div class="footer__local_icon">
                                    <a target="_blank" class="fa-facebook-1" href="https://www.facebook.com/pregotheone/">
                                        <img src="{{asset('assets/img/blog/icon-telefon/f-01.svg')}}" alt="">
                                    </a>
                                    <a target="_blank" class="fa-viber-1" href="viber://add?number=+38066696-82-74">
                                        <img src="{{asset('assets/img/blog/icon-telefon/v-01.svg')}}" alt="">
                                    </a>
                                    <a target="_blank" class="fa-youtube-1"
                                       href="https://www.youtube.com/channel/UCRZe3K0cxIr7bKmotw4MKQQ">
                                        <img src="{{asset('assets/img/blog/icon-telefon/y-01.svg')}}" alt="">
                                    </a>
                                    <a target="_blank" class="fa-instagram-1" href="https://www.instagram.com/pregotheone/">
                                        <img src="{{asset('assets/img/blog/icon-telefon/i-01.svg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="scroll-substitute"></div>
        </div>
        <div class="wrap-top-top">
            <div class="to-top">@lang('site.above')</div>
        </div>
        @if($model->slider->count())
            <div class="full-content-slider">
                @foreach($model->slider as $photo)
                    @if($photo->path)
                        @if(isset($photo->isVideo))
                            <div class="video-to-play">
                                <div class="video-blog" data-video="{{$photo->path}}"></div>
                            </div>
                        @else
                            <div class=""><img src="{{$photo->path}}"></div>
                        @endif
                    @endif
                @endforeach
            </div>
        @endif
    </main>
@endsection

@section('scripts')
    @parent
    <script>
        $(function () {
            $('.full-content-slider').insertBefore('.slide-insert');
            $('.slide-insert').remove();
        });
    </script>
    <script src="{{asset('assets/js/libs/vibrant.js')}}"></script>
    <script src="{{asset('assets/js/libs/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/anime.min.js')}}"></script>
    <script src="{{asset('assets/js/blog/animation.js')}}" async=""></script>
    <script src="{{asset('assets/js/blog/scroll.js')}}" async=""></script>

    <script src="{{asset('/assets/js/libs/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/blog-slider.js')}}"></script>
@endsection