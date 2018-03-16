$(document).ready(function () {

    $('.human').click(function () {
        if($(this).hasClass('active')){return;}
        $(this).addClass('active').append('<div class="overlay"></div>');
        return false;
    });
    $('.humans').on('click' , '.overlay, .btn-close',function () {
        $('.overlay').remove();
        $('.human').removeClass('active')
        return false;
    });

    var modalVis = true;

    $('.modal__btn').on('click', function(e) {
        e.preventDefault();
        $('.modal').fadeOut();
        modalVis = false;
    });

    var hand = $('.wh-hand path'),
        peoples = $('.wh-people'),
        whAnimId;

    function withWhoAnim() {
        peoples.each(function() {
            //p = $(p);

            if ((($(this).offset().left + $(this).width() / 7) <= hand.offset().left) && (($(this).offset().left + $(this).width() * 0.7) >= hand.offset().left)) {
                peoples.not(this).removeClass('active');
                $(this).addClass('active');
            }
        });

        if (modalVis) {
            whAnimId = requestAnimationFrame(withWhoAnim)
        } else {
            cancelAnimationFrame(whAnimId)
        }
    }

    withWhoAnim()
});
