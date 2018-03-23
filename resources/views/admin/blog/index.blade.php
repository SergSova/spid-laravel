<?php
/**
 * Created by PhpStorm.
 * User: sergs
 * Date: 20.03.2018
 * Time: 14:13
 */

/**
 *
 * @var \App\Blog $model
 */

?>

@extends('admin.layout')

@section('title', $model->clearTitle($model))

@section('body')
    <div class="container">
        <h1>{{$model->clearTitle($model)}}</h1>
        {{--<a href="{{ route('staticPageView',[$model->id, $model->alias]) }}">Редактировать заголовок блога</a>--}}

        <a href="{{route('blog.create')}}" class="btn btn-success btn-sm">Добавить статью</a>
        @forelse($model->posts() as $post)
            <div class="row">
                <div class="col-lg-1">{{$post->index}}</div>
                <div class="col-lg-2">
                    <img src="{{trim($post->mainImage)}}" class="img-fluid img-thumbnail" alt="" style="height: 50px">
                </div>
                <div class="col">{{$post->title}}</div>
                <div class="col-lg-2">{{$post->publishedOn}}</div>
                <div class="col-lg-3">
                    <a href="/blog/{{ $post->slug }}" target="_blank">{{ $post->slug }}</a>
                </div>
                <div class="col-lg-1">
                    <a href="{{ route('blog.edit',[$post->id]) }}">Edit</a>
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection

