<?php

/**
 * @var \App\StaticPage $model
 */

?>
@extends('admin.layout')

@section('title',$title)

@section('body')
    <div class="container">
        <a href="{{route('staticPage')}}" class="btn btn-sm btn-success mb-2">Назад</a>
        <h1>{{$title}}</h1>

        {!! Form::model($model,['url'=>route('staticPageEdit',[$model->id,$model->alias]),'method'=>'post','class'=>'']) !!}
        {{--<div class="form-group col-1">
            {{ Form::label('page_index', 'Index') }}
            {{ Form::number('page_index', $model->page_index ,['class'=>'form-control']) }}
        </div>--}}
        @include($form)
        @include('admin.seo_form',['lang'=>'ru','index'=>'ru'])
        @include('admin.seo_form',['lang'=>'uk','index'=>'uk'])

        {{ Form::submit('Сохранить',['class'=>'btn btn-primary mb-2']) }}
        <a href="{{ $model->alias=='index'?'/': '/'.$model->alias}}" target="_blank" class="btn btn-info mb-2 float-right">Просмотреть страницу</a>
        {!! Form::close() !!}
    </div>
@endsection
