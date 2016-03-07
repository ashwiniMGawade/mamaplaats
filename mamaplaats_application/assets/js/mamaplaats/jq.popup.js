
if (UR_readCookie('a4ypopup') != 'yes' && (typeof ad_popup_status !== 'undefined' && ad_popup_status == 'On')) {
	var a4ypopup_url = ad_popup_url;
    var a4ypopup_img = '/uploads/advertisements/'+ad_popup_image;
	var a4ypopup_time = 86400;

	document.write('<div id="a4ypopup" tabindex="-1">' +
		'<a href="#" class="popup_close"><i class="glyphicon glyphicon-remove"></i></a>' +
		'<a class="popup_banner" href="' + a4ypopup_url + '" rel="nofollow" target="_blank">' +
			'<img src="' + a4ypopup_img + '" width="640" height="500" border="0"/>' +
		'</a>' +
		'</div>');

	var popup = $('#a4ypopup');
	var popup_banner = $('.popup_banner');
	var popup_close = $('#a4ypopup .popup_close');

	popup_banner.focus();
	popup_banner.on('blur', function() {
		popup.hide();
	});

	popup_close.click(function() {
		popup.hide();
	});

	UR_createCookie('a4ypopup', 'yes', a4ypopup_time);
}

$(document).ready(function(){
    if (UR_readCookie('mamaplaatscookiewall') != 'yes') {
        $(".cookie-wall").show();
    }

    $("#accept_cookie").click(function(){
        UR_createCookie('mamaplaatscookiewall', 'yes', 86400 * 365);
        $(".cookie-wall").hide();
    });
});

function UR_createCookie(name, value, seconds) {
	var expires = '';
	if (seconds) {
		var date = new Date();
		date.setTime(date.getTime() + (seconds * 1000));
		expires = "; expires="+date.toGMTString();
	}

	document.cookie = name + "=" + value + expires + "; path=/";
}

function UR_readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}

	return null;
}
