(function ($) {

    "use strict";

    // MENU
    $('.navbar-collapse a').on('click', function () {
        $(".navbar-collapse").collapse('hide');
    });

    // CUSTOM LINK
    $('.smoothscroll').click(function () {
        var el = $(this).attr('href');
        var elWrapped = $(el);
        var header_height = $('.navbar').height();

        scrollToDiv(elWrapped, header_height);
        return false;

        function scrollToDiv(element, navheight) {
            var offset = element.offset();
            var offsetTop = offset.top;
            var totalScroll = offsetTop - navheight;

            $('body,html').animate({
                scrollTop: totalScroll
            }, 300);
        }
    });


    $(window).on('scroll', function () {
        function isScrollIntoView(elem, index) {
            var docViewTop = $(window).scrollTop();
            var docViewBottom = docViewTop + $(window).height();
            var elemTop = $(elem).offset().top;
            var elemBottom = elemTop + $(window).height() * .5;
            if (elemBottom <= docViewBottom && elemTop >= docViewTop) {
                $(elem).addClass('active');
            }
            if (!(elemBottom <= docViewBottom)) {
                $(elem).removeClass('active');
            }
            var MainTimelineContainer = $('#vertical-scrollable-timeline')[0];
            var MainTimelineContainerBottom = MainTimelineContainer.getBoundingClientRect().bottom - $(window).height() * .5;
            $(MainTimelineContainer).find('.inner').css('height', MainTimelineContainerBottom + 'px');
        }
        var timeline = $('#vertical-scrollable-timeline li');
        Array.from(timeline).forEach(isScrollIntoView);
    });

    $(document).ready(function(){
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            center: true,
            margin: 24,
            dots: true,
            loop: true,
            nav : false,
            responsive: {
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                992:{
                    items:3
                }
            }
        });
    });

})(window.jQuery);
