<?php

/**
 * @var \App\Blog $model
 */
?>
@extends('site.layout')

@section('title', $model->seo_title)

@section('styles')
    @parent
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900&amp;subset=latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/lib/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/footer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog/media.css')}}">
@endsection
@section('body')
    <!-- <div id="p_prldr">
        <div class="preo_prego">
            <div class="cube-all">
                <div class="thecube">
                    <div class="cube c1"></div>
                    <div class="cube c2"></div>
                    <div class="cube c4"></div>
                    <div class="cube c3"></div>
                </div>

            </div>
        </div>
    </div> -->
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
        <div class="main-content">
            <div class="wrapper">
                <div class="fixid-container">
                    <header class="header">
                        <div class="menu-box category-popup-btn__box">
                            <strong class="menu-box_text category-popup-btn__text">@lang('site.category')</strong>
                        </div>
                    </header>

                    <div class="content">
                        <div class="content-head">
                            <h1 class="main-caption clip-fix">{!! $model->title !!}</h1>
                        </div>
                        <div class="content-wrapper scroll-container" id="scroll">
                            <div class="blog-main">
                                <section class="blog-large">
                                    <div class="large-translate translate-block">
                                        @each('blog.item_blog', $arr[0]??[],'model')
                                    </div>
                                </section>
                                <section class="blog-small">
                                    <div class="medium-translate translate-block">
                                        @each('blog.item_blog', $arr[1]??[],'model')
                                    </div>
                                </section>
                            </div>
                            <aside class="blog-narrow">
                                <div class="small-translate translate-block">
                                    @each('blog.item_blog', $arr[2]??[],'model')
                                </div>
                            </aside>
                            <div class="ajax-blog"></div>
                        </div>
                        <div class="about-description">
                        </div>
                        <footer>
                        </footer>
                    </div>

                </div>
                <div class="scroll-substitute">
                    <span></span>
                </div>
                <div class="wrap-top-top">
                    <div class="to-top">@lang('site.above')</div>
                </div>
            </div>
            @include('site.chanks.navigate_box')
        </div>

        @include('blog.category')

    </main>
@endsection
@section('scripts')
    @parent
    <script src="{{ asset('assets/js/libs/vibrant.js') }}"></script>
    <script src="{{ asset('assets/js/libs/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/anime.min.js') }}"></script>
    <script src="{{ asset('assets/js/blog/animation.js') }}"></script>
    <script src="{{ asset('assets/js/blog/scroll.js') }}"></script>
@endsection