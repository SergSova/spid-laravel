<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
    <small class="form-text text-muted">/ - символ разделения строк</small>
</div>
<div class="form-group">
    {{ Form::label('modal_text','Текст подсказки') }}
    {{ Form::text('modal_text',null, ['class'=>'form-control']) }}
    <small class="form-text text-muted">/ - символ разделения строк</small>
</div>
<div class="form-group">
    {{ Form::label('modal_btn','Текст кнопки') }}
    {{ Form::text('modal_btn',null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('text_bottom','Текст подсказки внизу') }}
    {{ Form::text('text_bottom',null, ['class'=>'form-control']) }}
    <small class="form-text text-muted">/ - символ разделения строк</small>
</div>
<div class="form-group">
    {{ Form::label('wrong','Текст ошибки') }}
    {{ Form::text('wrong',null, ['class'=>'form-control']) }}
    <small class="form-text text-muted">/ - символ разделения строк</small>
</div>
