@extends('site.template')

@section('title', 'Blog')

@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900&amp;subset=latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/lib/reset.css">
    <link rel="stylesheet" href="assets/css/blog/header.css">
    <link rel="stylesheet" href="assets/css/blog/footer.css">
    <link rel="stylesheet" href="assets/css/blog/base.css">
    <link rel="stylesheet" href="assets/css/blog/blog.css">
    <link rel="stylesheet" href="assets/css/blog/media.css">
@endsection
@section('body')
    <div id="p_prldr">
        <div class="preo_prego">
            <div class="cube-all">
                <div class="thecube">
                    <div class="cube c1"></div>
                    <div class="cube c2"></div>
                    <div class="cube c4"></div>
                    <div class="cube c3"></div>
                </div>

            </div>
            <!--<span class="svg_anm"></span>-->
        </div>
    </div>
    <main>
        <div class="main-content">
            <div class="wrapper">
                <div class="fixid-container">
                    <!--<header class="header">
                        <div class="header-overlay"></div>
                        <div class="header-top"></div>
                        <div class="header-bottom"></div>
                    </header>-->

                    <header class="header">
                        <div class="logo-box">
                            <img src="assets/img/blog/header/logo-white.png" alt="">
                        </div>

                        <div class="menu-box">
                            <img class="menu-box_img" src="assets/img/blog/header/menu-burger.png" alt="">

                            <strong class="menu-box_text">меню</strong>
                        </div>
                    </header>

                    <div class="content">
                        <div class="content-head">
                            <!-- <div class="wrapper-breadcrumb-filter"> 
                                <div class="bread-crumbs" id="breadcrumbs" itemscope=""
                                     itemtype="http://schema.org/BreadcrumbList">
                                    <div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                                         class="button">
                                        <a href="#" itemprop="item">
                                            <span itemprop="name" class="label1">Prego</span>
                                            <meta itemprop="position" content="1">
                                        </a>
                                    </div>
                                    <div itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                                         class="button">
                                        <span itemprop="name" class="label1">Блог</span>
                                        <meta itemprop="position" content="2">
                                    </div>
                                </div>
                                <div class="filter">
                                    <div class="multifilter">
                                        <a href="#!">
                                            <img src="assets/img/blog/icon-filter/vse.png" alt="">
                                            Все</a>
                                    </div>
                                    <div class="multifilter">
                                        <a href="#!">
                                            <img src="assets/img/blog/icon-filter/rekomen.png" alt="">
                                            Рекомендуем <span>(23)</span></a>
                                    </div>
                                    <div class="multifilter">
                                        <a href="#!">
                                            <img src="assets/img/blog/icon-filter/sovet.png" alt="">
                                            Советы<span>(8)</span></a>
                                    </div>
                                    <div class="multifilter">
                                        <a href="#!">
                                            <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                            История<span>(10)</span></a>
                                    </div>
                                    <div class="multifilter">
                                        <a href="#!">
                                            <img src="assets/img/blog/icon-filter/proizvot.png" alt="">
                                            Производство<span>(16)</span></a>
                                    </div>
                                    <div class="multifilter">
                                        <a href="#!">
                                            <img src="assets/img/blog/icon-filter/remont.png" alt="">
                                            Ремонт<span>(90)</span></a>
                                    </div>
                                </div>
                            </div>-->

                            <!--<div class="blog-title-h1" style="background-image: url(assets/img/blog/blog/blog-title.png);">
                                <h1>Блог</h1>
                                <h2>Как правильно выбрать обувь, тонкости подбора каблука, анализ обувных технологий и другие
                                    полезные статьи об обуви.</h2>
                            </div>-->

                            <h1 class="main-caption clip-fix">Блог</h1>


                        </div>
                        <div class="content-wrapper scroll-container" id="scroll">
                            <div class="blog-main">
                                <section class="blog-large">
                                    <div class="large-translate translate-block">
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/1.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                        <span>
                                            <img src="assets/img/blog/icon-filter/remont.png" alt="">
                                        </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/2%20(1).png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/3.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/11.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="tilter">
                                            <div class="content-article">
                                                <figure class="tilter__figure">
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/andre-tan.jpg" alt="">
                                                        <div class="tilter-deco"></div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/sovet.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h2>Как правильно подобрать обувь?</h2>
                                                                    <h3>Мастер класс от Андре Тана</h3>
                                                                </div>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/4.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/5.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="video">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <div class="video-to-play">
                                                            <div class="video-blog" data-video="0yLYHPpKOZE"></div>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="tilter">
                                            <div class="content-article">
                                                <figure class="tilter__figure">
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/kvadrat2.png" alt="">
                                                        <div class="tilter-deco"></div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/sovet.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h2>Интернет-магазин обуви Prego</h2>
                                                                    <h3>Скидка 500 грн. на все сапоги!</h3>
                                                                </div>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/6.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/7.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/8.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                    </div>
                                </section>
                                <section class="blog-small">
                                    <div class="medium-translate translate-block">
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/9.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                        <span>
                                            <img src="assets/img/blog/icon-filter/remont.png" alt="">
                                        </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/22.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="tilter">
                                            <div class="content-article">
                                                <figure class="tilter__figure">
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/kvadrat2.png" alt="">
                                                        <div class="tilter-deco"></div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/sovet.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h2>Как правильно подобрать обувь?</h2>
                                                                    <h3>Мастер класс от Андре Тана</h3>
                                                                </div>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/11.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/18.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/12.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/13.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="video">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <div class="video-to-play">
                                                            <div class="video-blog" data-video="HMUg5Vvs6g0"></div>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                    каталогам
                                                                    мужской, женской Вы можете без особых усилий, переходите по
                                                                    страницам
                                                                    сайта в каталогам
                                                                    мужской, женской Вы можете без особых усилий, переходите по
                                                                    страницам
                                                                    сайта в каталогам
                                                                    мужской, женской Вы можете без особых усилий, переходите по
                                                                    страницам
                                                                    сайта в каталогам
                                                                    мужской, женской</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/14.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/21.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                        <article class="blog-news">
                                            <div class="content-article">
                                                <figure>
                                                    <div class="blog-image">
                                                        <img src="assets/img/blog/blog/15.png" alt="">
                                                    </div>
                                                    <figcaption>
                                                        <div class="blog-news-content">
                                                            <div class="blog-news">
                                                                <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                                </div>
                                                                <div class="blog-title">
                                                                    <h3>Fashion</h3>
                                                                    <h2>Fashion весна/лето 2017</h2>
                                                                    <data>25 января 2018 года</data>
                                                                </div>
                                                                <p>Как ни странно, но обувь ручной работы – не такая уж
                                                                    редкость. Ручное производство обуви все еще распространено,
                                                                    особенно в Италии и Англии – странах, которые с давних
                                                                    времен славились своими сапожниками. И речь идет не о
                                                                    крохотных мастерских, работающих на постоянных клиентов.
                                                                    Многие известные обувные бренды до сих пор предпочитают
                                                                    доверять изготовление обуви не автоматам, а мастерам.</p>
                                                                <div class="bottom-link">
                                                                    <a href="one-blog.html">Подробнее</a>
                                                                </div>
                                                            </div>
                                                            <div class="blog-social">
                                                                <div class="blog-social-comments">
                                                                    <span>0</span>
                                                                </div>
                                                                <div class="blog-social-right">
                                                                    <span class="eya">1 323</span>
                                                                    <span class="fab fa-facebook-f">216</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </article>
                                    </div>
                                </section>
                            </div>
                            <aside class="blog-narrow">
                                <div class="small-translate translate-block">
                                    <article class="tilter">
                                        <div class="content-article">
                                            <figure class="tilter__figure">
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/kvadrat4.png" alt="">
                                                    <div class="tilter-deco"></div>
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                        <span>
                                                            <img src="assets/img/blog/icon-filter/proizvot.png" alt="">
                                                        </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h2>-30% Vera Pelle</h2>
                                                                <h3>Мастер класс от Андре Тана</h3>
                                                            </div>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="blog-news">
                                        <div class="content-article">
                                            <figure>
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/16.png" alt="">
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                        <span>
                                            <img src="assets/img/blog/icon-filter/remont.png" alt="">
                                        </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h3>Fashion</h3>
                                                                <h2>Fashion весна/лето 2017</h2>
                                                                <data>25 января 2018 года</data>
                                                            </div>
                                                            <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской</p>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                        <div class="blog-social">
                                                            <div class="blog-social-comments">
                                                                <span>0</span>
                                                            </div>
                                                            <div class="blog-social-right">
                                                                <span class="eya">1 323</span>
                                                                <span class="fab fa-facebook-f">216</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="blog-news">
                                        <div class="content-article">
                                            <figure>
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/19.png" alt="">
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h3>Fashion</h3>
                                                                <h2>Fashion весна/лето 2017</h2>
                                                                <data>25 января 2018 года</data>
                                                            </div>
                                                            <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской</p>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                        <div class="blog-social">
                                                            <div class="blog-social-comments">
                                                                <span>0</span>
                                                            </div>
                                                            <div class="blog-social-right">
                                                                <span class="eya">1 323</span>
                                                                <span class="fab fa-facebook-f">216</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="blog-news">
                                        <div class="content-article">
                                            <figure>
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/17.png" alt="">
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h3>Fashion</h3>
                                                                <h2>Fashion весна/лето 2017</h2>
                                                                <data>25 января 2018 года</data>
                                                            </div>
                                                            <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской</p>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                        <div class="blog-social">
                                                            <div class="blog-social-comments">
                                                                <span>0</span>
                                                            </div>
                                                            <div class="blog-social-right">
                                                                <span class="eya">1 323</span>
                                                                <span class="fab fa-facebook-f">216</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="blog-news">
                                        <div class="content-article">
                                            <figure>
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/18.png" alt="">
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h3>Fashion</h3>
                                                                <h2>Fashion весна/лето 2017</h2>
                                                                <data>25 января 2018 года</data>
                                                            </div>
                                                            <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской</p>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                        <div class="blog-social">
                                                            <div class="blog-social-comments">
                                                                <span>0</span>
                                                            </div>
                                                            <div class="blog-social-right">
                                                                <span class="eya">1 323</span>
                                                                <span class="fab fa-facebook-f">216</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="blog-news">
                                        <div class="content-article">
                                            <figure>
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/1.png" alt="">
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h3>Fashion</h3>
                                                                <h2>Fashion весна/лето 2017</h2>
                                                                <data>25 января 2018 года</data>
                                                            </div>
                                                            <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской</p>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                        <div class="blog-social">
                                                            <div class="blog-social-comments">
                                                                <span>0</span>
                                                            </div>
                                                            <div class="blog-social-right">
                                                                <span class="eya">1 323</span>
                                                                <span class="fab fa-facebook-f">216</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="blog-news">
                                        <div class="content-article">
                                            <figure>
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/1.png" alt="">
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h3>Fashion</h3>
                                                                <h2>Fashion весна/лето 2017</h2>
                                                                <data>25 января 2018 года</data>
                                                            </div>
                                                            <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской</p>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                        <div class="blog-social">
                                                            <div class="blog-social-comments">
                                                                <span>0</span>
                                                            </div>
                                                            <div class="blog-social-right">
                                                                <span class="eya">1 323</span>
                                                                <span class="fab fa-facebook-f">216</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="blog-news">
                                        <div class="content-article">
                                            <figure>
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/2%20(1).png" alt="">
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h3>Fashion</h3>
                                                                <h2>Fashion весна/лето 2017</h2>
                                                                <data>25 января 2018 года</data>
                                                            </div>
                                                            <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской</p>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                        <div class="blog-social">
                                                            <div class="blog-social-comments">
                                                                <span>0</span>
                                                            </div>
                                                            <div class="blog-social-right">
                                                                <span class="eya">1 323</span>
                                                                <span class="fab fa-facebook-f">216</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="video">
                                        <div class="content-article">
                                            <figure>
                                                <div class="blog-image">
                                                    <div class="video-to-play">
                                                        <div class="video-blog" data-video="swZwj98Yqo8"></div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/histori.png" alt="">
                                                            </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h3>Fashion</h3>
                                                                <h2>Fashion весна/лето 2017</h2>
                                                                <data>25 января 2018 года</data>
                                                            </div>
                                                            <p>Вы можете без особых усилий, переходите по страницам сайта в
                                                                каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской Вы можете без особых усилий, переходите по
                                                                страницам
                                                                сайта в каталогам
                                                                мужской, женской</p>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                        <div class="blog-social">
                                                            <div class="blog-social-comments">
                                                                <span>0</span>
                                                            </div>
                                                            <div class="blog-social-right">
                                                                <span class="eya">1 323</span>
                                                                <span class="fab fa-facebook-f">216</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                    <article class="tilter">
                                        <div class="content-article">
                                            <figure class="tilter__figure">
                                                <div class="blog-image">
                                                    <img src="assets/img/blog/blog/prego-1.jpg" alt="">
                                                    <div class="tilter-deco"></div>
                                                </div>
                                                <figcaption>
                                                    <div class="blog-news-content">
                                                        <div class="blog-news">
                                                            <div class="blog-news-category">
                                                            <span>
                                                                <img src="assets/img/blog/icon-filter/sovet.png" alt="">
                                                            </span>
                                                            </div>
                                                            <div class="blog-title">
                                                                <h2>Интернет-магазин обуви Prego</h2>
                                                                <h3>Скидка 500 грн. на все сапоги!</h3>
                                                            </div>
                                                            <div class="bottom-link">
                                                                <a href="one-blog.html">Подробнее</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </article>
                                </div>
                            </aside>
                            <div class="ajax-blog"></div>
                        </div>
                        <div class="about-description">

                        </div>
                        <footer>

                        </footer>
                    </div>

                </div>
                <div class="scroll-substitute">
                    <span></span>
                </div>
                <div class="wrap-top-top">
                    <div class="to-top">наверх</div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/js/libs/vibrant.js"></script>
    <script src="assets/js/libs/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/libs/anime.min.js"></script>
    <script async="" src="assets/js/blog/animation.js"></script>
    <script async="" src="assets/js/blog/scroll.js"></script>
@endsection