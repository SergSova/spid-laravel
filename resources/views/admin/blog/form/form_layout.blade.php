@extends('admin.layout')

@section('title',$title)

@section('body')
    <div class="container">
        <a href="{{route('admin-blog')}}" class="btn btn-sm btn-success mb-2">Назад</a>
        <h1>{{$title}}</h1>

        {!! Form::model($model,['url'=>route('postPageEdit',[$model->id]),'method'=>'post','class'=>'']) !!}

        @include($form)
        @include('admin.seo_form')

        {{ Form::submit('Сохранить',['class'=>'btn btn-primary mb-2']) }}
        {!! Form::close() !!}
    </div>
@endsection
