$(document).ready(function(){
	/*
	* @brief : animate the index header background into paralax effect
	* @var : top = the scroll bar top position
	* @var : wHeight = the curent user window height
	*/
	var top = 0,
	wHeight = $(window).innerHeight();
	$(window).scroll(function(){
		top = $(this).scrollTop();
		if (top <= wHeight)
			$('#home').css('background-position-y', -(top/8));
	});

	/*
	* @brief : animate the footer svg on hover
	* @var : top = the scroll bar top position
	* @var : wHeight = the curent user window height
	*/
	$('.toTop').on('click', function(){
		if ($(this).data('poz') == 'footer')
			$('body').animate({'scrollTop': 0}, 'slow');
		else
			$('body').animate({'scrollTop': $('#about').offset().top}, 'slow');
		console.log(wHeight)
	});


});