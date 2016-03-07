var RatingsView = function(ratings) {
	var self = this;

	self.ratings = ko.observableArray(ko.utils.arrayFilter(ratings, function(ratings) {
		return {
			id: ratings.id,
			rating_title: ratings.question
		};
	}));

	self.addRating = function() {
		self.ratings.push({
			id: "",
			rating_title: ""
		});
	};

	self.removeRating = function(rating) {
		self.ratings.remove(rating);
	};
};


ko.applyBindings(new RatingsView(initial_ratings), $('#product_ratings')[0]);