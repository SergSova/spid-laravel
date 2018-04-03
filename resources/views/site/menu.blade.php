<?php

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Request;

$menu_route = Request::route()->getName();

$menuList = [
    'home'    => Lang::get('menu.main'),
    'aids'    => Lang::get('menu.aids'),
    'condoms' => Lang::get('menu.condoms'),
    'consult' => Lang::get('menu.consult'),
    'test'    => Lang::get('menu.test'),
    'blog'    => Lang::get('menu.blog'),
    'faq'     => Lang::get('menu.faq'),
    'map'     => Lang::get('menu.map'),
    'about'   => Lang::get('menu.about'),
];

if ($menu_route == 'blog.fitred' || $menu_route == 'blogArticle')
    $menu_route = 'blog';
?>

<div class="burger">
    <span class="burger-item burger-item_top"></span>
    <span class="burger-item burger-item_center"></span>
    <span class="burger-item burger-item_bottom"></span>
</div>
<a class="logo-box" {{\Request::route()->getName()!='home'?'href='.route('home'):'' }}>
    @include('site.chanks.js_hover')
</a>
<div class="wrap menu">
    <div class="menu-overlay-wrap"></div>
    <div class="menu-clip-fix"></div>
    <a class="logo-box" {{\Request::route()->getName()!='home'?'href='.route('home'):'' }}>
        @include('site.chanks.js_hover')
    </a>
    <div class="top-btns">
        <button class="top-btn top-btn_search">@lang('site.search')</button>
        <button class="top-btn top-btn_close">@lang('site.close')</button>
    </div>
    <div class="nav-wrap">
        <nav id="nav" class="nav">
            <ul class="nav__list">
                @foreach($menuList as $k=>$m_item)
                    <li class="nav__item">
                        <a class="nav__link {{$menu_route == $k?'active':''}}" href="{{route($k)}}">{{$m_item}}</a>
                    </li>
                @endforeach

                {{--<li class="nav__item"><a class="nav__link" href="{{route('setlocale','ru')}}">ru</a></li>--}}
                {{--<li class="nav__item"><a class="nav__link" href="{{route('setlocale','uk')}}">ua</a></li>--}}
            </ul>
        </nav>
    </div>
    <canvas id="miki"></canvas>
</div>

