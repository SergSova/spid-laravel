@extends('site.layout')

@section('title','Авторизация')


@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/blog/reset.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        a{
            color: darkgray;
            text-decoration: none
        }
        .container{
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

                <div class="panel panel-default">
                    <div class="panel-heading text-center">@lang('auth.social_login')</div>

                    <div class="panel-body">
                        <p class="lead text-center">@lang('auth.social_providers')</p>

                        <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block">
                            Facebook
                        </a>
                        <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info btn-block">
                            Twitter
                        </a>
                        <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                            Google
                        </a>
                        <a href="{{ route('social.oauth', 'github') }}" class="btn btn-secondary btn-block">
                            Github
                        </a>
                        <hr>
                        <a href="{{ route('login') }}" class="btn btn-default btn-block">
                            @lang('auth.social_email')
                        </a>
                    </div>
                </div>
        </div>
    </div>
@endsection