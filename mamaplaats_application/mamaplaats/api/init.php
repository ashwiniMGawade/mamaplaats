<?php

/* Api Home */
Route::set('api_guest_home_blog', 'api/moreitems/<action>')
	->defaults(array(
		'directory' => 'Api',
		'controller' => 'LoadMoreHomeItems',
		'action' => 'list',
	));

/* Api Blog */
Route::set('api_guest_blog', 'api/blog/<action>')
	->defaults(array(
		'directory' => 'Api',
		'controller' => 'Blog',
		'action' => 'list',
	));

/* Api Advise */
Route::set('api_guest_advise', 'api/advise/<action>')
	->defaults(array(
		'directory' => 'Api',
		'controller' => 'Advise',
		'action' => 'list',
	));

/* Api Win */
Route::set('api_guest_win', 'api/win/<action>')
	->defaults(array(
		'directory' => 'Api',
		'controller' => 'Win',
		'action' => 'list',
	));

/* Api Review Products */
Route::set('api_guest_review_product', 'api/review-products/list')
	->defaults(array(
		'directory' => 'Api/Review',
		'controller' => 'Product',
		'action' => 'list',
	));

/* Api Author */
Route::set('api_guest_author_blog', 'api/author/<action>')
	->defaults(array(
		'directory' => 'Api',
		'controller' => 'Author',
		'action' => 'blog',
	));

/* Api Follow */
Route::set('api_follow', 'api/follow/<action>')
	->defaults(array(
		'directory' => 'Api',
		'controller' => 'Follow',
		'action' => 'follow',
	));

/* Api Newsletter */
Route::set('api_newsletter', 'api/newsletter(/<action>)')
	->defaults(array(
		'directory' => 'Api',
		'controller' => 'Newsletter',
		'action'     => 'subscribe',
	));
/* Api Expert */
Route::set('api_expert_article', 'api/expert/<action>')
	->defaults(array(
		'directory' => 'Api',
		'controller' => 'Expert',
		'action' => 'list',
	));

/* Api User Blog list */
Route::set('api_most_read_blog', 'api/user/blog/<action>(/<page_slug>)')
	->defaults(array(
		'directory' => 'Api/User',
		'controller' => 'Blog',
		'action' => 'list',
	));
