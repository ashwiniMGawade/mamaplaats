var RemarksView = function(remarks, remark_type) {
    var self = this;

    self.remarks = ko.observableArray(ko.utils.arrayFilter(remarks, function(remarks) {

		if (remarks.type != remark_type) {
			return false;
		}

        return {
            id: remarks.id,
            type: remarks.type,
            remark: remarks.remark
        };
    }));

    self.addRemark = function() {
		if (self.remarks().length >= 5)	{
			return false;
		}

        self.remarks.push({
            id: "",
            type: remark_type,
            remark: ""
        });
    };

    self.removeRemark = function(remark) {
        self.remarks.remove(remark);
    };
};

ko.applyBindings(new RemarksView(initial_remarks, 'positive'), $('#positive_remarks')[0]);
ko.applyBindings(new RemarksView(initial_remarks, 'negative'), $('#negative_remarks')[0]);