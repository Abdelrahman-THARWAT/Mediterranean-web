$(document).ready(function(){
	"use strict";

	// Full Screen Search
    $('.search-trigger').on('click', function (e) {
        e.preventDefault();
        $('.search-wrap').animate({ opacity: 'toggle' }, 500);
        $('.nav-search, #search-close').addClass("open");
    });
    $('.search-close').on('click', function (e) {
        e.preventDefault();
        $('.search-wrap').animate({ opacity: 'toggle' }, 500);
        $('.nav-search, #search-close').removeClass("open");
    });
    function closeSearch() {
        $('.search-wrap').fadeOut(200);
        $('.nav-search, #search-close').removeClass("open");
    }
    $(document.body).on('click', function (e) {
        closeSearch();
    });
    $(".search-trigger, .main-search-input").on('click', function (e) {
        e.stopPropagation();
    });

	// Mobile Menu
	$('nav#dropdown').meanmenu({
		meanScreenWidth: "767"
	});

	/***** WOW Js *****/
	new WOW().init();

	// Owl Slider
	$(".slider-wrapper").owlCarousel({
		autoplay: true,
    	autoplayTimeout: 5000,
    	animateOut: 'fadeOut',
        animateIn: 'fadeIn',
    	autoplayHoverPause:true,
    	smartSpeed:700,
		loop: true,
		responsiveClass: true,
		items : 1,
		nav : true,
		navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
		margin: 0,
		dots: false,
		responsive: {
			0: {
				items: 1
			},
			576: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			}
		}
    });

	$(".slider-wrapper").on('translate.owl.carousel', function() {
        $('.slider-item .slider-heading').removeClass('wow fadeInDown').hide();
        $('.slider-item .slider-para').removeClass('wow fadeInLeft').hide();
        $('.slider-item .slider-btn').removeClass('wow fadeInUp').hide();
    });

    $(".slider-wrapper").on('translated.owl.carousel', function() {
        $('.owl-item.active .slider-item .slider-heading').addClass('animated fadeInDown').show();
        $('.owl-item.active .slider-item .slider-para').addClass('animated fadeInLeft').show();
        $('.owl-item.active .slider-item .slider-btn').addClass('animated fadeInUp').show();
    });

	$(".testimonial-slider").owlCarousel({
		autoplay:true,
    	autoplayTimeout:4000,
    	autoplayHoverPause:true,
    	smartSpeed:500,
		loop: true,
		items : 3,
		margin: 30,
		responsiveClass: true,
		dots: true,
		nav : false,
		responsive: {
			0: {
				items: 1
			},
			480: {
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

	$(".project-box2").owlCarousel({
		autoplay:false,
    	autoplayTimeout:4000,
    	autoplayHoverPause:true,
    	smartSpeed:500,
		loop: true,
		items : 4,
		margin: 0,
		responsiveClass: true,
		dots: false,
		nav : false,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			}
		}
    });

	$(".rel-slider").owlCarousel({
		autoplay:false,
    	autoplayTimeout:4000,
    	autoplayHoverPause:true,
    	smartSpeed:500,
		loop: true,
		items : 4,
		margin: 30,
		responsiveClass: true,
		dots: false,
		nav : false,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			768: {
				items: 3
			},
			992: {
				items: 4
			}
		}
    });

	// Sidebar
	$('a.side-bar').on('click', function(e){
	    e.preventDefault();
	    $('.sidebar-overlay').addClass('visible');
	    $('.sidebar-body').addClass('open');
	});
	$('.close-sidebar, .sidebar-overlay').on('click', function(e){
	    e.preventDefault();
	    $('.sidebar-overlay').removeClass('visible');
	    $('.sidebar-body').removeClass('open');
	});

	// Magnific-popup
	$('.project-item').magnificPopup({
		delegate: '.layer-box a',
		type: 'image',
		gallery: {
			// options for gallery
			enabled: true
		},
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});

	// Smooth Scroll
	smoothScroll.init({
		speed: 700
	});

	// Counter Up
	$('.counter').counterUp({
		delay: 10,
		time: 2000
	});

	// Magnific-popup
	$('#video-btn').magnificPopup({
		type: 'iframe',
		iframe: {
			markup: '<div class="mfp-iframe-scaler">' +
					'<div class="mfp-close"></div>' +
					'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
				  '</div>',
			patterns: {
				youtube: {
					index: 'youtube.com/',
					id: 'v=',
					src: 'http://www.youtube.com/embed/%id%?autoplay=1'
				}
			},
			srcAction: 'iframe_src'
		}
	});

	$('.grid-item').magnificPopup({
		delegate: '.layer-box a',
		type: 'image',
		gallery: {
			// options for gallery
			enabled: true
		},
		removalDelay: 300,
		mainClass: 'mfp-fade'
	});

	// Isotope Gallery
	$(window).on('load', function(){
		$(".project-items").isotope({
			itemSelector:'.grid-item',
			percentPosition:true,
			masonry:{
				columnWidth:'.grid-item'
			},
		});
		$(".filter-menu a").on("click",function(){
			$(".filter-menu a").removeClass("active");
			$(this).addClass("active");
			var selector=$(this).attr("data-filter");
			$(".project-items").isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: true
				}
			});
			return false;
		});

		//Preloader
		$(".preloader").fadeOut(500);
	});

	// Syotimer
	$('#timer-wrapper').syotimer({
		year: 2020,
		month: 11,
		day: 1,
		hour: 7,
		minute: 30
	});

	// Back To Top
	$(window).scroll(function(){
        if ($(this).scrollTop() > 1200) {
            $('.backtotop').css({'bottom':'7%', 'opacity':'1','transition':'all .5s ease'});
        } else {
            $('.backtotop').css({'bottom':'-30%', 'opacity':'0','transition':'all .5s ease'})
        }
    });
	$('.backtotop').on('click', function() {
		$('html, body').animate({
			scrollTop : 0
		}, 700);
        return false;
	});
});
