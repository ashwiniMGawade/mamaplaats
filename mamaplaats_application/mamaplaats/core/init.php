<?php defined('SYSPATH') or die('No direct script access.');

/* Home */
Route::set('Home', '')
->defaults(array(
	'controller' => 'Home',
	'action' => 'index',
));

/* Search Route */
Route::set('Search', 'zoek')
	->defaults(array(
		'controller' => 'Search',
		'action' => 'search',
	));

/* Author Routes */
Route::set('Author_List', 'leden(/<first_letter>)')
->defaults(array(
	'controller' => 'Author',
	'action' => 'list',
));

Route::set('Author_Index', 'lid/<slug>')
->defaults(array(
	'controller' => 'Author',
	'action' => 'index',
));

/* Blog Routes */
Route::set('Blog_List', 'blog/list(/<slug>)')
	->defaults(array(
		'controller' => 'Blog',
		'action' => 'list',
	));

Route::set('Blog', 'blog/<slug>')
	->defaults(array(
		'controller' => 'Blog',
		'action' => 'index',
	));

Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]+', 'message' => '.*'))
	->defaults(array(
		'directory' => 'error',
		'controller' => 'handler'
	));

/* Advise Routes */
Route::set('Advise_List', 'advies/list(/<slug>)')
	->defaults(array(
		'controller' => 'Advise',
		'action' => 'list',
	));

Route::set('Advise_Search', 'advies/search(/<slug>)')
    ->defaults(array(
        'controller' => 'Advise',
        'action' => 'search',
    ));

Route::set('Advise', 'advies/<slug>')
	->defaults(array(
		'controller' => 'Advise',
		'action' => 'index',
	));

/* Expert Routes */
Route::set('Expert_List', 'expert/list(/<slug>)')
	->defaults(array(
		'controller' => 'Expert',
		'action' => 'list',
	));

Route::set('Expert', 'expert/<slug>')
	->defaults(array(
		'controller' => 'Expert',
		'action' => 'index',
	));

/* Conversation Routes */
Route::set('conversation', 'conversation(/<action>(/<partner_id>))')
	->defaults(array(
		'controller' => 'conversation',
		'action' => 'index',
	));

/* Guest Routes */
Route::set('guest_register', 'guest/register(/<type>)')
->defaults(array(
	'controller' => 'guest',
	'action' => 'register',
));

Route::set('guest_activate', 'guest/activate')
	->defaults(array(
		'controller' => 'guest',
		'action' => 'activate',
	));

/* Page Routes */
Route::set('page_list', 'list/<slug>')
->defaults(array(
	'controller' => 'page',
	'action' => 'list',
));

Route::set('page_predictive_search', 'page/predictive-search')
->defaults(array(
	'controller' => 'page',
	'action' => 'predictive_search',
));

/* Win Routes */
Route::set('Win_List', 'win')
	->defaults(array(
		'controller' => 'Win',
		'action' => 'list',
	));

Route::set('Win', 'win/<slug>')
	->defaults(array(
		'controller' => 'Win',
		'action' => 'index',
	));

/* User Routes */
Route::set('user_login', 'user/login')
->defaults(array(
	'controller' => 'user',
	'action' => 'login',
));

Route::set('user_forum', 'user/forum')
	->defaults(array(
		'controller' => 'user',
		'action' => 'forum',
	));

Route::set('user_discourse_login', 'user/discourse_login')
	->defaults(array(
		'controller' => 'user',
		'action' => 'discourse_login',
	));

Route::set('user_logout', 'user/logout')
->defaults(array(
	'controller' => 'user',
	'action' => 'logout',
));

Route::set('user_password_reset', 'user/forgot-password')
	->defaults(array(
		'directory' => 'user',
		'controller' => 'password',
		'action' => 'reset',
	));

Route::set('user_password_update', 'user/update-password')
	->defaults(array(
		'directory' => 'user',
		'controller' => 'password',
		'action' => 'update',
	));

Route::set('user_predictive_search', 'user/predictive-search')
	->defaults(array(
		'controller' => 'user',
		'action' => 'predictive_search',
	));

