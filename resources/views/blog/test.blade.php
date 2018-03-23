<?php
$i=1
/**
 * @var \App\Blog $model
 */
?>
@extends('site.layout',$model)
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('title', $model->clearTitle())

@section('body')
    <div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-lg-1"> {{$i++}}</div>
            <div class="col-lg-1"> {{$post->id}}</div>
            <div class="col-lg-1">{{$post->isVioletPostStyle?'V':''}}</div>
            <div class="col">{{$post->isBig?'B':''}}</div>
            <div class="col"> {{$post->title}}</div>
            <div class="col"> {{$post->publishedOn}}</div>
        </div>
    @endforeach
    </div>
@endsection
@section('scripts')
@endsection