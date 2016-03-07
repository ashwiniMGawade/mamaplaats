Newsletter = {
	init: function() {
		var self = this;

		// Bind buttons
		$('#newsletter, #newsletter_large, #newsletter_home').submit(function(event) {
            if($("#"+$(this).attr('id')+" input[name=subscribe_newsletter]").is(':checked')){
                self.subscribe($(this));
            }
			event.preventDefault();
		});
	},

	subscribe: function(form) {
		var field = form.find('.field, .field-row');
		var button = form.find('.btn');
		var email = form.find('input');
		var success = form.find('.alert');

		button.button('loading');
		$.post('/api/newsletter/subscribe', {email: email.val()}, function(data) {
			// Send event to google analytics
			_gaq.push(['_trackEvent', 'Newsletter', 'Subscribe', 'Guest Subscription']);

			button.remove();
			field.remove();
			success.removeClass('hidden');
		}, 'json')
	}
};

$(function(){
	Newsletter.init();
});
