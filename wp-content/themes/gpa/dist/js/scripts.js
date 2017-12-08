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

	// $( ".widget-area .menu-item-has-children a" ).click(function() {
	// 	event.preventDefault();
	//   $(this).next('ul').slideToggle();
	// });

	// setTimeout(function() {
 //        $(".hero-top-left .gpa-grid-item-overlay").show('blind', {}, 500)
 //  }, 5000);


})( jQuery );
