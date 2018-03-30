<div class="form-group">
    {{ Form::label('title', 'Скрытый текст (2 слова)') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('longtitle','Текст ответа') }}
    {{ Form::text('longtitle',null, ['class'=>'form-control']) }}
    <small class="form-text text-muted">/ - символ разделения строк</small>
</div>
<div class="form-group">
    {{ Form::label('description','Текст подсказки') }}
    {{ Form::text('description',null, ['class'=>'form-control']) }}
</div>

