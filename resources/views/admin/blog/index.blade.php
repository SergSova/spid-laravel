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

        <a href="{{ route('staticPageView',[$model->id, $model->alias]) }}">Редактировать заголовок блога</a>

        @forelse($model->posts as $post)
            <div class="row">
                <div class="col-lg-1">
                    {{$post->id}}
                </div>
                <div class="col">
                    {{$post->title}}
                </div>
                <div class="col-lg-1">
                    <a href="/{{ $post->alias }}" target="_blank">{{ $post->alias }}</a>
                </div>
                <div class="col-lg-1">
                    <a href="{{ route('postPageView',[$post->id,$post->alias]) }}">Edit</a>
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection

