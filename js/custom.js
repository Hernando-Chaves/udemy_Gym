(function($){
	var label = $('.menu-tipo-clase a:first');
	
	label.addClass('active');
	$('.menu-tipo-clase a').on('click',function(){
		$('article > div').addClass('d-none');
		var enlace = $(this).attr('href');
		$(enlace).removeClass('d-none').fadeIn();

		$('.menu-tipo-clase a').removeClass('active');
		$(this).addClass('active');
		return false;

	});
	$('.todos').on('click',function(){
		$('#post-1468 > div').removeClass('d-none').show();
	});



})(jQuery);