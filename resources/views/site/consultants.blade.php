<?php

use App\StaticPage;
/**
 * @var StaticPage $model
 */
?>

@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" href="assets/css/consult_main.css">
@endsection

@section('body')

    <div class="logo-box none">
        <img src="assets/img/consultants/logo-white.png" alt="">
    </div>

    <div class="menu-box none">
        <img class="menu-box_img" src="assets/img/consultants/menu-burger.png" alt="">

        <strong class="menu-box_text">меню</strong>
    </div>

    <div class="preloader">
        <div class="preloader-inner">
            <?php include 'assets/img/svg/consultants/preloader-inner.svg'?>
        </div>
    </div>

    <main class="content content-section none">

        <div class="consultants__left-box">
            <div class="main-caption clip">
                {!! str_replace('/',' - <br>',$model->title) !!}
            </div>

            <div class="consultants__add-text">
                {!! $model->description !!}
            </div>
        </div>

        <div class="consultants-content">
            <h3 class="consultants-content__heading">
                <span>{!! $model->longtitle !!}</span>
            </h3>
            <div class="consultants-content__content">
                @foreach($model->list as $i=>$val)
                    <div class="consultants-content__content-item">
                        <div class="consultants-content__img-wrap">
                            <img src="assets/img/consultants/consultants-img-{{$i}}.png" alt="">
                        </div>
                        <div class="consultants-content__text">{{ $val }}</div>
                    </div>
                @endforeach
            </div>

            <div class="consultants-content__button-box">
                <button class="consultants-content__button consultants-btn"><span>расписание консультантов</span>
                </button>
                <button class="consultants-content__button"><span>обратиться к специалисту</span></button>
            </div>
        </div>

        <div class="popup-box__consultants">
            <div class="popup-wrapper__consultants">
                <div class="popup-wrapper__consultants-content">
                    <div class="popup-wrapper__consultants-column">
                        <div class="popup-wrapper__consultants-cell"></div>
                        @for($i=1;$i<=7;$i++)
                            <div class="popup-wrapper__consultants-cell">{{ $model->{'consHeader_'.$i} }}</div>
                        @endfor
                    </div>
                    @foreach($model->consultants as $consultant)
                        <div class="popup-wrapper__consultants-column">
                            <div class="popup-wrapper__consultants-cell">{!! $consultant->title !!}</div>

                            @foreach($consultant->days as $day)
                                <div class="popup-wrapper__consultants-cell">{!! $day !!}</div>
                            @endforeach
                        </div>
                    @endforeach
                </div>

                <div class="popup-wrapper__consultants-crosshair"></div>
            </div>
        </div>

    </main>
@endsection

@section('scripts')
    @parent
    <script src="assets/js/libs/wheel-indicator.js"></script>
    <script src="assets/js/consult_main.js"></script>
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
            }

            if (d.readyState == 'complete') {
                l();
            } else {
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })();</script>
    <!-- {/literal} END JIVOSITE CODE -->
@endsection