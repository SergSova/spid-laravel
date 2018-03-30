@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" href="assets/css/lib/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/css/faq_main.css">
@endsection

@section('body')

    <div class="preloader">
        <div class="preloader-inner">
            <?php include 'assets/img/svg/consultants/preloader-inner.svg'?>
        </div>
    </div>

    <div class="landscape">
        <div class="landscape-inner">
            <div class="landscape-icon">
                <div class="landscape-icon__condom_fill"></div>
                <div class="landscape-icon__condom_stroke"></div>
                <div class="landscape-icon__condom_arrow"></div>
            </div>

            <h5 class="landscape-title">примите горизонтальное положение</h5>
            
            <p class="landscape-desc">переверните экран</p>
        </div>
    </div>

    <main class="content">
        <div class="content-section">
            <div class="logo-box">
                <img class="js-hover" src="/assets/img/drug-store/drug-store-logo1.svg" alt="" data="/assets/img/drug-store/drug-store-logo2.svg,/assets/img/drug-store/drug-store-logo3.svg,/assets/img/drug-store/drug-store-logo4.svg" data-src="/assets/img/drug-store/drug-store-logo1.svg">
            </div>

            <div class="content__left-box">
                <div class="main-caption clip-fix">{{$model->title}}</div>

                <div class="content__preview-box">
                    <div class="text">
                        {!! $model->description !!}
                    </div>
                </div>

            </div>

            <div class="content__center-box">
                <h1 class="content__heading">
                    <span>{{$model->longtitle}}</span>
                </h1>

                <div class="faq-content-box">
                    <div class="faq-content-wrapper">
                        @foreach($model->getQuestions() as $question)
                            <div class="faq-content__question">
                                <h4 class="faq-content__heading">{{$question->question}}
                                    <div class="faq-content__icon"></div>
                                </h4>

                                <div class="faq-content__description">
                                    <div class="faq-content__description-inner-wrap">
                                        <div class="faq-content__description-line"></div>
                                        {{$question->answer}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="navigate-box">
                <div class="navigate-box__left">
                    <div class="navigate-box__left-wrap">
                        <span class="navigate-box__line"></span>

                        <span class="navigate-box__line"></span>
                    </div>

                    <div class="navigate-box__text">предыдущая <br> страница</div>
                </div>

                <div class="navigate-box__right">
                    <div class="navigate-box__right-wrap">
                        <span class="navigate-box__line"></span>
                            
                        <span class="navigate-box__line"></span>
                    </div>

                    <div class="navigate-box__text">следующая <br> страница</div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="assets/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/libs/wheel-indicator.js"></script>
    <script src="assets/js/faq_main.js"></script>
@endsection