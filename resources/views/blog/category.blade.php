<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 29.03.2018
 * Time: 12:31
 */


$allCategory = \App\BlogCategory::all();
?>

<div class="category-popup__box">
    <div class="category-popup__wrap">
        <div class="category-popup__content">
            <button class="category-popup__btn-search">поиск</button>
            <button class="category-popup__btn-close">закрыть</button>
            <h2 class="category-popup__heading">
                <a href="{{route('blog')}}">все статьи</a>
            </h2>

            <div class="category-popup__list-wrap">
                <ul class="category-popup__list">
                    @foreach($allCategory->where('isMain',true) as $category)
                        <li>
                            <img src="{{$category->icon}}" alt="{{$category->title}}">
                            <a href="{{route('blog.fitred',$category->slug)}}">{{$category->title}}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="category-popup__separate-line category-popup__separate-line-clip-fix"></div>

                <ul class="category-popup__list">
                    @foreach($allCategory->where('isMain',false) as $category)
                        <li>
                            <img src="{{$category->icon}}" alt="{{$category->title}}">
                            <a href="{{route('blog.fitred',$category->slug)}}">{{$category->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>