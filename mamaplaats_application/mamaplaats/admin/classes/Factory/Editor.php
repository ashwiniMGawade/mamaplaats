<?php

class Factory_Editor
{
	public static function review_sync_sections()
	{
		return new Review_SyncSections(Factory_Repository::review(), Factory_Repository::review_product());
	}

	public static function media_update()
	{
		return new Media_Update(Factory_Repository::media(), new Validate_Media);
	}

	public static function adds_review_product()
	{
		return new Usecase_Editor_AddsReviewProduct(
			Factory_Repository::review_product(),
			new Validate_Review_Product,
			self::media_update()
		);
	}

	public static function adds_coupon_category()
	{
		return new Usecase_Editor_AddsCouponCategory(Factory_Repository::coupon_category(), new Validate_Coupon_Category);
	}

	public static function adds_coupon_offer()
	{
		return new Usecase_Editor_AddsCouponOffer(Factory_Repository::coupon_offer(), new Validate_Coupon_Offer);
	}

	public static function adds_coupon_shop()
	{
		return new Usecase_Editor_AddsCouponShop(Factory_Repository::coupon_shop(), new Validate_Coupon_Shop);
	}

	public static function adds_featured_section()
	{
		return new Usecase_Editor_AddsFeaturedSection(Factory_Repository::featured_section(), new Validate_Featured_Section);
	}

	public static function adds_seo_redirect()
	{
		return new Usecase_Editor_AddsSeoRedirect(Factory_Repository::seo_redirect(), new Validate_Template);
	}

	public static function deletes_media()
	{
		return new Usecase_Editor_DeletesMedia(Factory_Repository::media());
	}

	public static function gets_category_list()
	{
		return new Usecase_Editor_GetsCategoryList(Factory_Repository::category());
	}

	public static function gets_coupon_shop()
	{
		return new Usecase_Editor_GetsCouponShop(Factory_Repository::coupon_shop(), Factory_Repository::coupon_offer());
	}

	public static function gets_featured_section()
	{
		return new Usecase_Editor_GetsFeaturedSection(Factory_Repository::featured_section());
	}

	public static function gets_featured_section_list()
	{
		return new Usecase_Editor_GetsFeaturedSectionList(Factory_Repository::featured_section());
	}

	public static function gets_media()
	{
		return new Usecase_Editor_GetsMedia(Factory_Repository::media());
	}

	public static function gets_review()
	{
		return new Usecase_Editor_GetsReview(
			Factory_Repository::user(),
			Factory_Repository::review(),
			Factory_Repository::review_product(),
			Factory_Repository::media()
		);
	}

	public static function gets_review_product()
	{
		return new Usecase_Editor_GetsReviewProduct(
			Factory_Repository::review_product(),
			Factory_Repository::review(),
			Factory_Repository::media()
		);
	}


	public static function gets_review_product_list()
	{
		return new Usecase_Editor_GetsReviewProductList(Factory_Repository::review_product());
	}

	public static function gets_user()
	{
		return new Usecase_Editor_GetsUser(Factory_Repository::user(), Factory_Repository::interests());
	}

	public static function gets_user_list()
	{
		return new Usecase_Editor_GetsUserList(Factory_Repository::user());
	}

	public static function imports_affiliate4you_offers()
	{
		$a4y_api = Kohana::$config->load('affiliate4you_api')->as_array();
		$offer_rss = new Api_Affiliate4you_OfferRss($a4y_api['offer_rss_url']);

		return new Usecase_Editor_ImportsAffiliate4youOffers(
			$offer_rss,
			Factory_Repository::coupon_shop(),
			Factory_Repository::coupon_offer()
		);
	}

	public static function sets_waiting_reviews_to_denied()
	{
		return new Usecase_Editor_SetsWaitingReviewsToDenied(Factory_Repository::review());
	}

	public static function updates_coupon_category()
	{
		return new Usecase_Editor_UpdatesCouponCategory(Factory_Repository::coupon_category(), new Validate_Coupon_Category);
	}

	public static function updates_coupon_offer()
	{
		return new Usecase_Editor_UpdatesCouponOffer(Factory_Repository::coupon_offer(), new Validate_Coupon_Offer);
	}

	public static function updates_coupon_shop()
	{
		return new Usecase_Editor_UpdatesCouponShop(Factory_Repository::coupon_shop(), new Validate_Coupon_Shop);
	}

	public static function updates_coupon_slider()
	{
		return new Usecase_Editor_UpdatesCouponSlider(Factory_Repository::coupon_slide(), new Validate_Coupon_Slide);
	}

	public static function updates_featured_section()
	{
		return new Usecase_Editor_UpdatesFeaturedSection(Factory_Repository::featured_section(), new Validate_Featured_Section);
	}

	public static function updates_media()
	{
		return new Usecase_Editor_UpdatesMedia(Factory_Repository::media(), new Validate_Media);
	}

	public static function updates_review()
	{
		return new Usecase_Editor_UpdatesReview(
			Factory_Repository::review(),
			new Validate_Review,
			self::media_update(),
			self::review_sync_sections(),
			new Review_RatingHelper
		);
	}

	public static function updates_review_product()
	{
		return new Usecase_Editor_UpdatesReviewProduct(
			Factory_Repository::review_product(),
			new Validate_Review_Product,
			self::media_update(),
			self::review_sync_sections()
		);
	}

	public static function updates_user()
	{
		return new Usecase_Editor_UpdatesUser(
			Factory_Repository::user(),
			Factory_Repository::interests(),
			new PasswordHash(8, TRUE),
			new Validate_Admin
		);
	}
}