@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" href="assets/css/drug-store/reset.css">
    <link rel="stylesheet" href="assets/css/drug-store/index.css">
    <link rel="stylesheet" href="assets/css/with-who.css">
    <link rel="stylesheet" href="assets/css/resize.css">
@endsection

@section('body')
    <div class="modal modal-wh">
        <div class="modal__inner">
            <div class="modal__icons">
                <div class="modal__icon wh-hand">
                    <?php include "assets/img/svg/with-who/wh-hand.svg"?>
                </div>
                <div class="modal__icon wh-peoples">
                    <div class="wh-people wh-people__1">
                        <?php include "assets/img/svg/with-who/wh-people__1.svg"?>
                    </div>
                    <div class="wh-people wh-people__2">
                        <?php include "assets/img/svg/with-who/wh-people__2.svg"?>
                    </div>
                    <div class="wh-people wh-people__3">
                        <?php include "assets/img/svg/with-who/wh-people__3.svg"?>
                    </div>
                </div>
            </div>
            <div class="modal__text">
                {!! $model->modal_text !!}
            </div>
            <button class="modal__btn">{!! $model->modal_btn !!}</button>
        </div>
    </div>
    <div class="burger"></div>
    <div class="game-icons top-logo">
        <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt=""
             data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
    </div>
    <nav class="game-icons slider-controls slide-4">
        <a href="/slide-rocket" class="str str-prev">
            <?php include "assets/img/svg/with-who/str-prev.svg"?>
        </a>
        <a href="/bandit" class="str str-next">
            <?php include "assets/img/svg/with-who/str-next.svg"?>
        </a>
        <div class="bullets">
            <?php include "assets/img/svg/with-who/bullets.svg"?>
        </div>
    </nav>
    <div class="container with-who">
        <div class="party-bg">
            <div class="title">
                <h1 class="neon-pink">{!! $model->title !!}</h1>
            </div>
            <div class="humans">
                @foreach($humans as $human)
                    <div class="human">
                        <div class="human-option">
                            <div class="name-illness">
                                <div class="name">{{$human->title}}</div>
                                <div class="illness">{!!  str_replace('/','<br>', $human->illness) !!}</div>
                            </div>
                            <div class="human-img">
                                <img src="{{$human->images}}">
                            </div>
                            <div class="human-popup">
                                <div class="btn-close"></div>
                                <div class="pop-title">{!! $model->pop_title !!}</div>
                                <form metod="GET" action="" accept-charset="UTF-8">
                                    <div class="form-you-know">
                                        @for($i=1;$i<=6;$i++)
                                            <label class="ill" for="check-ill-1-{{$i}}">
                                                <span>{!! $model->{'chk_'.$i} !!}</span>
                                                <input type="checkbox" class="checkbox" id="check-ill-1-{{$i}}">
                                                <span class="checkbox-custom"></span>
                                            </label>
                                        @endfor
                                    </div>
                                    <!-- <button type="" class="btn-test">Пройди тест</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/js/main22.js"></script>
    <script src="assets/js/with-who.js"></script>
@endsection