var Write_Blog = {
    init: function () {
        $('.display-blog').tooltip({});

        this.load_maxlength_on_fields($('#title, #excerpt'));
        this.load_redactor_blog($('#redactor_blog'));

        $("#blog-image-upload").change(function () {
            var popover = $(this);

            popover.popover({
                title: 'Uploaden Afbeelding',
                content: 'Uw afbeelding zal worden geupload zodra u de blog publiceert of als concept opslaat',
                placement: 'bottom'
            });

            popover.popover('show');

            setTimeout(function () {
                popover.popover('hide');
            }, 5000);
        });

        $("#parent-category").change(function () {
            $.ajax({
                url: '/user/blog/get_sub_categories',
                type: 'post',
                dataType: 'json',
                data: {'parent_id': $(this).val()},
                success: function (data) {
                    var options = '';
                    if (data.error) {
                        return;
                    }
                    options += "<option value=''>" + 'Selecteer een sub-categorie';
                    $.each(data, function (key, val) {
                        options += "<option value='" + val.id + "'>" + val.title;
                    });
                    $("#category").html(options);
                },
                error: function (e) {
                    console.log(e);
                }
            });
        });
    },

    load_maxlength_on_fields: function (element) {
        var settings = {
            alwaysShow: true,
            placement: 'centered-right'
        };

        element.maxlength(settings);
    },

    load_redactor_blog: function (element) {
        element.redactor({
            lang: 'nl',
            minHeight: 200,
            convertVideoLinks: true,
            imageUpload: '/user/blog/upload_media',
            imageUploadErrorCallback: function (json) {
                alert(json.error);
            },
            uploadFields: {
                'blog_id': element.data('blog-id')
            }
        });
    }
};

$(function () {
    Write_Blog.init();
});