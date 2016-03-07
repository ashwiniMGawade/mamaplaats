var SectionsView = function(sections) {
	var self = this;

	self.sections = ko.observableArray(ko.utils.arrayFilter(sections, function(sections) {
		return {
			id: sections.id,
			question: sections.question
		};
	}));

	self.addSection = function() {
		self.sections.push({
			id: "",
			question: ""
		});
	};

	self.removeSection = function(section) {
		self.sections.remove(section);
	};
};


ko.applyBindings(new SectionsView(initial_sections), $('#product_sections')[0]);