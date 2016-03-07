<?php

class Factory_Guest
{
	public static function activates_account()
	{
		return new Usecase_Guest_ActivatesAccount(
			Factory_Repository::user(),
			new Newsletter_Subscribe(Factory_Repository::newsletter_subscriber(), Factory_Repository::signup_images())
		);
	}

	public static function adds_brwoser_info()
	{
		return new Usecase_Guest_AddsBrowserInfo(
			Factory_Repository::browser(),
			new Validate_Browser
		);
	}

	public static function completes_account()
	{
		return new Usecase_Guest_CompletesAccount(
			Factory_Repository::user(),
			Factory_Repository::user_child(),
			new Validate_User,
			new Validate_User_Child
		);
	}

	public static function gets_advise()
	{
		return new Usecase_Guest_GetsAdvise(
			Factory_Repository::advise(),
			Factory_Repository::user(),
			Factory_Repository::legacy_media(),
			Factory_Repository::comment(),
			new Item_Nester
		);
	}

	public static function gets_advise_list()
	{
		return new Usecase_Guest_GetsAdviseList(
			Factory_Repository::advise(),
			Factory_Repository::category(),
			new Item_Nester
		);
	}

    public static function gets_search_advise_list()
    {
        return new Usecase_Guest_GetsSearchAdviseList(
            Factory_Repository::advise(),
            Factory_Repository::category(),
            new Item_Nester
        );
    }

	public static function gets_author_info()
	{
		return new Usecase_Guest_GetsAuthorInfo(
			Factory_Repository::user(),
			Factory_Repository::blog(),
			Factory_Repository::review()
		);
	}

	public static function gets_blog()
	{
		return new Usecase_Guest_GetsBlog(
			Factory_Repository::blog(),
			Factory_Repository::user(),
			Factory_Repository::legacy_media(),
			Factory_Repository::comment(),
			new Item_Nester
		);
	}

	public static function gets_blog_list()
	{
		return new Usecase_Guest_GetsBlogList(
			Factory_Repository::blog(),
			Factory_Repository::category(),
			new Item_Nester
		);
	}

	public static function gets_coupon_category()
	{
		return new Usecase_Guest_GetsCouponCategory(Factory_Repository::coupon_category(), Factory_Repository::coupon_offer());
	}

	public static function gets_coupon_home()
	{
		return new Usecase_Guest_GetsCouponHome(Factory_Repository::coupon_category(), Factory_Repository::coupon_offer());
	}

	public static function gets_coupon_shop()
	{
		return new Usecase_Guest_GetsCouponShop(Factory_Repository::coupon_shop(), Factory_Repository::coupon_offer());
	}

	public static function gets_coupon_shop_list()
	{
		return new Usecase_Guest_GetsCouponShopList(Factory_Repository::coupon_shop());
	}

	public static function gets_author_list()
	{
		return new Usecase_Guest_GetsAuthorList(Factory_Repository::user());
	}

	public static function gets_expert()
	{
		return new Usecase_Guest_GetsExpert(
			Factory_Repository::expert(),
			Factory_Repository::user(),
			Factory_Repository::legacy_media(),
			Factory_Repository::comment(),
			new Item_Nester
		);
	}

	public static function gets_expert_list()
	{
		return new Usecase_Guest_GetsExpertList(
			Factory_Repository::expert(),
			Factory_Repository::category(),
			new Item_Nester
		);
	}

	public static function gets_featured_section()
	{
		return new Usecase_Guest_GetsFeaturedSection(Factory_Repository::featured_section());
	}

	public static function gets_homepage()
	{
		return new Usecase_Guest_GetsHomePage(
			Factory_Repository::blog(),
			Factory_Repository::advise(),
			Factory_Repository::win(),
			Factory_Repository::review_product()
		);
	}

	public static function gets_page()
	{
		return new Usecase_Guest_GetsPage(
			Factory_Repository::page(),
			Factory_Repository::user(),
			Factory_Repository::legacy_media(),
			Factory_Repository::comment(),
			new Item_Nester
		);
	}

	public static function gets_page_list()
	{
		return new Usecase_Guest_GetsPageList(
			Factory_Repository::page(),
			Factory_Repository::category(),
			new Item_Nester
		);
	}

	public static function gets_product_review()
	{
		return new Usecase_Guest_GetsProductReview(
			Factory_Repository::user(),
			Factory_Repository::review(),
			Factory_Repository::review_product(),
			Factory_Repository::media()
		);
	}

	public static function gets_reviewed_product_list()
	{
		return new Usecase_Guest_GetsReviewedProductList(Factory_Repository::review(), Factory_Repository::review_product());
	}

	public static function gets_review_product()
	{
		return new Usecase_Guest_GetsReviewProduct(
			Factory_Repository::review(),
			Factory_Repository::review_product(),
			Factory_Repository::user(),
			Factory_Repository::media()
		);
	}

	public static function gets_review_product_list()
	{
		return new Usecase_Guest_GetsReviewProductList(Factory_Repository::review_product());
	}

	public static function gets_running_review_products()
	{
		return new Usecase_Guest_GetsRunningReviewProducts(Factory_Repository::review_product());
	}

	public static function gets_win()
	{
		return new Usecase_Guest_GetsWin(
			Factory_Repository::win(),
			Factory_Repository::user(),
			Factory_Repository::legacy_media(),
			Factory_Repository::comment(),
			new Item_Nester
		);
	}

	public static function gets_win_list()
	{
		return new Usecase_Guest_GetsWinList(Factory_Repository::win());
	}

	public static function posts_comment()
	{
		return new Usecase_Guest_PostsComment(
			Factory_Repository::comment(),
			new Validate_Template,
			new Spam_Checker
		);
	}

	public static function registers_account()
	{
		$repo_user = Factory_Repository::user();
		$profile_helper = new User_ProfileHelper($repo_user);

		return new Usecase_Guest_RegistersAccount(
			$repo_user,
			new PasswordHash(8, TRUE),
			new Validate_User,
			$profile_helper,
			Factory_Message::build('Email'),
			Factory_Repository::browser(),
			Session::instance()
		);
	}

	public static function resets_password()
	{
		return new Usecase_Guest_ResetsPassword(Factory_Repository::user(), Factory_Message::build('Email'));
	}

	public static function searches()
	{
		return new Usecase_Guest_Searches(
			Factory_Repository::blog(),
			Factory_Repository::advise(),
			Factory_Repository::win(),
			Factory_Repository::review_product()
		);
	}

	public static function search_page_category()
	{
		return new Usecase_Guest_SearchPageCategory(
			Factory_Repository::page(),
			Factory_Repository::category(),
			new Item_Nester
		);
	}

	public static function updates_password()
	{
		return new Usecase_Guest_UpdatesPassword(Factory_Repository::user(), new PasswordHash(8, TRUE));
	}

	public static function unsubscribe_notification()
	{
		return new Usecase_Guest_UnsubscribeNotification(Factory_Repository::user());
	}

	public static function subscribes_for_newsletter()
	{
		return new Usecase_Guest_SubscribesForNewsletter(
			new Newsletter_Subscribe(Factory_Repository::newsletter_subscriber(), Factory_Repository::signup_images())
		);
	}
}