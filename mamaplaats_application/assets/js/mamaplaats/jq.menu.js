var menu = {

    "hover_active_menu_item" : $("ul.main-nav li.hover-active"),
    "sub_menu_container" : $('div#main-sub-menu'),
    'active_menu_node' : '',
    'active_menu_li_node' : '',
    'active_sub_menu_node' : '',
    'backgorund_color' : '#b78645',
    'hover_active_class' : 'hover-active',

    "load" : function() {

        this.bindings();
    },

    "bindings" : function () {

        var self = this;

        $('#header').on('mouseover', '.common-nav', function(event) {

            self.show_menu($(this));
        });

        $('#header').on('mouseout', '.common-nav', function(event) {

            self.hide_menu($(this));
        });
    },

    "show_menu" : function ($this) {

        var self = this;

        self.set_default_menu_parameters($this);

        self.active_menu_li_node.addClass(self.hover_active_class);
        $("li#"+self.active_menu_node+' a').css('background', self.backgorund_color);
        self.active_menu_li_node.addClass(self.hover_active_class);
        self.active_sub_menu_node.addClass(self.hover_active_class);
        $('div#main-sub-menu').hide();
        self.active_sub_menu_node.show();
    },

    "hide_menu" : function ($this) {

        var self = this;

        self.set_default_menu_parameters($this);

        self.active_menu_li_node.removeClass(self.hover_active_class);
        $("li#"+self.active_menu_node+' a').css('background', '');
        self.active_sub_menu_node.removeClass(self.hover_active_class);
        $('div#main-sub-menu').show();
        self.active_sub_menu_node.hide();
    },

    "set_default_menu_parameters" : function ($this) {

        var self = this;
        self.hover_active_menu_item.removeClass(self.hover_active_class);

        self.active_menu_node       = $this.attr('id');
        self.active_menu_li_node    =  $("li#"+self.active_menu_node);
        self.active_sub_menu_node   =   $('div#'+self.active_menu_node);
    }
};

$(function () {
    menu.load();
});