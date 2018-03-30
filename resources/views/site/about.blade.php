<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 23.03.2018
 * Time: 13:02
 */

/**
 * @var \App\StaticPage $model
 */
?>
@extends('site.layout')

@section('title', $model->clearTitle($model))

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/js/libs/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/libs/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main_about.css')}}">
@endsection

@section('body')
    <div class="preloader">
        <div class="preloader-inner">
            <?php include "assets/img/svg/about/preloader-inner.svg"?>
        </div>
    </div>

    <div class="landscape">
        <div class="landscape-inner">
            <div class="landscape-icon">
                <div class="landscape-icon__condom_fill"></div>
                <div class="landscape-icon__condom_stroke"></div>
                <div class="landscape-icon__condom_arrow"></div>
            </div>

            <h5 class="landscape-title">примите горизонтальное положение</h5>
            
            <p class="landscape-desc">переверните экран</p>
        </div>
    </div>

    <main class="content">
        <div class="content-section">
            <div class="logo-box">
                <img class="js-hover" src="/assets/img/drug-store/drug-store-logo1.svg" alt="" data="/assets/img/drug-store/drug-store-logo2.svg,/assets/img/drug-store/drug-store-logo3.svg,/assets/img/drug-store/drug-store-logo4.svg" data-src="/assets/img/drug-store/drug-store-logo1.svg">
            </div>

            <div class="content__left-box">
                <h1 class="main-caption clip-fix">{!! $model->title !!}</h1>
            </div>

            <div class="content__center-box">
                <div class="content__additional-logo-box">
                    <div class="text">{{$model->supported }}</div>

                    <img src="assets/img/about/alliance-logo.png" alt="">

                    <img src="assets/img/about/elton-john-logo.png" alt="">
                </div>

                <h2 class="content__heading">{{$model->desc_title}}</h2>

                <div class="content__text-wrap">
                    {!! $model->description !!}
                </div>

                <div id="logo-slider">
                    <div class="logo-slider__img-wrap">
                        @foreach($model->slider as $inx=>$slide)
                            @if($inx % 5 == 0 && $inx!=0)
                    </div>
                    <div class="logo-slider__img-wrap">
                        @endif
                        <img src="{{$slide->path}}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="content__bottom-box">
                <div class="freshagency-logo-box">
                    <img src="/assets/img/about/freshagency-logo.svg" alt="">
                </div>

                <div class="copyright-text">Copyright © 2018 Drugstore. @lang('site.reserved')</div>
            </div>

            <div class="navigate-box">
                <div class="navigate-box__left">
                    <div class="navigate-box__left-wrap">
                        <span class="navigate-box__line"></span>

                        <span class="navigate-box__line"></span>
                    </div>

                    <div class="navigate-box__text">предыдущая <br> страница</div>
                </div>

                <div class="navigate-box__right">
                    <div class="navigate-box__right-wrap">
                        <span class="navigate-box__line"></span>
                            
                        <span class="navigate-box__line"></span>
                    </div>

                    <div class="navigate-box__text">следующая <br> страница</div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="/assets/js/libs/slick.min.js"></script>
    <script src="/assets/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/js/libs/wheel-indicator.js"></script>
    <script src="/assets/js/main_about.js"></script>
@endsection
