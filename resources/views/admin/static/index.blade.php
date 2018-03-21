<?php
/**
 * @var \App\StaticPage[] $models
 */
?>
@extends('admin.layout')

@section('title',$title)
@section('body')
    <div class="container">
        <h1>{{$title}}</h1>
        <table class="table">
            <tr>
                <th>index</th>
                <th>Заголовок</th>
                <th>alias</th>
                <th></th>
            </tr>
            @foreach($models as $model)
                <tr>
                    <td>{{ $model->page_index }}</td>
                    <td>{{ $model->clearTitle($model) }}</td>
                    <td><a href="/{{ $model->alias }}" target="_blank">{{ $model->alias }}</a></td>
                    <td><a href="{{ route('staticPageView',[$model->id,$model->alias]) }}">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

