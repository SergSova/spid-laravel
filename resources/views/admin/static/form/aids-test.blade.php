<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        @foreach(\App\Http\Middleware\Locale::$languages as $lang)
            <a class="nav-item nav-link {{$loop->first?'active':''}}" id="nav-{{$lang}}-tab" data-toggle="tab"
               role="tab" aria-controls="nav-{{$lang}}" aria-selected="true"
               href="#nav-{{$lang}}">{{$lang=='uk'?'ua':$lang}}</a>
        @endforeach
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
    @foreach(\App\Http\Middleware\Locale::$languages as $lang)
        <div class="tab-pane fade {{$loop->first?'show active':''}}" id="nav-{{$lang}}" role="tabpanel"
             aria-labelledby="nav-{{$lang}}-tab">

            <div class="form-group">
                {{ Form::label('title_'.$lang, 'Заголовок') }}
                {{ Form::text('title_'.$lang, NULL ,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('longtitle_'.$lang, 'Полный заголовок') }}
                {{ Form::text('longtitle_'.$lang, NULL ,['class'=>'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description_'.$lang, 'Описание') }}
                {{ Form::textarea('description_'.$lang, NULL ,['class'=>'form-control']) }}
            </div>
            <div class="form-row">
                <div class="col form-group">
                    {{ Form::label('test_btn_'.$lang, 'Текст кнопки') }}
                    {{ Form::text('test_btn_'.$lang, NULL ,['class'=>'form-control']) }}
                </div>
                <div class="col form-group">
                    {{ Form::label('test_btn_next_'.$lang, 'Текст кнопки далее') }}
                    {{ Form::text('test_btn_next_'.$lang, NULL ,['class'=>'form-control']) }}
                </div>
                <div class="col form-group">
                    {{ Form::label('test_btn_refresh_'.$lang, 'Текст кнопки повторить') }}
                    {{ Form::text('test_btn_refresh_'.$lang, NULL ,['class'=>'form-control']) }}
                </div>
            </div>

            <div id="accordion{{$lang}}">
                <div class="card">
                    <div class="card-header" id="headingTwo{{$lang}}">
                        <h5 class="mb-0">
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseTwo{{$lang}}" role="button"
                               aria-expanded="false" aria-controls="collapseTwo{{$lang}}">
                                Тест
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo{{$lang}}" class="collapse" aria-labelledby="headingTwo{{$lang}}" data-parent="#accordion{{$lang}}">
                        <div class="card-body">
                            @forelse($model->{'Quest_'.$lang} as $key=>$quest)
                                <div class="quest-wrap">
                                    <div class="form-row">
                                        <div class="form-group col-1">
                                            {{ Form::text("Quest_".$lang."[$key][id]", $quest->id,['class'=>'index-text form-control-plaintext','readonly'=>1]) }}
                                        </div>
                                        <div class="form-group col">
                                            {{ Form::label("Quest_".$lang."[$key][label]", 'Вопрос') }}
                                            {{ Form::text("Quest_".$lang."[$key][label]", NULL ,['class'=>'form-control']) }}
                                        </div>
                                        <div class="index-change col-lg-1">
                                            <span class="btn btn-sm btn-danger btn-rem">X</span>
                                        </div>
                                    </div>
                                    <div class="form-check-inline">
                                        <div class="form-check">
                                            {{ Form::checkbox("Quest_".$lang."[$key][user]", 1, NULL ,['class'=>'form-check-input']) }}
                                            {{ Form::label("Quest_".$lang."[$key][user]", 'Человек') }}
                                        </div>
                                        <div class="form-check">
                                            {{ Form::checkbox("Quest_".$lang."[$key][multi]", 1, NULL ,['class'=>'form-check-input']) }}
                                            {{ Form::label("Quest_".$lang."[$key][multi]", 'Мульти',['class'=>'form-check-label']) }}
                                        </div>
                                    </div>
                                    <div class="variants-wrap">
                                        @if(isset($quest->vars))
                                            @foreach($quest->vars as $v_key=>$var)
                                                <div class="form-inline variant">
                                                    <div class=" form-group">
                                                        {{ Form::label("Quest_".$lang."[$key][vars][$v_key][k]", 'Ответ') }}
                                                        {{ Form::text("Quest_".$lang."[$key][vars][$v_key][k]", NULL ,['class'=>'form-control']) }}
                                                    </div>
                                                    <div class=" form-group">
                                                        {{ Form::label("Quest_".$lang."[$key][vars][$v_key][v]", 'Оценка') }}
                                                        {{ Form::text("Quest_".$lang."[$key][vars][$v_key][v]", NULL ,['class'=>'form-control']) }}
                                                    </div>
                                                    <div class=" form-group">
                                                        {{ Form::label("Quest_".$lang."[$key][vars][$v_key][hint]", 'Подсказка') }}
                                                        {{ Form::text("Quest_".$lang."[$key][vars][$v_key][hint]", NULL ,['class'=>'form-control']) }}
                                                    </div>
                                                    <span class="btn btn-danger btn-sm btn-remove">X</span>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="form-inline variant">
                                                <div class=" form-group">
                                                    {{ Form::label("Quest_".$lang."[$key][vars][0][k]", 'Ответ') }}
                                                    {{ Form::text("Quest_".$lang."[$key][vars][0][k]", NULL ,['class'=>'form-control']) }}
                                                </div>
                                                <div class=" form-group">
                                                    {{ Form::label("Quest_".$lang."[$key][vars][0][v]", 'Оценка') }}
                                                    {{ Form::text("Quest_".$lang."[$key][vars][0][v]", NULL ,['class'=>'form-control']) }}
                                                </div>
                                                <div class=" form-group">
                                                    {{ Form::label("Quest_".$lang."[$key][vars][0][hint]", 'Подсказка') }}
                                                    {{ Form::text("Quest_".$lang."[$key][vars][0][hint]", NULL ,['class'=>'form-control']) }}
                                                </div>
                                                <span class="btn btn-danger btn-sm btn-remove">X</span>
                                            </div>
                                        @endif
                                        <div class="form-group add-var btn btn-success">Добавить вариант</div>
                                    </div>
                                </div>
                            @empty
                                <div class="quest-wrap">
                                    <div class="form-row">
                                        <div class="form-group col-1">
                                            {{ Form::text("Quest_".$lang."[0][id]", 0,['class'=>'index-text form-control-plaintext','readonly'=>1]) }}
                                        </div>
                                        <div class="form-group col">
                                            {{ Form::label("Quest_".$lang."[0][label]", 'Вопрос') }}
                                            {{ Form::text("Quest_".$lang."[0][label]", NULL ,['class'=>'form-control']) }}
                                        </div>
                                        <div class="index-change col-lg-1">
                                            <span class="btn btn-sm btn-danger btn-rem">X</span>
                                        </div>
                                    </div>
                                    <div class="form-check-inline">
                                        <div class="form-check">
                                            {{ Form::checkbox("Quest_".$lang."[0][user]", 1, FALSE ,['class'=>'form-check-input']) }}
                                            {{ Form::label("Quest_".$lang."[0][user]", 'Человек') }}
                                        </div>
                                        <div class="form-check">
                                            {{ Form::checkbox("Quest_".$lang."[0][multi]", 1, FALSE ,['class'=>'form-check-input']) }}
                                            {{ Form::label("Quest_".$lang."[0][multi]", 'Мульти',['class'=>'form-check-label']) }}
                                        </div>
                                    </div>
                                    <div class="variants-wrap">
                                        <div class="form-inline variant">
                                            <div class="form-group">
                                                {{ Form::label("Quest_".$lang."[0][vars][0][k]", 'Ответ') }}
                                                {{ Form::text("Quest_".$lang."[0][vars][0][k]", NULL ,['class'=>'form-control']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Quest_".$lang."[0][vars][0][v]", 'Оценка') }}
                                                {{ Form::text("Quest_".$lang."[0][vars][0][v]", NULL ,['class'=>'form-control']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label("Quest_".$lang."[0][vars][0][hint]", 'Подсказка') }}
                                                {{ Form::text("Quest_".$lang."[0][vars][0][hint]", NULL ,['class'=>'form-control']) }}
                                            </div>
                                            <span class="btn btn-danger btn-sm btn-remove">X</span>
                                        </div>
                                        <div class="add-var btn btn-success">Добавить вариант</div>
                                    </div>
                                </div>
                            @endforelse
                            <div class="form-group add-quest btn btn-success">Добавить вопрос</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="accordionAnswer{{$lang}}">
                <div class="card">
                    <div class="card-header" id="headingAnswer{{$lang}}">
                        <h5 class="mb-0">
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseAnswer{{$lang}}" role="button"
                               aria-expanded="false" aria-controls="collapseAnswer{{$lang}}">
                                Ответы
                            </a>
                        </h5>
                    </div>
                    <div id="collapseAnswer{{$lang}}" class="collapse" aria-labelledby="headingAnswe{{$lang}}r"
                         data-parent="#accordionAnswer{{$lang}}">
                        <div class="card-body">
                            @forelse($model->{'Answer_'.$lang} as $key=>$answer)
                                <div class="form-group answer">
                                    {{ Form::label("Answer_".$lang."[$key]", 'Ответ '.($key+1)) }}
                                    {{ Form::text("Answer_".$lang."[$key]", NULL ,['class'=>'form-control']) }}
                                    <span class="btn btn-danger rem-answer">X</span>
                                </div>
                                <div class="btn btn-success btn-sm add-answer">Добавить Ответ</div>
                            @empty
                                <div class="form-group answer">
                                    {{ Form::label("Answer_".$lang."[0]", 'Ответ 1') }}
                                    {{ Form::text("Answer_".$lang."[0]", NULL ,['class'=>'form-control']) }}
                                    <span class="btn btn-danger rem-answer">X</span>
                                </div>
                                <div class="btn btn-success btn-sm add-answer">Добавить Ответ</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@section('scripts')
    @parent
    <script>
        $(function () {
            function changeAttr(_this, count, name, att, center) {

                if (center === undefined) {
                    center = false;
                }
                var reg = /(.+\[\d+\]\[\w+\]\[)(\d+)(\])/;
                var change = "$1" + count + "$3";

                if (!center || name === 'a' || name === 'div') {
                    reg = /\d+/;
                    change = count;
                }
                att.forEach(function (item) {
                    if (_this.attr(item)) {
                        if (item === 'checked') {
                            _this.prop('checked', false);
                        } else {
                            var name1 = _this.attr(item).replace(reg, change);
                            _this.attr(item, name1);
                        }
                    }
                });
            }

            function removeVariant() {
                if (confirm('Удалить вариант ответа?'))
                    $(this).parents('.variant').remove();
            }

            $('.btn-remove').on('click', removeVariant);

            $('.add-quest').on('click', function () {
                var quest_wrappers = $('.quest-wrap');
                var quest = quest_wrappers.first().clone();
                var count = quest_wrappers.length;
                quest.find('input,label,textarea,div,a').each(function () {
                    var _this = $(this);
                    changeAttr(_this, count, this.localName, [
                        'name',
                        'id',
                        'for',
                        'href',
                        'checked',
                        'aria-labelledby',
                        'data-parent',
                        'aria-controls'
                    ]);
                    _this.val(null);
                });

                var variant = quest.find('.variant').first().clone();
                clearVariant(variant, 0);
                quest.find('.variants-wrap').html($('.add-var').first().clone());
                variant.prependTo(quest.find('.variants-wrap'));
                quest.insertBefore($(this));

                quest.find('.index-text').val(count);
                quest.find('.add-var').bind('click', addVariant);
            });

            function clearVariant(variant, count) {
                variant.find('input,label,textarea,a,div').each(function () {
                    var _this = $(this);
                    changeAttr(_this, count, this.localName, [
                        'name',
                        'id',
                        'for',
                        'href',
                        'checked',
                        'aria-labelledby',
                        'data-parent',
                        'aria-controls'
                    ], true);
                    _this.val(null);
                });
                variant.find('.btn-remove').on('click', removeVariant);
            }

            function addVariant() {
                var wrapper = $(this).parent().find('.variant');
                var variant = wrapper.first().clone();
                var count = wrapper.length;

                clearVariant(variant, count);
                variant.insertBefore($(this));
            }

            $('.add-var').on('click', addVariant);

            $('.add-answer').on('click', function () {
                var wrapper = $(this).parent().find('.answer');
                var answer = wrapper.first().clone();
                var count = wrapper.length;
                answer.find('input,label,textarea,a,div').each(function () {
                    var _this = $(this);
                    changeAttr(_this, count, this.localName, [
                        'name',
                        'id',
                        'for',
                    ]);
                    if (this.localName === 'input') {
                        _this.val('');
                    }
                    if (this.localName === 'label') {
                        _this.html(_this.html().replace(/\d+/, count + 1))
                    }
                });
                answer.find('.rem-answer').on('click', remAnswer)

                answer.insertBefore($(this));
            });

            function remAnswer() {
                if (confirm('Удалить ответ?'))
                    $(this).parents('.answer').remove();
            }

            $('.rem-answer').on('click', remAnswer)
        });
    </script>
@endsection