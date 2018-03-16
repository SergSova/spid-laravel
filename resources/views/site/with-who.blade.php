@extends('site.layout')

@section('styles')
    <link rel="stylesheet" href="assets/css/drug-store/reset.css">
    <link rel="stylesheet" href="assets/css/drug-store/index.css">
    <link rel="stylesheet" href="assets/css/with-who.css">
    <link rel="stylesheet" href="assets/css/resize.css">
@endsection

@section('body')
    <div class="modal modal-wh">
        <div class="modal__inner">
            <div class="modal__icons">
                <div class="modal__icon wh-hand">
                    <?php include "assets/img/svg/with-who/wh-hand.svg"?>
                </div>
                <div class="modal__icon wh-peoples">
                    <div class="wh-people wh-people__1">
                        <?php include "assets/img/svg/with-who/wh-people__1.svg"?>
                    </div>
                    <div class="wh-people wh-people__2">
                        <?php include "assets/img/svg/with-who/wh-people__2.svg"?>
                    </div>
                    <div class="wh-people wh-people__3">
                        <?php include "assets/img/svg/with-who/wh-people__3.svg"?>
                    </div>
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
        <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt=""
             data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
    </div>
    <nav class="game-icons slider-controls slide-4">
        <a href="/slide-rocket" class="str str-prev">
            <?php include "assets/img/svg/with-who/str-prev.svg"?>
        </a>
        <a href="/bandit" class="str str-next">
            <?php include "assets/img/svg/with-who/str-next.svg"?>
        </a>
        <div class="bullets">
            <?php include "assets/img/svg/with-who/bullets.svg"?>
        </div>
    </nav>
    <div class="container with-who">
        <div class="party-bg">
            <div class="title">
                <h1 class="neon-pink">{!! $model->title !!}</h1>
            </div>
            <div class="humans">
                <div class="human">
                    <div class="human-option">
                        <div class="name-illness">
                            <div class="name">Андрей, 23</div>
                            <div class="illness">Вич (Спид)</div>
                        </div>
                        <div class="human-img">
                            <img src="assets/img/with-who/Andrey.png">
                        </div>
                        <div class="human-popup">
                            <div class="btn-close"></div>
                            <div class="pop-title">{!! $model->pop_title !!}</div>
                            <form metod="GET" action="" accept-charset="UTF-8">
                                <div class="form-you-know">
                                    <label class="ill" for="check-ill-1-1">
                                        <span>Сифилис</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-1-1">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-1-2">
                                        <span>Герпес</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-1-2">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-1-3">
                                        <span>Вич (спид)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-1-3">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-1-4">
                                        <span>Гонорея</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-1-4">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-1-5">
                                        <span>Гепатит (b,с)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-1-5">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-1-6">
                                        <span>Хламидиоз</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-1-6">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <!-- <button type="" class="btn-test">Пройди тест</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="human">
                    <div class="human-option">
                        <div class="name-illness">
                            <div class="name">Юля, 18 лет</div>
                            <div class="illness">Плоскостопие</div>
                        </div>
                        <div class="human-img">
                            <img src="assets/img/with-who/Julia.png">
                        </div>
                        <div class="human-popup">
                            <div class="btn-close"></div>
                            <div class="pop-title">А чего <span>ты</span> не знаешь о себе?</div>
                            <form metod="GET" action="" accept-charset="UTF-8">
                                <div class="form-you-know">
                                    <label class="ill" for="check-ill-2-1">
                                        <span>Сифилис</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-2-1">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-2-2">
                                        <span>Герпес</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-2-2">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-2-3">
                                        <span>Вич (спид)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-2-3">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-2-4">
                                        <span>Гонорея</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-2-4">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-2-5">
                                        <span>Гепатит (b,с)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-2-5">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-2-6">
                                        <span>Хламидиоз</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-2-6">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <!-- <button type="" class="btn-test">Пройди тест</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="human">
                    <div class="human-option">
                        <div class="name-illness">
                            <div class="name">Даня, 16 лет</div>
                            <div class="illness">Герпес, гонорея</div>
                        </div>
                        <div class="human-img">
                            <img src="assets/img/with-who/Dany.png">
                        </div>
                        <div class="human-popup">
                            <div class="btn-close"></div>
                            <div class="pop-title">А чего <span>ты</span> не знаешь о себе?</div>
                            <form metod="GET" action="" accept-charset="UTF-8">
                                <div class="form-you-know">
                                    <label class="ill" for="check-ill-3-1">
                                        <span>Сифилис</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-3-1">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-3-2">
                                        <span>Герпес</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-3-2">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-3-3">
                                        <span>Вич (спид)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-3-3">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-3-4">
                                        <span>Гонорея</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-3-4">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-3-5">
                                        <span>Гепатит (b,с)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-3-5">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-3-6">
                                        <span>Хламидиоз</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-3-6">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <!-- <button type="" class="btn-test">Пройди тест</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="human">
                    <div class="human-option">
                        <div class="name-illness">
                            <div class="name">Марго, 21 год</div>
                            <div class="illness">Гепатит С</div>
                        </div>
                        <div class="human-img">
                            <img src="assets/img/with-who/Margo.png">
                        </div>
                        <div class="human-popup">
                            <div class="btn-close"></div>
                            <div class="pop-title">А чего <span>ты</span> не знаешь о себе?</div>
                            <form metod="GET" action="" accept-charset="UTF-8">
                                <div class="form-you-know">
                                    <label class="ill" for="check-ill-4-1">
                                        <span>Сифилис</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-4-1">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-4-2">
                                        <span>Герпес</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-4-2">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-4-3">
                                        <span>Вич (спид)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-4-3">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-4-4">
                                        <span>Гонорея</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-4-4">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-4-5">
                                        <span>Гепатит (b,с)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-4-5">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-4-6">
                                        <span>Хламидиоз</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-4-6">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <!-- <button type="" class="btn-test">Пройди тест</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="human">
                    <div class="human-option">
                        <div class="name-illness">
                            <div class="name">Настя, 15 лет</div>
                            <div class="illness">Хламидиоз,<br/>Герпес</div>
                        </div>
                        <div class="human-img">
                            <img src="assets/img/with-who/Nastj.png">
                        </div>
                        <div class="human-popup">
                            <div class="btn-close"></div>
                            <div class="pop-title">А чего <span>ты</span> не знаешь о себе?</div>
                            <form metod="GET" action="" accept-charset="UTF-8">
                                <div class="form-you-know">
                                    <label class="ill" for="check-ill-5-1">
                                        <span>Сифилис</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-5-1">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-5-2">
                                        <span>Герпес</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-5-2">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-5-3">
                                        <span>Вич (спид)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-5-3">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-5-4">
                                        <span>Гонорея</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-5-4">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-5-5">
                                        <span>Гепатит (b,с)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-5-5">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-5-6">
                                        <span>Хламидиоз</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-5-6">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <!-- <button type="" class="btn-test">Пройди тест</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="human">
                    <div class="human-option">
                        <div class="name-illness">
                            <div class="name">Саша, 17 лет</div>
                            <div class="illness">Косоглазие</div>
                        </div>
                        <div class="human-img">
                            <img src="assets/img/with-who/Sasha.png">
                        </div>
                        <div class="human-popup">
                            <div class="btn-close"></div>
                            <div class="pop-title">А чего <span>ты</span> не знаешь о себе?</div>
                            <form metod="GET" action="" accept-charset="UTF-8">
                                <div class="form-you-know">
                                    <label class="ill" for="check-ill-6-1">
                                        <span>Сифилис</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-6-1">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-6-2">
                                        <span>Герпес</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-6-2">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-6-3">
                                        <span>Вич (спид)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-6-3">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-6-4">
                                        <span>Гонорея</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-6-4">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-6-5">
                                        <span>Гепатит (b,с)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-6-5">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-6-6">
                                        <span>Хламидиоз</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-6-6">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <!-- <button type="" class="btn-test">Пройди тест</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="human">
                    <div class="human-option">
                        <div class="name-illness">
                            <div class="name">Алиса, 19 лет</div>
                            <div class="illness">Вич (спид)</div>
                        </div>
                        <div class="human-img">
                            <img src="assets/img/with-who/Alisa.png">
                        </div>
                        <div class="human-popup">
                            <div class="btn-close"></div>
                            <div class="pop-title">А чего <span>ты</span> не знаешь о себе?</div>
                            <form metod="GET" action="" accept-charset="UTF-8">
                                <div class="form-you-know">
                                    <label class="ill" for="check-ill-7-1">
                                        <span>Сифилис</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-7-1">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-7-2">
                                        <span>Герпес</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-7-2">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-7-3">
                                        <span>Вич (спид)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-7-3">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-7-4">
                                        <span>Гонорея</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-7-4">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-7-5">
                                        <span>Гепатит (b,с)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-7-5">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-7-6">
                                        <span>Хламидиоз</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-7-6">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <!-- <button type="" class="btn-test">Пройди тест</button> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="human">
                    <div class="human-option">
                        <div class="human-img">
                            <img src="assets/img/with-who/Igor.png">
                        </div>
                        <div class="name-illness">
                            <div class="name">Игорь, 22 года</div>
                            <div class="illness">Трихомониаз<br/>Хламидиоз</div>
                        </div>
                        <div class="human-popup">
                            <div class="btn-close"></div>
                            <div class="pop-title">А чего <span>ты</span> не знаешь о себе?</div>
                            <form metod="GET" action="" accept-charset="UTF-8">
                                <div class="form-you-know">
                                    <label class="ill" for="check-ill-8-1">
                                        <span>Сифилис</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-8-1">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-8-2">
                                        <span>Герпес</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-8-2">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-8-3">
                                        <span>Вич (спид)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-8-3">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-8-4">
                                        <span>Гонорея</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-8-4">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-8-5">
                                        <span>Гепатит (b,с)</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-8-5">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                    <label class="ill" for="check-ill-8-6">
                                        <span>Хламидиоз</span>
                                        <input type="checkbox" class="checkbox" id="check-ill-8-6">
                                        <span class="checkbox-custom"></span>
                                    </label>
                                </div>
                                <!-- <button type="" class="btn-test">Пройди тест</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="assets/js/main22.js"></script>
    <script src="assets/js/with-who.js"></script>
@endsection