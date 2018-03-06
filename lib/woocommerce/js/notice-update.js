jQuery(document).on( 'click', '.langenstein-farms-woocommerce-notice .notice-dismiss', function() {

	jQuery.ajax({
	    url: ajaxurl,
	    data: {
	        action: 'langenstein_farms_dismiss_woocommerce_notice'
	    }
	});

});
