<?php
/**
 * Created by PhpStorm.
 * User: sergs
 * Date: 20.03.2018
 * Time: 14:13
 */

use Carbon\Carbon;

/**
 *
 * @var \App\Blog $model
 */
$title = 'Блог';
setlocale(LC_ALL, "ru_RU.UTF-8");

Carbon::setLocale('uk');

$date = Carbon::now()->diffForHumans();
?>

@extends('admin.layout')

@section('title', $title)

@section('body')
    <div class="container">
        <h1>{{$title}}</h1>
        <div class="btn-toolbar">
            <a href="{{route('blog.create')}}" class="btn btn-success btn-sm">Добавить статью</a>
            {{Form::open(['route'=>['blog.clear'], 'method'=>'delete'])}}
            <button onclick="return confirm('are you sure?')" type="submit" class="btn-sm btn btn-danger">
                Удалить все помеченые на удаление
            </button>
            {{Form::close()}}
        </div>
        <table class="table table-sm table-hover">
            <thead>
            <tr>
                <td>Id</td>
                {{--<td>index</td>--}}
                <td>Картинка</td>
                <td>Категория</td>
                <td>Заголовок</td>
                <td>Опубликовано</td>
                <td>B/Vi/D/V</td>
                <td></td>
            </tr>
            </thead>
            @forelse($model->posts() as $post)
                <tr {{$post->trashed()?'class="table-danger"':''}}>
                    <td>{{$post->id}}</td>
                    {{--                    <td>{{$post->index}}</td>--}}
                    <td><img src="{{trim($post->mainImage)}}" class="img-fluid img-thumbnail" alt="" style="height: 50px"></td>
                    <td>{{$post->category->title}}</td>
                    <td>{{$post->title}}</td>
                    <td>{!! $post->format_data  !!}</td>
                    <td>{{$post->isBig?'да':'нет'}}/{{$post->isVioletPostStyle?'да':'нет'}}/{{$post->isBlackTitle?'да':'нет'}}/{{$post->isVideo?'да':'нет'}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{$post->url}}" class="btn-sm btn btn-secondary" target="_blank">Посмотреть</a>
                            <a href="{{ route('blog.edit',[$post->id]) }}" class="btn-sm btn btn-info">Редактировать</a>
                            @if(!$post->trashed())
                                <a href="{{ route('blog.pub',[$post->id]) }}" class="btn-sm btn {{$post->published?'btn-warning':'btn-success'}}">{{$post->published?'Снять с публикации':'Опубликовать'}}</a>
                            @endif
                            {{Form::open(['route'=>[($post->trashed()?'blog.clear':'blog.destroy'), $post->id], 'method'=>'delete'])}}
                            <button onclick="return confirm('are you sure?')" type="submit" class="btn-sm btn btn-danger">
                                {{$post->trashed()?'Удалить совсем':'Удалить'}}
                            </button>
                            {{Form::close()}}
                        </div>
                    </td>
                </tr>
            @empty
            @endforelse
        </table>

    </div>
@endsection

