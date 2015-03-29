jQuery(function($) {

	//Ajax contact
	var form = $('.contact-form');
		form.submit(function () {
			$this = $(this);
			$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});

	//Goto Top
	$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.gototop').fadeIn();
		} else {
			$('.gototop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.gototop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
	//End goto top		

});