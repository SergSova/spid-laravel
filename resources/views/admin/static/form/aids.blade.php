<div class="form-group">
    {{ Form::label('title', 'Заголовок (строки разделять символом /)') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('modal_text','Текст подсказки') }}
    {{ Form::text('modal_text',null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('modal_btn','Текст кнопки') }}
    {{ Form::text('modal_btn',null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('modal_bottom','Текст внизу с лева') }}
    {{ Form::text('modal_bottom',null, ['class'=>'form-control']) }}
</div>

