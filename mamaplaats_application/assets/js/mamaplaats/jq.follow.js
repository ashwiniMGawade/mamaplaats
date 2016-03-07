
follow = {
	init: function() {
		var self = this;
		self.check_follow_buttons();

		$('.btn.follow').on('click', function () {
			self.toggle_follow_button($(this));

			return false;
		});
	},

	check_follow_buttons: function() {
		var self = this;

		$('.follow.check_follow').each(function() {
			var button = $(this);
			var follow_id = button.data('follow-id');

			$.get('/api/follow/is_following?user_id=' + follow_id, function(data) {
				self.set_follow_button(button, data.following);
			}, 'json')
		});
	},

	toggle_follow_button: function(button) {
		var self = this;
		var follow_id = button.data('follow-id');

		jQuery.get('/api/follow/follow?user_id=' + follow_id, function(data) {

			if (data.error == 'not-logged-in') {
				if (confirm("Je moet ingelogd zijn om iemand te kunnen volgen. Wil je nu inloggen?") == true) {
					window.location = "/user/login";
				}
			}

			self.set_follow_button(button, data.following);
		}, 'json')
	},

	set_follow_button: function(button, following) {
		if (following) {
			button.text('Word Gevolgd');
			button.addClass('grey');
		} else {
			button.text('Volgen');
			button.removeClass('grey');
		}
	}
};

$(function(){
	follow.init();
});
