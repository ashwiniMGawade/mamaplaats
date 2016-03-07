jQuery(function() {

	jQuery.noConflict();

	if(jQuery('#slider').length){
		jQuery('#slider').nivoSlider({
			effect:'fade',
			animSpeed:200,
			pauseTime:4000,
			pauseOnHover:false,
			controlNav:false,
			directionNav:true,
			directionNavHide:false,
			captionOpacity:0.8 // Universal caption opacity
		});
	}

	if(jQuery('#birthdate').length){
		jQuery('#birthdate').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd-mm-yy',
			yearRange: 'c-50:c+0'
		});
	}

	if(jQuery('#calculated_birthdate').length){
		jQuery('#calculated_birthdate').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd-mm-yy',
			yearRange: 'c-0:c+1'
		});
	}

	jQuery(".category-list > ul > li:nth-child(even)").after('<div class="clear"></div>');

	if(jQuery('input[id^="birthdate"]').length){
		jQuery('input[id^="birthdate"]').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd-mm-yy',
			yearRange: 'c-50:c+0'
		});
	}

	if(jQuery('#calculated_birthdate').length){
		jQuery('#calculated_birthdate').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd-mm-yy',
			yearRange: 'c-0:c+1'
		});
	}

	if(jQuery('#is_pregnant').length){
		jQuery('#is_pregnant').change(function () {
			hide_pregnant();
		});
	}

	if(jQuery('#amount_children_new').length){
		jQuery('#amount_children_new').change(function () {
			hide_children_new($(this).val());
		});
	}

	hide_pregnant();
	hide_children_new(jQuery('#amount_children_new').val());
});

function hide_pregnant() {
	if(jQuery('#is_pregnant').val() == 'pregnant') {
		jQuery('.show_preg_due_date').show();
	} else {
		jQuery('.show_preg_due_date').hide();
	}

	return false;
}

function hide_children_new(amount)
{
	if(amount == 0)
	{
		jQuery('#children-header').hide();
	}

	jQuery('[id^="child_form_"]').hide();
	for(i = 1; i <= amount; i = i + 1) {
		jQuery('#child_form_' + i).show();
	}
}

function hideshow(which){
if (!document.getElementById)
return
if (which.style.visibility=="visible")
which.style.display="hidden"
else
which.style.display="visible"
}

function share_media(type, url, text, extra) {

	if (type == 'fb') {
		window.open('http://www.facebook.com/share.php?s=100&p[url]=' + encodeURIComponent(url) + '&p[images][0]=' + encodeURIComponent(extra) + '&p[title]=' + encodeURIComponent(text) + '&p[summary]=' + encodeURIComponent(text), 'share', 'toolbar=0,status=0,width=626,height=436');
	} else if (type == 'twr') {
		window.open('https://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(text)+ '&hashtags=' + encodeURIComponent(extra), 'share', 'toolbar=0,status=0,width=626,height=250');
	} else if (type == 'hvs') {
		window.open('http://www.hyves-share.nl/button/respect/?hc_hint=1&url=' + encodeURIComponent(url), 'share', 'toolbar=0,status=0,width=626,height=436');
	}

	return false;
}