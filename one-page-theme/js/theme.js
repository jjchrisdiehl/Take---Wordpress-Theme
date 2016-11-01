/**
 * Custom theme styles
 */

( function( $ ) {
	
	jQuery("nav a").click(function() {
		var link = $(this).attr('href');
	    $('html, body').animate({
	        scrollTop: $(link).offset().top
	    }, 600);
	});	

} )( jQuery );

/**
* Mobile Grid
*/
//Needs to replace container-fluid with container
//Needs to

jQuery(document).ready(myFunction);
jQuery(window).on('resize', myFunction); 

	function myFunction(){

    var viewportWidth = jQuery(window).width();
    if (viewportWidth < 769) {
         jQuery('#start div .container-fluid').removeClass('container-fluid box-grid').addClass('container box-grid-mobile');
    } else {
    	 jQuery('#start > div > div.container.box-grid-mobile').removeClass('container box-grid-mobile').addClass('container-fluid box-grid');
	}
};

jQuery(document).ready(boxFunction);
jQuery(window).on('resize', boxFunction); 

	function boxFunction(){
	var viewportWidth = jQuery(window).width();
	if (viewportWidth < 769) {
		jQuery('.grid-box-wrap-two').removeClass('grid-box-wrap-two').addClass('grid-box-wrap');
	}else{
		jQuery('div.wide').removeClass('grid-box-wrap').addClass('grid-box-wrap-two');
	}
};
//jQuery( "#brand-name" ).click(function() {
  //jQuery( "#menu-primary" ).toggle( "slow");
//});
//jQuery(function () {
//	jQuery('#brand-name').hover(function (event) {
//		event.preventDefault();
//		var target = jQuery(this).attr('href');
//		jQuery(target).toggleClass('hidden show', 5000, 'easeOutBounce');
//	});
//});

