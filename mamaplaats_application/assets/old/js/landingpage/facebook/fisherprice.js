/**
 * Default Couponclub object
 *
 * @var object
 */
var FacebookLandingpage = {};

/**
 * Default functions
 *
 * @var object
 */
FacebookLandingpage.Default = {
	/**
	 * Initialize all functions
	 *
	 * @return void
	 */
	init: function() {
		this.formsetup();
	},
	formsetup: function() {
		var validation_element = null;
		jQuery("#facebook_landingpage").validate({
			focusInvalid: false,
			ignoreTitle: false,
			errorElement: "span",
			errorClass: "error",
			validClass: "success",
			rules: {
				"FNAME": {
					required: true,
				},
				"EMAIL": {
					required: true,
					email: true
				}
			},
			errorPlacement: function(error, element) {
				validation_element = element;
				validation_element.closest('.control-group, .fileupload-new').removeClass('success').addClass('error');
				return true;
			},
			success: function(label) {
				validation_element.closest('.control-group, .fileupload-exists').removeClass('error').addClass('success');
				return true;
			}
		});
	}
}

/**
 * On document ready initialization
 *
 * @return void
 */
jQuery(document).ready(function() {
	FacebookLandingpage.Default.init();
});