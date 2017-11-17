(function (window, document, undefined) {
  
  
})(window, document);


(function($) {

	$('.flexslider').flexslider({
    animation: "fade",
    controlNav: true,               
		directionNav: false             
  });

	$('.news-carousel').owlCarousel({
	    loop:true,
	    margin:30,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:3
	        }
	    }
	})

})( jQuery );
