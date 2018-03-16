@extends('admin.layout')

@section('title',$title)

@section('body')
    <div class="container">
        <a href="{{route('staticPage')}}" class="btn btn-sm btn-success mb-2">Назад</a>
        <h1>{{$title}}</h1>
        {!! Form::model($model,['url'=>route('staticPageEdit',[$model->id,$model->alias]),'method'=>'post','class'=>'']) !!}
        
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
        @include('admin.seo_form')

        {{ Form::submit('Сохранить',['class'=>'btn btn-primary mb-2']) }}
        {!! Form::close() !!}
    </div>
@endsection