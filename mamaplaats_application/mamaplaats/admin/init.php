<?php defined('SYSPATH') or die('No direct script access.');

/* Default Routes */
Route::set('admin_default', 'admin')->defaults(array(
	'directory' => 'Admin',
	'controller' => 'user',
	'action' => 'list',
));

Route::set('admin_user', 'admin/user/<user_id>')->defaults(array(
	'directory' => 'Admin',
	'controller' => 'user',
	'action' => 'index',
));

Route::set('admin_media', 'admin/media/<action>(/<media_id>)')->defaults(array(
	'directory' => 'Admin',
	'controller' => 'media',
	'action' => 'index',
));

/* Review Routes*/
Route::set('admin_review_products', 'admin/review-products')->defaults(array(
	'directory' => 'Admin/Review',
	'controller' => 'product',
	'action' => 'list',
));

Route::set('admin_review_product', 'admin/review-product(/<review_product_id>)')->defaults(array(
	'directory' => 'Admin/Review',
	'controller' => 'product',
	'action' => 'index',
));

Route::set('admin_export_product', 'admin/export-product(/<review_product_id>)')->defaults(array(
	'directory' => 'Admin/Review',
	'controller' => 'product',
	'action' => 'export',
));

Route::set('admin_reviews', 'admin/review/list')->defaults(array(
	'directory' => 'Admin',
	'controller' => 'review',
	'action' => 'list',
));

Route::set('admin_review', 'admin/review/<review_id>')->defaults(array(
	'directory' => 'Admin',
	'controller' => 'review',
	'action' => 'index',
));

/* Coupon Routes*/
Route::set('admin_coupon_categories', 'admin/coupon/categories')->defaults(array(
	'directory' => 'Admin/Coupon',
	'controller' => 'Category',
	'action' => 'list',
));

Route::set('admin_coupon_category', 'admin/coupon/category(/<id>)')->defaults(array(
	'directory' => 'Admin/Coupon',
	'controller' => 'Category',
	'action' => 'index',
));

Route::set('admin_coupon_shops', 'admin/coupon/shops')->defaults(array(
	'directory' => 'Admin/Coupon',
	'controller' => 'Shop',
	'action' => 'list',
));

Route::set('admin_coupon_shop', 'admin/coupon/shop(/<id>)')->defaults(array(
	'directory' => 'Admin/Coupon',
	'controller' => 'Shop',
	'action' => 'index',
));

Route::set('admin_coupon_offers', 'admin/coupon/offers')->defaults(array(
	'directory' => 'Admin/Coupon',
	'controller' => 'Offer',
	'action' => 'list',
));

Route::set('admin_coupon_offer_import', 'admin/coupon/offer/import')->defaults(array(
	'directory' => 'Admin/Coupon',
	'controller' => 'Offer',
	'action' => 'import',
));

Route::set('admin_coupon_offer', 'admin/coupon/offer(/<id>)')->defaults(array(
	'directory' => 'Admin/Coupon',
	'controller' => 'Offer',
	'action' => 'index',
));

Route::set('admin_coupon_slider', 'admin/coupon/slider')->defaults(array(
	'directory' => 'Admin/Coupon',
	'controller' => 'Slider',
	'action' => 'index',
));

/* Featured Section Routes */
Route::set('admin_featured_sections', 'admin/featured-sections')->defaults(array(
	'directory' => 'Admin/Featured',
	'controller' => 'Section',
	'action' => 'list',
));

Route::set('admin_featured_section', 'admin/featured-section(/<id>)')->defaults(array(
	'directory' => 'Admin/Featured',
	'controller' => 'Section',
	'action' => 'index',
));

/* SEO Routes */
Route::set('admin_seo_redirect', 'admin/seo/redirects')->defaults(array(
	'directory' => 'Admin/Seo',
	'controller' => 'Redirect',
	'action' => 'list',
));

Route::set('admin_seo_redirect_delete', 'admin/seo/redirect/delete/<id>')->defaults(array(
	'directory' => 'Admin/Seo',
	'controller' => 'Redirect',
	'action' => 'delete',
));

/* Setting Routes*/
Route::set('admin_update_advertisement', 'admin/setting/advertisement-popup')->defaults(array(
	'directory' => 'Admin/Setting',
	'controller' => 'AdvertisementPopup',
	'action' => 'update',
));

Route::set('admin_list_advertisements', 'admin/setting/advertisements')->defaults(array(
	'directory' => 'Admin/Setting',
	'controller' => 'AdvertisementPopup',
	'action' => 'list',
));

/* Advertisement Routes*/
Route::set('admin_setting_advertisements', 'admin/advertisements')->defaults(array(
	'directory' => 'Admin/Setting',
	'controller' => 'Advertisement',
	'action' => 'list',
));

Route::set('admin_add_advertisement', 'admin/setting/advertisement(/<id>)')->defaults(array(
	'directory' => 'Admin/Setting',
	'controller' => 'Advertisement',
	'action' => 'index',
));

Route::set('admin_delete_advertisement', 'admin/setting/advertisement/delete(/<id>)')->defaults(array(
	'directory' => 'Admin/Setting',
	'controller' => 'Advertisement',
	'action' => 'delete',
));