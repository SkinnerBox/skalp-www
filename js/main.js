jQuery(function($) {
	$(document).ready(function() {
		$('.carousel').carousel();
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