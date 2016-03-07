<?php

class Factory_Repository
{
	public static function activity()
	{
		return new Storage_Database_Activity(new Factory_QueryBuilder, Database::instance());
	}

	public static function advise()
	{
		return new Storage_Database_Advise(new Factory_QueryBuilder, Database::instance());
	}

	public static function blog()
	{
		return new Storage_Database_Blog(new Factory_QueryBuilder, Database::instance());
	}

	public static function browser()
	{
		return new Storage_Database_Browser(new Factory_QueryBuilder, Database::instance());
	}

	public static function category()
	{
		return new Storage_Database_Category(new Factory_QueryBuilder, Database::instance());
	}

	public static function comment()
	{
		return new Storage_Database_Comment(new Factory_QueryBuilder, Database::instance());
	}

	public static function conversation()
	{
		return new Storage_Database_Conversation(new Factory_QueryBuilder, Database::instance());
	}

	public static function coupon_category()
	{
		return new Storage_Database_Coupon_Category(new Factory_QueryBuilder, Database::instance());
	}

	public static function coupon_offer()
	{
		return new Storage_Database_Coupon_Offer(new Factory_QueryBuilder, Database::instance());
	}

	public static function coupon_shop()
	{
		return new Storage_Database_Coupon_Shop(new Factory_QueryBuilder, Database::instance());
	}

	public static function coupon_slide()
	{
		return new Storage_Database_Coupon_Slide(new Factory_QueryBuilder, Database::instance());
	}

	public static function expert()
	{
		return new Storage_Database_Expert(new Factory_QueryBuilder, Database::instance());
	}

	public static function featured_section()
	{
		return new Storage_Database_Featured_Section(new Factory_QueryBuilder, Database::instance());
	}

	public static function follower()
	{
		return new Storage_Database_Follower(new Factory_QueryBuilder, Database::instance());
	}

	public static function interests()
	{
		return new Storage_Database_Interest(new Factory_QueryBuilder, Database::instance());
	}

	public static function legacy_media()
	{
		return new Storage_Database_Legacy_Media(new Factory_QueryBuilder, Database::instance());
	}

	public static function media()
	{
		return new Storage_Database_Media(new Factory_QueryBuilder, Database::instance());
	}

	public static function newsletter_subscriber()
	{
		require_once Kohana::find_file('vendor', 'Mailchimp/Mailchimp');

		$mailchimp_config = Kohana::$config->load('mailchimp');

		return new Storage_Mailchimp_Newsletter_Subscriber(new Mailchimp($mailchimp_config['api_key']), $mailchimp_config['list_id'], $mailchimp_config['list_id_mamaplaats_lead_campain']);
	}

	public static function page()
	{
		return new Storage_Database_Page(new Factory_QueryBuilder, Database::instance());
	}

	public static function photo_contest_entries()
	{
		return new Storage_Database_PhotoContest_Entries(new Factory_QueryBuilder, Database::instance());
	}

	public static function photo_contest_rewards()
	{
		return new Storage_Database_PhotoContest_Rewards(new Factory_QueryBuilder, Database::instance());
	}

	public static function photo_contest_votes()
	{
		return new Storage_Database_PhotoContest_Votes(new Factory_QueryBuilder, Database::instance());
	}

	public static function photo_contests()
	{
		return new Storage_Database_PhotoContests(new Factory_QueryBuilder, Database::instance());
	}

	public static function review_product()
	{
		return new Storage_Database_Review_Product(new Factory_QueryBuilder, Database::instance());
	}

	public static function review()
	{
		return new Storage_Database_Review(new Factory_QueryBuilder, Database::instance());
	}

	public static function seo_redirect()
	{
		return new Storage_Database_Seo_Redirect(new Factory_QueryBuilder, Database::instance());
	}

	public static function signup_images()
	{
		return new Storage_Database_SignUpImage(new Factory_QueryBuilder, Database::instance());
	}

	public static function user()
	{
		return new Storage_Database_User(new Factory_QueryBuilder, Database::instance());
	}

	public static function user_child()
	{
		return new Storage_Database_User_Child(new Factory_QueryBuilder, Database::instance());
	}

	public static function user_token()
	{
		return new Storage_Database_User_Token(new Factory_QueryBuilder, Database::instance());
	}

	public static function win()
	{
		return new Storage_Database_Win(new Factory_QueryBuilder, Database::instance());
	}

	public static function advertisement_popup()
	{
		return new Storage_Database_Setting_AdvertisementPopup(new Factory_QueryBuilder, Database::instance());
	}

	public static function advertisement()
	{
		return new Storage_Database_Setting_Advertisement(new Factory_QueryBuilder, Database::instance());
	}
}