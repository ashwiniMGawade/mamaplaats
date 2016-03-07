<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'css_files' => array(
		'/assets/css/bootstrap.min.css',
		'/assets/css/coupon_icons.css',
		'/assets/js/vendor/redactor/redactor.css',
		'/assets/js/vendor/fresco/css/fresco.css',
	),

	'load_less' => TRUE,
	'less_files' => array(
		'/assets/less/all.less',
		'/assets/less/detail.less',
		'/assets/less/guide.less',
		'/assets/less/home.less',
		'/assets/less/less.less',
		'/assets/less/account.less',
		'/assets/less/photo.less',
		'/assets/less/profile.less',
		'/assets/less/review.less',
		'/assets/less/win.less',
		'/assets/less/custom.less',
	),

	'js_files' => array(
		'/assets/js/jquery-1.8.3.min.js',
		'/assets/js/bootstrap.min.js',
		'/assets/js/bootstrap.maxlength.js',
		'/assets/js/typeahead.bloodhound.js',
		'/assets/js/jquery.main.js',
		'/assets/js/less-1.5.0.min.js',
		'/assets/js/resumable.js',
		'/assets/js/vendor/redactor/redactor.min.js',
		'/assets/js/vendor/redactor/nl.js',
		'/assets/js/vendor/fresco/js/fresco.js',
		'/assets/js/vendor/knockout/knockout-3.0.0.js',
		'/assets/js/vendor/socialite/socialite.min.js',
        '/assets/js/vendor/postscribe-master/htmlParser.js',
        '/assets/js/vendor/postscribe-master/postscribe.js',
        '/assets/js/mamaplaats/jq.mobile_nav.js',
		'/assets/js/mamaplaats/jq.reply.js',
		'/assets/js/mamaplaats/jq.load_more.js',
		'/assets/js/mamaplaats/jq.load_video.js',
		'/assets/js/mamaplaats/jq.follow.js',
		'/assets/js/mamaplaats/jq.profile.js',
		'/assets/js/mamaplaats/jq.social.js',
		'/assets/js/mamaplaats/jq.popup.js',
		'/assets/js/mamaplaats/jq.write_blog.js',
		'/assets/js/mamaplaats/jq.write_review.js',
		'/assets/js/mamaplaats/jq.search_advise.js',
		'/assets/js/mamaplaats/jq.newsletter.js',
		'/assets/js/mamaplaats/jq.coupon.js',
		'/assets/js/mamaplaats/jq.conversation.js',
		'/assets/js/mamaplaats/jq.adfab_mobile.js',
		'/assets/js/mamaplaats/jq.menu.js',
	),

	'forum' => array(
		'path' => 'https://mamaplaats-forum.herokuapp.com',
		'secret_key' => 'mamaplaatsforumsecret',
	),

    'aws' => array(
        // The S3 Access Keys
        's3_access_key'		=> 'AKIAJ7FJKLLAV72FA64Q',
        's3_secret_key'		=> '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',
        'bucket_name'       => 'img.testing.mamaplaats.nl',
        'aws_s3_base_url'   => 'https://s3.eu-central-1.amazonaws.com/'
    )
);