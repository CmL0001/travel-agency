jQuery(function($){
	$('#login h1, #login form').wrapAll('<div class="group"></div>');
	
	$('body').vegas({
		slides: [
			{ src : login_images.theme_path + "1.jpg" },
			{ src : login_images.theme_path + "2.jpg" },
			{ src : login_images.theme_path + "3.jpg" },
		],
		overlay: login_images.theme_path + 'overlays/05.png',
		transition: ['fade', 'zoomOut', 'swirlLeft']
	})
});