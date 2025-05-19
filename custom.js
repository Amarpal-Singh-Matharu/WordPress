    
// -------------- navabr sticky --------- 
$(window).scroll(function () {
	var sticky = $('.sticky'),
		scroll = $(window).scrollTop();

	if (scroll >= 1) sticky.addClass('fixed');
	else sticky.removeClass('fixed');
});

