$(document).ready(function(){
	Awidth = $('aside').css('width');
	$('aside iframe').css({
		'width' : parseInt(Awidth)+'px',
		'height' : ((parseInt(Awidth) * 56.4) / 100)
	});
});