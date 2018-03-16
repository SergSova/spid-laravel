@extends('site.layout')

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
            <div class="main-caption clip-fix">тест</div>

            <div class="test__questions-wrap">

                <div class="test__preview-box">
                    <div class="text">
                        <div>
                            Тут всё просто. Можно проигнорировать, а можно оценить свой личный риск инфицироваться ВИЧ - выбор за тобой. Каждое новое поколение умнее и свободнее предыдущего, а критическое мышление - один из самых важных навыков в мире будущего - убеждена команда Drugstore.
                        </div>

                        <div>
                            Чтобы оценить свой личный риск инфицироваться ВИЧ, необходимо пройти короткий тест:
                        </div>

                        <ul class="list">
                            <li>отвечай быстро, не задумываясь</li>
                            <li>стоит ли говорить, что отвечать нужно честно</li>
                            <li>выбери наиболее точные и подходящие для тебя ответы, и нажми «продолжить»</li>
                        </ul>

                        <div>Получай удовольствие с умом, <br> команда Drugstore</div>

                        <button class="test__preview-box-btn">пройти тест</button>
                    </div>
                </div>

                <form class="questions">
                    <div class="questions-wrap"></div>
                    <button type="submit" class="js-questions-next test__test-btn none">далее</button>
                </form>

                <button style="font-size: 16px;" class="js-questions-refresh">refresh</button>
            </div>
        </div>

        <div class="test-content">
            <h3 class="test-content__heading">
                <span>Первый тест</span>
            </h3>

            <div class="test-content_tv-box">
                <div class="test-content_tv-wrap">
                    <div class="test-content_tv-channels">
                        <img class="test-default-tv" src="assets/img/aids-test/test-default-tv.gif" alt="">
                        <!--<iframe class="test-default-tv test-default-tv_iframe" id="coubVideo" src="" allowfullscreen="true" frameborder="0"></iframe>-->

                        <video class="test-default-tv test-default-tv_iframe" src="assets/video/noise.mp4" loop="loop" autoplay="autoplay"></video>
                        <audio class="test-noize-audio" style="display: none;" src="assets/video/noise-audio.mp3" loop autoplay></audio>
                        <!--<video class="test-default-tv test-default-tv_iframe" src="" autoplay="autolay" loop="loop" muted="true"></video>-->
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
    <script src="assets/js/libs/wheel-indicator.js"></script>
    <script src="assets/js/libs/rangeslider.js"></script>
    <script src="assets/js/test_main.js"></script>
@endsection