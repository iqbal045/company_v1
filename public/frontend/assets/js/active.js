(function($) {

    /*===================
    - Preloader Script
    ====================*/
    $(window).on('load', function(){
            $('.spinner-section').fadeOut('slow', function(){
            $(this).remove();
        });
    });

    /*===================
    - Fixed Header
    ====================*/
    $(window).on('scroll', function(event) {
        var window_width = $(window).width();
        var scrollValue = $(window).scrollTop();
        if (window_width > 991) {
            if (scrollValue > 160) {
                $('header').addClass('affix animated fadeIn');
            } else {
                $('header').removeClass('affix animated fadeIn');
            }
        }
    });

    /*===================
    - Mobile Menu
    ====================*/
    $('.navbar-toggler').on('click', function(event) {
        $('header').toggleClass('affix mobile-menu');
        $('header').find('.affix').removeClass('affix mobile-menu');
    });
    if ($(window).width() < 991) {
        $('.navbar li a').on('click', function(event) {
            $('.navbar-collapse').removeClass('show');
            $('header').removeClass('affix mobile-menu');
        });
    };

    /*===================
    - SmoothScroll
    ====================*/
    var scroll = new SmoothScroll();

    var smoothScrollWithoutHash = function(selector, settings) {
        /**
         * If smooth scroll element clicked, animate scroll
         */
        var clickHandler = function(event) {
            var toggle = event.target.closest(selector);
            if (!toggle || toggle.tagName.toLowerCase() !== 'a') return;
            var anchor = document.querySelector(toggle.hash);
            if (!anchor) return;
            event.preventDefault(); // Prevent default click event
            scroll.animateScroll(anchor, toggle, settings || {}); // Animate scroll
        };
        window.addEventListener('click', clickHandler, false);
    };
    // Run our function
    smoothScrollWithoutHash('a[href*="#"]');

    /*===================
    - Scrollspy
    ====================*/
    $('body').scrollspy({ target: 'header', offset: 280 });

    /*===================
    - Wow Animation
    ====================*/
    var window_width = $(window).width();
    if (window_width > 767) {
        new WOW().init();
    }

    /*===================
    - About Carousel
    ====================*/
    $(".about-images").owlCarousel({
        autoplay: true,
        mouseDrag: true,
        nav: false,
        dots: true,
        items: 1,
    });

    /*===================
    - Funfacts Meter
    ====================*/
    $('.meter').each(function() {
        var $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 8000,
            easing: 'swing',
            step: function() {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });

    /*===================
    - Video Modal
    ====================*/
    $('.video-btn').on('click', function(e) {
        e.preventDefault();
        $('#' + $(this).data('modal-id')).modal();
    });
    // Stop Video by click close.
    $('.close').on('click', function() {
        $('iframe').attr('src', $('iframe').attr('src'));
    });

    /*===================
    - Background Parallax
    ====================*/
    if ($(window).width() > 991) {
        // funfacts parallax
        $('.funfacts-section').parallax("50%", 0.1);
        // video parallax
        $('.video-section').parallax("50%", 0.1);
        // get start section parallax
        $('.get-start-section').parallax("50%", 0.04);
    };

    /*===================
    - Portfolio Isotop
    ====================*/
    // portfolio isotop variable
    var $port_nav = $('.portfolio-nav');
    var $filterButtons = $('#filters li');
    var filters = {};
    var $grid = $('.portfolio-list').isotope({
        itemSelector: '.single-item',
        percentPosition: true,
        masonry: {
            // use outer width of grid-sizer for columnWidth
            columnWidth: '.grid-sizer'
        }
    });

    // layout Isotope after each image loads
    $grid.imagesLoaded().progress( function() {
        $grid.isotope('layout');
    });

    // Update Filter Count
    updateFilterCount();
    // store filter for each group
    $('#filters').on('click', 'li', function() {
        var $this = $(this);
        // get group key
        var $buttonGroup = $this.parents('.portfolio-nav');
        var filterGroup = $buttonGroup.attr('data-filter-group');
        // set filter for group
        filters[filterGroup] = $this.attr('data-filter');
        // combine filters
        var filterValue = concatValues(filters);
        // set filter for Isotope
        $grid.isotope({
            filter: filterValue
        });
        updateFilterCount();
    });

    // change is-checked class on buttons
    $port_nav.each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'li', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });

    // flatten object by concatting values
    function concatValues(obj) {
        var value = '';
        for (var prop in obj) {
            value += obj[prop];
        }
        return value;
    }

    // update filter count
    function updateFilterCount() {
        // get filtered item elements
        var itemElems = $grid.isotope('getFilteredItemElements');
        var $itemElems = $(itemElems);
        $filterButtons.each(function(i, li) {
            var $button = $(li);
            var filterValue = $button.attr('data-filter');
            if (!filterValue) {
                // do not update 'any' buttons
                return;
            }
            var count = $itemElems.filter(filterValue).length;
            $button.find('.filter-count').text(count);
        });
    };

    /*===================
    - Team Carousel
    ====================*/
    $('.team-members').owlCarousel({
        margin: 30,
        loop: true,
        autoplay: true,
        mouseDrag: true,
        nav: false,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 4
            }
        }
    });

    /*===================
    - Testimonial Carousel
    ====================*/
    $('.quote-list').owlCarousel({
        nav: false,
        dots: true,
        responsiveClass: true,
        items: 1,
        animateOut: 'flipOutX',
        animateIn: 'flipInX'
    });

    /*===================
    - Best Client Carousel
    ====================*/
    $('.best-clients').owlCarousel({
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1199: {
                items: 6
            }
        }
    });
    
    /*===================
    - Post Carousel
    ====================*/
    $('.post-slider').owlCarousel({
        margin: 10,
        nav: false,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });

    /*===================
    - Scroll Top
    ====================*/
    $(".scroll-top").hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 600) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

    $('.scroll-top').on('click', function() {
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 2000);
    });

    /*===================
    - Contact Form
    ====================*/
    $('#submit').on('click', function() {
        $.post("contact.php", $("#contact-form").serialize(), function(response) {
            $('#form-info').fadeIn().html(response);
            $('#form-info').delay(2000).fadeOut();
        });
        return false;
    });
})(jQuery);