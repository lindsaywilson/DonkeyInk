
jQuery(document).ready(function($) {

	
	// Open external links in a new window
	$('a[rel*=external]').click(function(){
		window.open($(this).attr('href'));
		return false; 
	});


})

