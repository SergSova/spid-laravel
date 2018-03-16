$(document).ready(function() {

    var scroll_box, scroll_box_parent;


    $('.faq-content-wrapper').mCustomScrollbar({
            scrollbarPosition: 'outside',
            autoDraggerLength: false,
            mouseWheel: { 
                deltaFactor: '16px' 
            },

            callbacks: {
                onInit: function () {
                    scroll_box = $('#mCSB_1_dragger_vertical');

                    scroll_box.addClass('top-scroll');

                    scroll_box_parent = $('.mCSB_draggerContainer');

                    array_question = $('.faq-content__question');
                },

                whileScrolling: function () {
                    var offset_scroll_box = scroll_box.position().top;

                    var height_scroll_box = scroll_box.height();

                    var height_parent = scroll_box_parent.height();
                    
                    if (offset_scroll_box + height_scroll_box / 2 < height_parent * 1 / 3)  {
                        scroll_box.removeClass('middle-scroll').addClass('top-scroll');
                    }

                    if (offset_scroll_box + height_scroll_box / 2 > height_parent * 1 / 3 && offset_scroll_box + height_scroll_box / 2 < height_parent * 2 / 3) {
                        scroll_box.removeClass('top-scroll bottom-scroll').addClass('middle-scroll');
                    }

                    if (offset_scroll_box + height_scroll_box / 2 > height_parent * 2 / 3) {
                        scroll_box.removeClass('middle-scroll').addClass('bottom-scroll');
                    }

                    //console.log($('#mCSB_1').offset().top);

                    array_question.each(function() {

                        if ($(this).offset().top - $('#mCSB_1').offset().top < 35 && $(this).offset().top > $('#mCSB_1').offset().top) {
                            $(this).addClass('opacity-top');
                        }

                        if ($(this).offset().top - $('#mCSB_1').offset().top > 35 && $(this).offset().top < $('#mCSB_1').height() + $('#mCSB_1').offset().top - 70) {
                            $(this).removeClass('opacity-top');
                        }

                        if ($(this).offset().top > ($('#mCSB_1').height() + $('#mCSB_1').offset().top - 70)) {
                            $(this).addClass('opacity-top');
                        }

                    });

                    //console.log(array_question.eq(0).css('margin-bottom'));

                    //console.log(this.mcs.topPct);
                },

                onTotalScrollBack:function(){
                    array_question.eq(0).removeClass('opacity-top');
                },

                onTotalScroll: function(){
                    array_question.eq(array_question.length - 1).removeClass('opacity-top');
                }
            }
        }
    );

    var k = 0, first_click = false, previous_question;

    $('.faq-content__heading').on('click', function() {
        var description = $(this).siblings('.faq-content__description');
        var description_inner_wrap = description.find('.faq-content__description-inner-wrap');
        var line = description.find('.faq-content__description-line');
        var question = $(this).closest('.faq-content__question');


        if (!first_click) {

            question.addClass('question-active');

            description.animate({
                'margin-top': 4.629 + 'vh',
                'margin-bottom': 4.629 + 'vh',
                'max-height': description_inner_wrap.height() + 'px'
            }, 300);
    
            line.css('width', description_inner_wrap.height() + 'px');

            k++;

        }

        if (first_click) {

            if (question.index() == previous_question.index() && k % 2 == 0) {

                if (!previous_question.hasClass('question-active')) {
                    previous_question.addClass('question-active');

                    previous_question.find('.faq-content__description-line').css('width', description_inner_wrap.height() + 'px');

                    previous_question.find('.faq-content__description').animate({
                        'margin-top': 4.629 + 'vh',
                        'margin-bottom': 4.629 + 'vh',
                        'max-height': description_inner_wrap.height() + 'px'
                    }, 300);
                } else {
                    question.removeClass('question-active');

                    line.css('width', 0 + 'px');

                    description.animate({
                        'margin-top': 0 + 'vh',
                        'margin-bottom': 0 + 'vh',
                        'max-height': 0 + 'px'
                    }, 300);
                }
            }

            if (question.index() == previous_question.index() && k % 2 != 0) {

                if (previous_question.hasClass('question-active')) {
                    previous_question.removeClass('question-active');

                    previous_question.find('.faq-content__description-line').css('width', 0 + 'px');

                    previous_question.find('.faq-content__description').animate({
                        'margin-top': 0 + 'vh',
                        'margin-bottom': 0 + 'vh',
                        'max-height': 0 + 'px'
                    }, 300);
                } else {
                    question.addClass('question-active');

                    line.css('width', description_inner_wrap.height() + 'px');

                    description.animate({
                        'margin-top': 4.629 + 'vh',
                        'margin-bottom': 4.629 + 'vh',
                        'max-height': description_inner_wrap.height() + 'px'
                    }, 300);
                }
                
            }

            if (question.index() == previous_question.index()) {
                //console.log(k);
                k++;
            }

            if (question.index() != previous_question.index()) {

                question.addClass('question-active');

                line.css('width', description_inner_wrap.height() + 'px');

                description.animate({
                    'margin-top': 4.629 + 'vh',
                    'margin-bottom': 4.629 + 'vh',
                    'max-height': description_inner_wrap.height() + 'px'
                }, 300);
    
                previous_question.removeClass('question-active');

                previous_question.find('.faq-content__description-line').css('width', 0 + 'px');

                previous_question.find('.faq-content__description').animate({
                    'margin-top': 0 + 'vh',
                    'margin-bottom': 0 + 'vh',
                    'max-height': 0 + 'px'
                }, 300);
            }

        }

        previous_question = question;

        first_click = true;

      });
});