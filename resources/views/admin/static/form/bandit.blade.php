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
<div class="form-row">
    @for($i=1;$i<=4;$i++)
        <div class="col form-group">
            {{ Form::label('rotator'.$i,'Текст '.$i.' колонки') }}
            {{ Form::text('rotator'.$i,null, ['class'=>'form-control']) }}
            @if($i==4)
                <small class="form-text text-muted">/ - символ разделения строк</small>
            @endif
        </div>
    @endfor
</div>
<div class="form-row">
    <div class="col form-group">
        {{ Form::label('rocket_btn','Кнопка не рисковать') }}
        {{ Form::text('rocket_btn',null, ['class'=>'form-control']) }}
    </div>
    <div class="col form-group">
        {{ Form::label('tumb_on_off','Тумблер включить голову') }}
        {{ Form::text('tumb_on_off',null, ['class'=>'form-control']) }}
        <small class="form-text text-muted">/ - символ разделения строк</small>
    </div>
</div>

