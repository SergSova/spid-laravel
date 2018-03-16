@extends('site.layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/main.css">
@endsection

@section('body')
    <div class="logo-box">
        <img src="assets/img/condoms-white/logo-white.png" alt="">
    </div>
    <div class="menu-box">
        <img class="menu-box_img" src="assets/img/condoms-white/menu-burger.png" alt="">

        <strong class="menu-box_text">меню</strong>
    </div>
    <section class="content content-section">

        <h1 class="main-caption">
            <div class="main-caption_letter">
                <span class="first">ва</span>
            </div>

            <div class="main-caption_letter">
                <span class="second">жно</span>
            </div>

            <div class="main-caption_letter">
                <span class="third">зна</span>
            </div>

            <div class="main-caption_letter">
                <span class="fourth">ть</span>
            </div>
        </h1>

        <div id="custom-slider">

            <div class="custom-slider_section cf">

                <div class="custom-slider_wrap">
                    <div class="custom-slider_wrap-top-text">
                        <h3><span>презервативы:</span></h3>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/condoms-2.png" data-hover="assets/img/condoms-white/condoms-2-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Проверьте срок годности</strong>Презервативы с истекшим сроком годности менее надежны и могут легко рваться.</div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/condoms-1.png" data-hover="assets/img/condoms-white/condoms-1-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Убедитесь в целостности упаковки.</strong>На упаковке не должно быть никаких потертостей или дыр.</div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/condoms-3.png" data-hover="assets/img/condoms-white/condoms-3-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Правильно храните презервативы</strong>Не стоит класть презервативы в кошелек, поскольку они могут деформироваться и порваться. Не храните презервативы в бардачке автомобиля или в заднем кармане штанов. Там они могут испортиться из-за воздействия жары, света или постоянного трения.</div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/condoms-4.png" data-hover="assets/img/condoms-white/condoms-4-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Не открывайте упаковку</strong>с презервативом при помощи ножниц или зубов. Вероятно, когда придет ответственный момент, открывать презерватив при помощи зубов может показаться удобно и логично, но помните, что из-за этого на презервативе могут появиться крошечные разрывы, которые вы можете не заметить, надевая презерватив.</div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/condoms-5.png" data-hover="assets/img/condoms-white/condoms-5-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Кольца, пирсинг и даже острые ногти</strong>могут повредить презерватив, поэтому если у вас есть подобные аксессуары, при надевании презерватива действуйте осторожно.</div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/condoms-6.png" data-hover="assets/img/condoms-white/condoms-6-hover.png" alt="">
                        </div>

                        <div class="text"><strong>При правильном использовании</strong>во время каждого сексуального контакта презервативы надежно защитят вас от ВИЧ.</div>
                    </div>

                </div>

                <div class="custom-slider_wrap add-box">

                    <div class="custom-slider_wrap-top-text">
                        <h3><span>гепатит с (пути передачи):</span></h3>
                        <div class="custom-slider_wrap-add-box">
                            <div class="custom-slider_wrap-add-caption"><span>Гепатит С</span></div>

                            <div class="custom-slider_wrap-add-text">широко распространенное инфекционное заболевание, поражающие преимущественно печень. Основной путь передачи Гепатита С - через контакт с инфицированной кровью. Вирус может сохраняться до 4-х дней в засохшем пятне крови, на лезвии бритвы или других инструментах, в игле или «слепой зоне» шприца.</div>
                        </div>

                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hepatitis-1.png" data-hover="assets/img/condoms-white/hepatitis-1-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Незащищенный (без презерватива) половой контакт.</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hepatitis-2.png" data-hover="assets/img/condoms-white/hepatitis-2-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Совместное использование иголок, шприцев, или другого инъекционного инструмента (инъекционное употребление наркотиков)</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hepatitis-3.png" data-hover="assets/img/condoms-white/hepatitis-3-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Переливание крови</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hepatitis-4.png" data-hover="assets/img/condoms-white/hepatitis-4-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Недостаточная стерилизация медицинского инструмента</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hepatitis-5.png" data-hover="assets/img/condoms-white/hepatitis-5-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Манипуляции, которые сопровождаются выделением крови</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hepatitis-6.png" data-hover="assets/img/condoms-white/hepatitis-6-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Высокий риск инфицирования</strong>маникюр татуаж, перманентный макияж, пирсинг, стоматологии, парикмахерские</div>
                    </div>

                </div>

                <div class="custom-slider_wrap add-box">

                    <div class="custom-slider_wrap-top-text">
                        <h3><span>вич (спид) передается:</span></h3>
                        <div class="custom-slider_wrap-add-box">
                            <div class="custom-slider_wrap-add-caption"><span>ВИЧ (Вирус иммунодефицита человека)</span></div>

                            <div class="custom-slider_wrap-add-text">ВИЧ (Вирус иммунодефицита человека) проникает в клетки иммунной системы и подавляет или нарушает их функцию. На ранних стадиях инфекция протекает бессимптомно. Инфицирование вирусом приводит к прогрессирующему истощению иммунной системы, разрушая способность организма давать отпор инфекциям и болезням, то есть к «иммунодефициту».</div>
                        </div>

                        <div class="custom-slider_wrap-add-box">
                            <div class="custom-slider_wrap-add-caption"><span>СПИД (синдром приобретенного иммунодефицита)</span></div>

                            <div class="custom-slider_wrap-add-text">последняя стадия развития ВИЧ-инфекции, при которой иммунная система не справляется с инфекциями и раковыми заболеваниями.</div>
                        </div>

                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hiv-1.png" data-hover="assets/img/condoms-white/hiv-1-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Незащищенный (без презерватива) половой контакт</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hiv-2.png" data-hover="assets/img/condoms-white/hiv-2-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Совместное использование иголок, шприцев,</strong>или другого инъекционного инструмента (инъекционное употребление наркотиков)</div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hiv-3.png" data-hover="assets/img/condoms-white/hiv-3-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Медицинские манипуляции (операции, переливание крови, инъекции и т.п.)</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hiv-4.png" data-hover="assets/img/condoms-white/hiv-4-hover.png" alt="">
                        </div>

                        <div class="text"><strong>От ВИЧ-позитивной матери к ребенку во время беременности, родов или кормления грудью</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hiv-5.png" data-hover="assets/img/condoms-white/hiv-5-hover.png" alt="">
                        </div>

                        <div class="text"><strong>Использование нестерильного инструмента для татуировок и пирсинга.</strong></div>
                    </div>

                    <div class="custom-slider_section-content">
                        <div class="custom-slider_section-content-img">
                            <img class="origin-img" src="assets/img/condoms-white/hiv-6.png" data-hover="assets/img/condoms-white/hiv-6-hover.png" alt="">
                        </div>

                        <div class="text"><strong>ВИЧ не передается</strong>через воздух, поцелуи, еду, укусы насекомых общие полотенца совместное пользование ванной, бассейном, туалетом, душем</div>
                    </div>
                </div>

            </div>

            <div class="custom-slider_nav-container">
                <div class="nav-button"><strong class="nav-button-text">презервативы</strong></div>

                <div class="nav-button"><strong class="nav-button-text">гепатит c</strong></div>

                <div class="nav-button"><strong class="nav-button-text">вич(спид)</strong></div>

                <div class="line"></div>
            </div>
        </div>

    </section>
@endsection

@section('scripts')
    <script src="assets/js/libs/wheel-indicator.js"></script>
    <script src="assets/js/main.js"></script>
@endsection