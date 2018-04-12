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
    <link rel="stylesheet" href="{{asset('assets/css/blog/media-blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/one-blog.css')}}">
@endsection

@section('body')
    <div class="preloader">
        <div class="preloader-inner">
            <?php include "assets/img/svg/about/preloader-inner.svg" ?>
        </div>
    </div>
    <main>
        <div class="wrapper">
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
            <div class="fixid-container">
                <div class="content">

                    <div class="content-wrapper scroll-container" id="scroll">
                        <div class="article-wrap">
                            <div class="blog-main one-blog translate-block">
                                <article class="video">
                                    <div class="content-article">
                                        <figure>
                                            <div class="blog-image">
                                                <img src="{{$model->mainImage}}">
                                                <h1 {{$model->isBlackTitle?'class=black-title':''}}>
                                                    {!! $model->mod_title !!}
                                                </h1>
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
                                    <div id="disqus_thread">

                                    </div>
                                </div>

                                <div class="blog-navi">
                                    <a href="{{$prev->url}}" class="blog-prev">
                                            <img src="{{$prev->mainImage}}">
                                            <div class="blog-navi-text">
                                                <img src="{{asset('assets/img/blog/icon-filter/blog-nav-arr-prev.png')}}">
                                                {!! $prev->mod_title !!}
                                            </div>
                                    </a>
                                        <a href="{{$next->url}}" class="blog-next">
                                            <img src="{{$next->mainImage}}">
                                            <div class="blog-navi-text">
                                                {!! $next->mod_title !!}
                                                <img src="{{asset('assets/img/blog/icon-filter/blog-nav-arr-next.png')}}">
                                            </div>
                                        </a>
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
                    <div class="about-description hidden" hidden>
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
                            <span class="on">Читать далее</span>
                            <span class="off">Закрыть</span>
                        </div>
                    </div>
                    <footer class="hidden" hidden>
                        <div class="footer_wrapper">
                            <div class="footer__columns">
                                <div class="footer__column">
                                    <div class="footer__column-title">Каталог</div>
                                    <div class="js-footer-items">
                                        <div class="footer__column-item"><a href="#1">Женская обувь</a></div>
                                        <div class="footer__column-item"><a href="#!">Сумки</a></div>
                                        <div class="footer__column-item"><a href="#!">Мужская обувь</a></div>
                                        <div class="footer__column-item"><a href="#!">Аксессуары</a></div>
                                        <div class="footer__column-item"><a href="#!">Карта сайта</a></div>
                                    </div>
                                </div>
                                <div class="footer__column">
                                    <div class="footer__column-title">О Компании</div>
                                    <div class="js-footer-items">
                                        <div class="footer__column-item"><a href="#1">О нас</a></div>
                                        <div class="footer__column-item"><a href="#!">Блог</a></div>
                                        <div class="footer__column-item"><a href="#!">Отзывы</a></div>
                                    </div>
                                </div>
                                <div class="footer__column">
                                    <div class="footer__column-title">Покупателям</div>
                                    <div class="js-footer-items">
                                        <div class="footer__column-item"><a href="#1">Доставка</a></div>
                                        <div class="footer__column-item"><a href="#!">Оплата</a></div>
                                        <div class="footer__column-item"><a href="#!">Гарантия и возврат</a></div>
                                        <div class="footer__column-item"><a href="#!">Наши магазины</a></div>
                                    </div>

                                </div>
                                <div class="footer__column">
                                    <div class="footer__column-title">Контакты</div>
                                    <div class="js-footer-items">
                                        <div class="footer__column_phone">
                                            <ul>
                                                <li>
                                                    <span><img src="assets/images/icon-telefon/vodafon.png" alt=""></span>
                                                    <a href="tel:0666968274">+38 (066) 696-82-74</a>
                                                </li>
                                                <li>
                                                    <span><img src="assets/images/icon-telefon/kievstar.png" alt=""></span>
                                                    <a href="tel:0672247743">+38 (067) 224-77-43 </a>
                                                </li>
                                                <li>
                                                    <span><img src="assets/images/icon-telefon/life.png" alt=""></span>
                                                    <a href="tel:0637214069">+38 (063) 721-40-69</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="footer__column_p">
                                            <span>Звоните нам</span>
                                            <p>с 09.00 до 20.00 (пн.-сб.)</p>
                                            <p>и с 09.00 до 18.00 (вс.)</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer__local">
                                <div class="footer__local_logo">
                                    <a target="_blank" href="https://prego.ua/">
                                        <img src="assets/images/icon-filter/logo.png" alt="">
                                    </a>
                                </div>
                                <div class="footer__local_i">
                                    <div class="footer__local_site_info">
                                        © 2014-2017 Официальный сайт Prego все права защищены
                                    </div>
                                </div>
                                <div class="footer__local_icon">
                                    <a target="_blank" class="fa-facebook-1" href="https://www.facebook.com/pregotheone/">
                                        <img src="assets/images/icon-telefon/f-01.svg" alt="">
                                    </a>
                                    <a target="_blank" class="fa-viber-1" href="viber://add?number=+38066696-82-74">
                                        <img src="assets/images/icon-telefon/v-01.svg" alt="">
                                    </a>
                                    <a target="_blank" class="fa-youtube-1"
                                       href="https://www.youtube.com/channel/UCRZe3K0cxIr7bKmotw4MKQQ">
                                        <img src="assets/images/icon-telefon/y-01.svg" alt="">
                                    </a>
                                    <a target="_blank" class="fa-instagram-1" href="https://www.instagram.com/pregotheone/">
                                        <img src="assets/images/icon-telefon/i-01.svg" alt="">
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
    <script async="" src="{{asset('assets/js/blog/animation.js')}}" ></script>
    <script async="" src="{{asset('assets/js/blog/scroll.js')}}" ></script>

    <script src="{{asset('/assets/js/libs/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/blog-slider.js')}}"></script>
    <div id="disqus_thread"></div>
    <script>
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://drugstore-1.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection