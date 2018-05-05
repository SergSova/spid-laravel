<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 04.04.2018
 * Time: 16:44
 */

use App\StaticPage;


/**
 * @var \App\StaticPage|\App\Post $model
 */

$music = StaticPage::find(1);
$music->merge(json_decode($music->longtitle_ru));

?>

<link rel="icon" type="image/png" href="{{asset('favicon.png')}}"/>


@isset($model)
    @if($model->seo&&$model->seo->seo_description)
        <meta name="description" content="{{$model->seo->seo_description}}"/>
    @endif
    @if($model->seo&&$model->seo->seo_keywords)
        <meta name="keywords" content="{{$model->seo->seo_keywords}}"/>
    @endif
    <meta property="og:title" content="{{$model->seo->og_title??str_replace('~','',$model->title) }}"/>
    @if($model->seo&&$model->seo->og_description)
        <meta property="og:description" content="{{$model->seo->og_description}}"/>
    @endif
    @if($model->seo&&$model->seo->og_image)
        <meta property="og:image" content="{{env('APP_URL').($model->seo->og_image??'/assets/img/meta_image.jpg')}}"/>
    @else
        <meta property="og:image" content="{{env('APP_URL'). ($model->mainImage??'/assets/img/meta_image.jpg')}}"/>
    @endif
@endisset

@if($music->isMusicOn)
    <script>
        window.addEventListener('load', function () {
            setTimeout(function () {
                var siteMusic = document.querySelector('.site-music');
                var promise = siteMusic.play(),
                    localS = localStorage.getItem("drugstore-music-play");

                if (promise !== undefined) {
                    promise
                        .catch(error=> {}
                )
                .
                    then(()=> {
                        siteMusic.volume = 0.3;
                    $('.top-btn_music').on('click', function () {
                        if ($('.menu').hasClass('mutted')) {
                            siteMusic.muted = false;
                            localStorage.setItem("drugstore-music-play", "1");
                            $('.menu').removeClass('mutted')
                        } else {
                            siteMusic.muted = true;
                            $('.menu').addClass('mutted');
                            localStorage.setItem("drugstore-music-play", "0");
                        }
                    })
                })
                }

                if (localS == 1) {
                    siteMusic.muted = false;
                    if (document.querySelector('.menu')!==null)
                        document.querySelector('.menu').classList.remove('mutted');
                } else {
                    siteMusic.muted = true;
                    if (document.querySelector('.menu')!==null)
                        document.querySelector('.menu').classList.add('mutted');
                }
            }, 1300);
        })
    </script>
@endif
<audio class="site-music" style="display: none;" src="{{env('APP_URL').$music->mainMusic}}" loop></audio>