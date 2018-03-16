@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" href="assets/css/drug-store/reset.css">
    <link rel="stylesheet" href="assets/css/drug-store/index.css">
@endsection

@section('body')
    <div class="modal modal-kolumb">
        <div class="modal__inner">
            <div class="modal__icons">
                <div class="modal__icon k-hands">
                    <div class="k-hand k-hand_hold">
                        <?php include "assets/img/svg/aids/k-hand_hold.svg"?>
                    </div>
                    <div class="k-hand k-hand_move">
                        <?php include "assets/img/svg/aids/k-hand_move.svg"?>
                    </div>
                </div>
                <div class="modal__icon k-hats">
                    <div class="k-hat">
                        <?php include "assets/img/svg/aids/k-hat.svg"?>
                    </div>
                </div>
            </div>
            <div class="modal__text">{!! $model->modal_text !!}</div>
            <button class="modal__btn">{!! $model->modal_btn !!}</button>
        </div>
        <div class="modal-bottom">
            {!! $model->modal_bottom !!}
            <div class="modal-bottom__arrow">
                <?php include "assets/img/svg/aids/modal-bottom__arrow.svg"?>
            </div>
        </div>
    </div>
    <div class="game-icons burger"></div>
    <div class="game-icons top-logo">
        <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt="" data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
    </div>
    <div class="game-icons coffin">
        <img src="assets/img/drug-store/coffin.png" alt="">
    </div>
    <nav class="game-icons slider-controls slide-1">
        <a href="<?= $prev['alias'] ?? '/bandit'?>" class="str str-prev">
            <?php include "assets/img/svg/aids/str-prev.svg"?>
        </a>
        <a href="<?= $next['alias'] ?? '/slide-bubles'?>" class="str str-next">
            <?php include "assets/img/svg/aids/str-next.svg"?>
        </a>
        <div class="bullets">
            <?php include "assets/img/svg/aids/bullets.svg"?>
        </div>
    </nav>
    <div class="main-scene full">
        <div class="games-wrapper">
            <div class="games full">
                <div class="game game1 full js-game1" id="game1">
                    <div class="game-wrap columb">
                        <h1>{!! $model->title !!}</h1>
                        <div class="bg-shlapnik full">
                            <div class="mouse resizeEl" data-w="253" data-h="207" data-bg-w="253" data-bg-h="2484"></div>
                            <div class="kolumb-plus-hats">
                                <div class="hats">
                                    <div class="hat resizeEl"></div>
                                    <div class="hat resizeEl"></div>
                                    <div class="hat resizeEl"></div>
                                    <div class="hat resizeEl"></div>
                                    <div class="hat resizeEl"></div>
                                </div>
                                <div class="hats-covers">
                                    <div class="hat-cover"></div>
                                    <div class="hat-cover"></div>
                                    <div class="hat-cover"></div>
                                    <div class="hat-cover"></div>
                                    <div class="hat-cover last"></div>
                                </div>
                                <div class="kolumb-wrap ">
                                    <div class="kolumb resizeEl" data-bg-w="4950" data-bg-h="413">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/js/columb.js"></script>
    <script>
        var modalVis = true;

        $(document).ready(function () {

            var modalAnimId,
                handWrap = $('.k-hands'),
                hand = $('.k-hand_move svg > g'),
                containerOffsetT = $('.modal__icons').offset().top,
                containerOffsetL = $('.modal__icons').offset().left,
                bubles = $('.bb-buble'),
                hat = $('.k-hat>svg>g'),
                clickTimer;

            $('.modal__btn').on('click', function (e) {
                e.preventDefault();
                $('.modal').fadeOut();
                modalVis = false;
                $(window).trigger('start');
            });

            function modalAnim() {
                //console.log(hand, hat.offset().top)
                if ((handWrap.offset().top + handWrap.height() * 0.68) >= hat.offset().top) {
                    handWrap.addClass('hold');
                } else {
                    handWrap.removeClass('hold');
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