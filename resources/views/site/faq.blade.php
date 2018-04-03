@extends('site.layout')

@section('title',$model->seo_title)

@section('styles')
    @parent
    <link rel="stylesheet" href="{{asset('assets/css/lib/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/faq_main.css')}}">
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
            <h5 class="landscape-title">@lang('site.landscape_title')</h5>
            <p class="landscape-desc">@lang('site.landscape_desc')</p>
        </div>
    </div>

    <main class="content">
        <div class="content-section">

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
                                        {{$question->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            @include('site.chanks.navigate_box')
        </div>
    </main>
@endsection

@section('scripts')
    @parent
    <script src="{{asset('assets/js/libs/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/js/libs/wheel-indicator.js')}}"></script>
    <script src="{{asset('assets/js/faq_main.js')}}"></script>
@endsection