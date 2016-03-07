$(function(){

    var banner_close_button = $('#close-adfab-banner');

    banner_close_button.click( function (e) {
        $( this).parent().hide();
    });

    if($('#div-gpt-ad-1405613256099-2').children().length <= 0)
    {
        banner_close_button.hide();
    }
});