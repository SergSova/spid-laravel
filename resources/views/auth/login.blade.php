<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 21.03.2018
 * Time: 12:02
 */

?>
<a href="{{route('social.login')}}">@lang('site.back')</a>
<form action="{{route('login')}}" method="post">
    {!! csrf_field() !!}
    <input type="text" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Password">
    <button>@lang('auth.sign_in')</button>
</form>

<a href="{{route('register')}}">@lang('auth.sign_up')</a>
<a href="{{route('password.request')}}">@lang('auth.forgot')</a>