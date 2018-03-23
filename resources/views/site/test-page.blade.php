<?php

/**
 * @var \App\StaticPage $model
 */
?>
@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/rangeslider.css">
    <link rel="stylesheet" href="assets/css/test_main.css">
@endsection

@section('body')
    <div class="logo-box">
        <img src="assets/img/aids-test/logo-white.png" alt="">
    </div>
    <div class="menu-box">
        <img class="menu-box_img" src="assets/img/aids-test/menu-burger.png" alt="">

        <strong class="menu-box_text">меню</strong>
    </div>
    <main class="content content-section test-section test-video-fix">

        <div class="test__left-box">
            <div class="main-caption clip-fix">{{$model->title}}</div>

            <div class="test__questions-wrap">

                <div class="test__preview-box">
                    <div class="text">
                        {!! $model->description !!}
                        <button class="test__preview-box-btn">{{$model->test_btn}}</button>
                    </div>
                </div>

                <form class="questions">
                    <div class="questions-wrap"></div>
                    <button type="submit" class="js-questions-next test__test-btn none">{{$model->test_btn_next}}</button>
                </form>

                <button style="font-size: 16px;" class="js-questions-refresh">refresh</button>
            </div>
        </div>

        <div class="test-content">
            <h3 class="test-content__heading">
                <span>{{$model->longtitle}}</span>
            </h3>

            <div class="test-content_tv-box">
                <div class="test-content_tv-wrap">
                    <div class="test-content_tv-channels">
                        <img class="test-default-tv" src="assets/img/aids-test/test-default-tv.gif" alt="">
                        <video class="test-default-tv test-default-tv_iframe" src="assets/video/noise.mp4" loop="loop"
                               autoplay="autoplay"></video>
                        <audio class="test-noize-audio" style="display: none;" src="assets/video/noise-audio.mp3" loop
                               autoplay></audio>
                        <img src="assets/img/aids-test/test-tv-tv-stand.png" alt="">
                    </div>
                    <div class="test-content_tv_togglers-wrap">
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                        <div class="test-content_tv_toggler-item"></div>
                    </div>
                    <div class="tv-volume">
                        <div class="sound">
                            <div class="sound--icon fa fa-volume-off"></div>
                            <div class="sound-wave__wrapper">
                                <div class="sound--wave sound--wave_one"></div>
                                <div class="sound--wave sound--wave_two"></div>
                            </div>
                        </div>
                        <div>
                            <input type="range" min="0" val="0.5" max="1" step="0.1" data-rangeslider>
                            <output></output>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img class="test-bottom-shadow" src="assets/img/aids-test/test-bottom-shadow.png" alt="">
    </main>
@endsection

