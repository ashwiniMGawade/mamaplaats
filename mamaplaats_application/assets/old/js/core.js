var Messaging = {
	init: function($) {
		if ($('.ajax-typeahead').length) {
			this.autocomplete($);
		}
	},
	autocomplete: function($) {
		$('.ajax-typeahead').typeahead({
			items: 10,
			minLength: 3,
			source: function(query, process) {
				return $.ajax({
					url: $(this)[0].$element[0].dataset.link,
					type: 'get',
					data: {query: query},
					dataType: 'json',
					success: function(json) {
						return typeof json.options == 'undefined' ? false : process(json.options);
					}
				});
			}
		});
	}
};

var Profile = {

	init: function() {
		var newsletter_input = jQuery('input[name="newsletter"]');
		var is_pregnant_input = jQuery('#is_pregnant');
		var is_pregnant_field = jQuery('#is_pregnant_field');

		if (newsletter_input.length)
		{
			this.newsletter_toggle(newsletter_input);
			this.newsletter_switch(newsletter_input);
		}

		if (is_pregnant_input.length)
		{
			this.is_pregnant_toggle(is_pregnant_input, is_pregnant_field);
			this.is_pregnant_switch(is_pregnant_input, is_pregnant_field);
			this.is_pregnant_switch_default(is_pregnant_input, is_pregnant_field);
		}
	},

	newsletter_switch: function(input) {
		var self = this;
		input.on('change', function() {
			self.newsletter_toggle(jQuery(this));
		});
	},

	newsletter_toggle: function(input) {
		var value = input.val();
		var toggle_field = jQuery('.display_newsletter_groups');
		if (value == 1) {
			toggle_field.show();
		} else {
			toggle_field.hide();
		}
	},

	is_pregnant_switch_default: function(input, field) {
		if (field.find('input').val().length)
		{
			input.val(1);
			field.show();
		}
	},

	is_pregnant_switch: function(input, field) {
		var self = this;
		input.on('change', function() {
			self.is_pregnant_toggle(input, field);
		});
	},

	is_pregnant_toggle: function(input, field) {
		var value = input.val();
		if (value == 1) {
			field.show();
		} else {
			field.hide();
		}
	}
};

var Datepicker = {

	init: function() {
		var input = jQuery('input.datepicker_db');
		this.build_the_nl_locale();
		this.load_db_datepicker(input);
	},

	build_the_nl_locale: function() {
		if (jQuery.fn.datepicker.dates !== undefined)
		{
			jQuery.fn.datepicker.dates['nl'] = {
				days: ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag", "Zondag"],
				daysShort: ["Zon", "Maa", "Din", "Woe", "Don", "Vrij", "Zat", "Zon"],
				daysMin: ["Zo", "Ma", "Di", "Wo", "Do", "Vr", "Za", "Zo"],
				months: ["Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December"],
				monthsShort: ["Jan", "Feb", "Maa", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec"],
				today: "Vandaag"
			};
		}
	},

	load_db_datepicker: function(input) {
		input.datepicker({
			format: 'yyyy-mm-dd',
			language: 'nl'
		});
	}
};

var Notification = {

	notification_timer: false,
	init: function($) {
		if ($.pnotify) {
			this.responder($);
		}
	},
	responder: function($) {

		var self = this;

		$.ajax({url: "/gebruiker/notification/responder", dataType: "json"}).done(function (data) {

			if (data.success) {
				$.pnotify.defaults.history = false;

				$(data.messages).each(function(index, val) {
					var icontype = val.msg_icon;

					$.pnotify({
						title: false,
						text: val.msg_body,
						addclass: 'notification-msg',
						icon: icontype,
						width: '375px'
					});
				});

				if (data.message_switch == true) {
					$('.notification-msg').show();
				}

				if (self.notification_timer === false) {
					self.notification_timer = setInterval(function(){ self.responder($); }, 60000);
				}
			}
		});
	}
};

var Follow = {
	init: function($) {
		var self = this;

		$('.toggle_follow').on('click', function() {
			self.toggle_follow($(this));
		});
	},
	toggle_follow: function(item) {
		var following_id = item.attr('data-following-id');
		jQuery.get('/gebruiker/wijzig_volgen/' + following_id, function(data) {
			if (data.is_following) {
				item.text('Word Gevolgd');
				item.addClass('active');
			} else {
				item.text('Volgen');
				item._removeClass('active');
			}
		}, 'json')
	}
};

jQuery(document).ready(function($) {
	Datepicker.init($);
	Follow.init($);
	Messaging.init($);
	Profile.init();
	Notification.init($);
});