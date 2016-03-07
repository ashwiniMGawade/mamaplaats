var ChildrenView = function(children) {
    var self = this;

    self.children = ko.observableArray(ko.utils.arrayMap(children, function(children) {
        return {
            id: children.id,
            first_name: children.first_name,
            birthdate: children.birthdate,

            gender: children.gender
        };
    }));

    self.addChild = function() {
        self.children.push({
            id: "",
            first_name: "",
            birthdate: "",

            gender: ""
        });
        jcf.customForms.replaceAll();
    };

    self.removeChild = function(segment) {
        self.children.remove(segment);
    };
};

ko.applyBindings(new ChildrenView(initial_children));