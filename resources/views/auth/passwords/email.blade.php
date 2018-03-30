<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 26.03.2018
 * Time: 12:59
 */

?>

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
