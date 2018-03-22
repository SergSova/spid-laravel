@extends('site.layout')

@section('title','Карта')

@section('style')
    <link rel="stylesheet" type="text/css" href="assets/css/main_map.css">
@endsection

@section('body')
    <div class="map-wrap">
        <div class="game-icons top-logo">
            <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt=""
                 data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
        </div>
        <div id="map"></div>
        <div class="map-overlay"></div>
        <div class="map-inner">
            <div class="title">
                <div class="main-caption clip-fix">карта</div>
                <div class="map-toggle">
                    <!--  <a href="" class="map-toggle__link active">КИЕВ</a>
                     <a href="" class="map-toggle__link">ПОЛТАВА</a>
                     <a href="" class="map-toggle__link">Харьков</a>
                     <a href="" class="map-toggle__link">Славянск</a>
                     <a href="" class="map-toggle__link">Одесса</a> -->
                </div>
            </div>
            <div class="burger"></div>
            <div class="game-icons top-logo">
                <img class="js-hover" src="assets/img/drug-store/drug-store-logo1.svg" alt=""
                     data="assets/img/drug-store/drug-store-logo2.svg,assets/img/drug-store/drug-store-logo3.svg,assets/img/drug-store/drug-store-logo4.svg">
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeVHz95lv107f7pYWNL-FetK5BU1s7ps8&callback=initMap" async defer></script>
    <script type="text/javascript">
        var ADRESSES = [
            {
                lat: 50.3984054,
                lng: 30.5099373,
                name: 'Кабинет «Доверие»',
                info: 'проспект Голосеевский 59А. в здании центральной поликлиники Голосеевского р-на<br />Пн-Ср -Пт. с 9:00 до 14:30<br />Вт.-Ср. с 12.00 до 17.30 <br />сб., вс. -  выходной.<br />Тел.: +38 044 257 41 80',
                dopInfo: 'Быстрый тест 15 мин, ИФА - 3 рабочих дня В порядке живой очереди. Бесплатно. Анонимно'
            },
            {
                lat: 50.4240524,
                lng: 30.6869444,
                name: 'Кабинет «Доверие»',
                info: 'Бориспольская, 30А, в здании Поликлиники №2, кабинет  №217<br/>пн.–пт.с 9:30до 15:00 с 11:15 до 13:45 уборка кабинета<br/>сб., вс. -  выходной.',
                dopInfo: 'Возможность получить бесплатные презервативы'
            },
            {
                lat: 50.4147762,
                lng: 30.6541118,
                name: 'Клиника дружественная к молодежи',
                info: 'ул.Тростянецкая, 8Д<br/>пн-чт с 9:00 до 18:00<br/>пт. С 9:00 до 17:00<br />сб., вс. -  выходной.<br />Тел.: +38 044 562 55 62',
                dopInfo: 'Быстрый тест 15 мин. В порядке живой очереди. Бесплатно. Анонимно. В клинике есть возможность посетить и других врачей, по предварительной записи (психолог, дерматолог, уролог, гинеколог)'
            },
            {
                lat: 50.4484025,
                lng: 30.5126263,
                name: 'Клиника дружественная к молодежи',
                info: 'ул. Владимирская, 43.<br/>пн-пт с 09:00 до 15:00.<br />сб., вс. -  выходной',
                dopInfo: 'Быстрый тест 15 мин. В порядке живой очереди. Бесплатно. Анонимно. В клинике есть возможность посетить и других врачей, по предварительной записи (психолог, дерматолог, уролог, гинеколог)'
            },
            {
                lat: 49.9675686,
                lng: 36.3072838,
                name: 'Харьковский областной благотворительный фонд «Парус»',
                info: 'Харьков, проспект Московский, 140/1, офисы 15-17<br/>пн-сб 14.00-19.00<br />- телефон (057) 7646246',
                dopInfo: 'рекомендуем есть презервативы'
            },
            {
                lat: 48.851416,
                lng: 37.5956466,
                name: 'Славянськая городская общественная организация «Наша помощь»',
                info: 'м. Славянск, Донецкая область, ул. Добровольского,2, этаж 5<br/>пн-пт 10:00-19:00<br/>- телефон 06262 2 14 52',
                dopInfo: 'рекомендуем есть презервативы'
            },
            {
                lat: 49.5920639,
                lng: 34.5289257,
                name: 'Благотворительная организация «Свет надежды»',
                info: 'г. Полтава, ул. Симона Петлюры, 28А<br/>телефон 0532606081<br/>пн-пт 10:00-19:00',
                dopInfo: 'рекомендуем есть презервативы'
            },
            {
                lat: 46.491858,
                lng: 30.726372,
                name: 'Одесский благотворительный фонд “Дорога к Дому”',
                info: 'г. Одесса, ул. Софиевская, 10<br/>- телефон 048 7772076<br/>пн-пт 10:00-19:00',
                dopInfo: 'рекомендуем есть презервативы'
            },
            {
                lat: 46.4666296,
                lng: 30.725119,
                name: 'Одесский благотворительный фонд “Дорога к Дому”',
                info: 'ул. Мясоедовская, 46 (центр «Открытые двери»)<br/>- телефон 048 7772076<br/>пн-пт 10:00-19:00',
                dopInfo: 'рекомендуем есть презервативы'
            }
        ];

        var TOWNS = [
            {
                name: 'Киев',
                lat: 50.4032015,
                lng: 30.6518151
            },
            {
                name: 'Харьков',
                lat: 49.9789176,
                lng: 36.3155829
            },
            {
                name: 'Славянск',
                lat: 48.8540331,
                lng: 37.5794216
            },
            {
                name: 'Полтава',
                lat: 49.6021346,
                lng: 34.4871991
            },
            {
                name: 'Одесса',
                lat: 46.4826017,
                lng: 30.7340849
            }
        ];

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
        });

        document.addEventListener('DOMContentLoaded', function () {
            var mapToggle = document.querySelector('.map-toggle');

            TOWNS.forEach(function (i, z) {
                var active = '';

                if (z == 0) {
                    active = ' active';
                }

                mapToggle.innerHTML += '<a class="map-toggle__link' + active + '" data-id="' + z + '">' + i.name + '</a>';
            });
        })

        function initMap() {
            var markerInfo = document.querySelector('.marker-info'),
                markerInfoCont = markerInfo.querySelector('.marker-info__content'),
                markerInfoTitle = markerInfo.querySelector('.marker-info__title'),
                mapToggleCont = document.querySelector('.map-toggle'),
                townLinks = document.querySelectorAll('.map-toggle__link');

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: {lat: 50.4032015, lng: 30.6518151},
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
                    map.setCenter({lat: TOWNS[id]['lat'], lng: TOWNS[id]['lng']});

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

            var contentString = '<div id="content">' +
                '<div id="siteNotice">' +
                '</div>' +
                '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
                '<div id="bodyContent">' +
                '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                'sandstone rock formation in the southern part of the ' +
                'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) ' +
                'south west of the nearest large town, Alice Springs; 450&#160;km ' +
                '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major ' +
                'features of the Uluru - Kata Tjuta National Park. Uluru is ' +
                'sacred to the Pitjantjatjara and Yankunytjatjara, the ' +
                'Aboriginal people of the area. It has many springs, waterholes, ' +
                'rock caves and ancient paintings. Uluru is listed as a World ' +
                'Heritage Site.</p>' +
                '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
                'https://en.wikipedia.org/w/index.php?title=Uluru</a> ' +
                '(last visited June 22, 2009).</p>' +
                '</div>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            for (var z = 0; z < ADRESSES.length; z++) {
                createMarker();
            }

            function createMarker() {
                // var marker = new google.maps.Marker({
                //   position: { lat: adresses[z]['lat'], lng: adresses[z]['lng'] },
                //   map: map,
                //   title: 'Uluru (Ayers Rock)'
                // });

                // marker.addListener('click', function() {
                //   infowindow.open(map, marker);
                // });
                var marker = new google.maps.Marker({
                    position: {lat: ADRESSES[z]['lat'], lng: ADRESSES[z]['lng']},
                    map: map,
                    icon: "assets/img/map/marker2.png",
                    title: ADRESSES[z]['name'],
                    info: ADRESSES[z]['info'],
                    dopInfo: ADRESSES[z]['dopInfo']
                });

                marker.addListener('mouseover', function (e) {
                    markerInfo.classList.remove('hide');
                    markerInfoTitle.innerHTML = marker['title'];
                    markerInfoCont.innerHTML = '<p>' + marker['info'] + '</p>';
                    markerInfoCont.innerHTML += '<p>' + marker['dopInfo'] + '</p>';

                    var proj = overlay.getProjection();
                    var pos = marker.getPosition();
                    //marker.setVisible(false);
                    marker.setIcon("assets/img/map/activeMarker.png");

                    if (proj) {
                        var p = proj.fromLatLngToContainerPixel(pos);
                        markerInfo.style.left = p.x + 'px';
                        markerInfo.style.top = p.y + 'px';

                        markerInfo.classList.add('moveEnd');
                    }
                });

                document.addEventListener('mouseout', function (e) {
                    if (e.relatedTarget) {
                        if (e.relatedTarget.closest('.marker-info') === null) {
                            markerInfo.classList.add('hide');
                            marker.setIcon("assets/img/map/marker2.png");
                            //marker.setVisible(true);
                        }
                    }
                });
            }
        }
    </script>
@endsection