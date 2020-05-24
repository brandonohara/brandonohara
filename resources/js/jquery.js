(function($){

    $(document).ready(function() {

        $('#flash-overlay-modal').modal();

        /* ---------------------------------------------- /*
         * Navbar
        /* ---------------------------------------------- */

        var navbar = $('.navbar-animated');
        var navHeight = navbar.outerHeight(true);


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

        $('.scroll-to').bind("click", function(e){
            var anchor = $(this).data('target');
            $('html, body').stop().animate({
                scrollTop: $(anchor).offset().top - navHeight
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