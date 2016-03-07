var loading = false; //to prevent multiple ajax loads
load_more = {

    home: function (category_slug, amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/moreitems/list', {limit: amount_per_page, offset: api_offset}, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    expert_list: function (category_slug, amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/expert/list/' + category_slug + '/?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/expert/list', {
            category_slug: category_slug,
            limit: amount_per_page,
            offset: api_offset
        }, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    blogs: function (category_slug, amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/blog/list?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/blog/list', {
            category_slug: category_slug,
            limit: amount_per_page,
            offset: api_offset
        }, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    advise: function (category_slug, amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/advies/list?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/advise/list', {
            category_slug: category_slug,
            limit: amount_per_page,
            offset: api_offset
        }, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    author_blog: function (author_slug, amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/lid/' + author_slug + '?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/author/blog', {
            author_slug: author_slug,
            limit: amount_per_page,
            offset: api_offset
        }, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    review_product: function (amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/review/afgeronde?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/review-products/list', {limit: amount_per_page, offset: api_offset}, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    win: function (amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/win?limit=' + push_limit + '&offset=0');

        $.get('/api/win/list', {limit: amount_per_page, offset: api_offset}, function (data) {
            $('#closed_win_items').append(data);
            if (data) {
                loading = false;
            }
        });

        return false;
    },

    user_win: function (amount_per_page, action_uri) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/user/win/' + action_uri + '?limit=' + push_limit + '&offset=0');

        $.get('/api/user/win/' + action_uri, {limit: amount_per_page, offset: api_offset}, function (data) {
            $('#closed_win_items').append(data);
            if (data) {
                loading = false;
            }
        });

        return false;
    },

    most_read_blogs: function (amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/user/blog/most_read?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/user/blog/most_read', {limit: amount_per_page, offset: api_offset}, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    admin_blogs: function (amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/user/blog/admin_blogs?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/user/blog/admin_blogs', {limit: amount_per_page, offset: api_offset}, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },


    following_blogs : function(amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        window.history.pushState(null, '', '/user/blog/following?limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api/user/blog/following', {limit: amount_per_page, offset: api_offset}, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    user_profile_dashboard: function (type, amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit($('#limit-' + type).val(), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        var masonry_cnt = type + '-blog-masonry';

        $('#limit-' + type).val(push_limit);

        var self = this;
        $.get('/api/user/blog/' + type, {limit: amount_per_page, offset: api_offset}, function (data) {
            if (data) {
                self.append_to_masonry(data, masonry_cnt);
                loading = false;
            }
            else {
                $('#load-more-btn-' + type).hide();
            }
        });

        return false;
    },

    user_blogs: function (list_type, amount_per_page) {

        loading = true;
        var push_limit = this.calculate_push_limit(urlParam('limit'), amount_per_page);
        var api_offset = this.calculate_api_offset(push_limit, amount_per_page);

        var current_url = '/user/blog/list';

        if (list_type != '') {
            current_url = current_url + '/' + list_type;
        }


        window.history.pushState(null, '', current_url + '?&limit=' + push_limit + '&offset=0');

        var self = this;
        $.get('/api' + current_url, {limit: amount_per_page, offset: api_offset}, function (data) {
            if (data) {
                self.append_to_masonry(data);
                loading = false;
            }
            else {
                $('.load-more').hide();
            }
        });

        return false;
    },

    append_to_masonry: function (data, custom_container) {
        var container = $('.blog-masonry .grid-box');

        if (typeof(custom_container) != "undefined" && custom_container != "") {
            container = $('.' + custom_container + ' .grid-box');
        }
		var el = $(data);
		container.append(el);


		container.imagesLoaded(function () {
			//container.masonry('appended', el, true);
            container.masonry( 'reloadItems' );
            container.masonry( 'layout' );
		});
	},

    calculate_push_limit: function (current_limit, amount_per_page) {
        var push_limit = parseInt(current_limit);
        if (!push_limit) {
            push_limit = amount_per_page;
        }

        return push_limit + amount_per_page;
    },

    calculate_api_offset: function (push_limit, amount_per_page) {
        return (push_limit - amount_per_page);
    }
};

function urlParam(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

$(document).ready(function () {
    var iScrollPos = 0;
    $(window).scroll(function () {
        iCurScrollPos = $(this).scrollTop();
        if (iCurScrollPos > iScrollPos && loading == false) {
            var checkElement = $('.lazy-load-more');
            if (checkElement.length > 0) {
                var docViewBottom = iCurScrollPos + $(window).height();
                var elementTop = $(checkElement).offset().top;
                var elementBottom = elementTop + $(checkElement).height();

                if ((elementBottom <= docViewBottom) && (elementTop >= iCurScrollPos)) {
                    checkElement.trigger("click");
                }
            }
        }

        iScrollPos = iCurScrollPos;
    });
});