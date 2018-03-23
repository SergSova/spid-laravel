@extends('admin.layout')

@section('title',$title)

@section('body')
    <div class="container">
        <a href="{{route('blog.index')}}" class="btn btn-sm btn-success mb-2">Назад</a>
        <h1>{{$title}}</h1>

        {!! Form::model($model,['url'=>route($route,[$model->id]),'method'=>$method,'class'=>'']) !!}

        @include('admin.blog.form.post_form')
        @include('admin.seo_form')

        {{ Form::submit('Сохранить',['class'=>'btn btn-primary mb-2']) }}
        {!! Form::close() !!}
    </div>
@endsection
