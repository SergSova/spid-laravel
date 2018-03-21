<?php

/**
 * @var \App\StaticPage $model
 */
?>
@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/rangeslider.css">
    <link rel="stylesheet" href="assets/css/test_main.css">
@endsection

@section('body')
    <div class="logo-box">
        <img src="assets/img/aids-test/logo-white.png" alt="">
    </div>
    <div class="menu-box">
        <img class="menu-box_img" src="assets/img/aids-test/menu-burger.png" alt="">

        <strong class="menu-box_text">меню</strong>
    </div>
    <main class="content content-section test-section test-video-fix">

        <div class="test__left-box">
            <div class="main-caption clip-fix">{{$model->title}}</div>

            <div class="test__questions-wrap">

                <div class="test__preview-box">
                    <div class="text">
                        {{$model->description}}
                        <button class="test__preview-box-btn">{{$model->test_btn}}</button>
                    </div>
                </div>

                <form class="questions">
                    <div class="questions-wrap"></div>
                    <button type="submit" class="js-questions-next test__test-btn none">{{$model->test_btn_next}}</button>
                </form>

                <button style="font-size: 16px;" class="js-questions-refresh">refresh</button>
            </div>
        </div>

        <div class="test-content">
            <h3 class="test-content__heading">
                <span>{{$model->longtitle}}</span>
            </h3>

            <div class="test-content_tv-box">
                <div class="test-content_tv-wrap">
                    <div class="test-content_tv-channels">
                        <img class="test-default-tv" src="assets/img/aids-test/test-default-tv.gif" alt="">
                        <video class="test-default-tv test-default-tv_iframe" src="assets/video/noise.mp4" loop="loop"
                               autoplay="autoplay"></video>
                        <audio class="test-noize-audio" style="display: none;" src="assets/video/noise-audio.mp3" loop
                               autoplay></audio>
                        <img src="assets/img/aids-test/test-tv-tv-stand.png" alt="">
                    </div>
                    <div class="test-content_tv_togglers-wrap">
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                    </div>
                    <div class="tv-volume">
                        <div class="sound">
                            <div class="sound--icon fa fa-volume-off"></div>
                            <div class="sound-wave__wrapper">
                                <div class="sound--wave sound--wave_one"></div>
                                <div class="sound--wave sound--wave_two"></div>
                            </div>
                        </div>
                        <div>
                            <input type="range" min="0" val="0.5" max="1" step="0.1" data-rangeslider>
                            <output></output>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img class="test-bottom-shadow" src="assets/img/aids-test/test-bottom-shadow.png" alt="">
    </main>
@endsection

@section('scripts')
    <script src="assets/js/libs/wheel-indicator.js"></script>
    <script src="assets/js/libs/rangeslider.js"></script>
    <script src="assets/js/test_main.js"></script>
@endsection