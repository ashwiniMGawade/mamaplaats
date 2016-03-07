comment_form = {

    move : function(parent_id) {
		$('#comment_' + parent_id).append($('#reply_box'));
		this.show_reset(true);
		this.set_parent_id(parent_id);

        return false;
    },

    reset : function()
    {
		$('#reply_box_container').append($('#reply_box'));
		this.show_reset(false);
		this.set_parent_id(0);

        return false;
    },

	set_parent_id : function(value)
	{
		$('#comment_parent_id').val(value);
	},

	show_reset : function(show)
	{
		var reset_button = $('#comment-reset-button');
		if (show == true) {
			reset_button.show();
		} else {
			reset_button.hide();
		}
	}
};

$(function(){
    $('#register_newletter').change(function (e) {
        if($(this).is(":checked"))
        {
            $('.submit-form-btn').hide();
            $('.model-popup-form').show();
        }
        else
        {
            $('.model-popup-form').hide();
            $('.submit-form-btn').show();
        }
    });

    $('.popup-btn, #close-modal-popup').click( function (e) {
        $('#myModal').modal('hide');
        $('#post_comment').submit();
    });

});