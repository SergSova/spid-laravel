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
            {{ Form::label('modal_text','Текст подсказки') }}
            {{ Form::text('modal_text',null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('modal_btn','Текст кнопки') }}
            {{ Form::text('modal_btn',null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('text_bottom','Текст подсказки внизу') }}
            {{ Form::text('text_bottom',null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('wrong','Текст ошибки') }}
            {{ Form::text('wrong',null, ['class'=>'form-control']) }}
        </div>

        @include('admin.seo_form')

        {{ Form::submit('Сохранить',['class'=>'btn btn-primary mb-2']) }}
        {!! Form::close() !!}
    </div>
@endsection
