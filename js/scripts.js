jQuery(document).ready(function(){

// Menu

jQuery('.menu-icon').click(function(){
    jQuery('.nav').toggleClass('menu-state-open');
    jQuery('.menu-icon').toggleClass('white');
    jQuery('.menu-icon').toggleClass('burger');
    });

// Toggle

jQuery('.toggle').click(function(e){
	e.preventDefault();
    jQuery(this).next('.show').toggleClass('show-active');
    jQuery(this).toggleClass('toggle-open');
    });

// FAQ Toggle

jQuery('.faq-toggle').click(function(e){
	e.preventDefault();
    jQuery(this).next('.faq-show').toggleClass('faq-show-active');
    jQuery(this).toggleClass('faq-toggle-open');
    });


});