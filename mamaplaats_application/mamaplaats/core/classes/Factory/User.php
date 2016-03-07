<?php

class Factory_User
{
    public static function activity_logger()
    {
        return new Activity_Logger(Factory_Repository::activity(), new Activity_Converter);
    }

    public static function gets_author_info()
    {
        return new Usecase_User_GetsAuthorInfo(
            Factory_Repository::user(),
            Factory_Repository::blog(),
            Factory_Repository::review(),
            Factory_Repository::follower()
        );
    }

    public static function gets_author_list()
    {
        return new Usecase_User_GetsAuthorList(Factory_Repository::user(), Factory_Repository::follower());
    }

    public static function gets_own_blog()
    {
        return new Usecase_User_GetsOwnBlog(
            Factory_Repository::blog(),
            Factory_Repository::legacy_media(),
            Factory_Repository::category()
        );
    }

    public static function get_own_blog_list()
    {
        return new Usecase_User_GetsOwnBlogList(Factory_Repository::blog());
    }

    public static function gets_admin_blog_list()
    {
        return new Usecase_User_GetsAdminBlogList(Factory_Repository::blog());
    }

    public static function writes_blog()
    {
        return new Usecase_User_WritesBlog(
            Factory_Repository::blog(),
            Factory_Repository::category(),
            new Validate_Blog,
            Factory_User::activity_logger()
        );
    }

    public static function gets_category_list()
    {
        return new Usecase_User_GetsCategoryList(Factory_Repository::category());
    }

    public static function posts_comment()
    {
        return new Usecase_User_PostsComment(
            Factory_Repository::comment(),
            new Validate_Template,
            new Spam_Checker
        );
    }

    public static function deletes_conversation()
    {
        return new Usecase_User_DeletesConversation(Factory_Repository::conversation());
    }

    public static function deletes_media_from_review()
    {
        return new Usecase_User_DeletesMediaFromReview(Factory_Repository::media());
    }

    public static function gets_conversation()
    {
        return new Usecase_User_GetsConversation(Factory_Repository::conversation(), Factory_Repository::user());
    }

    public static function gets_unread_inbox_conversation()
    {
        return new Usecase_User_GetsConversation(Factory_Repository::conversation(), Factory_Repository::user());
    }

    public static function gets_conversation_list()
    {
        return new Usecase_User_GetsConversationList(Factory_Repository::conversation(), Factory_Repository::user());
    }

    public static function writes_conversation_message()
    {
        return new Usecase_User_WritesConversationMessage(Factory_Repository::conversation(), new Validate_Template);
    }

    public static function updates_conversation_message()
    {
        return new Usecase_User_UpdatesConversationMessage(Factory_Repository::conversation(), new Validate_Template);
    }

    public static function gets_following()
    {
        return new Usecase_User_GetsFollowing(Factory_Repository::follower());
    }

    public static function gets_followers()
    {
        return new Usecase_User_GetsFollowers(Factory_Repository::follower());
    }

    public static function gets_follow_suggestions()
    {
        return new Usecase_User_GetsFollowSuggestions(Factory_Repository::user(), Factory_Repository::follower());
    }

    public static function gets_interests()
    {
        return new Usecase_User_GetsInterests(Factory_Repository::interests());
    }

    public static function gets_timeline()
    {
        return new Usecase_User_GetsTimeline(Factory_Repository::activity(), Factory_Repository::user());
    }

    public static function updates_interests()
    {
        return new Usecase_User_UpdatesInterests(Factory_Repository::interests());
    }

    public static function updates_following()
    {
        return new Usecase_User_UpdatesFollowing(Factory_Repository::follower(), Factory_Repository::user(), Factory_Message::build('Email'));
    }

    /* Media Usecase */
    public static function adds_media_to_review()
    {
        return new Usecase_User_AddsMediaToReview(
            Factory_Repository::review(),
            Factory_Repository::media(),
            new Validate_Media
        );
    }

    /* Newsletter Usecase*/
    public static function subscribes_for_newsletter()
    {
        return new Usecase_User_SubscribesForNewsletter(
            Factory_Repository::user(),
            new Newsletter_Subscribe(Factory_Repository::newsletter_subscriber(), Factory_Repository::signup_images())
        );
    }

    /* Profile Usecase */
    public static function gets_profile()
    {
        return new Usecase_User_GetsProfile(
            Factory_Repository::user(),
            Factory_Repository::newsletter_subscriber()
        );
    }

    public static function gets_profile_dashboard()
    {
        return new Usecase_User_GetsProfileDashboard(
            Factory_Repository::user(),
            Factory_Repository::blog(),
            Factory_Repository::activity(),
            Factory_Repository::follower()
        );
    }

    public static function updates_profile()
    {
        $repo_user = Factory_Repository::user();
        $profile_helper = new User_ProfileHelper($repo_user);

        return new Usecase_User_UpdatesProfile(
            $repo_user,
            Factory_Repository::user_child(),
            new PasswordHash(8, TRUE),
            new Newsletter_Subscribe(Factory_Repository::newsletter_subscriber(), Factory_Repository::signup_images()),
            new Validate_User,
            new Validate_User_Child,
            $profile_helper
        );
    }

    /* Review Usecase */
    public static function applies_for_review()
    {
        return new Usecase_User_AppliesForReview(Factory_Repository::review(), new Validate_Template);
    }

    public static function gets_review()
    {
        return new Usecase_User_GetsReview(
            Factory_Repository::review(),
            Factory_Repository::review_product(),
            Factory_Repository::media()
        );
    }

    public static function gets_review_application()
    {
        return new Usecase_User_GetsReviewApplication(Factory_Repository::review_product());
    }

    public static function gets_review_list()
    {
        return new Usecase_User_GetsReviewList(Factory_Repository::review_product());
    }

    public static function gets_win_list()
    {
        return new Usecase_User_GetsWinList(Factory_Repository::win(), Factory_Repository::comment());
    }

    public static function updates_review_media()
    {
        return new Usecase_User_UpdatesReviewMedia(Factory_Repository::review(), Factory_Repository::media());
    }

    public static function updates_review()
    {
        return new Usecase_User_UpdatesReview(Factory_Repository::review(), new Validate_Template, new Review_RatingHelper);
    }

    public static function searches_user()
    {
        return new Usecase_User_SearchesUser(Factory_Repository::user());
    }

    public static function profile_progress()
    {
        return new User_ProfileProgressHelper(
            Factory_Repository::user(),
            Factory_Repository::follower(),
            Factory_Repository::review()
        );
    }

    public static function login_success()
    {
        return new Usecase_User_LoginSuccess(Factory_Repository::user());
    }

    public static function gets_most_read_blogs()
    {
        return new Usecase_User_GetsMostReadBlogs(
            Factory_Repository::blog()
        );
    }

    public static function discourse_sso()
    {
        return new Usecase_User_LoginDiscourseSso(
            DiscourseSso::factory()
        );
    }

    public static function gets_following_user_blogs()
    {
        return new Usecase_User_GetsFollowingUsersBlogList(
            Factory_Repository::follower(),
            Factory_Repository::blog()
        );
    }
}