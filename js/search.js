jQuery(function() {
	jQuery('#submit-top').hover(
    function(){
		jQuery('.about-search-top').addClass('search-open');
		jQuery("#search-field").width(400);
	},
    function(){    		
           
	});
});