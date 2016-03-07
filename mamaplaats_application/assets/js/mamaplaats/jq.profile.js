var Profile = {

	init: function() {
		var newsletter_input = $('input[name="newsletter"]');
		if (newsletter_input.length)
		{
			this.newsletter_toggle(newsletter_input);
			this.newsletter_switch(newsletter_input);
		}

		var is_pregnant_input = $('#is_pregnant');
		var is_pregnant_field = $('#pregnancy_date');
		if (is_pregnant_input.length)
		{
			this.field_toggle(is_pregnant_input, is_pregnant_field);
			this.field_switch(is_pregnant_input, is_pregnant_field);
			this.field_switch_default(is_pregnant_input, is_pregnant_field);
		}

		var has_children_input = $('#has_children');
		var has_children_field = $('.children_list');
		if (has_children_input.length)
		{
			this.field_toggle(has_children_input, has_children_field);
			this.field_switch(has_children_input, has_children_field);
			this.field_switch_default(has_children_input, has_children_field);
		}
	},

	newsletter_switch: function(input) {
		var self = this;
		input.on('change', function() {
			self.newsletter_toggle($(this));
		});
	},

	newsletter_toggle: function(input) {
		var value = input.val();
		var toggle_field = $('.display_newsletter_groups');
		if (value == 1) {
			toggle_field.show();
		} else {
			toggle_field.hide();
		}
	},

	field_switch_default: function(input, field) {
		if (field.find('input').val() == 1)
		{
			input.val(1);
			field.show();
		}
	},

	field_switch: function(input, field) {
		var self = this;
		input.on('change', function() {
			self.field_toggle(input, field);
		});
	},

	field_toggle: function(input, field) {
		var value = input.val();
		if (value == 1) {
			field.show();
		} else {
			field.hide();
		}
	}
};

$(function(){
	Profile.init();
});