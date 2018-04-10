<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 26.03.2018
 * Time: 12:59
 */

?>
@extends('site.layout')

@section('title','Авторизация')


@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/blog/reset.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        a {
            color: darkgray;
            text-decoration: none
        }

        .container {
            color: white;
        }
    </style>
@endsection
@section('body')
    <a href="{{route('social.login')}}">Назад</a>
    @if(count($errors->all()))
        <div class="container">
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $message)
                    <p>{{$message}}</p>
                @endforeach
            </div>
        </div>
    @endif
    <form action="{{route('password.email')}}" method="post">
        {!! csrf_field() !!}
        <input type="email" placeholder="Email" name="email">
        <button>Сбросить пароль</button>
    </form>
@endsection