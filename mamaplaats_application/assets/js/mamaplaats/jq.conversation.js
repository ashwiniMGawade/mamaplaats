var Conversation = {

	init: function() {
		var self = this;
		var submit_delay;

		$('#user_search').on('keyup', 'input', function () {
			var term = $(this).val();

			clearTimeout(submit_delay);
			submit_delay = setTimeout(function() {
				self.get_user_by_term(term);
			}, 300);
		})
	},

	get_user_by_term: function (term) {
		if (term.length > 2) {
			$.ajax({
				url: '/user/predictive-search',
				data: {'term': term},
				dataType: 'json'
			}).done(function(data) {
				var html = '';
				$(data).each(function(i, e) {
					var id = e.id;
					var name = e.full_name;
					html += '<li><a data-recipient="' + name + '" data-recipient_id="' + id + '" onclick="Conversation.set_recipient(this)">' + name + '</a></li>';
				});

				if (html == '') {
					html = '<li>We hebben geen moeders kunnen vinden met deze informatie</li>';
				}

				$('#result').html('<strong>Selecteer &eacute;&eacute;n van de onderstaande moeders</strong><ul>' + html + '</ul>');
			});
		}

		$('#result').html('');
	},

	set_recipient: function (recipient) {

		var recipient_name = recipient.getAttribute('data-recipient');
		var recipient_id =  recipient.getAttribute('data-recipient_id');
		var recipient_id_field = document.getElementById('recipient_id');

		$('#recipient').val(recipient_name);
		$('#result').html('');

		recipient_id_field.value = recipient_id;
	}
};

$(function(){
	Conversation.init();
});