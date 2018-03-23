<?php

/**
 * @var \App\StaticPage $model
 */
?>
@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" href="assets/css/main.css">
@endsection

@section('body')
    <div class="logo-box">
        <img src="assets/img/condoms-white/logo-white.png" alt="">
    </div>
    <div class="menu-box">
        <img class="menu-box_img" src="assets/img/condoms-white/menu-burger.png" alt="">

        <strong class="menu-box_text">меню</strong>
    </div>
    <section class="content content-section">

        <h1 class="main-caption">
            <div class="main-caption_letter">
                {!! str_replace('/',' - <br>',$model->title) !!}
            </div>
        </h1>

        <div id="custom-slider">

            <div class="custom-slider_section cf">
                @foreach($model->Tabs as $inx=>$tab)
                    <div class="custom-slider_wrap">
                        <div class="custom-slider_wrap-top-text">
                            <h3><span>{!! $tab->title !!}</span></h3>
                            @if($tab->add_box1)
                                <div class="custom-slider_wrap-add-box">
                                    <div class="custom-slider_wrap-add-caption"><span>{!! $tab->add_box1 !!}</span>
                                    </div>
                                    <div class="custom-slider_wrap-add-text">{!! $tab->add_box1_text !!}</div>
                                </div>
                            @endif
                            @if($tab->add_box2)
                                <div class="custom-slider_wrap-add-box">
                                    <div class="custom-slider_wrap-add-caption"><span>{!! $tab->add_box2 !!}</span>
                                    </div>
                                    <div class="custom-slider_wrap-add-text">{!! $tab->add_box2_text !!}</div>
                                </div>
                            @endif
                        </div>
                        @foreach($tab->texts as $section)
                            <div class="custom-slider_section-content">
                                <div class="custom-slider_section-content-img">
                                    <img class="origin-img"
                                         src="assets/img/condoms-white/condoms-{{$inx}}-{!! $section->index !!}.png"
                                         data-hover="assets/img/condoms-white/condoms-{{$inx}}-{!! $section->index !!}-hover.png"
                                         alt="">
                                </div>
                                <div class="text"><strong>{!! $section->title !!}</strong>{!! $section->text !!}</div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div class="custom-slider_nav-container">
                @foreach($model->Tabs as $inx=>$tab)
                    <div class="nav-button"><strong class="nav-button-text">{!! $tab->menu_title !!}</strong></div>
                @endforeach
                <div class="line"></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @parent
    <script src="assets/js/libs/jquery.touch.js"></script>
    <script src="assets/js/libs/wheel-indicator.js"></script>
    <script src="assets/js/main.js"></script>
@endsection