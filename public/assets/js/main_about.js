$(window).on('load', function() {
    $('.preloader').delay(1000).fadeOut(300, function() {
        var scroll_up = 0;

        $(window).on('scrollUp', function(e) {
    
            scroll_up += 1;
    
            if (scroll_up > 1) {
                location.assign('/map');
            }
    
        });
    });

    $('.preloader svg').delay(1000).fadeOut(300);
});

$(document).ready(function() {
    $('#logo-slider').slick({
        dots: false,
        fade: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
    });

    /*----------------- onhover logo dragstore  -----------------*/
        $('.js-hover').hover(function() {
            var _this = this,
                images = _this.getAttribute('data').split(','),
                counter = 0;

            this.setAttribute('data-src', this.src);
            _this.timer = setInterval(function(){
                if(counter > images.length) {
                    counter = 0;
                }
                if (images[counter] != undefined) {
                    _this.src = images[counter];
                } else {
                    _this.src = _this.getAttribute('data-src');
                }

                counter++;
            }, 100);

        }, function() {
            this.src = this.getAttribute('data-src');
            clearInterval(this.timer);
        });
    /*----------------- end onhover logo dragstore  -----------------*/

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