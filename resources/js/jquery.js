(function($){

    $(document).ready(function() {

        $('.year').html((new Date).getFullYear());

        /* ---------------------------------------------- /*
         * Navbar
        /* ---------------------------------------------- */

        var navbar = $('.navbar');
        var navHeight = navbar.height();

        $(window).scroll(function() {
            if($(this).scrollTop() >= navHeight) {
                navbar.addClass('navbar-color');
            }
            else {
                navbar.removeClass('navbar-color');
            }
        });

        /* ---------------------------------------------- /*
         * Animated scrolling / Scroll Up
        /* ---------------------------------------------- */

        $('a[href*=#]').bind("click", function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - navHeight
            }, 1000);
            e.preventDefault();
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });

        /* ---------------------------------------------- /*
         * WOW Animation When You Scroll
        /* ---------------------------------------------- */

        wow = new WOW({
            mobile: false
        });
        wow.init();
    });

})($);