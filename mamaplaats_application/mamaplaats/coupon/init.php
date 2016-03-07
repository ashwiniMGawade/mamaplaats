<?php defined('SYSPATH') or die('No direct script access.');

Route::set('coupon_home', 'korting')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Home',
	'action' => 'index',
));

Route::set('coupon_categories', 'korting/categorien')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Category',
	'action' => 'list',
));

Route::set('coupon_category', 'korting/categorie/<slug>')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Category',
	'action' => 'index',
));

Route::set('coupon_shops', 'korting/winkels')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Shop',
	'action' => 'list',
));

Route::set('coupon_shop', 'korting/winkel/<slug>')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Shop',
	'action' => 'index',
));

Route::set('coupon_offer_open', 'korting/aanbieding/<offer_id>')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Offer',
	'action' => 'open',
));

Route::set('coupon_offer_most_popular', 'korting/meest-populair')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Offer',
	'action' => 'most_popular',
));

Route::set('coupon_offer_newest', 'korting/nieuwste')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Offer',
	'action' => 'newest',
));

Route::set('coupon_offer_free', 'korting/gratis')->defaults(array(
	'directory' => 'Coupon',
	'controller' => 'Offer',
	'action' => 'free',
));