@section('scripts')
    @parent
    <script type="text/javascript">
        $(document).ready(function () {
            $('.burger').on('click', function () {
                $('body').addClass('menu-open');
            })

            $('.top-btn_close').on('click', function () {
                $('body').removeClass('menu-open');
            })
        })
    </script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var canvas = document.getElementById('miki'),
                ctx = canvas.getContext('2d'),
                container = document.querySelector('.wrap'),
                LEFT,
                TOP,
                wH = container.clientHeight,
                wW = container.clientWidth,
                mikiLeft = wW * 0.45,
                mikiTop = wH * 0.23,
                density = 32,
                imageW = 702,
                imageH = 560,
                mouse = {
                    x: 0,
                    y: 0
                };

            function Miki() {
                var th = this, timeoutID;
                th.dots = [];
                th.bg = new Image();
                th.mikiMask = new Image(imageW, imageH);
                th.mikiMask.src = '/assets/img/menu/bg3.png';
                th.bg.src = '/assets/img/menu/bg5.jpg';
                th.animId;
                th.nav = document.getElementById('nav');
                th.link = th.nav.querySelector('.nav__link');
                th.linkActive = th.nav.querySelector('.nav__link.active');
                th.links = Array.prototype.slice.call(th.nav.querySelector('.nav__list').children);
                th.linkHeight = th.links[0].offsetHeight / 2;
                th.linkOverlaysWrap = document.querySelector('.menu-overlay-wrap');

                for (var z = 0; z < (th.links.length * 2) - 1; z++) {
                    th.linkOverlaysWrap.innerHTML += '<div style="height: ' + th.linkHeight + 'px;" class="menu-overlay"><span></span></div>';
                }

                th.linkOverlays = th.linkOverlaysWrap.children;

                window.addEventListener('scroll', function (e) {
                    e.preventDefault()
                });

                document.addEventListener('touchmove', function (event) {
                    event.preventDefault();
                });

                window.addEventListener('load', function () {
                    th.setup();
                });
            }

            Miki.prototype.update = function () {
                var th = this;

                for (var i = 0; i < th.dots.length; i++) {
                    var theta = Math.atan2(th.dots[i].y - mouse.y, th.dots[i].x - mouse.x),
                        distance = 3 * th.mouseRadius / Math.sqrt((mouse.x - th.dots[i].x) * (mouse.x - th.dots[i].x) + (mouse.y - th.dots[i].y) * (mouse.y - th.dots[i].y));
                    th.dots[i].x += Math.cos(theta) * distance + (th.dots[i].originalX - th.dots[i].x) * 0.05;
                    th.dots[i].y += Math.sin(theta) * distance + (th.dots[i].originalY - th.dots[i].y) * 0.05;

                    for (var t = 0; t < th.dots.length; t++) {
                        if (t !== i) {
                            var a = th.dots[i].x - th.dots[t].x,
                                b = th.dots[i].y - th.dots[t].y,
                                c = Math.sqrt(a * a + b * b);

                            if (c <= density * 0.65) {
                                th.dots[t].x -= (a / c) * 1.6;
                                th.dots[t].y -= (b / c) * 1.6;
                            }
                        }
                    }
                }
            }


            Miki.prototype.setPos = function () {
                var imageData = ctx.getImageData(0, 0, wW * 2, wH * 2);
                var data = imageData.data;
                var s = 0;
                var th = this;

                for (var i = 0; i < imageData.height; i += density) {
                    for (var j = 0; j < imageData.width; j += density) {

                        var color = data[((j * (imageData.width * 4)) + (i * 4)) - 1];

                        if (color == 255) {
                            th.dots.push(th.createDot(ctx, i + mikiLeft, j + mikiTop));
                        }
                    }
                }
            }

            Miki.prototype.createDot = function (ctx, i, j) {
                return {
                    x: i,
                    y: j,
                    originalX: i,
                    originalY: j,
                    setPosition: function (x, y) {
                        this.x = x;
                        this.y = y;
                    },
                    draw: function () {
                        ctx.beginPath();
                        ctx.fillStyle = '#0E0E10';
                        //ctx.arc(this.x, this.y, 8, 2 * Math.PI, false);
                        ctx.arc(this.x, this.y, density / 4, 2 * Math.PI, false);
                        ctx.fill();
                    }
                }
            }

            Miki.prototype.setup = function () {
                var th = this;

                function mousemoveHandler(e) {
                    mouse.x = e.pageX - LEFT;
                    mouse.y = e.pageY - TOP;
                }

                function touchmoveHandler(e) {
                    mouse.x = e.changedTouches[0]['pageX'] - LEFT;
                    mouse.y = e.changedTouches[0]['pageY'] - TOP;
                }

                function touchendHandler(e) {
                    mouse.x = 0;
                    mouse.y = 0;
                }

                function mouseleaveHandler(e) {
                    for (var z = 0; z < th.linkOverlays.length; z++) {
                        th.linkOverlays[z].classList.remove('anim');
                    }

                    if (th.linkActive) {
                        th.linkActive.classList.remove('out');
                    }
                }

                function mouseoutHandler(e) {
                    var item = e.fromElement.closest('.nav__item'),
                        index = th.links.indexOf(item) * 2;

                    if (th.linkOverlays[index]) {
                        th.linkOverlays[index].linkOverlaysFlag = false;
                    }

                    clearTimeout(timeoutID);
                }

                function mouseoverHandler(e) {
                    timeoutID = setTimeout(function () {
                        if (e.target.className.indexOf('nav__link') > -1) {
                            var item = e.target.closest('.nav__item'),
                                index = th.links.indexOf(item) * 2;

                            for (var z = 0; z < th.linkOverlays.length; z++) {
                                th.linkOverlays[z].classList.remove('anim')
                            }

                            if (th.linkActive) {
                                th.linkActive.classList.add('out');
                            }
                            th.linkOverlays[index]['linkOverlaysFlag'] = true;
                            th.linkOverlays[index].classList.add('anim');
                            var bapX = 0;

                            function s() {
                                bapX -= 2;
                                th.linkOverlays[index].style.backgroundPositionX = bapX + '%';

                                if (th.linkOverlays[index].linkOverlaysFlag) {
                                    requestAnimationFrame(s);
                                }

                                if (Math.abs(bapX % 134) !== 0) {
                                    if (!th.linkOverlays[index].linkOverlaysFlag) {
                                        requestAnimationFrame(s);
                                    }
                                } else {
                                    if (!th.linkOverlays[index].linkOverlaysFlag) {
                                        th.linkOverlays[index].style.backgroundPositionX = '0%';
                                    }
                                }
                            }

                            s();
                        }
                    }, 300);
                }

                function reInit() {
                    destroy();
                    init();
                }

                function destroy() {
                    cancelAnimationFrame(th.animId);
                    th.dots = [];
                    ctx.clearRect(0, 0, wW, wH);
                    window.removeEventListener('mousemove', mousemoveHandler);
                    window.removeEventListener('touchmove', touchmoveHandler);
                    window.removeEventListener('touchend', touchendHandler);
                    window.removeEventListener('resize', reInit);
                    th.nav.removeEventListener('mouseleave', mouseleaveHandler);
                    th.nav.removeEventListener('mouseout', mouseoutHandler);
                    th.nav.removeEventListener('mouseover', mouseoverHandler);
                }

                function calcMetrics() {
                    LEFT = container.getBoundingClientRect().left,
                        TOP = container.getBoundingClientRect().top,
                        wH = container.clientHeight,
                        wW = container.clientWidth,
                        mikiLeft = wW * 0.45,
                        mikiTop = wH * 0.23,
                        th.navTop = th.nav.getBoundingClientRect().top + th.link.clientHeight * 0.48;
                    th.dotsRadius = (th.link.clientHeight - 20) / 4;
                    th.dotsOffset = th.link.clientHeight / 2;
                    th.menuDotsWidth = Math.round(window.innerWidth * 0.18) - 9;
                    th.menuDotsHeight = this.nav.clientHeight - 18;
                    th.linkOverlaysFlag = false;
                    th.mouseRadius = 180;
                    canvas.height = wH;
                    canvas.width = wW;
                    th.menuDotsWidth = th.menuDotsWidth - (th.menuDotsWidth % th.dotsOffset) + th.dotsOffset;
                    th.linkOverlaysWrap.style.width = th.menuDotsWidth + 'px';

                    if (wW < 1300) {
                        density = 18;
                        imageW = 466.1;
                        imageH = 375;
                        mikiLeft = wW * 0.52;
                        mikiTop = (wH / 2) - (imageH / 2);
                    }

                    if (wH < 800) {
                        density = 24;
                        imageW = 550;
                        imageH = 420;
                        mikiLeft = wW * 0.42;
                        mikiTop = (wH / 2) - (imageH / 2);
                    }

                    if (wW < 1050) {
                        density = 18;
                        imageW = 410;
                        imageH = 285;
                        mikiLeft = wW * 0.4;
                        mikiTop = (wH / 2) - (imageH / 2);
                        th.mouseRadius = 110;
                    }

                    if (wW < 768) {
                        imageW = 228;
                        density = 10;
                        imageH = 175;
                        mikiLeft = (wW / 2),
                            mikiTop = (wH / 2) - (imageH / 2) + 20;
                        th.mouseRadius = 40;
                    }

                    if (wW < 420) {
                        imageW = 228;
                        density = 10;
                        imageH = 175;
                        mikiLeft = (wW - imageW) - (6 * wW) / 100;
                        mikiTop = wH * 0.52;
                        th.mouseRadius = 30;
                    }

                    if ((th.bg.width < wW) || (th.bg.height < wH)) {
                        th.bg.width = wW;
                        th.bg.height = wH;
                    }

                    th.mikiMask.width = imageW;
                    th.mikiMask.height = imageH;
                }

                function init() {
                    calcMetrics();
                    window.addEventListener('mousemove', mousemoveHandler);
                    window.addEventListener('touchmove', touchmoveHandler);
                    window.addEventListener('touchend', touchendHandler);
                    window.addEventListener('resize', reInit);
                    th.nav.addEventListener('mouseleave', mouseleaveHandler);
                    th.nav.addEventListener('mouseout', mouseoutHandler);
                    th.nav.addEventListener('mouseover', mouseoverHandler);
                    ctx.drawImage(th.mikiMask, 0, 0, imageW, imageH);
                    th.setPos();
                    th.render();
                }

                init();
            }

            Miki.prototype.createMenuDots = function () {
                var th = this,
                    index = 1,
                    coef = 0;

                for (var i = 0; i < th.menuDotsHeight; i += th.dotsOffset) {
                    if (index % 2 == 0) {
                        coef = th.dotsOffset;
                    } else {
                        coef = 0;
                    }

                    for (var j = 0; j < (th.menuDotsWidth - coef); j += th.dotsOffset) {
                        ctx.beginPath();
                        ctx.arc(j, i + th.navTop, th.dotsRadius, 2 * Math.PI, false);
                        ctx.fill();
                    }

                    index++;
                }
            }

            Miki.prototype.render = function () {
                var th = this;
                ctx.globalCompositeOperation = 'xor';

                function r() {
                    ctx.clearRect(0, 0, wW, wH);
                    th.update();
                    ctx.drawImage(th.bg, 0, 0, th.bg.width, th.bg.height);

                    if (wW >= 768) {
                        th.createMenuDots();
                    }

                    for (var i = 0; i < th.dots.length; i++) {
                        th.dots[i].draw();
                    }

                    th.animId = requestAnimationFrame(r);
                }

                r();
            }

            var s = new Miki();
        });

    </script>
@endsection