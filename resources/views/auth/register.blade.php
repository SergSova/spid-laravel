<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 21.03.2018
 * Time: 12:07
 */

?>
@extends('site.layout')

@section('title','Регистрация')


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

<div class="container">
    <nav class="navbar" role="navigation">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{ route('login') }}">@lang('auth.sign_in')</a>
            </li>
        </ul>
    </nav>

    @if(count($errors->all()))
        <div class="container">
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $message)
                    <p>{{$message}}</p>
                @endforeach
            </div>
        </div>
    @endif

    <form role="form" method="post" action="{{ route("register") }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="name">@lang('auth.name')</label>
            <input type="text" class="form-control" id="name" placeholder="@lang('auth.name')" name='name'>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
        </div>
        <div class="form-group">
            <label for="password">@lang('auth.pass')</label>
            <input type="password" class="form-control" id="password" placeholder="@lang('auth.pass')" name="password">
        </div>
        <div class="form-group">
            <label for="confirm_password">@lang('auth.confirm')</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="@lang('auth.confirm')" name="password_confirmation">
        </div>
        <button type="submit" class="btn btn-default">@lang('auth.sign_up')</button>
    </form>
</div>
@endsection