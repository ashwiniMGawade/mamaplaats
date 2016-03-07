var RemarksView = function(remarks) {
    var self = this;

    self.remarks = ko.observableArray(ko.utils.arrayFilter(remarks, function(remarks) {
        return {
            id: remarks.id,
            type: remarks.type,
            remark: remarks.remark
        };
    }));

    self.addRemark = function() {
        self.remarks.push({
            id: "",
            type: "positive",
            remark: ""
        });
    };

    self.removeRemark = function(remark) {
        self.remarks.remove(remark);
    };
};

ko.applyBindings(new RemarksView(initial_remarks), $('#product_remarks, #review_remarks')[0]);