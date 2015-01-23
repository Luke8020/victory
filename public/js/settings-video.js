(function($) {
	"use strict";

	$(document).ready(function() {

		// Top Menu Animation
		
		$(window).scroll(function(){
			if ($(this).scrollTop() > 10) {
				$('.navbar').css('top', '0');
			} else {
				$('.navbar').css('top', '-66px');
			}
		});

		// ====================================================================

		// Home Slide Height

		$('#home').css({'height': (($(window).height()-0))+'px'});
		$(window).resize(function(){
			$('#home').css({'height': (($(window).height()-0))+'px'});
		});
		
		// ====================================================================

		// Smooth Scroll on Menu Click

		$('.navbar-nav a[href^=#], .welcome a').on("click",function(){
			var t= $(this.hash);
			var t=t.length&&t||$('[name='+this.hash.slice(1)+']');
			if(t.length){
				var tOffset=t.offset().top;
				$('html,body').animate({scrollTop:tOffset},'slow');
				return false;
			}
		});

		// ====================================================================

		// Owl Carousel

		$("#about .owl-carousel").owlCarousel({
			items: 4,
			slideSpeed: 800
		});

		$("#testimonials .owl-carousel").owlCarousel({
			singleItem: true,
			navigation: false,
			pagination: false,
			slideSpeed: 800,
			autoHeight: true,
			autoPlay: 5000
		});

		$("#blog .owl-carousel").owlCarousel({
			items: 2,
			itemsDesktop: 2,
			itemsDesktopSmall: 2,
			itemsTablet: 1,
			navigation: false,
			pagination: true,
			slideSpeed: 800,
			autoHeight: true
		});

		// ====================================================================

		// Fancybox

		$('.fancybox').fancybox({
			openEffect: 'none'
		});

		// ====================================================================

		// Scrolly

		$('.parallax').scrolly();

		// ====================================================================

		// Models Filter

		$('.models').mixitup();

	})

})(jQuery);

