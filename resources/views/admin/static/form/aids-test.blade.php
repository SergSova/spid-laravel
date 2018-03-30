<?php
/**
 * Created by PhpStorm.
 * User: sergs
 * Date: 20.03.2018
 * Time: 13:10
 *
 * @var \App\StaticPage $model
 */

?>

<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('longtitle', 'Полный заголовок') }}
    {{ Form::text('longtitle', null ,['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Описание') }}
    {{ Form::textarea('description', null ,['class'=>'form-control']) }}
</div>
<div class="form-row">
    <div class="col form-group">
        {{ Form::label('test_btn', 'Текст кнопки') }}
        {{ Form::text('test_btn', null ,['class'=>'form-control']) }}
    </div>
    <div class="col form-group">
        {{ Form::label('test_btn_next', 'Текст кнопки далее') }}
        {{ Form::text('test_btn_next', null ,['class'=>'form-control']) }}
    </div>
    <div class="col form-group">
        {{ Form::label('test_btn_refresh', 'Текст кнопки повторить') }}
        {{ Form::text('test_btn_refresh', null ,['class'=>'form-control']) }}
    </div>
</div>

<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                    Тест
                </a>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                @forelse($model->Quest as $key=>$quest)
                    <div class="quest-wrap">
                        <div class="form-row">
                            <div class="form-group col-1">
                                {{ Form::text("Quest[$key][id]", $quest->id,['class'=>'index-text form-control-plaintext','readonly'=>1]) }}
                            </div>
                            <div class="form-group col">
                                {{ Form::label("Quest[$key][label]", 'Вопрос') }}
                                {{ Form::text("Quest[$key][label]", null ,['class'=>'form-control']) }}
                            </div>
                            <div class="index-change col-lg-1">
                                <span class="btn btn-sm btn-danger btn-rem">X</span>
                            </div>
                        </div>
                        <div class="form-check-inline">
                            <div class="form-check">
                                {{ Form::checkbox("Quest[$key][user]", 1, null ,['class'=>'form-check-input']) }}
                                {{ Form::label("Quest[$key][user]", 'Человек') }}
                            </div>
                            <div class="form-check">
                                {{ Form::checkbox("Quest[$key][multi]", 1, null ,['class'=>'form-check-input']) }}
                                {{ Form::label("Quest[$key][multi]", 'Мульти',['class'=>'form-check-label']) }}
                            </div>
                        </div>
                        <div class="variants-wrap">
                            @if(isset($quest->vars))
                                @foreach($quest->vars as $v_key=>$var)
                                    <div class="form-inline variant">
                                        <div class=" form-group">
                                            {{ Form::label("Quest[$key][vars][$v_key][k]", 'Ответ') }}
                                            {{ Form::text("Quest[$key][vars][$v_key][k]", null ,['class'=>'form-control']) }}
                                        </div>
                                        <div class=" form-group">
                                            {{ Form::label("Quest[$key][vars][$v_key][v]", 'Оценка') }}
                                            {{ Form::text("Quest[$key][vars][$v_key][v]", null ,['class'=>'form-control']) }}
                                        </div>
                                        <div class=" form-group">
                                            {{ Form::label("Quest[$key][vars][$v_key][hint]", 'Подсказка') }}
                                            {{ Form::text("Quest[$key][vars][$v_key][hint]", null ,['class'=>'form-control']) }}
                                        </div>
                                        <span class="btn btn-danger btn-sm btn-remove">X</span>
                                    </div>
                                @endforeach
                            @else
                                <div class="form-inline variant">
                                    <div class=" form-group">
                                        {{ Form::label("Quest[$key][vars][0][k]", 'Ответ') }}
                                        {{ Form::text("Quest[$key][vars][0][k]", null ,['class'=>'form-control']) }}
                                    </div>
                                    <div class=" form-group">
                                        {{ Form::label("Quest[$key][vars][0][v]", 'Оценка') }}
                                        {{ Form::text("Quest[$key][vars][0][v]", null ,['class'=>'form-control']) }}
                                    </div>
                                    <div class=" form-group">
                                        {{ Form::label("Quest[$key][vars][0][hint]", 'Подсказка') }}
                                        {{ Form::text("Quest[$key][vars][0][hint]", null ,['class'=>'form-control']) }}
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
                                {{ Form::text("Quest[0][id]", 0,['class'=>'index-text form-control-plaintext','readonly'=>1]) }}
                            </div>
                            <div class="form-group col">
                                {{ Form::label("Quest[0][label]", 'Вопрос') }}
                                {{ Form::text("Quest[0][label]", null ,['class'=>'form-control']) }}
                            </div>
                            <div class="index-change col-lg-1">
                                <span class="btn btn-sm btn-danger btn-rem">X</span>
                            </div>
                        </div>
                        <div class="form-check-inline">
                            <div class="form-check">
                                {{ Form::checkbox("Quest[0][user]", 1, false ,['class'=>'form-check-input']) }}
                                {{ Form::label("Quest[0][user]", 'Человек') }}
                            </div>
                            <div class="form-check">
                                {{ Form::checkbox("Quest[0][multi]", 1, false ,['class'=>'form-check-input']) }}
                                {{ Form::label("Quest[0][multi]", 'Мульти',['class'=>'form-check-label']) }}
                            </div>
                        </div>
                        <div class="variants-wrap">
                            <div class="form-inline variant">
                                <div class="form-group">
                                    {{ Form::label("Quest[0][vars][0][k]", 'Ответ') }}
                                    {{ Form::text("Quest[0][vars][0][k]", null ,['class'=>'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label("Quest[0][vars][0][v]", 'Оценка') }}
                                    {{ Form::text("Quest[0][vars][0][v]", null ,['class'=>'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label("Quest[0][vars][0][hint]", 'Подсказка') }}
                                    {{ Form::text("Quest[0][vars][0][hint]", null ,['class'=>'form-control']) }}
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

<div id="accordionAnswer">
    <div class="card">
        <div class="card-header" id="headingAnswer">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseAnswer" role="button" aria-expanded="false" aria-controls="collapseAnswer">
                    Ответы
                </a>
            </h5>
        </div>
        <div id="collapseAnswer" class="collapse" aria-labelledby="headingAnswer" data-parent="#accordionAnswer">
            <div class="card-body">
                @forelse($model->Answer as $key=>$answer)
                    <div class="form-group answer">
                        {{ Form::label("Answer[$key]", 'Ответ '.($key+1)) }}
                        {{ Form::text("Answer[$key]", null ,['class'=>'form-control']) }}
                        <span class="btn btn-danger rem-answer">X</span>
                    </div>
                    <div class="btn btn-success btn-sm add-answer">Добавить Ответ</div>
                @empty
                    <div class="form-group answer">
                        {{ Form::label("Answer[0]", 'Ответ 1') }}
                        {{ Form::text("Answer[0]", null ,['class'=>'form-control']) }}
                        <span class="btn btn-danger rem-answer">X</span>
                    </div>
                    <div class="btn btn-success btn-sm add-answer">Добавить Ответ</div>
                @endforelse
            </div>
        </div>
    </div>
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
                answer.find('.rem-answer').on('click',remAnswer)

                answer.insertBefore($(this));
            });
            function remAnswer() {
                if (confirm('Удалить ответ?'))
                    $(this).parents('.answer').remove();
            }
            $('.rem-answer').on('click',remAnswer)
        });
    </script>
@endsection