@extends('site.layout')

@section('title',$model->getTitle())

@section('styles')
    <link rel="stylesheet" href="assets/css/lib/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/css/faq_main.css">
@endsection

@section('body')
    <div class="logo-box">
        <img src="assets/img/faq/logo-white.png" alt="">
    </div>
    <div class="menu-box">
        <img class="menu-box_img" src="assets/img/faq/menu-burger.png" alt="">

        <strong class="menu-box_text">меню</strong>
    </div>
    <main class="content">

        <div class="content__left-box">
            <div class="main-caption clip-fix">{{$model->title}}</div>

            <div class="content__preview-box">
                <div class="text">
                    {{$model->description}}
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
{{--
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое эмоциональное насилие?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Эмоциональное (психологическое) насилие - это форма насилия, которая проявляется в постоянном прессинге жертвы. К этому виду насилия относятся критика, осуждение, унижение, пренебрежение интересами, оскорбления, угрозы, запугивания, запреты и другие подобные действия.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое абьюз?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Абьюз - это то же самое, что и эмоциональное (психологическое) насилие.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое депрессия?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Депрессия - это одно из наиболее распространенных психических расстройств. Основные симптомы депрессии - апатичность, быстрая утомляемость, нарушения сна, потеря интереса к вещам, которые раньше приносили удовольствие. Часто причиной развития депрессии является стресс или длительное пребывание в состоянии, постоянно травмирующем нервную систему человека.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое гонорея?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Гонорея - инфекционное заболевание, передающееся половым путем. Инфекция поражает слизистые оболочки разных органов - гениталии, мочеиспускания, прямую кишку, горло, глаза, женские репродуктивные органы (фаллопиевы трубы, шейка матки, матка). Может привести к бесплодию, несмотря на то, что относительно легко лечится.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое герпес?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Герпес - вирусное заболевание, которое проявляется в виде характерных высыпаний - пузырьков с жидкостью на слизистых оболочках и коже. Вирус герпеса есть у 90% людей. Попадая в организм, он остается там навсегда, но внешне проявляется не у всех. Чаще всего поражает кожу, глаза (конъюнктивит, кератит) и половые органы.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Герпес на губах и генитальный - это одно и то же?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Это разные типы одного вируса. Но они оба могут поражать и губы, и гениталии. Поэтому во время орального секса инфекцию можно перенести с губ одного партнера на половые органы другого, или наоборот - с гениталий на губы.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое антиретровирусная терапия?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Антиретровирусная терапия (АРТ) - метод терапии ВИЧ-инфекции. Она являет собой сочетание нескольких препаратов, которые препятствуют размножению вируса и приостанавливают развитие заболевания. Пациенты, регулярно принимающие АРТ, могут жить долго и вести полноценный активный образ жизни.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Можно ли заразиться ВИЧ через поцелуи или рукопожатия?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Нет. Через поцелуи, объятия, рукопожатия, чихание, кашель, а также через еду, бытовые предметы (полотенца, постельное белье, одежду, посуду), домашних животных и укусы насекомых ВИЧ-инфекция не передается. В слюне, слезах, поте, моче инфицированного недостаточно вируса, чтобы заразить другого человека.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое иммунодефицит?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Иммунодефицит - дефицит иммунной системы человека. Это состояние организма, когда по тем или иным причинам иммунная система не выполняет своих функций, ее работа нарушена.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое иммунная система?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Иммунная система - это совокупность органов, тканей и клеток, работа которых направлена на защиту организма от разного рода микробов и вирусов. Иммунная система отвечает за то, чтобы попавшие в организм чужеродные элементы или мутирующие клетки были вовремя уничтожены.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое порно?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Порно (порнография) - это изображение секса в произведениях различных жанров - литературе, кино, фотографии, рисунках. Целью порнографических материалов является вызвать сексуальное возбуждение.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое противозачаточные таблетки?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Противозачаточные таблетки - это гормональные медпрепараты, которые принимает женщина для предотвращения беременности. В них содержатся гормоны, влияющие на работу яичников, из-за чего оплодотворение не происходит. При правильном приеме эффективность противозачаточных таблеток составляет 98-99%, но они не защищают от ЗППП (заболеваний, передающихся половым путем).
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое экстренная контрацепция?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Экстренная контрацепция - это методы предотвращения беременности, к которым прибегают после полового акта: если был незащищенный секс; если контрацептивы использовались неправильно или оказались неэффективными; если произошло сексуальное насилие.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Какие методы экстренной контрацепции наиболее эффективны?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                К действенным методам экстренной контрацепции относятся таблетки для экстренной контрацепции (ТЭК) и медьсодержащие внутриматочные контрацептивы (ВМК, ставятся исключительно врачом). Таблетки необходимо принять не позже 72 часов после полового акта, ВМК - не позже 120 часов.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что означает сокращенное название таблеток КОК?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                КОК - это аббревиатура от комбинированные оральные контрацептивы. Так называются гормональные препараты, которые женщина принимает постоянно для предупреждения беременности. КОК содержат два вида гормонов - эстроген и прогестин.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое мини-пили?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Мини-пили - это разновидность оральных противозачаточных таблеток. Их особенность в том, что они содержат всего один гормон. В первую очередь они показаны для женщины, которым по состоянию здоровья противопоказаны КОК.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое мобильное приложение для знакомств?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Мобильное приложение для знакомств - это программа, которая устанавливается на смартфон, планшет или другое мобильное устройство. С помощью этой программы можно знакомиться с другими людьми для общения, романтических или сексуальных отношений, совместного досуга.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое Тinder?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Tinder - одно из наиболее популярных мобильных приложений для знакомств. Tinder позиционируется как платформа для романтических отношений. Программа работает с заданными параметрами, учитывая геолокацию.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Кто такие миллениалы?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Миллениалы (другие названия - Поколение Y, поколение «некст», «сетевое» поколение) - поколение людей, которые родились в промежутке примерно между 1981 и 2000 годами. Их основные характеристики - глубокая вовлеченность в цифровые технологии, стремление получать немедленный результат и вознаграждение за свою работу.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое Поколение Z?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Поколение Z - это самое молодое поколение из ныне живущих. К этому поколению относятся молодые люди, подростки и дети; рожденные и те, кто еще родится, в период между 2000 и 2020 годами.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое гепатит А?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Гепатит А (болезнь Боткина) - вирусное заболевание печени, одна из наиболее распространенных в мире инфекций. От гепатита А очень страдают люди на территориях с плохими санитарными условиями. Передается через загрязненные продукты питания и воду. Также называется болезнью грязных рук, потому что можно легко заразиться при прямом контакте с инфицированным человеком.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое гепатит В?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Гепатит В - вирусное заболевание печени, одна из глобальных проблем здравоохранения. Болезнь может переходить в хроническое состояние, что грозит развитием цирроза и рака печени. Вирус гепатита B содержится в организме человека в различных жидкостях (крови, вагинальных выделениях, сперме) и передается именно через них.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое гепатит С?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Гепатит С - вирусное заболевание печени, считается самым опасным из вирусных гепатитов по своим последствиям. Распространяется только через зараженную кровь, чаще всего – во время повторного использования шприца после инфицированного человека; при использовании нестерильных инструментов во время таких процедур, как нанесение татуировки, маникюр, педикюр; от матери к ребенку.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое свободные отношения?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Свободные отношения - это отношения, когда люди вместе проводят время, занимаются сексом, могут даже жить вместе, но при этом договариваются не предъявлять друг другу никаких претензий, не ограничивать себя рамками, не оправдываться друг перед другом. В свободных отношениях можно иметь больше чем одного партнера.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое презерватив?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Презерватив (также кондом) - популярный метод контрацепции. Это барьерный способ защиты. Является одним из наиболее надежных контрацептивов. Защищает от заболеваний, передающихся половым путем, и от незапланированной беременности.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Какие бывают презервативы?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Презервативы различаются по материалу, из которого они изготовлены, размерам и дополнительным функциям. Наиболее популярными являются латексные презервативы. Также используются полиуретановые. Для идеальной защиты важно выбрать изделие своего размера. Презервативы бывают с усиками, пупырышками, ребрышками, цветные, светящиеся, с различными вкусами, супертонкие и т.д. Эти дополнения усиливают ощущения во время секса.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое женский презерватив?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Помимо привычных мужских, существуют также женские презервативы. Женский презерватив - это трубочка с гибкими кольцами на обоих концах. Один конец вставляется во влагалище, а другой находится снаружи. Чаще всего изготовляется из полиуретана.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое оргазм?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Оргазм - пик сексуального возбуждения, разрядка, для которой характерно сильное чувство наслаждения, физического удовлетворения. Оргазм приходит во время стимуляции половых органов или других эрогенных зон. Достигается как в парном сексе, так и во время мастурбации.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое мастурбация?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Мастурбация (также онанизм) - процесс стимуляции своих половых органов, цель которого - сексуальное возбуждение и доведение себя до оргазма. К стимулирующим действиям относятся прикосновения, поглаживания, массаж пениса или клитора.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое ВИЧ?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                ВИЧ - это вирус иммунодефицита человека. ВИЧ-инфекция - заболевание, вызванное этим вирусом. Наличие ВИЧ в организме делает человека очень уязвимым ко всем инфекционным заболеваниям, потому что вирус нарушает работу иммунной системы.
                                <br>
                                <br>
                                ВИЧ поражает исключительно людей. Основные пути передачи: при незащищенном половом контакте; при внутривенном введении наркотиков или медицинских препаратов с использованием нестерильных инструментов (шприцов); от матери к ребенку во время беременности, родов и кормления.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое СПИД?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                СПИД расшифровывается как «синдром приобретенного иммунодефицита». Так раньше называлась последняя клиническая стадия развития ВИЧ-инфекции. Сейчас термин «СПИД» используется в основном в научных и статистических работах.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое сифилис?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Сифилис - инфекционная венерическая болезнь. Поражает внутренние органы, слизистые оболочки, кожу, кости, нервную и иммунную системы.
                                <br>
                                <br>
                                Распространяется в основном половым путем, в том числе через оральный и анальный секс. Возможно заражение через кровь, в частности при пользовании общими шприцами, при переливании крови от инфицированного донора.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое врожденный сифилис?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Сифилис также передается во время беременности от матери к ребенку. Это называется врожденный сифилис. У инфицированного плода развиваются различные патологии, некоторые из них могут быть несовместимы с жизнью.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое гепатит?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Гепатит - это общее название воспалительных заболеваний печени, которые могут привести к серьезным нарушениям ее функционирования. Чаще всего воспаление вызывает вирус, но гепатит может быть и невирусного происхождения.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое невирусный гепатит?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Невирусный гепатит - это воспаление печени, вызванное не действием вируса, а другими причинами. Заболевание может развиваться из-за злоупотребления алкоголем, чрезмерного употребления определенных лекарственных препаратов.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое аутоиммунный гепатит?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Аутоиммунный гепатит - воспаление печени невирусного происхождения. Развивается вследствие сбоя в работе иммунной системы человека. Печень воспринимается иммунной системой как чужеродный объект, что вызывает постоянное воспаление.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое секс-игрушки?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Секс-игрушки (сексуальные игрушки) - это игрушки, которые используются для удовлетворения эротических и сексуальных потребностей человека. Их можно использовать как в паре, так и без полового партнера. Они вносят разнообразие в секс, в некоторых случаях помогают справиться с определенными проблемами медицинского или психологического характера.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое вибратор?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Вибратор - одна из наиболее популярных секс-игрушек. Это электромеханическое изделие, которое используется для массажа вагины, клитора или ануса. Соответственно они бывают клиторальные, вагинальные, анальные или комбинированные.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Что такое Экстази?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Правильное экстази это MDMA, психостимулятор, полусинтетическое психоактивное соединение амфетаминового ряда, относящееся к группе фенилэтиламинов. Но какое экстази купишь ты предугадать сложно, это может даже быть так называемая китайская легалка, которая не имеет никакого отношения к MDMA.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Легальны ли наркотики в Амстердаме?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Только марихуана и ее производные, как например гашиш, за остальные наркотики можно получить реальные сроки.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Как избежать передозировки Экстази?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                К сожалению какое Экстази попадется вам предугадать сложно, и какие вещества будут входить в саму таблетку. Поэтому при передозировке стоит обязательно вызывать скорую, пока еще не поздно.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Правда ли что женская наркомания неизлечима?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Неправда. Женская наркомания имеет свои особенности, но при этом в случае ремиссии (прекращения употребления веществ на определенный срок) девушки даже дольше сохраняют трезвость, чем это делают мужчины.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">При прыжке с парашютом скорость падения зависит от веса человека?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Нет. Одежда больше всего влияет на скорость падения, обтягивающая - ускоряет, мешковатая - замедляет.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">В Амстердаме очень много наркоманов?
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Неправда, в Амстердаме очень разумная наркополитика, торчков которые колятся по подвалам, как это было бы в каком то черном квартале в городах США, вы никогда не увидите.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">В Амстердаме полиция не имеет права обыскивать людей.
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                В одной из сцен «Криминально чтива» утверждалось, что полиция в Амстердаме не имеет права обыскивать людей, но с 2011 года мэрия Амстердама ввела закон, который коснулся безопасности центра города, в центре полиция смело может вас обыскать.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">MDMA может сделать из тебя лучшего любовника.
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Неправда, хотя экстази и оказывает некое воздействие на психику человека, но это воздействие очень варьируется, у одного человека может быть прилив сексуальных сил, но в это же время другой может почувствовать совершенно другие ощущения и даже отвращение.
                            </div>
                        </div>
                    </div>
                    <div class="faq-content__question">
                        <h4 class="faq-content__heading">Можно получить так называемый «bad trip» при употреблении MDMA, как это случается с LSD.
                            <div class="faq-content__icon"></div>
                        </h4>

                        <div class="faq-content__description">
                            <div class="faq-content__description-inner-wrap">
                                <div class="faq-content__description-line"></div>
                                Нет, от чистого MDMA бэд трип невозможен, так как MDMA относится у группе психостимуляторов, а не к психоделикам.
                            </div>
                        </div>
                    </div>
                    --}}
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="assets/js/libs/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/libs/wheel-indicator.js"></script>
    <script src="assets/js/faq_main.js"></script>
@endsection