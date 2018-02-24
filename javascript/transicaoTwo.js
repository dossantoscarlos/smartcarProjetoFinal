$(function(){   
	var div = $('#menuHeader');   
	$(window).scroll(function () { 
		if ($(this).scrollTop() > 150) { 
			div.addClass("menu-fixo"); 
		} else { 
			div.removeClass("menu-fixo"); 
		} 
	});  
});