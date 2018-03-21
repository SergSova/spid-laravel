/*$(window).load(function() {
    var preloader = new Promise(function (resolve, reject) {

        $(document).ready(function() {
            alert('hello');
            resolve();
        });

    });

    preloader.then(
        function(resolve) {
            console('resolve accomplished!');
    },
        function (reject) {
            console('reject accomplished!');
    });
});*/

/*window.onload = function() {

    var preloader = new Promise(function (resolve, reject) {

        $(document).ready(function() {
            setTimeout(function() {
                $('.preloader').css('display', 'none');
                $('.content').css('visibility', 'visible');
            }, 30000);

            resolve();
        });

    });

    preloader.then(
        function(resolve) {
            console.log('resolve accomplished!');
    },
        function (reject) {
            console.log('reject accomplished!');
    });
};*/

$(document).ready(function() {

    setTimeout(function() {
        $('.preloader').fadeOut(300, function() {
            var scroll_array = [current_position], current_position;

            $(window).on('scrollDown', function(e) {
        
                scroll_array.push(current_position);
        
                if (scroll_array.length > 1) {
                    location.assign('/SPEED_TEST_PAGE');
                }
        
            });
        
            $(window).on('scrollUp', function() {
        
                scroll_array.pop(current_position);
        
                if (scroll_array.length == 0) {
                    location.assign('/condoms-white');
                }
        
            });
        });

        $('.logo-box, .menu-box, .content').removeClass('none');

    }, 1500);


    $('.consultants-btn').on('click', function() {
        $('.popup-box__consultants').show(500).addClass('open');
        $('.popup-wrapper__consultants').addClass('open');
    });

    $('.popup-wrapper__consultants-crosshair').on('click', function () {
        $('.popup-wrapper__consultants').removeClass('open');

        setTimeout(function() {
            $('.popup-box__consultants').hide(500);
        }, 500);
    });

    var date = new Date();

    var current_day = date.getDay();

    $('.popup-wrapper__consultants-column').not('.popup-wrapper__consultants-column:first-child').each(function(index) {
        
        if (index + 1 == current_day) {
            $(this).addClass('current-day');
            return false;
        } 

        if (current_day == 0) {
            $('.popup-wrapper__consultants-column:last-child').addClass('current-day');
            return false;
        }
    });

    $('.current-day').siblings().each(function() {$(this).removeClass('current-day');});

});