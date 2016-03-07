var Search_Advise = {

    first_result_url: '',
    search_engine: '',

    init: function () {
        var self = this;
        var request_url = "/advies/search";

        if (advise_category != '') {
            request_url = "/advies/search/" + advise_category;
        }

        // Load up the search Engine
        self.search_engine = new Bloodhound({
            name: 'advise',
            remote: {
                url: request_url + '?query=%QUERY',
                filter: function (response) {
                    return response;
                }
            },
            datumTokenizer: function (d) {
                return Bloodhound.tokenizers.whitespace(d.val);
            },
            queryTokenizer: Bloodhound.tokenizers.whitespace
        });

        self.search_engine.initialize();

        // Apply Hooks to the fields
        var search_form = $('#advise_search_form');

        search_form.on('keyup', 'input', function () {
            var query = $(this).val();
            if (query.length < 1) {
                $('#advise_search_results').html('');
                return false;
            }
            self.search(query);
        });

        // Redirect the user when it pushes enter
        search_form.on('submit', function () {
            if (self.first_result_url) {
                window.location.href = self.first_result_url;
            }
            return false;
        })
    },

    search: function (query) {
        var self = this;
        this.search_engine.get(query, function (suggestions) {
            if (suggestions.length > 0) {
                self.first_result_url = suggestions[0].url;
            }
            self.render_results(query, suggestions);
        });
    },

    render_results: function (query, suggestions) {
        var self = this;
        var result_html = '';
        $.each(suggestions, function (i, suggestion) {
            var title_highlight = self.highlight(suggestion.title, query);
            result_html += '<li>' +
            '<a class="item" href="' + suggestion.url + '">' +
            '<img class="photo" alt="' + suggestion.title + '" src="' + suggestion.image + '" width="80" height="55">' +
            '<div class="description">' +
            '<h3>' + title_highlight + '</h3>' +
            '<p><span>' + suggestion.author + '</span></p>' +
            '</div>' +
            '</a>' +
            '</li>';
        });

        $('#advise_search_results').html('<ul>' + result_html + '</ul>');
    },

    highlight: function (haystack, search) {
        search = search.split(' ');
        search = jQuery.grep(search, function (word, i) {
            return word != '';
        });
        search = jQuery.map(search, function (word, i) {
            return word.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
        });
        if (search.length == 0) {
            return haystack;
        }
        var re = new RegExp("(" + search.join("|") + ")", "ig");

        return haystack.replace(re, '<span>$1</span>');
    }
};

$(function () {
    // Only initialize advise if there is search data
    if (typeof advise_category != "undefined") {
        Search_Advise.init();
    }
});