<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 12.04.2018
 * Time: 12:21
 */

/**
 * @var \App\Statistic $model
 */

$title = 'Статистика тестирования';
?>

@extends('admin.layout')

@section('title',$title)


@section('body')
    <div class="container">
        <h1>{!! $title !!}</h1>
        <h3>Всего проголосовало: <strong class="text-success">{{ $model->count }}</strong> человек</h3>
        @include('admin.statistic.quest_item',['quests'=>$model->statistic])
    </div>
@endsection
