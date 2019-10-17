'use strict';
$(document).ready(function(){
	$('#nav-icon').click(function(ev){
		ev.stopPropagation();
		$(this).toggleClass('open');
		$(".overlay").toggleClass("open");
		$(".overlay a").toggleClass("open");
	});
	$(".overlayContent a").click(function(ev) {
    	/*$('.list__ul').css('display', 'none');
    	$('.placeholder').css('opacity', '1');*/
    	$('#nav-icon').toggleClass('open');
    	$(this).removeClass("open");
    	$(".overlay").removeClass("open");
		$(".overlay a").removeClass("open");
	});
});