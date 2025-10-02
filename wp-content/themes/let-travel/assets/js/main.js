(function ($) {
    'use strict';

    const body = $('body');

    // Smooth scroll for anchor links
    $('a[href*="#"]').not('[href="#"]').on('click', function (event) {
        if (
            location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
            location.hostname === this.hostname
        ) {
            let target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate(
                    {
                        scrollTop: target.offset().top - 80,
                    },
                    700
                );
            }
        }
    });

    // Sticky header shadow toggle
    const header = $('.site-header');
    if (header.length) {
        const toggleHeaderState = () => {
            if ($(window).scrollTop() > 40) {
                header.addClass('is-scrolled');
            } else {
                header.removeClass('is-scrolled');
            }
        };
        toggleHeaderState();
        $(window).on('scroll', toggleHeaderState);
    }
})(jQuery);
