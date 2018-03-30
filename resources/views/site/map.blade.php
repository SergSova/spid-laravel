<?php

/**
 * @var \App\StaticPage $model
 */

?>
@extends('site.layout')

@section('title','Карта')

@section('styles')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/main_map.css">
@endsection

@section('body')
    <div class="map-wrap">
        <div class="content-section">
            <div class="menu-box">
                <img class="menu-box_img" src="/assets/img/about/menu-burger.png" alt="">

                <strong class="menu-box_text">меню</strong>
            </div>
            
            <div class="navigate-box">
                <div class="navigate-box__left">
                    <div class="navigate-box__left-wrap">
                        <span class="navigate-box__line"></span>

                        <span class="navigate-box__line"></span>
                    </div>

                    <div class="navigate-box__text">предыдущая <br> страница</div>
                </div>

                <div class="navigate-box__right">
                    <div class="navigate-box__right-wrap">
                        <span class="navigate-box__line"></span>
                            
                        <span class="navigate-box__line"></span>
                    </div>

                    <div class="navigate-box__text">следующая <br> страница</div>
                </div>
            </div>
        </div>
        <div class="game-icons top-logo">
            <div class="logo-box">
                <img class="js-hover" src="/assets/img/drug-store/drug-store-logo1.svg" alt="" data="/assets/img/drug-store/drug-store-logo2.svg,/assets/img/drug-store/drug-store-logo3.svg,/assets/img/drug-store/drug-store-logo4.svg" data-src="/assets/img/drug-store/drug-store-logo1.svg">
            </div>
        </div>
        <div id="map"></div>
        <div class="map-overlay"></div>
        <div class="map-inner">
            <div class="title">
                <div class="main-caption map-clip-fix">{{$model->title}}</div>
                <div class="map-toggle">
                </div>
            </div>
            <div class="burger">
                <span class="burger-item burger-item_top"></span>
                <span class="burger-item burger-item_center"></span>
                <span class="burger-item burger-item_bottom"></span>
            </div>
            <div class="marker-info hide">
                <h5 class="marker-info__title">Ночной клуб Индиго</h5>
                <div class="marker-info__content">
                    <p>Пр. Победы 17А <br>Пн, Ср, Пт - с 9:00 до 14:30<br>Вт, Чт - с 12:00 до 17:30<br/>
                        Возможность получить бесплатные презервативы</p>
                </div>
                <div class="marker-info__btns">
                    <a class="marker-info__btn marker-info__btn_1"></a>
                    <a class="marker-info__btn marker-info__btn_2"></a>
                </div>
            </div>
            <p class="marker-info__copyright">Copyright © 2018 Drugstore . Все права защищены.</p>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeVHz95lv107f7pYWNL-FetK5BU1s7ps8&callback=initMap" async defer></script>
    <script type="text/javascript">

        var ADRESSES = {!! $model->City? json_encode(
        collect($model->City)
        ->flatMap(function ($el) {return $el->centers;})->map(function($el){$el->info=str_replace(array("\r\n", "\r", "\n"), "<br />",$el->info); return $el;}),JSON_UNESCAPED_UNICODE ):''
        !!};

        var TOWNS = {!! $model->City?json_encode(collect($model->City)->map(function($el){unset($el->centers); return $el;  }),JSON_UNESCAPED_UNICODE):'' !!};

        $(document).ready(function () {
            $('.js-hover').hover(function () {
                var _this = this,
                    images = _this.getAttribute('data').split(','),
                    counter = 0;

                this.setAttribute('data-src', this.src);
                _this.timer = setInterval(function () {
                    if (counter > images.length) {
                        counter = 0;
                    }
                    if (images[counter] != undefined) {
                        _this.src = images[counter];
                    } else {
                        _this.src = _this.getAttribute('data-src');
                    }

                    counter++;
                }, 100);

            }, function () {
                this.src = this.getAttribute('data-src');
                clearInterval(this.timer);
            });

            if (prev_page.length) {
                $('.navigate-box__left').on('click', function() {
                    location.assign('/' + prev_page);
                });
            }

            if (!prev_page.length) {
                $('.navigate-box__left').css('display', 'none');
            }

            if (next_page.length) {
                $('.navigate-box__right').on('click', function() {
                    location.assign('/' + next_page);
                });
            }

            if (!next_page.length) {
                $('.navigate-box__right').css('display', 'none');
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            var mapToggle = document.querySelector('.map-toggle');

            TOWNS.forEach(function (i, z) {
                var active = '';

                if (z == 0) {
                    active = ' active';
                }

                mapToggle.innerHTML += '<a class="map-toggle__link' + active + '" data-id="' + z + '">' + i.title + '</a>';
            });
        })

        function initMap() {
            var markerInfo = document.querySelector('.marker-info'),
                markerInfoCont = markerInfo.querySelector('.marker-info__content'),
                markerInfoTitle = markerInfo.querySelector('.marker-info__title'),
                mapToggleCont = document.querySelector('.map-toggle'),
                townLinks = document.querySelectorAll('.map-toggle__link'),
                markers = [];

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {lat: parseFloat(TOWNS[0]['lat']), lng: parseFloat(TOWNS[0]['lng'])},
                streetViewControl: false,
                zoomControl: false,
                mapTypeControl: false,
                fullscreenControl: false,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#090909"
                            }
                        ]
                    },
                    {
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#090909"
                            }
                        ]
                    },
                    {
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#090909"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#3A3A3A"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "lightness": "-100"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#090909"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#626262"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#626262"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#090909"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#747474"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "lightness": "-100"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#565656"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "lightness": "-100"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#747474"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#747474"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#747474"
                            }
                        ]
                    }
                ]
            });

            mapToggleCont.addEventListener('click', function (e) {
                if (e.target.className.indexOf('map-toggle__link') > -1) {
                    e.preventDefault();
                    var id = e.target.getAttribute('data-id');
                    map.setCenter({lat: parseFloat(TOWNS[id]['lat']), lng: parseFloat(TOWNS[id]['lng'])});

                    for (var i = 0; i < townLinks.length; i++) {
                        townLinks[i].classList.remove('active');
                    }

                    e.target.classList.add('active');
                }
            });

            var overlay = new google.maps.OverlayView();
            overlay.draw = function () {
            };
            overlay.setMap(map);

            for (var z = 0; z < ADRESSES.length; z++) {
                createMarker();
            }

            function createMarker() {
                var marker = new google.maps.Marker({
                    position: {lat: parseFloat(ADRESSES[z]['lat']), lng: parseFloat(ADRESSES[z]['lng'])},
                    map: map,
                    icon: "assets/img/map/marker3.png",
                    title: ADRESSES[z]['title'],
                    info: ADRESSES[z]['info'],
                    dopInfo: ADRESSES[z]['dopInfo']
                });

                marker.addListener('mouseover', mouseOver);
                marker.addListener('click', mouseOver);

                function mouseOver(e) {
                    //setTimeout(function() {
                    markerInfo.classList.add('anim');
                    markerInfo.classList.remove('hide');
                    markerInfoTitle.innerHTML = marker['title'];
                    markerInfoCont.innerHTML = '<p>' + marker['info'] + '</p>';
                    markerInfoCont.innerHTML += '<p>' + marker['dopInfo'] + '</p>';

                    var proj = overlay.getProjection();
                    var pos = marker.getPosition();
                    markers.forEach(function (m) {
                        m.setVisible(true);
                    });
                    marker.setVisible(false);
                    //marker.setIcon("assets/img/activeMarker.png");

                    if (proj) {
                        var p = proj.fromLatLngToContainerPixel(pos);
                        markerInfo.style.left = p.x + 'px';
                        markerInfo.style.top = p.y + 'px';

                        markerInfo.classList.add('moveEnd');
                    }
                    //}, 70)
                }

                markers.push(marker);
            }

            function mouseOut(e) {
                if (e.relatedTarget) {
                    if (e.relatedTarget.closest('.marker-info') === null) {
                        mouseOutAction()
                    }
                } else if (e.target) {
                    if ((e.target.closest('.gmnoprint') === null) && (e.target.closest('.marker-info') === null)) {
                        mouseOutAction();
                    }
                }
            }

            function mouseOutAction() {
                //setTimeout(function() {
                markerInfo.classList.add('hide');
                markers.forEach(function (m) {
                    //m.setIcon("assets/img/marker2.png");
                    m.setVisible(true);
                });
                //}, 70)
            }

            map.addListener('dragstart', function () {
                markerInfo.classList.remove('anim');
                mouseOutAction()
            });
            document.addEventListener('mouseout', mouseOut);
            window.addEventListener('click', mouseOut);
        }
    </script>
@endsection