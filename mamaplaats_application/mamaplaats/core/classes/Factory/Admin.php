<?php

class Factory_Admin
{
	public static function checks_comments_for_possible_spam()
	{
		return new Usecase_Admin_ChecksCommentsForPossibleSpam(
			Factory_Repository::comment(),
			new Spam_CountryChecker
		);
	}

	public static function cleans_up_denied_reviews()
	{
		return new Usecase_Admin_CleansUpDeniedReviews(Factory_Repository::review());
	}

	public static function sends_daily_comment_digest()
	{
		return new Usecase_Admin_SendsDailyCommentDigest(
			Factory_Repository::comment(),
			Factory_Repository::blog(),
			Factory_Message::build('Email')
		);
	}

	public static function sends_instant_comment_response()
	{
		return new Usecase_Admin_SendInstantCommentResponse(
			Factory_Repository::comment(),
			Factory_Repository::blog(),
			Factory_Repository::user(),
			Factory_Message::build('Email')
		);
	}

    public static function sends_new_blog_notification()
    {
        return new Usecase_Admin_SendsNewBlogNotification(
            Factory_Repository::follower(),
            Factory_Repository::blog(),
            Factory_Message::build('Email')
        );
    }

	public static function sends_number_of_blogs_written_per_user()
	{
		return new Usecase_Admin_SendNumberOfBlogsWrittenPerUser(
			Factory_Repository::blog(),
			Factory_Repository::user(),
			new Newsletter_Subscribe(Factory_Repository::newsletter_subscriber(), Factory_Repository::signup_images())

		);
	}
}