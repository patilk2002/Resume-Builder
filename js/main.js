(function($) {
	'use strict';

	/*PRELOADER JS
	$(window).on('load', function() { 
		$('.loader').fadeOut();
		$('.preloader').delay(350).fadeOut('slow'); 
	}); 
END PRELOADER JS*/
		
	/* magnificPopup video view */
	$('.popup-video').magnificPopup({
		type: 'iframe'
	});	
	
	/* magnificPopup img view */
	$('.popup-link').magnificPopup({
		type: 'image',
		gallery: {
		  enabled: true
		}
	});	

	$(window).on('scroll',function() {
		
		  if ($(this).scrollTop() > 100) {
			$('#header').addClass('menu-shrink');
		  } else {
			$('#header').removeClass('menu-shrink');
		  }
		});
		
		$('a').on('click', function(e){
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - 50
			}, 1500);
			e.preventDefault();
		});
			
		$(document).on('click','.navbar-collapse.in',function(e) {
		if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
			$(this).collapse('hide');
		}
		});		
			
	new WOW().init();
	// Main slider
	$('.slider_active').owlCarousel({
		loop:true,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		animateIn: 'fadeIn',
		animateOut: 'fadeOut',
		smartSpeed:450,
		autoplay:true,
		autoplayTimeout:60000,
		mouseDrag:false,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})	
	// blog slider
	$('#blog_slider').owlCarousel({
		autoplay:true,
		items: 3,
		margin: 30,
		loop:true,
		nav:false,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:3
			}
		}
	})
	// testimonial slider
	$('#testimonial-slider').owlCarousel({
	autoplay:true,
	items: 1,
	margin: 30,
	autoplayTimeout:2000,
	mouseDrag:true,
	loop:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:1
		}
	}
	})
	// client slider 
	$('.client_slide_area').owlCarousel({
	autoplay:true,
	margin: 50,
	loop:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:3
		},
		1000:{
			items:5
		}
	}
	})
	// Counter 
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	// jQuery MixItUp
	$('.portfolio_item').mixItUp();
	 // Vide Section
	$("#video").simplePlayer();	
   
	/* Hover 3d init for tilt  */
	if ($('.portfolio_item .mix').length > 0) {
		$('.portfolio_item .mix').tilt({
			maxTilt: 20,
			perspective: 1000,
			easing: "cubic-bezier(.03,.2,.5,.4)",
			scale: 1,
			speed: 500,
			transition: true,
		});
	}		
	
	/* scrollUp */
	$.scrollUp({
		scrollName: 'scrollUp', // Element ID
		topDistance: '300', // Distance from top before showing element (px)
		topSpeed: 300, // Speed back to top (ms)
		animation: 'fade', // Fade, slide, none
		animationInSpeed: 1000, // Animation in speed (ms)
		animationOutSpeed: 1000, // Animation out speed (ms)
		scrollText: 'UP', // Text for element
	});		
	// Active  WOW
	new WOW().init();

})(jQuery);	