/* User Blog Routes */
Route::set('user_blog', 'user/blog/<action>(/<blog_id>)')
->defaults(array(
	'directory' => 'user',
	'controller' => 'blog',
	'action' => 'index',
));

/* User Follow Routes */
Route::set('user_follow_suggestions', 'user/follow/<action>')
->defaults(array(
	'directory' => 'user',
	'controller' => 'follow',
	'action' => 'suggestions',
));

/* User Profile Routes */
Route::set('user_profile', 'user/profile(/<action>)')
->defaults(array(
	'directory' => 'user',
	'controller' => 'profile',
	'action' => 'dashboard',
));

/* User Update Profile Routes */
Route::set('user_update_profile', 'user/update/<slug>')
->defaults(array(
	'directory' => 'user',
	'controller' => 'profile',
	'action' => 'update',
));


/* User win routes*/
Route::set('User_Wins', 'user/win/<action>')
    ->defaults(array(
        'directory' => 'user',
        'controller' => 'win',
        'action' => 'suggestions',
    ));

/* RSS routes */
Route::set('rss_popular_posts', 'rss/popular_posts')
->defaults(array(
	'controller' => 'rss',
	'action' => 'popular_posts',
));

Route::set('rss_popular_comments', 'rss/popular_comments')
->defaults(array(
	'controller' => 'rss',
	'action' => 'popular_comments',
));

Route::set('rss_most_active_users', 'rss/most_active_users')
->defaults(array(
	'controller' => 'rss',
	'action' => 'most_active_users',
));

/* Mamaplaats C&A Campaign Routes */
Route::set('campaign_newsletter_register', 'gebruiker/verrijk-profiel')
	->defaults(array(
		'directory' => 'campaign',
		'controller' => 'newsletter',
		'action' => 'register',
	));

/* Review Routes */
Route::set('review_coming', 'review/aankomende')
	->defaults(array(
		'controller' => 'review',
		'action' => 'coming',
	));

Route::set('review_running', 'review/lopende')
	->defaults(array(
		'controller' => 'review',
		'action' => 'running',
	));

Route::set('review_finished', 'review/afgeronde')
	->defaults(array(
		'controller' => 'review',
		'action' => 'finished',
	));

Route::set('review_product', 'review/product/<slug>')
	->defaults(array(
		'controller' => 'review',
		'action' => 'product_single',
	));

Route::set('review', 'review/<slug>')
	->defaults(array(
		'controller' => 'review',
		'action' => 'single',
	));

Route::set('user_review_products', 'user/review-products/suggestions')
	->defaults(array(
		'directory' => 'User',
		'controller' => 'Review',
		'action' => 'list',
	));

Route::set('user_subscribed_review_products', 'user/review-products/subscribed')
	->defaults(array(
		'directory' => 'User',
		'controller' => 'Review',
		'action' => 'subscribed_list',
	));

Route::set('user_review_register', 'user/review-product/<review_product_id>/apply')
	->defaults(array(
		'directory' => 'User',
		'controller' => 'Review',
		'action' => 'apply',
	));

Route::set('user_review', 'user/review/<review_id>')
	->defaults(array(
		'directory' => 'User',
		'controller' => 'Review',
		'action' => 'write',
	));

Route::set('user_review_media_add', 'user/review/<review_id>/media')
	->defaults(array(
		'directory' => 'User',
		'controller' => 'Review',
		'action' => 'add_media',
	));

Route::set('user_review_media_delete', 'user/review/media/<media_id>/delete')
	->defaults(array(
		'directory' => 'User',
		'controller' => 'Review',
		'action' => 'remove_media',
	));

/* Unsubscribe */
Route::set('Unsubscribe', 'unsubscribe-notification')
	->defaults(array(
		'controller' => 'UnsubscribeNotification',
		'action' => 'index',
	));

/* Sitemap */
Route::set('sitemap', 'sitemap/<action>.xml')
	->defaults(array(
		'controller' => 'Sitemap',
	));

/* PAGE FALLBACK. THIS ALWAYS COMES LAST!!! */
Route::set('page_fallback_route', '<page_slug>', array('page_slug' => '.*'))
	->defaults(array(
		'controller' => 'page',
		'action' => 'index',
	));