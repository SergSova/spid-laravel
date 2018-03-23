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
    <link rel="stylesheet" href="/assets/js/libs/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/assets/js/libs/slick.css">
    <link rel="stylesheet" href="/assets/css/main_about.css">
@endsection

@section('body')
    <div class="preloader">
        <div class="preloader-inner">
            <?php include "assets/img/svg/about/preloader-inner.svg"?>
        </div>
    </div>
    <main class="content none">
        <div class="content-section">
            <div class="logo-box">
                <img class="js-hover" src="/assets/img/drug-store/drug-store-logo1.svg" alt="" data="/assets/img/drug-store/drug-store-logo2.svg,/assets/img/drug-store/drug-store-logo3.svg,/assets/img/drug-store/drug-store-logo4.svg" data-src="/assets/img/drug-store/drug-store-logo1.svg">
            </div>
            <div class="menu-box">
                <img class="menu-box_img" src="/assets/img/about/menu-burger.png" alt="">

                <strong class="menu-box_text">меню</strong>
            </div>

            <div class="content__left-box">
                <h1 class="main-caption clip-fix">о нас</h1>
            </div>

            <div class="content__center-box">
                <div class="content__additional-logo-box">
                    <div class="text">при поддержке</div>

                    <img src="assets/img/about/alliance-logo.png" alt="">

                    <img src="assets/img/about/elton-john-logo.png" alt="">
                </div>

                <h2 class="content__heading">О проекте</h2>

                <div class="content__text-wrap">

                    <div class="content__text">Есть в жизни нечто, что подтолкнуло нас открыть Drugstore - это удовольствия на грани риска.

                        <br>
                        <br>

                        Каждому новому поколению жизнь - как добрый дилер - предлагает всё, что человечество изобрело и синтезировало для получения удовольствий.

                        <br>
                        <br>

                        Каждому новому поколению жизнь - как опытная любовница - предлагает всё, что человечество испробовало для получения наслаждения.
                    </div>

                    <div class="content__text">Drugstore - это «лайфхаки» о том, как получать от жизни удовольствия и наслаждения с умом.
                        <br>
                        Drugstore - это личные истории и статьи о молодости и сексуальности, удовольствиях и развлечениях, здорового образа жизни и саморазвитии, дружбе и любви.
                        <br>
                        Drugstore - это онлайн-тест и анонимные консультации в чате для оценки уровня личного риска для здоровья и жизни.
                        <br>
                        При поддержке EAJF
                    </div>

                    <div class="content__sign">Получай удовольствие с умом,<br>команда Drugstore</div>
                </div>

                <div id="logo-slider">
                    <div class="logo-slider__img-wrap">
                        <img src="assets/img/about/logo-slider-1.png" alt="">
                        <img src="assets/img/about/logo-slider-2.png" alt="">
                        <img src="assets/img/about/logo-slider-3.png" alt="">
                        <img src="assets/img/about/logo-slider-4.png" alt="">
                        <img src="assets/img/about/logo-slider-5.png" alt="">
                    </div>

                    <div class="logo-slider__img-wrap">
                        <img src="assets/img/about/logo-slider-5.png" alt="">
                        <img src="assets/img/about/logo-slider-3.png" alt="">
                        <img src="assets/img/about/logo-slider-4.png" alt="">
                        <img src="assets/img/about/logo-slider-2.png" alt="">
                        <img src="assets/img/about/logo-slider-1.png" alt="">
                    </div>
                </div>
            </div>

            <div class="content__bottom-box">
                <div class="freshagency-logo-box">
                    <img src="assets/img/about/freshagency-logo.png" alt="">
                </div>

                <div class="copyright-text">Copyright © 2018 Drugstore. Все права защищены.</div>
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
