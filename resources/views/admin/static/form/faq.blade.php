<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('longtitle','Длинный заголовок') }}
    {{ Form::text('longtitle',null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('description','Описание') }}
    {{ Form::textarea('description',null,['class'=>'form-control']) }}
</div>
<div class="row">
    <div class="form-group col">
        {{ Form::label('menutitle','Заголовок меню') }}
        {{ Form::text('menutitle',null, ['class'=>'form-control']) }}
    </div>
    <div class="form-check col">
        {{ Form::checkbox('published',1,true,['class'=>'form-check-input']) }}
        {{ Form::label('published','Опубликовано',['class'=>'form-check-label']) }}
    </div>
</div>

@include('admin.question_form',$model)
