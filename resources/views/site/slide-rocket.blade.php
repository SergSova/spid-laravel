@extends('site.layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/drug-store/reset.css">
    <link rel="stylesheet" href="assets/css/drug-store/index.css">
    <link rel="stylesheet" href="assets/css/sliderCanvas.css">
    <link rel="stylesheet" href="assets/css/resize.css">
@endsection

@section('body')
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
                {!! $model->modal_text !!}
            </div>
            <button class="modal__btn">{!! $model->modal_btn !!}</button>
        </div>
    </div>
    <div class="burger"></div>
    <div class="game-icons top-logo">
        <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt="" data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
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

                <span class="rocket-btn-text">{!! $model->text_bottom[0] !!}</span>
                <button class="rocket-btn">{!! $model->text_bottom[1] !!}</button>
                <span class="rocket-btn-text">{!! $model->text_bottom[2] !!}</span>
            </div>
        </div>
        <div class="games-wrapper">
            <div class="games full planets">
                <h1 class="rocket-title neon-pink"><span>{!! $model->title !!}</span>
                    <span class="went-wrong">{!! $model->wrong !!}</span></h1>
                <div class="game game5 full js-game5" id="game5">
                    <div class="game-wrap full"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/js/main22.js"></script>
    <script src="assets/js/libs/pixi.js"></script>
    <script src="assets/js/libs/bump.js"></script>
    <script src="assets/js/libs/tweenMax.js"></script>
    <script src="assets/js/libs/CSSPlugin.min.js"></script>
    <script src="assets/js/libs/spriteUtilities.js"></script>
    <script src="assets/js/rocket.js"></script>
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