
// jQuery closure
(function ($) {

	$(document).ready(function(){

		// Mobile/320px main menu
		$('#page-nav-btn').click(function() {
			$('.span2').animate({ height:'toggle'}, 500);
		});

		// For the industry sector page view
		$('.view-industry-sector-taxonomy.view-display-id-page .views-row')
			// Click will show the corresponding indexed block content
			.click(function(e){
				// Get the index of the currently clicked title
				var index = $('.view-industry-sector-taxonomy.view-display-id-page .views-row').removeClass('active').index(e.currentTarget);
				// Hide all descriptions, and show the corresponding indexed description
				$('.view-industry-sector-taxonomy.view-display-id-block_1 .views-row').hide().eq(index).show();
				// Ensure class of active is added
				$(e.currentTarget).addClass('active');
			})
			// We want the first item to be active
			.eq(0).addClass('active');

		// If we have the industry sector block view, hide all elements except the first
		$('.view-industry-sector-taxonomy.view-display-id-block_1 .views-row').hide().eq(0).show();


		// Hookup accordion object
		$('#accordion').accordion({ collapsible: true, active: false });

		// Dynamically center H1
		var heading = $('.not-front h1');
		var banner  = $('.header-image');
		var padding_top = (banner.height() - heading.height()) / 2;
		heading.css("cssText", "padding-top: " + padding_top + "px !important;");

	});

})(jQuery);
