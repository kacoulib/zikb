$(document).ready(function(){
	var top = 0,
	Wheight = $(window).innerHeight();
	$(window).scroll(function(){
		top = $(this).scrollTop();
		if (top <= Wheight)
			$('#home').css('background-position-y', -(top/8));
		console.log(top);
	});
});