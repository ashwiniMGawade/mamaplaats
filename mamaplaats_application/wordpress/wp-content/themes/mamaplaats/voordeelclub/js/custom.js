/**
 * Default Couponclub object
 *
 * @var object
 */
var Couponclub = {};

/**
 * Default functions
 *
 * @var object
 */
Couponclub.Default = {
	/**
	 * Initialize all functions
	 *
	 * @return void
	 */
	init: function() {
		this.menu();
		this.formsetup();
	},
	menu: function() {
		var active_menu = false;
		jQuery('ul.main-menu li a').each(function() {
			if (jQuery(this).hasClass('submenu')) {
				if (jQuery(jQuery(this))[0].href == String(window.location)) {
					jQuery(this).parent().parent().parent().addClass('active');
					active_menu = true;
				}
			}
			else{
				if (jQuery(jQuery(this))[0].href == String(window.location)) {
					jQuery(this).parent().addClass('active');
					active_menu = true;
				}
			}
		});
		if(!active_menu) {
			jQuery('ul.main-menu li').first().addClass('active');
		}
	},
	formsetup: function() {
		jQuery('#date').daterangepicker({
			changed: true,
			showDropdowns: true,
			format: 'dd-MM-yyyy',
			separator: ' | ',
			locale: {
				applyLabel: 'Ok',
				clearLabel: 'Leegmaken',
				fromLabel: 'Van',
				toLabel: 'Naar',
				daysOfWeek: ['Zo', 'Ma', 'Di', 'Wo', 'Do', 'Fr', 'Za'],
				monthNames: ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'],
				firstDay: 1
			},
		});

		jQuery.validator.addMethod("accept", function(value, element, param) {
			return value.match(new RegExp("." + param + "$"));
		});

		var loader = jQuery('#load_overlay');
		var validation_element = null;
		jQuery("#new-tipwin").validate({
			focusInvalid: false,
			ignoreTitle: false,
			errorElement: "span",
			errorClass: "error",
			validClass: "success",
			rules: {
				"title": {
					required: true,
					minlength: 3,
					maxlength: 70
				},
				"date": {
					required: true
				},
				"link": {
					required: true
				},
				"description": {
					required: true,
					minlength: 3,
					maxlength: 210
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
			},
			submitHandler: function(form) {
				jQuery('input[type=submit]', form).attr('disabled', 'disabled');
				jQuery(form).ajaxSubmit({
					beforeSubmit: function() {
						loader.show();
					},
					success: function(data) {
						if (data.success) {
							jQuery('#new-tipwin').hide();
							jQuery('#form_success').show();
						} else {
							jQuery('#form_error').show().empty();
							jQuery('#form_error').append('<ul></ul>');
							if (data.user !== null) {
								jQuery('#form_error ul').append('<li>' + data.user + '</li>');
							}
							jQuery.each(data.msg, function(k, v) {
								jQuery('#form_error ul').append('<li>' + v + '</li>');
							});
						}
						loader.hide();
					},
					dataType: 'json'
				})
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
	Couponclub.Default.init();
});