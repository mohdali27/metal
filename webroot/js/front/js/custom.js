(function($) {
    "use strict";

    /**
     * Table of Contents:
     *
     * 01 - Document Ready
     * 02 - Window Load
     * 03 - Window scroll
     * 04 - Platform detect
     * 05 - collapsed menu close on click
     * 06 - collapsed menu close on click
     * 07 - Menuzord - Responsive Megamenu
     * 08 - Waypoint Top Nav Sticky
     * 09 - Active Menu Item on Reaching Different Sections
     * 10 - home section on scroll parallax & fade
     * 11 - on click scrool to target with smoothness
     * 12 - Scroll navigation
     * 13 - scrollToTop
     * 14 - Background image, color
       * 14.1 - Background Parallax
     * 15 - Team Hover Effect
     * 16 - Home Resize Fullscreen
     * 17 - lightbox popup
     * 18 - Owl Carousel
     * 29 - Nivo Lightbox
     * 20 - maximage Fullscreen Parallax Background Slider
     * 21 - progress bar / horizontal skill bar
     * 22 - Funfact Number Counter
     * 23 - Isotope
     * 24 - Megafolio
     * 25 - Contact Form
     * 26 - Wow initialize
     * 27 - Fit Vids
     * 28 - YT Player for Video
     * 29 - Flickr Feed
     * 30 - accordion & toggles
     * 31 - Horizontal & Vertical Tab
     * 32 - tooltip
     * 33 - Top search toggle
     * 34 - Twitter Feed
     * 35 - CountDown
     * 36 - equalHeights
     * 37 - Google-map
     * 38 - toggle Google map
     * 39 - timeline
     * -----------------------------------------------
     */

    /* ---------------------------------------------------------------------- */
    /* -------------------- 01 - Document Ready ----------------------------- */
    /* ---------------------------------------------------------------------- */
    $(window).trigger("resize");
    thememascot_lightboxPopup();
    thememascot_scrollToFixed();
    thememascot_topnav_animate();
    thememascot_scrolltoTarget();
    thememascot_menuzord();
    thememascot_navLocalScorll();
    thememascot_parallaxBgInit();
    thememascot_teamInit();
    thememascot_resize_fullscreen();
    thememascot_owlCarousel();
    thememascot_nivolightbox();
    thememascot_maximageSlider();
    thememascot_progress_bar();
    thememascot_funfact();
    thememascot_megafolio();
    thememascot_contactform();
    thememascot_wow();
    thememascot_fitVids();
    thememascot_YTPlayer();
    thememascot_jflickrfeed();
    thememascot_accordion_toggles();
    thememascot_tab();
    thememascot_tooltip();
    thememascot_topsearch_toggle();
    thememascot_twittie();
    thememascot_toggleMap();



    /* ---------------------------------------------------------------------- */
    /* ----------------------- 02 - Window Load ----------------------------- */
    /* ---------------------------------------------------------------------- */
    $(window).load(function() {
        //preloader
        $('#preloader').delay(200).fadeOut('slow');
        
        $(window).trigger("scroll");
        $(window).trigger("resize");
        
        // Hash Forwarding
        if (window.location.hash){
					var hash_offset = $(window.location.hash).offset().top;
					$("html, body").animate({
						scrollTop: hash_offset
					});
        }
    });

    /* ---------------------------------------------------------------------- */
    /* ------------------------- 03 - Window scroll ------------------------- */
    /* ---------------------------------------------------------------------- */
    $(window).scroll(function() {
        thememascot_topnav_animate();
        thememascot_home_parallax_fade_effect();
        thememascot_scrollToTop_icon();
        thememascot_activate_menuitem();
    });


  /* ---------------------------------------------------------------------- */
  /* -------------------------- 04 - Platform detect ------------------------- */
  /* ---------------------------------------------------------------------- */
    var isMobile;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        isMobile = true;
        $("html").addClass("mobile");
    }
    else {
        isMobile = false;
        $("html").addClass("no-mobile");
    }

    
    /* ---------------------------------------------------------------------------- */
    /* ---------------------- 05 - collapsed menu close on click ------------------ */
    /* ---------------------------------------------------------------------------- */
    $(document).on('click', '.navbar-collapse.in', function (e) {
      if ($(e.target).is('a')) {
          $(this).collapse('hide');
      }
      return false;
    });

    /* ---------------------------------------------------------------------------- */
    /* ---------------------- 06 - collapsed menu close on click ------------------ */
    /* ---------------------------------------------------------------------------- */
    function thememascot_scrollToFixed() {
        $('.navbar-scrolltofixed').scrollToFixed();
    }

    /* ----------------------------------------------------------------------------- */
    /* ---------------------- 07 - Menuzord - Responsive Megamenu ------------------ */
    /* ----------------------------------------------------------------------------- */
    function thememascot_menuzord() {
        $("#menuzord").menuzord({
            align: "left",
            effect: "slide",
            animation: "none",
            indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
            indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
        });
        $("#menuzord-right").menuzord({
            align: "right",
            effect: "slide",
            animation: "none",
            indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
            indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
        });
    }

    /* ---------------------------------------------------------------------- */
    /* ---------------------- 08 - Waypoint Top Nav Sticky ------------------ */
    /* ---------------------------------------------------------------------- */
    function thememascot_topnav_animate() {
      if ($(window).scrollTop() > (50)) {
            $(".navbar-sticky-animated").removeClass("animated-active");
        } else {
            $(".navbar-sticky-animated").addClass("animated-active");
        }

        if ($(window).scrollTop() > (50)) {
            $(".navbar-sticky-animated .header-nav-wrapper .container").removeClass("pt-20").removeClass("pb-20");
        } else {
            $(".navbar-sticky-animated .header-nav-wrapper .container").addClass("pt-20").addClass("pb-20");
        }
    }

    /* ---------------------------------------------------------------------- */
    /* ------ 09 - Active Menu Item on Reaching Different Sections ---------- */
    /* ---------------------------------------------------------------------- */
    //Active Menu Item on Reaching Different Sections
    var sections = $('section'),
        nav = $('header'),
        nav_height = nav.outerHeight();

    function thememascot_activate_menuitem() {
        var cur_pos = $(window).scrollTop() + 2;
        sections.each(function() {
            var top = $(this).offset().top - nav_height - 80,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                nav.find('a').removeClass('current').removeClass('active');
                sections.removeClass('current').removeClass('active');

                //$(this).addClass('current').addClass('active');
                nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('current').addClass('active');
            }
        });
    }


    /* ---------------------------------------------------------------------- */
    /* ----------- 10 - home section on scroll parallax & fade -------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_home_parallax_fade_effect() {
        if ($(window).width() >= 1200) {
            var scrolled = $(window).scrollTop();
            $('.content-fade-effect .home-content .home-text', '#wrapper').css('padding-top', (scrolled * 0.0610) + '%').css('opacity', 1 - (scrolled * 0.00120));
        }
    }


    /* ---------------------------------------------------------------------- */
    /* -------------- 11 - on click scrool to target with smoothness -------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_scrolltoTarget() {
        //jQuery for page scrolling feature - requires jQuery Easing plugin
        $('.smooth-scroll').on('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top + 80
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
            return false;
        });
    }

    /* ---------------------------------------------------------------------- */
    /* --------------------- 12 - Scroll navigation ------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_navLocalScorll() {
		var	data_offset = -73;
        $(".menuzord-menu").localScroll({
            target: "body",
            duration: 800,
						offset: data_offset,
            easing: "easeInOutExpo"
        });
    }


    /* ---------------------------------------------------------------------- */
    /* -------------------------- 13 - scrollToTop  ------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_scrollToTop_icon() {
        if ($(window).scrollTop() > 600) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    }

    $(document.body).on('click', '.scrollToTop', function(e) {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });


    /* ---------------------------------------------------------------------- */
    /* -------------------- 14 - Background image, color -------------------- */
    /* ---------------------------------------------------------------------- */
    $('[data-bg-color]').each(function() {
        $(this, '#wrapper').css("cssText", "background: " + $(this).data("bg-color") + " !important;");
    });
    $('[data-bg-img]').each(function() {
        $(this, '#wrapper').css('background-image', 'url(' + $(this).data("bg-img") + ')');
    });
    $('[data-text-color]').each(function() {
        $(this, '#wrapper').css('color', $(this).data("text-color"));
    });
    $('[data-font-size]').each(function() {
        $(this, '#wrapper').css('font-size', $(this).data("font-size"));
    });
    $('[data-height]').each(function() {
        $(this, '#wrapper').css('height', $(this).data("height"));
    });
    $('[data-border]').each(function() {
        $(this, '#wrapper').css('border', $(this).data("border"));
    });
    $('[data-margin-top]').each(function() {
        $(this, '#wrapper').css('margin-top', $(this).data("margin-top"));
    });

    /* ---------------------------------------------------------------------- */
    /* ---------------------- 14.1 - Background Parallax -------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_parallaxBgInit() {
        if (($(window).width() >= 1200) && (isMobile === false)) {
            $('.parallax').each(function() {
                $(this).parallax("50%", 0.1);
            });
        }
    }
    $(window).on('load', function() {
        thememascot_parallaxBgInit();
    });


    /* ---------------------------------------------------------------------- */
    /* ----------------------- 15 - Team Hover Effect ----------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_teamInit() {
        $(document.body).on('touchstart click', '.team-member', function(e) {
            if ( $("html").hasClass("mobile") ) {
                $(this).toggleClass("js-active");
            }
        });        
    }



    /* ---------------------------------------------------------------------- */
    /* ------------------------ 16 - Home Resize Fullscreen ----------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_resize_fullscreen() {
        var windowHeight = $(window).height();
        $('.fullscreen, .revslider-fullscreen').height(windowHeight);
    }
    $(window).resize(function() {
        thememascot_resize_fullscreen();
    });

    /* ---------------------------------------------------------------------- */
    /* -------------------------- 17 - lightbox popup ----------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_lightboxPopup() {
        lightbox.option({
          resizeDuration: 200,
          alwaysShowNavOnTouchDevices: true,
          positionFromTop: 50,
          wrapAround: true
        });

        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            hook: 'data-rel',
            animation_speed:'normal',
            theme:'light_square',
            slideshow:3000, 
            autoplay_slideshow: false,
            social_tools: false
        });

    }

    /* ---------------------------------------------------------------------- */
    /* ---------------------------- 18 - Owl Carousel  ---------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_owlCarousel() {
        $(".text-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            loop: true,
            items: 1,
            dots: true,
            nav: false,
            navText: [
                '<i class="pe-7s-angle-left"></i>',
                '<i class="pe-7s-angle-right"></i>'
            ]
        });

        $(".image-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 400,
            items: 1,
            loop: true,
            dots: true,
            nav: false,
            navText: [
                '<i class="pe-7s-angle-left"></i>',
                '<i class="pe-7s-angle-right"></i>'
            ]
        });
		
        $(".gallery-list-carosel").owlCarousel({
            autoplay: false,
            autoplayTimeout: 4000,
            loop: true,
            margin: 15,
            dots: false,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 2,
                    center: false
                },
                600: {
                    items: 4,
                    center: false
                },
                960: {
                    items: 6
                },
                1170: {
                    items: 6
                },
                1300: {
                    items: 6
                }
            }
        });

        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            loop: true,
            margin: 15,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                960: {
                    items: 2
                },
                1170: {
                    items: 3
                },
                1300: {
                    items: 3
                }
            }
        });

        $(".testimonial-carousel-1").owlCarousel({
            autoplay: true,
            autoplayTimeout: 4000,
            loop: true,
            margin: 15,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                960: {
                    items: 1
                },
                1170: {
                    items: 1
                },
                1300: {
                    items: 1
                }
            }
        });

        $(".featured-project-carousel").owlCarousel({
            autoplay: false,
            autoplayTimeout: 4000,
            loop: true,
            margin: 15,
            dots: false,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                960: {
                    items: 1
                },
                1170: {
                    items: 1
                },
                1300: {
                    items: 1
                }
            }
        });

        $('.featured-gallery').owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            loop: true,
            margin: 3,
            dots: false,
            nav: true,
            navText: [
                '<i class="pe-7s-angle-left"></i>',
                '<i class="pe-7s-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                960: {
                    items: 3
                },
                1170: {
                    items: 4
                },
                1300: {
                    items: 4
                }
            }
        });

        $('.speakers-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            loop: true,
            margin: 3,
            dots: false,
            nav: true,
            navText: [
                '<i class="pe-7s-angle-left"></i>',
                '<i class="pe-7s-angle-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                960: {
                    items: 3
                },
                1170: {
                    items: 4
                },
                1300: {
                    items: 4
                }
            }
        });

        $('.news-carousel').each(function() {
						var current_item = $(this);
            var data_dots = ( current_item.data("dots") === undefined ) ? false: current_item.data("dots");
            var data_nav = ( current_item.data("nav") === undefined ) ? false: current_item.data("nav");
            current_item.owlCarousel({
                autoplay: false,
                autoplayTimeout: 4000,
                loop: true,
                margin: 15,
                dots: data_dots,
                nav: data_nav,
                navText: [
                    '<i class="fa fa-angle-left"></i>',
                    '<i class="fa fa-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 1,
                        center: false
                    },
                    750: {
                        items: 3,
                        center: false
                    },
                    960: {
                        items: 3
                    },
                    1170: {
                        items: 3
                    },
                    1300: {
                        items: 3
                    }
                }
            });
        });

        $('.news-carousel-2column').each(function() {
						var current_item = $(this);
            var data_dots = ( current_item.data("dots") === undefined ) ? false: current_item.data("dots");
            var data_nav = ( current_item.data("nav")=== undefined ) ? false: current_item.data("nav");
            current_item.owlCarousel({
                autoplay: false,
                autoplayTimeout: 4000,
                loop: true,
                margin: 15,
                dots: data_dots,
                nav: data_nav,
                navText: [
                    '<i class="fa fa-angle-left"></i>',
                    '<i class="fa fa-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 1,
                        center: false
                    },
                    750: {
                        items: 2,
                        center: false
                    },
                    960: {
                        items: 2
                    },
                    1170: {
                        items: 2
                    },
                    1300: {
                        items: 2
                    }
                }
            });
        });
        
        $(".clients-logo.carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            items: 5,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 3,
                    center: false
                },
                600: {
                    items: 3,
                    center: false
                },
                960: {
                    items: 4
                },
                1170: {
                    items: 6
                },
                1300: {
                    items: 6
                }
            }
        });

        $('.causes-carousel').each(function() {
						var current_item = $(this);
            var data_dots = ( current_item.data("dots") === undefined ) ? false: current_item.data("dots");
            var data_nav = ( current_item.data("nav") === undefined ) ? false: current_item.data("nav");
            current_item.owlCarousel({
                autoplay: true,
                autoplayTimeout: 4000,
                loop: true,
                margin: 15,
                dots: data_dots,
                nav: data_nav,
                navText: [
                    '<i class="fa fa-angle-left"></i>',
                    '<i class="fa fa-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                        center: false
                    },
                    600: {
                        items: 1,
                        center: false
                    },
                    750: {
                        items: 2,
                        center: false
                    },
                    960: {
                        items: 3
                    },
                    1170: {
                        items: 4
                    },
                    1300: {
                        items: 4
                    }
                }
            });
        });

        $(".fullwidth-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 5000,
            loop: true,
            items: 1,
            dots: false,
            nav: true,
            navText: [
                '<i class="pe-7s-angle-left"></i>',
                '<i class="pe-7s-angle-right"></i>'
            ]
        });
    }
    
    /* ---------------------------------------------------------------------- */
    /* -------------------------- 19 - Nivo Lightbox ------------------------ */
    /* ---------------------------------------------------------------------- */ 
    function thememascot_nivolightbox() {
      $('a[data-lightbox-gallery]').nivoLightbox({
          effect: 'fadeScale'
      });
    }

    /* ---------------------------------------------------------------------- */
    /* ------ 20 - maximage Fullscreen Parallax Background Slider  ---------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_maximageSlider() {
        $('#maximage').maximage({
            cycleOptions: {
                fx: 'fade',
                speed: 1500,
                prev: '.img-prev',
                next: '.img-next'
            }
        });
    }
    /* ---------------------------------------------------------------------- */
    /* ---------------- 21 - progress bar / horizontal skill bar ------------ */
    /* ---------------------------------------------------------------------- */
    function thememascot_progress_bar() {
        $('.progress-bar').appear();
        $(document.body).on('appear', '.progress-bar', function() {
            $('.progress-bar').each(function() {
								var current_item = $(this);
                if (!current_item.hasClass('appeared')) {
                    var percent = current_item.data('percent');
                    var barcolor = current_item.data('barcolor');
                    current_item.append('<span class="percent">' + percent + '%' + '</span>').css('background-color', barcolor).css('width', percent + '%').addClass('appeared');
                }
            });
        });
    }

    /* ---------------------------------------------------------------------- */
    /* --------------------- 22 - Funfact Number Counter -------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_funfact() {
        $('.animate-number').appear();
        $(document.body).on('appear', '.animate-number', function() {
            $('.animate-number').each(function() {
								var current_item = $(this);
                if (!current_item.hasClass('appeared')) {
                    current_item.animateNumbers(current_item.attr("data-value"), true, parseInt(current_item.attr("data-animation-duration"), 10)).addClass('appeared');
                }
            });
        });
    }

    /* ---------------------------------------------------------------------- */
    /* --------------------------- 24 - Megafolio --------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_megafolio() {
        var megafolio_container = '.megafolio-container';
        var api = $(megafolio_container).megafoliopro({
            filterChangeAnimation: "rotatescale", // fade, rotate, scale, rotatescale, pagetop, pagebottom,pagemiddle
            filterChangeSpeed: 250, // Speed of Transition
            filterChangeRotate: 99, // If you ue scalerotate or rotate you can set the rotation (99 = random !!)
            filterChangeScale: 0.6, // Scale Animation Endparameter
            delay: 10, // The Time between the Animation of single mega-entry points
            paddingHorizontal: $(megafolio_container).data("padding"), // Padding between the mega-entrypoints
            paddingVertical: $(megafolio_container).data("padding"),
            layoutarray: $(megafolio_container).data("layoutarray") //[5,6] // Defines the Layout Types which can be used in the Gallery. 2-9 or "random". You can define more than one, like {5,2,6,4} where the first items will be orderd in layout 5, the next comming items in layout 2, the next comming items in layout 6 etc... You can use also simple {9} then all item ordered in Layout 9 type.

        });

        // CALL FILTER FUNCTION IF ANY FILTER HAS BEEN CLICKED
        $(document.body).on('click', '.filter', function() {
            $('.filter').removeClass("active");
            api.megafilter(jQuery(this).data('category'));
            $(this).addClass("active");
            return false;
        });
    }


    /* ---------------------------------------------------------------------- */
    /* -------------------------- 25 - Contact Form ------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_contactform() {
        var $contactform = $('#contact-form'),
            $response = '';

        // After contact form submit
        $contactform.submit(function() {
            // Hide any previous response text
            $contactform.children(".alert").remove();

            // Are all the fields filled in? 
            if (!$('#contact_name').val()) {
                $response = '<div class="alert alert-danger">Please enter your name.</div>';
                $('#contact_name').focus();
                $contactform.append($response);

            } else if (!$('#contact_message').val()) {
                $response = '<div class="alert alert-danger">Please enter your message.</div>';
                $('#contact_message').focus();
                $contactform.append($response);

            } else if (!$('#contact_email').val()) {
                $response = '<div class="alert alert-danger">Please enter valid e-mail.</div>';
                $('#contact_email').focus();
                $contactform.append($response);

            } else {
                // Yes, submit the form to the PHP script via Ajax 
                $contactform.children('button[type="submit"]').button('loading');
                $.ajax({
                    type: "POST",
                    url: "php/contact-form.php",
                    data: $(this).serialize(),
                    success: function(msg) {
                        if (msg == 'sent') {
                            $response = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
                            $contactform[0].reset();
                        } else {
                            $response = '<div class="alert alert-danger">' + msg + '</div>';
                        }
                        // Show response message
                        $contactform.append($response);
                        $contactform.children('button[type="submit"]').button('reset');
                    }
                });
            }
            return false;
        });
    }

    /* ---------------------------------------------------------------------- */
    /* ------------------------- 26 - Wow initialize  ----------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_wow() {
        var wow = new WOW({
            mobile: false // trigger animations on mobile devices (default is true)
        });
        wow.init();
    }

    /* ---------------------------------------------------------------------- */
    /* -------------------------- 27 - Fit Vids ----------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_fitVids() {
        $('body').fitVids();
    }

    /* ---------------------------------------------------------------------- */
    /* ------------------------- 28 - YT Player for Video ------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_YTPlayer() {
        $(".player").mb_YTPlayer();
    }

    /* ---------------------------------------------------------------------- */
    /* ------------------------- 29 - Flickr Feed --------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_jflickrfeed() {
        $(".flickr-widget .flickr-feed").jflickrfeed({
            limit: 9,
            qstrings: {
                id: "64742456@N00"
            },
            itemTemplate: '<a href="{{link}}" title="{{title}}" target="_blank"><img src="{{image_m}}" alt="{{title}}">  </a>'
        });
    }

    /* ---------------------------------------------------------------------- */
    /* --------------------- 30 - accordion & toggles ----------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_accordion_toggles() {
        $(".panel-group .collapse").on("show.bs.collapse", function(e) {
            $(this).closest(".panel-group").find("[href='#" + $(this).attr("id") + "']").addClass("active");
        });
        $(".panel-group .collapse").on("hide.bs.collapse", function(e) {
            $(this).closest(".panel-group").find("[href='#" + $(this).attr("id") + "']").removeClass("active");
        });
    }

    /* ---------------------------------------------------------------------- */
    /* ------------------ 31 - Horizontal & Vertical Tab   ------------------ */
    /* ---------------------------------------------------------------------- */
    function thememascot_tab() {
    }

    /* ---------------------------------------------------------------------- */
    /* ---------------------------- 32 - tooltip  --------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_tooltip() {
        $('[data-toggle="tooltip"]').tooltip();
    }

    /* ---------------------------------------------------------------------- */
    /* ---------------------- 33 - Top search toggle  ----------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_topsearch_toggle() {
        $(document.body).on('click', '#top-search-toggle', function(e) {
            e.preventDefault();
            $('.search-form-wrapper.toggle').toggleClass('active');
            return false;
        });
    }

    /* ---------------------------------------------------------------------- */
    /* ------------------------ 34 - Twitter Feed  -------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_twittie() {
        $('.twitter-feed').twittie({
            username: 'Envato',
            dateFormat: '%b. %d, %Y',
            template: '{{tweet}} <div class="date">{{date}}</div>',
            count: 2,
            loadingText: 'Loading!'
        }, function() {
            $(".twitter-carousel ul").owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                loop: true,
                items: 1,
                dots: false,
                nav: false
            });
        });
    }


    /* ---------------------------------------------------------------------- */
    /* ------------------------- 35 - CountDown ----------------------------- */
    /* ---------------------------------------------------------------------- */
    var endingdate = $('#clock').data("endingdate");
    $('#clock').countdown(endingdate, function(event) {
      var countdown_text = ''+
      '<ul class="countdown-timer">'+
        '<li>%D <span>Days</span></li>'+
        '<li>%H <span>Hours</span></li>'+
        '<li>%M <span>Minutes</span></li>'+
        '<li>%S <span>Seconds</span></li>'+
      '</ul>';
      $(this).html(event.strftime(countdown_text));
    });
    

    /* ---------------------------------------------------------------------- */
    /* ------------------------- 36 - equalHeights -------------------------- */
    /* ---------------------------------------------------------------------- */ 
    function landapp_resizeDivs() {
      /* equal heigh */
      $('.equal-height > div', '#wrapper').css('min-height', 'auto');
      $('.equal-height').equalHeights();

      /* equal heigh inner div */
      $('.equal-height-inner > div > div', '#wrapper').css('min-height', 'auto');
      $('.equal-height-inner > div').equalHeights();

      /* pricing-table equal heigh*/
      $('.equal-height-pricing-table > div', '#wrapper').css('min-height', 'auto');
      $('.equal-height-pricing-table').equalHeights();
      $('.equal-height-pricing-table > div > div', '#wrapper').css('min-height', $('.equal-height-pricing-table > div', '#wrapper').css('min-height'));
    }
    $(window).resize(function() {
      landapp_resizeDivs();
    });

    /* ---------------------------------------------------------------------- */
    /* -------------------------- 37 - Google-map --------------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_showMap(targetmap) {
        var ThemeMascot_googlemap_styles = {
            'default': [],
						
            'style1':  [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"color":"#dddddd"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"color":"#dddddd"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#5D7581"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#979797"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"weight":"0.01"}]}],
                                    
            'style2': [{"featureType": "landscape","stylers": [{"hue": "#007FFF"},{"saturation": 100},{"lightness": 156},{"gamma": 1}]},{"featureType": "road.highway","stylers": [{"hue": "#FF7000"},{"saturation": -83.6},{"lightness": 48.80000000000001},{"gamma": 1}]},{"featureType": "road.arterial","stylers": [{"hue": "#FF7000"},{"saturation": -81.08108108108107},{"lightness": -6.8392156862745},{"gamma": 1}]},{"featureType": "road.local","stylers": [{"hue": "#FF9A00"},{"saturation": 7.692307692307736},{"lightness": 21.411764705882348},{"gamma": 1}]},{"featureType": "water","stylers": [{"hue": "#0093FF"},{"saturation": 16.39999999999999},{"lightness": -6.400000000000006},{"gamma": 1}]},{"featureType": "poi","stylers": [{"hue": "#00FF60"},{"saturation": 17},{"lightness": 44.599999999999994},{"gamma": 1}]}],
            
            'style3': [{stylers: [{ hue: "#00ffe6" },{ saturation: -20 }]},{featureType: "road",elementType: "geometry",stylers: [{ lightness: 100 },{ visibility: "simplified" }]},{featureType: "road",elementType: "labels",stylers: [{ visibility: "off" }]}],
            
            'style4': [{"stylers": [{ "saturation": -100 }]}],
            
            'style5': [{"featureType": "landscape","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 20.4705882352941 },{ "gamma": 1 }]},{"featureType": "road.highway","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 25.59999999999998 },{ "gamma": 1 }]},{"featureType": "road.arterial","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": -22 },{ "gamma": 1 }]},{"featureType": "road.local","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 21.411764705882348 },{ "gamma": 1 }]},{"featureType": "water","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 21.411764705882348 },{ "gamma": 1 }]},{"featureType": "poi","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 4.941176470588232 },{ "gamma": 1 }]}],
            
            'style6': [{"featureType": "landscape","stylers": [{ "hue": "#FF0300"  },{ "saturation": -100 },{ "lightness": 20.4705882352941 },{ "gamma": 1 }]},{"featureType": "road.highway","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 25.59999999999998 },{ "gamma": 1 }]},{"featureType": "road.arterial","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": -22 },{ "gamma": 1 }]},{"featureType": "road.local","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 21.411764705882348 },{ "gamma": 1 }]},{"featureType": "water","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 21.411764705882348 },{ "gamma": 1 }]},{"featureType": "poi","stylers": [{ "hue": "#FF0300" },{ "saturation": -100 },{ "lightness": 4.941176470588232 },{ "gamma": 1 }]}],
            
            'style7': [{"featureType":"landscape","stylers":[{ "invert_lightness": true },{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}],
						
            'style8':  [{"featureType": "landscape","stylers": [{"hue": "#FFA800"},{"saturation": 17.799999999999997},{"lightness": 152.20000000000002},{"gamma": 1}]},{"featureType": "road.highway","stylers": [{"hue": "#007FFF"},{"saturation": -77.41935483870967},{"lightness": 47.19999999999999},{"gamma": 1}]},{"featureType": "road.arterial","stylers": [{"hue": "#FBFF00"},{"saturation": -78},{"lightness": 39.19999999999999},{"gamma": 1}]},{"featureType": "road.local","stylers": [{"hue": "#00FFFD"},{"saturation": 0},{"lightness": 0},{"gamma": 1}]},{"featureType": "water","stylers": [{"hue": "#007FFF"},{"saturation": -77.41935483870967},{"lightness": -14.599999999999994},{"gamma": 1}]},{"featureType": "poi","stylers": [{"hue": "#007FFF"},{"saturation": -77.41935483870967},{"lightness": 42.79999999999998},{"gamma": 1}]}],
            
            'style9':  [{"featureType": "water","elementType": "geometry.fill","stylers": [{"color": "#A3C6FE"}]}, {"featureType": "transit","stylers": [{"color": "#b3C6FE"}, {"visibility": "off"}]}, {"featureType": "road.highway","elementType": "geometry.stroke","stylers": [{"visibility": "on"}, {"color": "#EBCE7B"}]}, {"featureType": "road.highway","elementType": "geometry.fill","stylers": [{"color": "#ffffff"}]}, {"featureType": "road.local","elementType": "geometry.fill","stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"weight": 1.8}]}, {"featureType": "road.local","elementType": "geometry.stroke","stylers": [{"color": "#d7d7d7"}]}, {"featureType": "poi","elementType": "geometry.fill","stylers": [{"visibility": "on"}, {"color": "#ebebeb"}]}, {"featureType": "administrative","elementType": "geometry","stylers": [{"color": "#a7a7a7"}]}, {"featureType": "road.arterial","elementType": "geometry.fill","stylers": [{"color": "#ffffff"}]}, {"featureType": "road.arterial","elementType": "geometry.fill","stylers": [{"color": "#ffffff"}]}, {"featureType": "landscape","elementType": "geometry.fill","stylers": [{"visibility": "on"}, {"color": "#E9E5DC"}]}, {"featureType": "road","elementType": "labels.text.fill","stylers": [{"color": "#696969"}]}, {"featureType": "administrative","elementType": "labels.text.fill","stylers": [{"visibility": "on"}, {"color": "#737373"}]}, {"featureType": "poi","elementType": "labels.icon","stylers": [{"visibility": "off"}]}, {"featureType": "poi","elementType": "labels","stylers": [{"visibility": "off"}]}, {"featureType": "road.arterial","elementType": "geometry.stroke","stylers": [{"color": "#d6d6d6"}]}, {"featureType": "road","elementType": "labels.icon","stylers": [{"visibility": "off"}]}, {}, {"featureType": "poi","elementType": "geometry.fill","stylers": [{"color": "#dadada"}]
            }]
        };

        /*var latlng = $(targetmap).data("latlong");
        if (latlng!=='') {
            var latlng_array = latlng.split(',');
            var lat = latlng_array[0];
            var lng = latlng_array[1];
            var latlng = new google.maps.LatLng(lat, lng);
        } else {
            var latlng = new google.maps.LatLng(0, 0);
        }*/

				$(targetmap).each(function() {
					var current_item = $(this);
					var map_style = current_item.data("mapstyle");
					var content_string = $(current_item.data("popupstring-id")).html();
					current_item.prettyMaps({
							contentString: content_string,
							address: current_item.data("address"),
							image: current_item.data("marker"),
							hue: '#333',
							saturation: -100,
							zoom: current_item.data("zoom"),
							//center: latlng,
							draggable: true,
							panControl: false,
							zoomControl: true,
							mapTypeControl: false,
							scaleControl: false,
							streetViewControl: true,
							overviewMapControl: false,
							scrollwheel: false,
							styles: ThemeMascot_googlemap_styles[map_style]
					});
				});
    }
		//auto loaded maps:
		thememascot_showMap('.map-canvas');


    /* ---------------------------------------------------------------------- */
    /* ----------------------- 38 - toggle Google map ----------------------- */
    /* ---------------------------------------------------------------------- */
    function thememascot_toggleMap() {
        $(document).on('click', '.toggle-map', function(e) {
            $(this).toggleClass('open');
            var targetmap = $(this).data("targetmap");
            $(targetmap).slideToggle(300, function() {
                thememascot_showMap(targetmap);
                if ($(targetmap).is(":visible")) {
                    setTimeout(function() {
                        $("html, body").animate({
                            scrollTop: $(".toggle-map").offset().top - 70
                        }, "slow", "easeInBack");
                    }, 300);
                }
            });
            return false;
        });

        $(document).on('click', '.btn-show-map', function(e) {
            $(this).addClass('fadeOut').animate({
                opacity: 0
            }, 500, function() {
                thememascot_showMap($(this).data("targetmap"));
            });
            return false;
        });
    }


    /* ---------------------------------------------------------------------- */
    /* ---------------------------- 39 - timeline --------------------------- */
    /* ---------------------------------------------------------------------- */
    var timelineBlocks = $('.cd-timeline-block'),
        offset = 0.8;

    //hide timeline blocks which are outside the viewport
    hideBlocks(timelineBlocks, offset);

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        (!window.requestAnimationFrame)  ? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100) : window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
    });

    function hideBlocks(blocks, offset) {
        blocks.each(function(){
						var current_item = $(this);
            ( current_item.offset().top > $(window).scrollTop()+$(window).height()*offset ) && current_item.find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
        });
    }

    function showBlocks(blocks, offset) {
        blocks.each(function(){
						var current_item = $(this);
            ( current_item.offset().top <= $(window).scrollTop()+$(window).height()*offset && current_item.find('.cd-timeline-img').hasClass('is-hidden') ) && current_item.find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        });
    }
		
    $(document).on('click', '.schedule-tab .cd-timeline-content .timeline-title', function (e) {
					var current_item = $(this);
          current_item.next('p').slideToggle(400);
          current_item.children('span').children('i').toggleClass('fa-minus-square-o').toggleClass('fa-plus-square-o');
          return false;
    });
		
    $(document).on('click', '.table-schedule .toggle-content', function (e) {
					var current_item = $(this);
          current_item.next('p.session-details').slideToggle(400);
          current_item.children('i').toggleClass('fa-minus-square-o').toggleClass('fa-plus-square-o');
          return false;
    });


})(jQuery);