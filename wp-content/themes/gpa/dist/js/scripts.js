(function (window, document, undefined) {
  
  
})(window, document);


(function($) {

	$('.flexslider').flexslider({
    animation: "fade",
    controlNav: true, 
    manualControls: ".flex-control-nav li a",              
		directionNav: false             
  });

	$('.news-carousel').owlCarousel({
	    loop:true,
	    margin:30,
	    nav:true,
	    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
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

	$('[data-toggle="tooltip"]').tooltip();

	$(document).ready(function() {
	   loop()
	}) 

	function loop() {
		$('.hero-top-left .gpa-grid-item-overlay').delay(3000).animate({opacity:1.0},200);
		$('.hero-top-left .gpa-grid-item-overlay').delay(5000).animate({opacity:0},200);
		$('.hero-bottom-left .gpa-grid-item-overlay').delay(9000).animate({opacity:1.0},200);
		$('.hero-bottom-left .gpa-grid-item-overlay').delay(5000).animate({opacity:0},200);
		// Each Animation = 10000
		window.setTimeout(function() { loop() }, 20000)
	}



	// $( ".widget-area .menu-item-has-children a" ).click(function() {
	// 	event.preventDefault();
	//   $(this).next('ul').slideToggle();
	// });


})( jQuery );
