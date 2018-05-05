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
        <div class="row">
            <div class="col"><h3>Всего проголосовало: <strong class="text-success">{{ $model->count }}</strong> человек</h3></div>
            <div class="col">
                <a class="btn btn-sm btn-danger btn-clear float-right" data-url="{{route('statClear')}}">Очистить статистику</a>
            </div>
        </div>

        @include('admin.statistic.quest_item',['quests'=>$model->statistic])
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $('.btn-clear').on('click', function (e) {
            e.preventDefault(e);
            if (confirm('Вы хотите удалить безвозратно всю статистику?'))
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: $(this).data('url'),
                    method: 'delete',
                    success: function (resp) {
                        if (resp == 1) {
                            location.assign('{{route('admin')}}');
                        }
                    }
                });
        });
    </script>
@endsection
