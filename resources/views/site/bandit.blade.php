@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" href="assets/css/drug-store/reset.css">
    <link rel="stylesheet" href="assets/css/drug-store/index.css">
    <link rel="stylesheet" href="assets/css/bandit.css">
@endsection

@section('body')
    <canvas class="can" style="position: absolute;top:0;left:0; width: 500px;height: 400px"></canvas>
    <div class="modal modal-band">
        <div class="modal__inner">
            <div class="modal__icons">
                <div class="modal__icon wh-hand">
                    <?php include 'assets/img/svg/bandit/wh-hand.svg'?>
                </div>
                <div class="modal__icon band-start">
                    <?php include 'assets/img/svg/bandit/band-start.svg'?>
                </div>
            </div>
            <div class="modal__text">{!! $model->modal_text !!}</div>
            <button class="modal__btn">{!! $model->modal_btn !!}</button>
        </div>
    </div>
    <div class="burger"></div>
    <div class="game-icons top-logo">
        <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt="" data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
    </div>
    <nav class="game-icons slider-controls slide-5">
        <a href="/with-who" class="str str-prev">
            <?php include 'assets/img/svg/bandit/str-prev.svg'?>
        </a>
        <a href="/condoms-white" class="str str-next">
            <?php include 'assets/img/svg/bandit/str-next.svg'?>
        </a>
        <div class="bullets">
            <?php include 'assets/img/svg/bandit/bullets.svg'?>
        </div>
    </nav>
    <div class="main-scene full bandit">
        <div class="games-wrapper">
            <div class="games full">
                <div class="game game2 full js-game2" id="game2">
                    <div class="game-wrap full">
                        <h1><span>{!! $model->title !!}</span></h1>
                        <div class="container-game">
                            <a href="/condoms-white/">
                                <div class="rocket-btn-wrap">
                                    <button class="rocket-btn">{!! $model->rocket_btn !!}</button>
                                </div>
                            </a>
                            <div class="rotator-game">
                                <div class="head-rotator">
                                    <span>{!! $model->rotator1 !!}</span>
                                    <span>{!! $model->rotator2 !!}</span>
                                    <span>{!! $model->rotator3 !!}</span>
                                    <span>{!! $model->rotator4 !!}</span>
                                </div>

                                <div class="spins-wrap ">
                                    <div class="rotator-row-wrap rotator-row1 resizeEl" id="spiner1">
                                        <div class="spin spin1 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-4"></div>
                                        </div>
                                        <div class="spin spin2 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-220"></div>
                                        </div>
                                        <div class="spin spin3 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-436"></div>
                                        </div>
                                        <div class="spin spin4 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-650"></div>
                                        </div>
                                        <div class="spin spin5 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-863"></div>
                                        </div>
                                        <div class="spin spin6 resizeEl" data-t-o="-450">
                                            <div class="spin-bg resizeEl" data-t-o="-450"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-1072"></div>
                                        </div>
                                        <div class="spin spin7 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-650"></div>
                                        </div>
                                    </div>
                                    <!--Spin 2-->
                                    <div class="rotator-row-wrap rotator-row2 resizeEl" id="spiner2">
                                        <div class="spin spin1 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-4"></div>
                                        </div>
                                        <div class="spin spin2 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-220"></div>
                                        </div>
                                        <div class="spin spin3 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-436"></div>
                                        </div>
                                        <div class="spin spin4 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-650"></div>
                                        </div>
                                        <div class="spin spin5 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-863"></div>
                                        </div>
                                        <div class="spin spin6 resizeEl" data-t-o="-450">
                                            <div class="spin-bg resizeEl" data-t-o="-450"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-1072"></div>
                                        </div>
                                        <div class="spin spin7 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-650"></div>
                                        </div>
                                    </div>
                                    <!--Spin 3-->
                                    <div class="rotator-row-wrap rotator-row3 resizeEl" id="spiner3">
                                        <div class="spin spin1 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-4"></div>
                                        </div>
                                        <div class="spin spin2 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-220"></div>
                                        </div>
                                        <div class="spin spin3 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-436"></div>
                                        </div>
                                        <div class="spin spin4 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-650"></div>
                                        </div>
                                        <div class="spin spin5 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-863"></div>
                                        </div>
                                        <div class="spin spin6 resizeEl" data-t-o="-450">
                                            <div class="spin-bg resizeEl" data-t-o="-450"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-1072"></div>
                                        </div>
                                        <div class="spin spin7 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-650"></div>
                                        </div>
                                    </div>
                                    <!--Spin 4-->
                                    <div class="rotator-row-wrap rotator-row4 resizeEl" id="spiner4">
                                        <div class="spin spin1 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-4"></div>
                                        </div>
                                        <div class="spin spin2 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-220"></div>
                                        </div>
                                        <div class="spin spin3 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-436"></div>
                                        </div>
                                        <div class="spin spin4 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-650"></div>
                                        </div>
                                        <div class="spin spin5 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-863"></div>
                                        </div>
                                        <div class="spin spin6 resizeEl" data-t-o="-450">
                                            <div class="spin-bg resizeEl" data-t-o="-450"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-1072"></div>
                                        </div>
                                        <div class="spin spin7 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-650"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pusk">
                                <div class="pusk-btn"></div>
                            </div>

                            <!--MEN-->
                            <div class="men-right">
                                <div class="men-wrap">
                                    <div class="men-on-off">
                                    </div>
                                    <div class="men-turn-on-off">
                                        <div class="men-turn-on-off-content" data-on="{!! $model->tumb_on_off[0] !!}" data-off="{!! $model->tumb_on_off[1] !!}">
                                            <div><span class="turn-on-off">{!! $model->tumb_on_off[0] !!}</span><br/>{!! $model->tumb_on_off[2] !!}</div>
                                            <div class="turn"></div>
                                        </div>
                                    </div>
                                    <div class="lightning-s"><img src="assets/img/bandit/men/lightnings1.png"><img src="assets/img/bandit/men/lightnings2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="game-shine"></div>-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/js/libs/detect.min.js"></script>
    <script src="assets/js/main22.js"></script>
    <script>
        $(document).ready(function () {

            var modalVis = true,
                modalAnimId,
                btn = $('.band-start'),
                hand = $('.wh-hand path');

            $('.modal__btn').on('click', function (e) {
                e.preventDefault();
                $('.modal').fadeOut();
                modalVis = false;
            });

            function modalAnim() {
                if ((btn.offset().left <= hand.offset().left) && ((btn.offset().left + btn.width() - 12) >= hand.offset().left)) {
                    btn.addClass('active');
                } else {
                    btn.removeClass('active');
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