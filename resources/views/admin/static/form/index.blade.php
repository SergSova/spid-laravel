@extends('admin.layout')

@section('title',$title)

@section('body')
    <div class="container">
        <a href="{{route('staticPage')}}" class="btn btn-sm btn-success mb-2">Назад</a>
        <h1>{{$title}}</h1>

        {!! Form::model($model,['url'=>route('staticPageEdit',[$model->id,$model->alias]),'method'=>'post','class'=>'']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Скрытый текст (2 слова)') }}
            {{ Form::text('title', null ,['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('longtitle','Текст ответа (строки разделять символом /)') }}
            {{ Form::text('longtitle',null, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description','Текст подсказки') }}
            {{ Form::text('description',null, ['class'=>'form-control']) }}
        </div>

        @include('admin.seo_form')

        {{ Form::submit('Сохранить',['class'=>'btn btn-primary mb-2']) }}
        {!! Form::close() !!}
    </div>
@endsection