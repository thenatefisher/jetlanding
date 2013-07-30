//= require jquery
//= require jquery_ujs
//= require lib/twitter
//= require flexslider
//= require lib/bootstrap-modal

// smooth scrolling elegantly provided by Hanoo 
// (http://stackoverflow.com/questions/4198041/jquery-smooth-scroll-to-an-anchor)
$(".scroll").click(function(event){
   event.preventDefault();
   //calculate destination place
   var dest=0;
   var offset=50;
   if($(this.hash).offset().top > $(document).height()-$(window).height()-offset){
        dest=$(document).height()-$(window).height()-offset;
   }else{
        dest=$(this.hash).offset().top-offset;
   }
   //go to destination
   $('html,body').animate({scrollTop:dest}, 1000,'swing');
});

// flexslider   
$(function () { 
	if ($(".flexslider").length) {
	    $('.flexslider').flexslider();
	}
});