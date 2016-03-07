var Write_Review = {
	init: function() {
		var self = this;

		self.load_redactor_review($('.redactor_review'));
		self.load_media_upload_on_sections($('[id^="fileupload"]'));

		$('.media-uploads').on('click', '.remove', function () {
			var button = $(this);
			var media_id = button.data('media-id');
			var media_view = button.parent().parent().parent();

			self.delete_media(media_id, media_view);

			event.preventDefault();
		});
	},

	load_redactor_review: function(element) {
		element.redactor({
			formattingTags: ['p', 'h2', 'h3', 'h4', 'h5'],
			allowedTags: ['p', 'a', 'h2', 'h3', 'h4', 'h5', 'hr', 'strong', 'em', 'del', 'ul', 'ol', 'li'],
			buttons: ['formatting',  'bold', 'italic', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'horizontalrule'],
			lang: 'nl',
			minHeight: 200
		});
	},

	load_media_upload_on_sections: function(element) {
		var self = this;

		element.each(function() {
			var file_upload = $(this);
			var review_id = file_upload.data('review-id');
			var section_id = file_upload.data('review-section-id');

			// Load resumable and bind button
			var resumable = self.load_upload(file_upload, '/user/review/' + review_id + '/media?review_section_id=' + section_id);
			file_upload.change(function() {
				resumable.upload();
			});
		});
	},

	load_upload: function(file, url) {
		var self = this;

		var section = file.parent().parent().parent().parent().parent().find('.media-uploads');
		var upload_button = file.parent().parent().find('.jcf-upload-button span');

		var resumable = new Resumable({target: url, testChunks: false});

		resumable.assignBrowse(file);
		resumable.on('fileProgress', function(file) {
			var progress = parseInt(resumable.progress(true) * 100, 10);
			self.set_tag_to_button(upload_button, 'Bezig met uploaden... ' + progress + '%');

			if (progress == 100) {
				self.set_tag_to_button(upload_button, 'Bezig met verwerken...');
			}
		});
		resumable.on('fileSuccess', function(file, message) {
			var media = $.parseJSON(message);
			self.add_media_to_section(media, section);
			self.set_tag_to_button(upload_button, 'Foto & Video Toevoegen');
		});

		return resumable;
	},

	set_tag_to_button: function (button, text) {
		button.text(text);
	},

	add_media_to_section: function(media, section) {
		section.append(
			'<div class="media-group">' +
				'<div class="photo">' +
					'<img alt="' + media.title + '" src="/' + media.path + '" width="132" height="133">' +
				'</div>' +
				'<div class="description">' +
					'<div class="name">' + media.title + '<a class="remove" data-media-id="' + media.id + '" href="#"><i class="glyphicon glyphicon-remove"></i></a></div>' +
						'<div class="form-item">' +
							'<input name="media[' + media.id + '][id]" value="' + media.id + '" type="hidden">' +
							'<input name="media[' + media.id + '][title]" value="' + media.title + '" type="text" placeholder="titel van de foto of video">' +
						'</div>' +
					'<div class="form-item">' +
						'<input name="media[' + media.id + '][description]" value="' + media.description + '" type="text" placeholder="Beschrijving van de foto of video">' +
					'</div>' +
				'</div>' +
			'</div>'
		);
	},

	delete_media: function(media_id, media_view) {
		$.get('/user/review/media/' + media_id + '/delete', function(data) {
			media_view.remove();
		});
	}
};

$(function(){
	Write_Review.init();
});