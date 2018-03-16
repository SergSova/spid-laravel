@extends('site.layout')

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
                    <!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 640 480" style="enable-background:new 0 0 640 480;" xml:space="preserve">
                <path d="M524.1,353.6c-7.4-18.5-9.1-32.1-10.7-45.2c-2.2-17.6-4.5-35.9-20.6-64l-44.4-76.9c-7.1-12.4-24.9-17.1-37.3-10
                    c-4.1,2.4-7.6,6-10,10.3c-4.6-6.6-11.3-11.3-19.2-13.4c-8.8-2.4-18-1.1-25.9,3.4c-7.5,4.3-12.7,11.1-15.3,18.8
                    c-10.7-8.8-26.2-10.6-38.8-3.3c-7.4,4.3-12.8,11-15.4,19l-58.7-82.6C210.5,86.2,193.5,91,184.9,96c-7.9,4.6-13.2,11.9-14.7,20.5
                    c-1.5,8,0.3,16.7,4.9,24.8l94.5,153.5c2,3.2,6.2,4.2,9.4,2.2c3.2-2,4.2-6.2,2.2-9.4l-94.4-153.3c-2.9-5.1-4.1-10.6-3.2-15.3
                    c0.9-4.7,3.7-8.6,8.1-11.1c3.1-1.8,12.4-7.2,25,10l73.1,102.8c2.1,3,6.2,3.8,9.3,1.8c3.1-2,4-6,2.2-9.2c-2.7-4.7-3.5-10.3-2-15.5
                    c1.4-5.3,4.8-9.7,9.5-12.4c9.8-5.6,22.3-2.3,28,7.5l6.8,11.8c0,0,0,0,0,0c1.9,3.3,6.1,4.4,9.3,2.5c3.3-1.9,4.4-6.1,2.5-9.3
                    c-5.6-9.8-2.3-22.3,7.5-28c4.7-2.7,10.3-3.5,15.5-2c5.3,1.4,9.7,4.8,12.4,9.5l10.2,17.7c0,0,0,0,0,0c1.9,3.3,6.1,4.4,9.3,2.5
                    c3.3-1.9,4.4-6.1,2.5-9.3c-1.7-3-2.2-6.8-1.2-10.4c1-3.6,3.2-6.6,6.2-8.3c6-3.5,15.2-1,18.7,5l44.4,76.9
                    c14.8,25.6,16.8,41.8,18.9,58.8c1.6,12.6,3.2,25.7,9.5,43l-132.1,76.3c-23-24.8-58.2-50.8-104.6-77.3c-5-2.9-10-5.7-14.9-8.3
                    c-12.5-6.8-21.4-20.4-21.6-33.1c-0.1-5.7,1.7-13.7,10.7-18.8c3.3-1.9,4.4-6.1,2.5-9.3c-1.9-3.3-6.1-4.4-9.3-2.5
                    c-11.5,6.6-17.7,17.6-17.5,30.8c0.2,17.6,11.7,35.6,28.7,44.9c4.8,2.6,9.7,5.4,14.7,8.2c47.8,27.3,83.1,53.8,104.9,78.7
                    c1.3,1.5,3.2,2.3,5.1,2.3c1.2,0,2.3-0.3,3.4-0.9l141.9-81.9C524.1,360.4,525.4,356.8,524.1,353.6L524.1,353.6z M524.1,353.6"/>
                </svg>
                </div>
                <div class="modal__icon band-start">
                    <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 640 480" style="enable-background:new 0 0 640 480;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:none;stroke:#9DBB1F;stroke-width:15;stroke-miterlimit:10;}
                        .st1{fill:#0E0F0F;}
                    </style>
                        <ellipse class="st0" cx="324" cy="170.7" rx="308.3" ry="111.9"/>
                        <path class="st0" d="M627.5,288.5c0,58.5-136.9,106-305.9,106S15.8,347,15.8,288.5"/>
                        <line class="st0" x1="15.8" y1="170.7" x2="15.8" y2="293.3"/>
                        <line class="st0" x1="632.3" y1="170.7" x2="627.1" y2="296.8"/>
                        <g>
                            <path class="st1" d="M234.8,125.4V202h-17.6v-62.2h-34.6V202H165v-76.6H234.8z"/>
                            <path class="st1" d="M323.1,125.4L290.5,186c-3.1,5.8-6.9,10.3-11.3,13.2c-4.4,3-9.2,4.5-14.4,4.5c-4,0-8.2-0.9-12.5-2.6l4.3-13.5
                            c3.1,0.9,5.6,1.4,7.7,1.4c2.2,0,4.2-0.5,5.9-1.6c1.8-1.1,3.4-2.7,4.8-5l0.7-0.9l-30.2-56.3h18.9l20.4,41.2l21-41.2H323.1z"/>
                            <path class="st1" d="M345.7,198.3c-6.3-3.4-11.3-8.1-14.9-14.1c-3.6-6-5.4-12.8-5.4-20.4c0-7.6,1.8-14.4,5.4-20.4
                            c3.6-6,8.6-10.7,14.9-14.1c6.3-3.4,13.4-5.1,21.3-5.1c6.6,0,12.6,1.2,18,3.5c5.4,2.3,9.9,5.7,13.5,10.1l-11.4,10.5
                            c-5.2-6-11.6-9-19.3-9c-4.7,0-9,1-12.7,3.1c-3.7,2.1-6.6,5-8.7,8.7c-2.1,3.7-3.1,8-3.1,12.7c0,4.7,1,9,3.1,12.7
                            c2.1,3.7,5,6.6,8.7,8.7c3.7,2.1,8,3.1,12.7,3.1c7.7,0,14.1-3,19.3-9.1l11.4,10.5c-3.7,4.5-8.2,7.8-13.6,10.2
                            c-5.4,2.3-11.4,3.5-18.1,3.5C359.1,203.3,352,201.6,345.7,198.3z"/>
                            <path class="st1" d="M439.8,171.1h-12.3V202h-17.6v-76.6h17.6v31h12.7l20.1-31h18.7l-25.1,37l25.8,39.6h-20.1L439.8,171.1z"/>
                        </g>
                </svg>
                </div>
            </div>
            <div class="modal__text"><p>проверь свою удачу,</p><p>сыграй в рулетку</p></div>
            <button class="modal__btn">ок, ясно-ПОНЯТНО</button>
        </div>
    </div>
    <div class="burger"></div>
    <div class="game-icons top-logo">
        <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt="" data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
    </div>
    <nav class="game-icons slider-controls slide-5">
        <a href="/with-who" class="str str-prev">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.08 40.94"><defs><style>.cls-1,.cls-2{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.75px;}.cls-1{stroke-linecap:square;}</style></defs><title>Ресурс 4</title><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path id="left-shoot" class="cls-1" d="M63.18,4.85a9.12,9.12,0,0,0-8.92,6"/><path id="left-shoot" data-name="left-shoot" class="cls-1" d="M51.92,5c2.65,1.71,2.11,5.51,2.14,5.6"/></g><g id="Слой_3" data-name="Слой 3"><g id="right-revol"><line class="cls-2" x1="32.29" y1="2.37" x2="32.29" y2="21.57"/><rect class="cls-2" x="0.38" y="4.68" width="31.92" height="7.15" transform="translate(32.67 16.52) rotate(-180)"/><rect class="cls-2" x="12.47" y="11.83" width="19.82" height="4.48" transform="translate(44.77 28.15) rotate(-180)"/><line class="cls-2" x1="1.21" y1="0.38" x2="1.21" y2="4.68"/><line class="cls-1" x1="4.39" y1="0.53" x2="7.87" y2="4.44"/><line class="cls-1" x1="1.21" y1="0.38" x2="4.04" y2="0.38"/><line class="cls-1" x1="32.29" y1="2.58" x2="46.65" y2="2.58"/><line class="cls-1" x1="32.29" y1="21.57" x2="46.65" y2="21.57"/><path class="cls-1" d="M47.51,21.61"/><path class="cls-1" d="M53.79,23.34"/><path class="cls-1" d="M47.17,21.57a6.69,6.69,0,0,1-1.48,4.68,6.36,6.36,0,0,1-4.48,2.38,6.52,6.52,0,0,1-6.82-6.54"/><line class="cls-1" x1="43.13" y1="21.74" x2="41.62" y2="25.11"/><path class="cls-1" d="M69.37,27.72"/><path class="cls-1" d="M57.14,15.41a18.21,18.21,0,0,1,7.07,2.45,12,12,0,0,1,4,4.86,19.76,19.76,0,0,1,1.95,6.33c.29,2.31.4,4.65.47,7,0,1.51.07,3,.07,4.54H57.53c.07-2.59,0-5.18-.12-7.76a29.45,29.45,0,0,0-.67-5.24,7.52,7.52,0,0,0-2.61-4"/><line class="cls-2" x1="53.92" y1="13.08" x2="56.89" y2="15.4"/><path class="cls-1" d="M46.91,2.58c8.33,1.1,7.19,10.49,7.19,10.49"/><line class="cls-1" x1="47.51" y1="21.61" x2="48.18" y2="23.06"/><line class="cls-1" x1="53.63" y1="23.34" x2="48.45" y2="23.21"/><rect class="cls-1" x="35.92" y="6.62" width="6.98" height="10.74" transform="translate(78.82 23.97) rotate(-180)"/><line class="cls-1" x1="42.68" y1="11.97" x2="35.94" y2="11.97"/><path class="cls-1" d="M43.39,6.63c7.69.59,7.83,10-.3,10.67"/></g></g></g></svg>
        </a>
        <a href="/condoms-white" class="str str-next">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.08 40.94"><defs><style>.cls-1,.cls-2{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:0.75px;}.cls-1{stroke-linecap:square;}</style></defs><title>55</title><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path id="right-shoot" class="cls-1" d="M7.91,4.85a9.12,9.12,0,0,1,8.92,6"/><path id="right-shoot" data-name="right-shoot" class="cls-1" d="M19.17,5c-2.65,1.71-2.11,5.51-2.14,5.6"/></g><g id="Слой_3" data-name="Слой 3"><g id="right-revol"><line class="cls-2" x1="38.79" y1="2.37" x2="38.79" y2="21.57"/><rect class="cls-2" x="38.79" y="4.68" width="31.92" height="7.15"/><rect class="cls-2" x="38.79" y="11.83" width="19.82" height="4.48"/><line class="cls-2" x1="69.87" y1="0.38" x2="69.87" y2="4.68"/><line class="cls-1" x1="66.69" y1="0.53" x2="63.21" y2="4.44"/><line class="cls-1" x1="69.87" y1="0.38" x2="67.05" y2="0.38"/><line class="cls-1" x1="38.79" y1="2.58" x2="24.44" y2="2.58"/><line class="cls-1" x1="38.79" y1="21.57" x2="24.44" y2="21.57"/><path class="cls-1" d="M23.57,21.61"/><path class="cls-1" d="M17.29,23.34"/><path class="cls-1" d="M23.92,21.57a6.69,6.69,0,0,0,1.48,4.68,6.36,6.36,0,0,0,4.48,2.38,6.52,6.52,0,0,0,6.82-6.54"/><line class="cls-1" x1="27.95" y1="21.74" x2="29.47" y2="25.11"/><path class="cls-1" d="M1.71,27.72"/><path class="cls-1" d="M13.94,15.41a18.21,18.21,0,0,0-7.07,2.45,12,12,0,0,0-4,4.86A19.76,19.76,0,0,0,.91,29.05C.62,31.36.52,33.7.44,36c0,1.51-.07,3-.07,4.54H13.56c-.07-2.59,0-5.18.12-7.76a29.45,29.45,0,0,1,.67-5.24,7.52,7.52,0,0,1,2.61-4"/><line class="cls-2" x1="17.16" y1="13.08" x2="14.2" y2="15.4"/><path class="cls-1" d="M24.17,2.58C15.84,3.68,17,13.07,17,13.07"/><line class="cls-1" x1="23.57" y1="21.61" x2="22.9" y2="23.06"/><line class="cls-1" x1="17.45" y1="23.34" x2="22.63" y2="23.21"/><rect class="cls-1" x="28.18" y="6.62" width="6.98" height="10.74"/><line class="cls-1" x1="28.41" y1="11.97" x2="35.15" y2="11.97"/><path class="cls-1" d="M27.69,6.63c-7.69.59-7.83,10,.3,10.67"/></g></g></g></svg>
        </a>
        <div class="bullets">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51.12 50.46"><defs><style>.cls-1{fill:none;}.cls-1,.cls-2{stroke:#fff;stroke-miterlimit:10;}.cls-2{fill:none;}</style></defs><title>bullets</title><g id="Слой_2" data-name="Слой 2"><g id="Слой_5" data-name="Слой 5"><path class="cls-1 baraban" d="M44.83,9.54a7.63,7.63,0,0,1-9.6-7.1,25.09,25.09,0,0,0-19-.12,7.63,7.63,0,0,1-9.69,7,25,25,0,0,0-6,16.29c0,.6,0,1.19.07,1.78a7.63,7.63,0,0,1,4.56,4.8,7.63,7.63,0,0,1-.91,6.56A25.1,25.1,0,0,0,19.59,49.9a7.63,7.63,0,0,1,11.94,0A25.1,25.1,0,0,0,46.72,39a7.63,7.63,0,0,1,3.81-11.31c.06-.7.1-1.4.1-2.12A25,25,0,0,0,44.83,9.54Z"/>
                        <circle class="cls-1 bullet1" cx="25.55" cy="11.83" r="7.06"/>

                        <circle class="cls-1 bullet2" cx="12.45" cy="21.33" r="7.06" transform="translate(-11.69 26.55) rotate(-71.93)"/>

                        <circle class="cls-1 bullet3" cx="17.42" cy="36.73" r="7.06" transform="translate(-22.51 29.14) rotate(-53.86)"/>

                        <circle class="cls-1 bullet4" cx="33.61" cy="36.78" r="7.06" transform="translate(-15.16 26.6) rotate(-35.79)"/>

                        <circle class="cls-1 bullet5" cx="38.67" cy="21.41" r="7.06" transform="translate(-4.68 12.79) rotate(-17.72)"/>
                        <circle class="cls-1 bullet5-5" cx="38.67" cy="21.41" r="4.59" transform="translate(-4.68 12.79) rotate(-17.72)"/>
                        <circle class="cls-2 bullet5-5" cx="38.67" cy="21.33" r="1.7" transform="translate(-4.66 12.79) rotate(-17.72)"/>

                        <circle class="cls-1" cx="25.55" cy="25.6" r="3.26"/></g></g></svg>
        </div>
    </nav>
    <div class="main-scene full bandit">
        <div class="games-wrapper">
            <div class="games full">
                <div class="game game2 full js-game2" id="game2">
                    <div class="game-wrap full">
                        <h1><span>как ты рискнешь<br />сегодня?</span></h1>
                        <div class="container-game">
                            <a href="/condoms-white/">
                                <div class="rocket-btn-wrap">
                                    <button class="rocket-btn">сегодня не рискую</button>
                                </div>
                            </a>
                            <div class="rotator-game">
                                <div class="head-rotator">
                                    <span>Под чем?</span>
                                    <span>С кем?</span>
                                    <span>Где?</span>
                                    <span>Уровень <br> безопасности</span>
                                </div>

                                <div class="spins-wrap ">
                                    <div class="rotator-row-wrap rotator-row1 resizeEl"  id="spiner1">
                                        <div class="spin spin1 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-4"></div>
                                        </div>
                                        <div class="spin spin2 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl"  data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-220"></div>
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
                                            <div class="spin-image resizeEl"  data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-220"></div>
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
                                    <div class="rotator-row-wrap rotator-row3 resizeEl"  id="spiner3">
                                        <div class="spin spin1 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-4"></div>
                                        </div>
                                        <div class="spin spin2 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl"  data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-220"></div>
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
                                    <div class="rotator-row-wrap rotator-row4 resizeEl"  id="spiner4">
                                        <div class="spin spin1 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl" data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-4"></div>
                                        </div>
                                        <div class="spin spin2 resizeEl" data-t-o="-450">
                                            <div class="spin-bg"></div>
                                            <div class="spin-image resizeEl"  data-bg-w="637" data-bg-h="1250" data-bg-x="0" data-bg-y="-220"></div>
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
                                        <div class="men-turn-on-off-content">
                                            <div><span class="turn-on-off">ВКЛ</span><br/>голову</div>
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
        $(document).ready(function() {

            var modalVis = true,
                modalAnimId,
                btn = $('.band-start'),
                hand = $('.wh-hand path');

            $('.modal__btn').on('click', function(e) {
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