/**
 * Estatein main JavaScript.
 *
 * @package Estatein
 */

jQuery(function ($) {

    'use strict';


    /* =====================================================
       Announcement Bar
    ===================================================== */

    var $announcementBar = $('#announcement-bar');
    var $announcementClose = $('.announcement-bar__close');
    var $siteHeader = $('#site-header');

    $announcementClose.on('click', function () {

        $announcementBar.stop(true, true).slideUp(200, function () {

            $siteHeader.css('top', '0');

        });

    });

    /* =====================================================
    Mobile Menu
    ===================================================== */

    var $mobileMenuToggle = $('#mobile-menu-toggle');
    var $mobileMenu = $('#mobile-menu');

    $mobileMenuToggle.on('click', function () {

        var isOpen = $(this).hasClass('is-active');

        if (isOpen) {

            $(this).removeClass('is-active');
            $mobileMenu.removeClass('is-open');

            $(this).attr('aria-expanded', 'false');
            $(this).attr('aria-label', 'Open menu');

        } else {

            $(this).addClass('is-active');
            $mobileMenu.addClass('is-open');

            $(this).attr('aria-expanded', 'true');
            $(this).attr('aria-label', 'Close menu');

        }

    });


    /*
    * Close mobile menu after clicking a menu item.
    */

    $('.mobile-menu__link').on('click', function () {

        $mobileMenuToggle.removeClass('is-active');
        $mobileMenu.removeClass('is-open');

        $mobileMenuToggle.attr('aria-expanded', 'false');
        $mobileMenuToggle.attr('aria-label', 'Open menu');

    });


    /* =====================================================
       Featured Properties Carousel
    ===================================================== */

    var $carousel = $('.property-carousel');

    if ($carousel.length) {

        var $viewport = $carousel.find('.property-carousel__viewport');
        var $track = $carousel.find('.property-carousel__track');
        var $cards = $track.find('.property-card');

        var $prev = $('.properties-prev');
        var $next = $('.properties-next');
        var $current = $('.properties-current');

        var currentIndex = 0;


        /*
         * Number of cards visible.
         */

        function getVisibleCards() {

            if ($(window).width() <= 768) {
                return 1;
            }

            if ($(window).width() <= 1200) {
                return 2;
            }

            return 3;
        }


        /*
         * Maximum slide index.
         */

        function getMaxIndex() {

            return Math.max(
                0,
                $cards.length - getVisibleCards()
            );

        }


        /*
         * Move carousel.
         */

        function updateCarousel(animate) {

            var visibleCards = getVisibleCards();

            if (!$cards.length) {
                return;
            }


            /*
             * Calculate actual card width.
             */

            var cardWidth = $cards.first().outerWidth(true);

            var translateX = currentIndex * cardWidth;


            /*
             * Animation.
             */

            if (animate) {

                $track.css(
                    'transition',
                    'transform 0.45s ease'
                );

            } else {

                $track.css(
                    'transition',
                    'none'
                );

            }


            $track.css(
                'transform',
                'translate3d(-' + translateX + 'px, 0, 0)'
            );


            /*
             * Counter.
             *
             * Figma-style:
             * 01 of 60
             */

            var displayIndex = currentIndex + 1;

            $current.text(
                displayIndex < 10
                    ? '0' + displayIndex
                    : displayIndex
            );


            /*
             * Previous button.
             */

            $prev.prop(
                'disabled',
                currentIndex === 0
            );


            /*
             * Next button.
             */

            $next.prop(
                'disabled',
                currentIndex >= getMaxIndex()
            );

        }


        /* =================================================
           Next
        ================================================= */

        $next.on('click', function () {

            var maxIndex = getMaxIndex();

            if (currentIndex < maxIndex) {

                currentIndex++;

                updateCarousel(true);

            }

        });


        /* =================================================
           Previous
        ================================================= */

        $prev.on('click', function () {

            if (currentIndex > 0) {

                currentIndex--;

                updateCarousel(true);

            }

        });


        /* =================================================
           Responsive resize
        ================================================= */

        var resizeTimer;

        $(window).on('resize', function () {

            clearTimeout(resizeTimer);

            resizeTimer = setTimeout(function () {

                var maxIndex = getMaxIndex();

                if (currentIndex > maxIndex) {
                    currentIndex = maxIndex;
                }

                updateCarousel(false);

            }, 100);

        });


        /*
         * Initial state.
         */

        updateCarousel(false);

    }

        /* =====================================================
       Testimonials Carousel
    ===================================================== */

    var $testimonialCarousel = $('.testimonial-carousel');

    if ($testimonialCarousel.length) {

        var $testimonialTrack = $testimonialCarousel.find(
            '.testimonial-carousel__track'
        );

        var $testimonialCards = $testimonialTrack.find(
            '.testimonial-card'
        );

        var $testimonialPrev = $testimonialCarousel.find(
            '.testimonials-prev'
        );

        var $testimonialNext = $testimonialCarousel.find(
            '.testimonials-next'
        );

        var $testimonialCurrent = $testimonialCarousel.find(
            '.testimonials-current'
        );

        var testimonialIndex = 0;


        function getTestimonialsVisible() {

            if ($(window).width() <= 600) {
                return 1;
            }

            if ($(window).width() <= 900) {
                return 2;
            }

            return 3;
        }


        function getTestimonialsMaxIndex() {

            return Math.max(
                0,
                $testimonialCards.length -
                getTestimonialsVisible()
            );

        }


        function updateTestimonialsCarousel(animate) {

            if (!$testimonialCards.length) {
                return;
            }

            var cardWidth = $testimonialCards
                .first()
                .outerWidth();

            var gap = parseFloat(
                $testimonialTrack.css('gap')
            ) || 0;

            var translateX =
                testimonialIndex *
                (cardWidth + gap);


            $testimonialTrack.css(
                'transition',
                animate
                    ? 'transform 0.45s ease'
                    : 'none'
            );


            $testimonialTrack.css(
                'transform',
                'translate3d(-' +
                translateX +
                'px, 0, 0)'
            );


            var displayIndex =
                testimonialIndex + 1;


            $testimonialCurrent.text(
                displayIndex < 10
                    ? '0' + displayIndex
                    : displayIndex
            );


            $testimonialPrev.prop(
                'disabled',
                testimonialIndex === 0
            );


            $testimonialNext.prop(
                'disabled',
                testimonialIndex >=
                getTestimonialsMaxIndex()
            );

        }


        $testimonialNext.on('click', function () {

            var maxIndex =
                getTestimonialsMaxIndex();

            if (testimonialIndex < maxIndex) {

                testimonialIndex++;

                updateTestimonialsCarousel(true);

            }

        });


        $testimonialPrev.on('click', function () {

            if (testimonialIndex > 0) {

                testimonialIndex--;

                updateTestimonialsCarousel(true);

            }

        });


        updateTestimonialsCarousel(false);

    }


    /* =====================================================
       FAQ Carousel
    ===================================================== */

    var $faqCarousel = $('.faq-carousel');

    if ($faqCarousel.length) {

        var $faqTrack = $faqCarousel.find(
            '.faq-carousel__track'
        );

        var $faqCards = $faqTrack.find(
            '.faq-card'
        );

        var $faqPrev = $faqCarousel.find(
            '.faq-prev'
        );

        var $faqNext = $faqCarousel.find(
            '.faq-next'
        );

        var $faqCurrent = $faqCarousel.find(
            '.faq-current'
        );

        var faqIndex = 0;


        function getFaqVisible() {

            if ($(window).width() <= 600) {
                return 1;
            }

            if ($(window).width() <= 900) {
                return 2;
            }

            return 3;
        }


        function getFaqMaxIndex() {

            return Math.max(
                0,
                $faqCards.length -
                getFaqVisible()
            );

        }


        function updateFaqCarousel(animate) {

            if (!$faqCards.length) {
                return;
            }

            var cardWidth = $faqCards
                .first()
                .outerWidth();

            var gap = parseFloat(
                $faqTrack.css('gap')
            ) || 0;

            var translateX =
                faqIndex *
                (cardWidth + gap);


            $faqTrack.css(
                'transition',
                animate
                    ? 'transform 0.45s ease'
                    : 'none'
            );


            $faqTrack.css(
                'transform',
                'translate3d(-' +
                translateX +
                'px, 0, 0)'
            );


            var displayIndex =
                faqIndex + 1;


            $faqCurrent.text(
                displayIndex < 10
                    ? '0' + displayIndex
                    : displayIndex
            );


            $faqPrev.prop(
                'disabled',
                faqIndex === 0
            );


            $faqNext.prop(
                'disabled',
                faqIndex >=
                getFaqMaxIndex()
            );

        }


        $faqNext.on('click', function () {

            var maxIndex =
                getFaqMaxIndex();

            if (faqIndex < maxIndex) {

                faqIndex++;

                updateFaqCarousel(true);

            }

        });


        $faqPrev.on('click', function () {

            if (faqIndex > 0) {

                faqIndex--;

                updateFaqCarousel(true);

            }

        });


        updateFaqCarousel(false);

    }


    /* =====================================================
       Recalculate Carousels on Resize
    ===================================================== */

    var carouselResizeTimer;

    $(window).on('resize', function () {

        clearTimeout(carouselResizeTimer);

        carouselResizeTimer = setTimeout(function () {

            if ($testimonialCarousel.length) {

                var testimonialMax =
                    getTestimonialsMaxIndex();

                if (
                    testimonialIndex >
                    testimonialMax
                ) {
                    testimonialIndex =
                        testimonialMax;
                }

                updateTestimonialsCarousel(false);

            }


            if ($faqCarousel.length) {

                var faqMax =
                    getFaqMaxIndex();

                if (faqIndex > faqMax) {

                    faqIndex = faqMax;

                }

                updateFaqCarousel(false);

            }

        }, 100);

    });

    /* =====================================================
    Contact Office Filters
    ===================================================== */

    $('.office-filter').on('click', function () {

        var $button = $(this);
        var filter = $button.data('office-filter');

        $('.office-filter').removeClass('is-active');

        $button.addClass('is-active');

        $('.office-card').each(function () {

            var $card = $(this);
            var type = $card.data('office-type');

            if (filter === 'all' || filter === type) {

                $card.stop(true, true).fadeIn(180);

            } else {

                $card.stop(true, true).fadeOut(180);

            }

        });

    });

    /* =====================================================
   OUR VALUED CLIENTS CAROUSEL
===================================================== */

var $clientsCarousel = $('.clients-carousel');

if ($clientsCarousel.length) {

    var $clientsTrack = $clientsCarousel.find('.clients-carousel__track');
    var $clientCards = $clientsTrack.find('.client-card');

    var $clientsPrev = $clientsCarousel.find('.clients-prev');
    var $clientsNext = $clientsCarousel.find('.clients-next');
    var $clientsCurrent = $clientsCarousel.find('.clients-pagination__current');

    var clientsCurrentIndex = 0;


    function getClientsVisibleCards() {

        if ($(window).width() <= 900) {
            return 1;
        }

        return 2;
    }


    function getClientsMaxIndex() {

        return Math.max(
            0,
            $clientCards.length - getClientsVisibleCards()
        );

    }


    function updateClientsCarousel(animate) {

        if (!$clientCards.length) {
            return;
        }


        var gap = parseFloat(
            $clientsTrack.css('gap')
        ) || 0;


        var cardWidth = $clientCards.first().outerWidth();


        var translateX =
            clientsCurrentIndex * (cardWidth + gap);


        if (animate) {

            $clientsTrack.css(
                'transition',
                'transform 0.45s ease'
            );

        } else {

            $clientsTrack.css(
                'transition',
                'none'
            );

        }


        $clientsTrack.css(
            'transform',
            'translate3d(-' + translateX + 'px, 0, 0)'
        );


        /*
         * Display current slide.
         *
         * 0 → 01
         * 1 → 02
         * 2 → 03
         */

        var displayIndex = clientsCurrentIndex + 1;


        $clientsCurrent.text(
            displayIndex < 10
                ? '0' + displayIndex
                : displayIndex
        );


        $clientsPrev.prop(
            'disabled',
            clientsCurrentIndex === 0
        );


        $clientsNext.prop(
            'disabled',
            clientsCurrentIndex >= getClientsMaxIndex()
        );

    }


    /* NEXT */

    $clientsNext.on('click', function () {

        var maxIndex = getClientsMaxIndex();


        if (clientsCurrentIndex < maxIndex) {

            clientsCurrentIndex++;

            updateClientsCarousel(true);

        }

    });


    /* PREVIOUS */

    $clientsPrev.on('click', function () {

        if (clientsCurrentIndex > 0) {

            clientsCurrentIndex--;

            updateClientsCarousel(true);

        }

    });


    /* RESPONSIVE */

    var clientsResizeTimer;


    $(window).on('resize', function () {

        clearTimeout(clientsResizeTimer);


        clientsResizeTimer = setTimeout(function () {

            var maxIndex = getClientsMaxIndex();


            if (clientsCurrentIndex > maxIndex) {

                clientsCurrentIndex = maxIndex;

            }


            updateClientsCarousel(false);

        }, 100);

    });


    /* INITIAL STATE */

    updateClientsCarousel(false);

}

});