@section('scripts')
    @parent
    <script src="assets/js/libs/wheel-indicator.js"></script>
    <script src="assets/js/libs/rangeslider.js"></script>
    <script>
        var test_content = [
            {
                id: 0,
                label: "Ваш пол",
                user: true,
                vars: [
                    {
                        k: "М",
                        v: "ММ"
                    },
                    {
                        k: "Ж",
                        v: "ЖЖ"
                    },
                    {
                        k: "Трансгендер <div class='test-in'>(человек, чья гендерная идентичность не совпадает с биологическим полом)</div>",
                        v: "Трансгендер (человек, чья гендерная идентичность не совпадает с биологическим полом)"
                    }
                ]
            },
            {
                id: 1,
                label: "Ваш возраст",
                user: true,
                vars: [
                    {
                        k: "до 14",
                        v: "до 14"
                    },
                    {
                        k: "14-18",
                        v: "14-18"
                    },
                    {
                        k: "19-24",
                        v: "19-24"
                    },
                    {
                        k: "25 и старше",
                        v: "25 и старше"
                    }
                ]
            },
            {
                id: 2,
                label: "Сколько сексуальных партнеров у вас было за последние 6  месяцев?",
                vars: [
                    {
                        k: "1",
                        v: "M"
                    },
                    {
                        k: "2",
                        v: "C"
                    },
                    {
                        k: "3 или больше",
                        v: "B"
                    },
                    {
                        k: "Ни одного",
                        v: "0"
                    }
                ]
            },
            {
                id: 3,
                label: "Что вы употребляете перед сексом?",
                vars: [
                    {
                        k: "Алкоголь",
                        v: "C"
                    },
                    {
                        k: "Наркотики",
                        v: "B",
                        hint: "любые наркотики включая метамфетамин (фен), экстази или марихуану"
                    },
                    {
                        k: "Ни то, ни другое",
                        v: "0"
                    }
                ]
            },
            {
                id: 4,
                label: "Как вы употребляете наркотик?",
                vars: [
                    {
                        k: "При помощи шприца",
                        v: "B"
                    },
                    {
                        k: "Курю",
                        v: "M"
                    },
                    {
                        k: "Глотаю",
                        v: "C"
                    },
                    {
                        k: "Нюхаю",
                        v: "C"
                    },
                    {
                        k: "Не употребляю наркотики",
                        v: "0"
                    }
                ]
            },
            {
                id: 5,
                label: "Был ли у вас секс без презерватива? <span>(можете отметить несколько вариантов)</span>",
                multi: true,
                vars: [
                    {
                        k: "Оральный секс без презерватива",
                        v: "M"
                    },
                    {
                        k: "Вагинальный секс без презерватива",
                        v: "B"
                    },
                    {
                        k: "Анальный секс без презерватива ",
                        v: "B"
                    },
                    {
                        k: "Секс без презерватива со случайным партнером",
                        v: "B"
                    },
                    {
                        k: "Групповой секс без презерватива",
                        v: "B"
                    },
                    {
                        k: "Не было",
                        v: "0",
                        uncheckAll: true
                    }
                ]
            },
            {
                id: 6,
                label: "Можете ли вы по внешнему виду определить есть ли у человека ВИЧ?",
                vars: [
                    {
                        k: "Да",
                        v: "B"
                    },
                    {
                        k: "Нет",
                        v: "0"
                    }
                ]
            },
            {
                id: 7,
                label: "Употреблял ли кто-то из ваших сексуальных партнеров наркотики?",
                vars: [
                    {
                        k: "Да",
                        v: "B"
                    },
                    {
                        k: "Нет",
                        v: "M"
                    },
                    {
                        k: "Не знаю",
                        v: "C"
                    },
                    {
                        k: "Нет сексуальных партнеров",
                        v: "0"
                    }
                ]
            },
            {
                id: 8,
                label: "Сможете ли вы отказаться от секса со случайным партнером если нет презерватива?",
                vars: [
                    {
                        k: "Смогу отказаться",
                        v: "0"
                    },
                    {
                        k: "Не смогу отказаться ",
                        v: "B"
                    }
                ]
            },
            {
                id: 9,
                label: "Был ли у вас секс с ВИЧ-инфицированным партнером?",
                vars: [
                    {
                        k: "Да",
                        v: "B"
                    },
                    {
                        k: "Нет",
                        v: "0"
                    },
                    {
                        k: "Не знаю",
                        v: "B"
                    }
                ]
            },
            {
                id: 10,
                label: "Были ли у вас заболевания передающиеся половым путем?",
                vars: [
                    {
                        k: "Да",
                        v: "B"
                    },
                    {
                        k: "Нет",
                        v: "0"
                    }
                ]
            },
            {
                id: 11,
                label: "Тестировались ли вы на ВИЧ?",
                vars: [
                    {
                        k: "Да",
                        v: "0"
                    },
                    {
                        k: "Нет",
                        v: "B"
                    }
                ]
            },
        ];
        var totals = ['нет риска, тестироваться не нужно',
            'минимальный риск',
            'средняя степень риска ',
            'высокий риск'];
    </script>
    <script src="assets/js/test_main.js"></script>
@endsection