@extends('admin.layout')

@section('title',$title)

@section('body')
    <div class="container">
        <a href="{{route('staticPage')}}" class="btn btn-sm btn-success mb-2">Назад</a>
        <h1>{{$title}}</h1>

        {!! Form::model($model,['url'=>route('staticPageEdit',[$model->id,$model->alias]),'method'=>'post','class'=>'']) !!}

        @include($form)
        @include('admin.seo_form')

        {{ Form::submit('Сохранить',['class'=>'btn btn-primary mb-2']) }}
        <a href="{{ $model->alias=='index'?'/': '/'.$model->alias}}" target="_blank" class="btn btn-info mb-2 float-right">Просмотреть страницу</a>
        {!! Form::close() !!}
    </div>
@endsection
