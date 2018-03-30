<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 27.03.2018
 * Time: 16:19
 */
/**
 * @var \App\BlogCategory $model
 */
?>
@extends('admin.layout')

@section('title',$title)

@section('body')
    <div class="container">
        <a href="{{route('blog-category.index')}}" class="btn btn-sm btn-success mb-2">Назад</a>
        <h1>{{$title}}</h1>

        {!! Form::model($model,['url'=>route($route,[$model->id]),'method'=>$method,'class'=>'']) !!}

        <div class="form-group">
            {{ Form::label('title', 'Заголовок') }}
            {{ Form::text('title', null ,['class'=>'form-control']) }}
        </div>
        <div class="form-group ">
            {{ Form::label('isMain', 'В правом списке',['class'=>'form-check-label']) }}
            {{ Form::checkbox('isMain', 1, null ) }}
        </div>


        @include('admin.chanks.img_lfm',[
                'id'=>'icon',
                'name'=>"icon",
                'title'=>'Картинка',
                'value'=>$model->icon ??null
                ])

        {{--@include('admin.seo_form')--}}

        {{ Form::submit('Сохранить',['class'=>'btn btn-primary mb-2']) }}
        {!! Form::close() !!}
    </div>
@endsection

