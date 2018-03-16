@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" href="assets/css/drug-store/reset.css">
    <link rel="stylesheet" href="assets/css/drug-store/index.css">
    <link rel="stylesheet" href="assets/css/sliderCanvas.css">
    <link rel="stylesheet" href="assets/css/resize.css">
@endsection

@section('body')
    <div class="modal modal-bb">
        <div class="modal__inner">
            <div class="modal__icons">
                <div class="modal__icon wh-hand">
                    <?php include('assets/img/svg/slide-bubles/wh_hand.svg') ?>
                </div>
                <div class="modal__icon bb-click">
                    <?php include('assets/img/svg/slide-bubles/bb_click.svg') ?>
                </div>
                <div class="modal__icon bb-bubles">
                    <div class="bb-buble bb-buble__1 yellow">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-1.svg') ?>
                    </div>
                    <div class="bb-buble bb-buble__2 yellow">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-2.svg') ?>
                    </div>
                    <div class="bb-buble bb-buble__3 yellow">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-3.svg') ?>
                    </div>
                    <div class="bb-buble bb-buble__4 yellow">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-4.svg') ?>
                    </div>
                    <div class="bb-buble bb-buble__5 pink">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-5.svg') ?>
                    </div>
                    <div class="bb-buble bb-buble__6 pink">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-6.svg') ?>
                    </div>
                    <div class="bb-buble bb-buble__7 pink">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-7.svg') ?>
                    </div>
                    <div class="bb-buble bb-buble__8 pink">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-8.svg') ?>
                    </div>
                    <div class="bb-buble bb-buble__9 pink">
                        <?php include('assets/img/svg/slide-bubles/bb-buble-9.svg') ?>
                    </div>
                </div>
            </div>
            <div class="modal__text"><p>{!! $model->modal_text !!}</p></div>
            <button class="modal__btn">{!! $model->modal_btn !!}</button>
        </div>
    </div>
    <div class="burger"></div>
    <div class="game-icons top-logo">
        <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt="" data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
    </div>
    <nav class="game-icons slider-controls slide-2">
        <a href="<?= $prev['alias'] ?? '/aids'?> " class="str str-prev">
            <?php include('assets/img/svg/slide-bubles/str_prev.svg') ?>
        </a>
        <a href="<?= $next['alias'] ?? '/slide-rocket'?>" class="str str-next">
            <?php include('assets/img/svg/slide-bubles/str_next.svg') ?>
        </a>
        <div class="bullets">
            <?php include('assets/img/svg/slide-bubles/bullets.svg') ?>
        </div>
    </nav>
    <div class="main-scene full">
        <div id="bubles-container"></div>
        <div class="games-wrapper">
            <div class="games full bubbles">
                <h1 class="neon-blue bubbles-title">
                    <span>{!! $model->title !!}</span>
                    <span class="went-wrong">{!! $model->wrong !!}</span>
                </h1>
                <div class="game game4 full js-game4" id="game4">
                    <div class="game-wrap full">
                    </div>
                </div>
                <div class="game game5 full js-game5" id="game5">
                    <div class="game-wrap full"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/js/libs/pixi.js"></script>
    <script src="assets/js/libs/bump.js"></script>
    <script src="assets/js/libs/tweenMax.js"></script>
    <script src="assets/js/libs/CSSPlugin.min.js"></script>
    <script src="assets/js/libs/spriteUtilities.js"></script>
    <script>
        var modalVis = true;

        $(document).ready(function () {

            var modalAnimId,
                hand = $('.wh-hand path'),
                cl = $('.bb-click'),
                containerOffsetT = $('.modal__icons').offset().top,
                containerOffsetL = $('.modal__icons').offset().left,
                bubles = $('.bb-buble'),
                clickTimer;

            $('.modal__btn').on('click', function (e) {
                e.preventDefault();
                $('.modal').fadeOut();
                modalVis = false;
                $(window).trigger('start');
            });

            function modalAnim() {
                bubles.each(function () {
                    var th = $(this),
                        t = hand.offset().top - containerOffsetT,
                        l = hand.offset().left - containerOffsetL;

                    cl.css({'left': (l - cl.width() / 3.5) + 'px', 'top': (t - cl.height() / 5) + 'px'});

                    if (((th.offset().left + th.width() * 0.4) <= hand.offset().left) && ((th.offset().left + th.width() * 0.6) >= hand.offset().left)
                        && ((th.offset().top <= hand.offset().top) && ((th.offset().top + th.height()) >= hand.offset().top))) {
                        cl.css({'opacity': 1});
                    } else {
                        clearTimeout(clickTimer);
                        clickTimer = setTimeout(function () {
                            cl.css({'opacity': 0});
                        }, 25);
                    }

                })

                if (modalVis) {
                    modalAnimId = requestAnimationFrame(modalAnim)
                } else {
                    cancelAnimationFrame(modalAnimId)
                }
            }

            modalAnim()
        })
    </script>
    <script src="assets/js/bubles.js"></script>
@endsection