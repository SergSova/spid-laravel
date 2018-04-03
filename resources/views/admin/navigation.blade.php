<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 21.03.2018
 * Time: 14:32
 */

$route = \Request::route()->getName();
?>

<div class="container">
    <nav>
        <ul class="nav ">
            <li class="nav-item left">
                <h2>{{config('app.name')}}</h2>
            </li>
            <li class="nav-item">
                <a href="{{route('admin')}}" class="nav-link  {{$route=='admin'?'active':''}}">Главная</a>
            </li>
            <li class="nav-item">
                <a href="{{route('staticPage')}}" class="nav-link {{$route=='staticPage'?'active':''}}">Статические
                    страницы</a>
            </li>
            <li class="nav-item">
                <a href="{{route('blog.index')}}" class="nav-link {{$route=='blog.index'?'active':''}}">Блог</a>
            </li>
            <li class="nav-item">
                <a href="{{route('blog-category.index')}}"
                   class="nav-link {{$route=='blog-category.index'?'active':''}}">Категории блога</a>
            </li>
            <li class="nav-item ">
                <form action="{{route('logout')}}" method="post">
                    {{ csrf_field() }}
                    <input type="submit" class="nav-link" value="Выйти"/>
                </form>
            </li>
        </ul>
    </nav>
</div>

