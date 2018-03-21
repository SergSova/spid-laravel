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
    {{ Form::text('title', NULL ,['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('longtitle', 'Полный заголовок') }}
    {{ Form::text('longtitle', NULL ,['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Описание') }}
    {{ Form::textarea('description', null ,['class'=>'form-control','rows'=>3]) }}
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
</div>

