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

    <link rel="stylesheet" href="{{asset('assets/css/blog/header.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('assets/css/blog/footer.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/css/blog/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/media.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/media-blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/one-blog.css')}}">
@endsection

@section('body')
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.12';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="landscape">
        <div class="landscape-inner">
            <div class="landscape-icon">
                <div class="landscape-icon__condom_fill"></div>
                <div class="landscape-icon__condom_stroke"></div>
                <div class="landscape-icon__condom_arrow"></div>
            </div>

            <h5 class="landscape-title">@lang('site.landscape_title')</h5>
            <p class="landscape-desc">@lang('site.landscape_desc')</p>
        </div>
    </div>
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
                                                            <span><img src="{{ $model->category->icon }}"
                                                                       alt="{{ $model->category->title }}"></span>
                                                        </div>
                                                        <div class="blog-title">
                                                            <h3>{{ $model->category->title }}</h3>
                                                        </div>
                                                        <div class="blog-content">
                                                            {!! $model->{'content_'.app()->getLocale()} !!}
                                                            <div class="share-with">
                                                                <a target="_blank"
                                                                   href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"
                                                                   class="fb-xfbml-parse-ignore">
                                                                    <img class="share-with__img share-with__img_hover"
                                                                         src="{{asset('assets/img/blog/icon-filter/fb-hover.png')}}">
                                                                    <img class="share-with__img"
                                                                         src="{{asset('assets/img/blog/icon-filter/fb-square.png')}}">@lang('site.share')
                                                                </a>
                                                            </div>
                                                            @if($model->isGG)
                                                                <div class="bottom-link jivo-btn">
                                                                    <a href="">@lang('site.get_consult')</a>
                                                                </div>
                                                            @endif
                                                        </div>


                                                    </div>
                                                    <div class="blog-social">
                                                        <div class="blog-social-comments">
                                                            <span> Disqus count </span>
                                                        </div>
                                                        <div class="athor-date">
                                                            <div class="flexibal">
                                                                @if($model->authorImage)
                                                                    <div class="athor"><img
                                                                                src="{{$model->authorImage}}"></div>
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
                                </article>

                            </div>
                        </div>
                        <aside class="blog-narrow translate-block">
                            <div class="small-translate translate-block">
                                @each('blog.blog_narrow_item', $morePosts,'post')
                            </div>
                        </aside>
                        <div class="ajax-blog"></div>
                    </div>
                    {{--<div class="about-description">--}}
                    {{--</div>--}}
                    {{--<footer></footer>--}}
                </div>
            </div>
            <div class="scroll-substitute"></div>
        </div>
        <a href="{{route('blog')}}" itemprop="item" class="back-blog">
            <div class="navigate-box">
                <div class="navigate-box__left">
                    <div class="navigate-box__left-wrap">
                        <span class="navigate-box__line"></span>
                        <span class="navigate-box__line"></span>
                    </div>
                    <div class="navigate-box__text">@lang('site.to_blog')</div>
                </div>
            </div>
        </a>
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
    <script async="" src="{{asset('assets/js/blog/animation.js')}}"></script>
    <script src="{{asset('assets/js/blog/scroll.js')}}"></script>
    <script src="{{asset('assets/js/blog/disqusloader.js')}}"></script>

    <script src="{{asset('/assets/js/libs/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/blog-slider.js')}}"></script>
    <script>

      // disqus_config = function() {
      //   this.callbacks.afterRender.push(function() { console.log(654654);/* your code */ });
      //   this.callbacks.onNewComment.push(function() { /* your code */ });
      //   /* Available callbacks are afterRender, onInit, onNewComment, onPaginate, onReady, preData, preInit, preReset */
      // }
      // var disqus_config = function () {
      //   this.callbacks.onInit.push(function() {  console.log(5555555555555);});
      //   this.callbacks.afterRender = [function(comment) {
      //   }];

      (function () { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://drugstore-1.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();

      disqus_config = function() {
        this.callbacks.afterRender.push(function() { alert(342)/* your code */ });
        this.callbacks.onReady.push(function() {
          createObj(this.frame.container.offsetHeight)
        })
      }
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>


    @if($model->isGG)
        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
            (function () {
                var widget_id = 'UUEQ86LJp1';
                var d = document;
                var w = window;

                function l() {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = '//code.jivosite.com/script/widget/' + widget_id;
                    var ss = document.getElementsByTagName('script')[0];
                    ss.parentNode.insertBefore(s, ss);

                    setTimeout(function () {
                        jivo_api.open();
                    }, 1000)
                }

                document.querySelector('.jivo-btn a').addEventListener('click', function (e) {
                    e.preventDefault();
                    l();
                });
            })();
        </script>
        <!-- {/literal} END JIVOSITE CODE -->
    @endif
@endsection