<?php

$lang = app()->getLocale();
?>
@extends('site.layout')

@section('title',$model->seo_title)

@section('styles')
    @parent
    <link rel="stylesheet" href="{{asset('assets/css/drug-store/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/drug-store/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sliderCanvas.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/resize.css')}}">
@endsection

@section('body')
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
    <div class="modal modal-r">
        <div class="modal__inner">
            <div class="modal__icons">
                <div class="modal__icon r-hand">
                    <?php include 'assets/img/svg/slide-rocket/r-hand.svg'?>
                </div>
                <div class="modal__icon r-bow-wrap">
                    <div class="r-bow">
                        <?php include 'assets/img/svg/slide-rocket/r-bow.svg'?>
                        <div class="r-fire">
                            <?php include 'assets/img/svg/slide-rocket/r-fire.svg'?>
                        </div>
                    </div>
                </div>
                <div class="modal__icon r-space">
                    <?php include 'assets/img/svg/slide-rocket/r-space.svg'?>
                </div>
            </div>
            <div class="modal__text">
                {!! $model->{'modal_text_'.$lang} !!}
            </div>
            <button class="modal__btn">{!! $model->{'modal_btn_'.$lang} !!}</button>
        </div>
    </div>

    <nav class="game-icons slider-controls slide-3">
        <a href="<?= $prev['alias'] ?? '/slide-bubles'?>" class="str str-prev">
            <?php include 'assets/img/svg/slide-rocket/str-prev.svg'?>
        </a>
        <a href="<?= $next['alias'] ?? '/with-who'?>" class="str str-next">
            <?php include 'assets/img/svg/slide-rocket/str-next.svg'?>
        </a>
        <div class="bullets">
            <?php include 'assets/img/svg/slide-rocket/bullets.svg'?>
        </div>
    </nav>
    <div class="main-scene full">
        <div id="rocket-container">
            <div class="rocket-btn-wrap">

                <span class="rocket-btn-text">{!! $model->{'text_bottom_'.$lang}[0] !!}</span>
                <button class="rocket-btn">{!! $model->{'text_bottom_'.$lang}[1] !!}</button>
                <span class="rocket-btn-text">{!! $model->{'text_bottom_'.$lang}[2] !!}</span>
            </div>
        </div>
        <div class="games-wrapper">
            <div class="games full planets">
                <h1 class="rocket-title neon-pink"><span>{!! $model->title_mod !!}</span>
                    <span class="went-wrong">{!! $model->{'wrong_'.$lang} !!}</span></h1>
                <div class="game game5 full js-game5" id="game5">
                    <div class="game-wrap full"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="{{asset('assets/js/main22.js')}}"></script>
    <script src="{{asset('assets/js/libs/pixi.js')}}"></script>
    <script src="{{asset('assets/js/libs/bump.js')}}"></script>
    <script src="{{asset('assets/js/libs/tweenMax.js')}}"></script>
    <script src="{{asset('assets/js/libs/CSSPlugin.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/spriteUtilities.js')}}"></script>
    <script src="{{asset('assets/js/rocket.js')}}"></script>
    <script>
        var modalVis = true;
        $(document).ready(function () {
            var modalAnimId,
                hand = $('.r-hand path'),
                rocket = $('.r-bow'),
                btn = $('.r-space > svg > path'),
                clickTimer;

            $('.modal__btn').on('click', function (e) {
                e.preventDefault();
                $('.modal').fadeOut();
                modalVis = false;
            });

            function modalAnim() {
                if (hand.offset().top <= $(btn[0]).offset().top + 15) {
                    rocket.addClass('shoot').delay(1000).queue(function (next) {
                        $(this).removeClass('shoot');
                        next();
                    })
                }

                if (modalVis) {
                    modalAnimId = requestAnimationFrame(modalAnim)
                } else {
                    cancelAnimationFrame(modalAnimId)
                }
            }

            modalAnim()
        })
    </script>
@endsection