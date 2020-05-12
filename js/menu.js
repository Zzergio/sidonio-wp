jQuery(document).ready(function(){

// Menu

jQuery('.menu-icon').click(function(){
    jQuery('.nav').toggleClass('menu-state-open');
    jQuery('.menu-icon').toggleClass('white');
    jQuery('.menu-icon').toggleClass('burger');
    });

jQuery('.nav li a').click(function(e){
    e.stopPropagation();
    jQuery('.nav').toggleClass('menu-state-open');
    jQuery('.menu-icon').toggleClass('burger');
    });

});