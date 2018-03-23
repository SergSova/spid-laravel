<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 21.03.2018
 * Time: 14:32
 */
?>

<div class="container">
    <nav>
        <ul class="nav ">
            <li class="nav-item left">
                <h2>{{config('app.name')}}</h2>
            </li>
            <li class="nav-item">
                <a href="{{route('admin')}}" class="nav-link active">Главная</a>
            </li>
            <li class="nav-item">
                <a href="{{route('staticPage')}}" class="nav-link">Статические страницы</a>
            </li>
            <li class="nav-item">
                <a href="{{route('blog.index')}}" class="nav-link">Блог</a>
            </li>
        </ul>
    </nav>
</div>

