var Coupon = {

	init: function() {
		var self = this;

		// Run show and open offer on init
		self.show_offer_call();
		self.open_offer_call();

		// Listen for hash changes
		$(window).on('hashchange', function() {
			self.show_offer_call();
			self.open_offer_call();
		});

		// When a coupon is clicked, open the urls the other way around
		$('.item:not(.display-coupon) a[data-open-url]').on('click', function() {
			window.open($(this).data("open-url"), '_blank');
			window.location = $(this).attr('href');

			return false;
		});
	},

	show_offer_call: function () {
		var self = this;
		var hash = window.location.hash;

		if (hash.substring(0, 11) == '#show_offer') {
			var offer_id = hash.substring(12);
			self.highlight_offer('#offer_' + offer_id);
			self.scroll_to_offer('#offer_' + offer_id)
		}
	},

	open_offer_call: function () {
		var self = this;
		var hash = window.location.hash;

		if (hash.substring(0, 11) == '#open_offer') {
			var open_offer_id = hash.substring(12);
			self.highlight_offer('#offer_' + open_offer_id, true);
			self.scroll_to_offer('#offer_' + open_offer_id);
			self.open_offer_in_lightbox('#offer_' + open_offer_id);
		}
	},

	scroll_to_offer: function(target) {
		var element = $(target);
		var viewport_height = jQuery(window).height();
		var element_height = element.height();
		var element_offset = element.offset();

		var position = element_offset.top + (element_height/2) - (viewport_height/2);

		$('html, body').animate({ scrollTop: position}, 'fast');
	},

	highlight_offer: function(target, show_code) {
		$('.pickup-coupon').removeClass('pickup-coupon');
		$('.display-coupon').removeClass('display-coupon');

		$(target).addClass('pickup-coupon');

		if (show_code === true) {
			$(target).addClass('display-coupon');
		}
	},

	open_offer_in_lightbox: function (target) {

		var info = $(target).find('.lightbox-info');
		var image = info.data('image');
		var title = info.data('title');
		var start = info.data('start');
		var end = info.data('end');
		var coupon = info.data('coupon');
		var url = info.data('url');
		var shop = info.data('shop');

		var lightbox_template = '<div class="light-box-overlay">' +
			'<div class="light-box">' +
				'<a class="btn-close" href="#">Close</a>' +
				'<div class="heading-box">' +
					'<img class="photo" alt="image description" src="' + image + '" width="98" height="90">' +
					'<div class="description">' +
						'<p>Toegevoegd op ' + start + ' <span class="sep">|</span> Verloopt op ' + end + '</p>' +
						'<h2>' + title + '</h2>' +
					'</div>' +
				'</div>' +
				'<form action="#">' +
					'<div class="code">' +
						'<div class="form-item">' +
							'<input onclick="this.select();" type="text" value="' + coupon + '">' +
						'</div>' +
						'</div>' +
				'</form>' +
				'<a target="_blank" class="link" href="' + url + '">Open ' + shop + '</a>' +
			'</div>' +
		'</div>';

		var lightbox_wrap = $(lightbox_template);
		var lightbox = lightbox_wrap.find('.light-box');
		var	lightbox_close = lightbox_wrap.find('.btn-close');

		lightbox_wrap.appendTo('body');

		lightbox_wrap.on('click', function(e) {
			// Only remove when clicking on the parent not the children
			if (e.target === this){
				lightbox_wrap.remove();
			}

			// Don't do prevent default here else all children won't work
		});

		lightbox_close.on('click', function(e) {
			lightbox_wrap.remove();
			e.preventDefault();
		});
	}
};

$(function(){
	Coupon.init();
});