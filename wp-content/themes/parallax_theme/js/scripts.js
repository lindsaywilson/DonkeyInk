
jQuery(document).ready(function($) {

	
	// Open external links in a new window
	$('a[rel*=external]').click(function(){
		window.open($(this).attr('href'));
		return false; 
	});
	
	// Resize
	introText();
	$(window).resize(function() {
		introText();
	});
	
	//Move intro text on mobile screen
	function introText(){
		if($(window).width() <= 700 ){
			if(!$('section#intro-text').length > 0){
				var txt = $('.intro-text').html();
				$('section#portfolio-web-interactive').before('<section id="intro-text"><div class="section-inner clearfix">'+ txt +'</div></div>');
			}
			$('section#intro-text').show();
		} else{
			$('section#intro-text').hide();
		}
	}

	
	// Show/Hide Portfolios
	$('li#menu-item-2445 a, li#menu-item-2446 a, li#menu-item-2447 a').click( function(){
		var portfolio = $(this).attr('href');
		$("section[id^='portfolio']").hide();
		$("section"+portfolio).show();
		$('#main-nav > li').removeClass('current_page_item');
		$('li#menu-item-2225').addClass('current_page_item');
	})


})

