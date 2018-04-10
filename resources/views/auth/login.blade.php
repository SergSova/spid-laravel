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

    <div class="container">
        <div class="">
            @if ($errors->has('msg'))
                <div class="alert alert-warning">
                    {{ $errors->first('msg') }}
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
            @endif

            <a href="{{route('social.login')}}">@lang('site.back')</a>
            <form action="{{route('login')}}" method="post">
                {!! csrf_field() !!}
                <input type="text" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Password">
                <button>@lang('auth.sign_in')</button>
            </form>

            <a href="{{route('register')}}">@lang('auth.sign_up')</a>
            <a href="{{route('password.request')}}">@lang('auth.forgot')</a>

        </div>
    </div>
@endsection