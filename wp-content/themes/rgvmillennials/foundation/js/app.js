// Initialize Sidebars
(function($) {
$(document).ready(function() {

	$.slidebars({
		siteClose: true,
		disableOver: 767,
		hideControlClasses: true,
		scrollLock: false
	});

	$('.flexslider').flexslider({
		animation: "slide",
		smoothHeight: true,
		start: function(slider){
			$('body').removeClass('loading');
		}
	});

});
}) (jQuery);