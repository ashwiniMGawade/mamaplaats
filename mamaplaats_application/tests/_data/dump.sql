-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2015 at 07:55 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mamaplaats_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `path` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `advertisement_popup`
--

CREATE TABLE IF NOT EXISTS `advertisement_popup` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `slug` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `status` enum('On','Off') NOT NULL DEFAULT 'On',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `categories`
--
CREATE TABLE IF NOT EXISTS `categories` (
`id` bigint(20) unsigned
,`term_id` bigint(20) unsigned
,`parent_id` bigint(20) unsigned
,`slug` varchar(200)
,`title` varchar(200)
,`description` longtext
,`count` bigint(20)
);
-- --------------------------------------------------------

--
-- Table structure for table `coupon_categories`
--

CREATE TABLE IF NOT EXISTS `coupon_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(200) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_offers`
--

CREATE TABLE IF NOT EXISTS `coupon_offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_shop_id` int(11) NOT NULL,
  `coupon_category_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `coupon_code` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `type` enum('offer','free','coupon') NOT NULL,
  `click_outs` int(11) NOT NULL DEFAULT '0',
  `external_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `coupon_shop_id` (`coupon_shop_id`),
  KEY `category_id` (`coupon_category_id`),
  KEY `start_date` (`start_date`,`end_date`),
  KEY `type` (`type`,`start_date`,`end_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_shops`
--

CREATE TABLE IF NOT EXISTS `coupon_shops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_category_id` int(11) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `about` text NOT NULL,
  `url` text NOT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `view_count` int(11) NOT NULL DEFAULT '0',
  `external_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`),
  KEY `coupon_category_id` (`coupon_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_slides`
--

CREATE TABLE IF NOT EXISTS `coupon_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `featured_sections`
--

CREATE TABLE IF NOT EXISTS `featured_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `template` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `featured_section_blocks`
--

CREATE TABLE IF NOT EXISTS `featured_section_blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `featured_section_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `order_number` int(11) NOT NULL,
  `show_mobile` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `featured_section_id` (`featured_section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE IF NOT EXISTS `followers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `follower_id` bigint(20) unsigned NOT NULL,
  `following_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `follower_id` (`follower_id`),
  KEY `following_id` (`following_id`,`follower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub_title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `path` text NOT NULL,
  `type` enum('image','video') NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wp_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `minion_migrations`
--

CREATE TABLE IF NOT EXISTS `minion_migrations` (
  `timestamp` varchar(14) NOT NULL,
  `description` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `applied` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`timestamp`,`group`),
  UNIQUE KEY `MIGRATION_ID` (`timestamp`,`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_contests`
--

CREATE TABLE IF NOT EXISTS `photo_contests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `example_photo` text NOT NULL,
  `sponsor_photo` text NOT NULL,
  `sponsor_title` varchar(200) NOT NULL,
  `sponsor_short` text NOT NULL,
  `sponsor_page` text NOT NULL,
  `terms` text NOT NULL,
  `submit_date` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `page_body` text NOT NULL,
  `banner_code` text NOT NULL,
  `mail_vote_footer_content` text NOT NULL,
  `mail_upload_footer_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photo_contest_entries`
--

CREATE TABLE IF NOT EXISTS `photo_contest_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_contest_id` int(11) NOT NULL,
  `wp_user_id` bigint(11) unsigned NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `photo_url` text NOT NULL,
  `amount_votes` int(11) NOT NULL DEFAULT '0',
  `status` enum('pending','accepted','denied') NOT NULL DEFAULT 'pending',
  `last_vote` datetime NOT NULL,
  `upload_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wp_user_id` (`wp_user_id`),
  KEY `amount_votes_accepted` (`photo_contest_id`,`status`,`amount_votes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photo_contest_rewards`
--

CREATE TABLE IF NOT EXISTS `photo_contest_rewards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_contest_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `menu_title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `photo_url` text NOT NULL,
  `winner` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `photo_contest_id` (`photo_contest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photo_contest_votes`
--

CREATE TABLE IF NOT EXISTS `photo_contest_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_contest_entry_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `newsletter` tinyint(1) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `status` enum('unconfirmed','confirmed') NOT NULL DEFAULT 'unconfirmed',
  `confirmation_hash` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `photo_contest_entry_id` (`photo_contest_entry_id`),
  KEY `contest_ip` (`ip_address`,`photo_contest_entry_id`),
  KEY `email_confirmation` (`email`,`confirmation_hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_product_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` text NOT NULL,
  `information` text NOT NULL,
  `introduction` text NOT NULL,
  `review` text NOT NULL,
  `final_judgement` text NOT NULL,
  `rating_overal_impression` float(3,1) NOT NULL,
  `rating_price_quality` float(3,1) NOT NULL,
  `rating_design` float(3,1) NOT NULL,
  `rating_child_friendly` float(3,1) NOT NULL,
  `rating_safety` float(3,1) NOT NULL,
  `rating_overal` float(3,1) NOT NULL,
  `will_recommend` tinyint(1) NOT NULL DEFAULT '1',
  `answer_phone` varchar(20) NOT NULL,
  `answer_address` varchar(200) NOT NULL,
  `answer_zip` varchar(20) NOT NULL,
  `answer_place` varchar(50) NOT NULL,
  `answer_reason` text NOT NULL,
  `answer_extra1` text NOT NULL,
  `answer_extra2` text NOT NULL,
  `answer_extra3` text NOT NULL,
  `status` enum('waiting','denied','approved','published') NOT NULL,
  `created` datetime NOT NULL,
  `comment_count` int(11) NOT NULL,
  `published` datetime NOT NULL,
  `phone_access` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `test_product_id` (`review_product_id`),
  KEY `wp_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reviews_media`
--

CREATE TABLE IF NOT EXISTS `reviews_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) DEFAULT NULL,
  `review_section_id` int(11) DEFAULT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `test_review_id` (`review_id`),
  KEY `media_id` (`media_id`),
  KEY `review_section_id` (`review_section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_products`
--

CREATE TABLE IF NOT EXISTS `review_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` text NOT NULL,
  `image_url` text NOT NULL,
  `description` text NOT NULL,
  `media_short` text NOT NULL,
  `conclusion` text NOT NULL,
  `question_extra1` varchar(200) NOT NULL,
  `question_extra2` varchar(200) NOT NULL,
  `question_extra3` varchar(200) NOT NULL,
  `application_start_date` date NOT NULL,
  `application_end_date` date NOT NULL,
  `status` enum('invisible','coming','running','finished') NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `phone_access_field` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_products_media`
--

CREATE TABLE IF NOT EXISTS `review_products_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_product_id` int(11) DEFAULT NULL,
  `media_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `review_product_id` (`review_product_id`),
  KEY `media_id` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_product_ratings`
--

CREATE TABLE IF NOT EXISTS `review_product_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_product_id` int(11) NOT NULL,
  `rating_title` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `review_product_id` (`review_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_product_remarks`
--

CREATE TABLE IF NOT EXISTS `review_product_remarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_product_id` int(11) NOT NULL,
  `type` enum('positive','negative') NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `review_product_id` (`review_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_product_sections`
--

CREATE TABLE IF NOT EXISTS `review_product_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_product_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `review_product_id` (`review_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_ratings`
--

CREATE TABLE IF NOT EXISTS `review_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `review_product_rating_id` int(11) NOT NULL,
  `rating` float(3,1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `review_id` (`review_id`),
  KEY `review_product_rating_id` (`review_product_rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_remarks`
--

CREATE TABLE IF NOT EXISTS `review_remarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `type` enum('positive','negative') NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `review_id` (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `review_sections`
--

CREATE TABLE IF NOT EXISTS `review_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_id` int(11) NOT NULL,
  `review_product_section_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `rating` float(3,1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `review_id` (`review_id`),
  KEY `review_product_section_id` (`review_product_section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `seo_redirects`
--

CREATE TABLE IF NOT EXISTS `seo_redirects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_url` text NOT NULL,
  `to_url` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `signup_images`
--

CREATE TABLE IF NOT EXISTS `signup_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `page_title` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `double_opt` tinyint(1) DEFAULT NULL,
  `double_opt_text` varchar(255) DEFAULT NULL,
  `mailchimp_group` varchar(50) DEFAULT NULL,
  `phone_number` tinyint(1) DEFAULT NULL,
  `phone_number_text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_guest_session`
--

CREATE TABLE IF NOT EXISTS `user_guest_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `ip_address` varchar(200) NOT NULL,
  `browser` text NOT NULL,
  `referrer` varchar(300) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE IF NOT EXISTS `user_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) unsigned NOT NULL,
  `recipient_id` bigint(20) unsigned NOT NULL,
  `author_ip` varchar(40) NOT NULL,
  `created_on` datetime NOT NULL,
  `msg_body` text NOT NULL,
  `unread` tinyint(1) unsigned NOT NULL,
  `deleted` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE IF NOT EXISTS `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE IF NOT EXISTS `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_user_date` (`user_id`,`comment_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE IF NOT EXISTS `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE IF NOT EXISTS `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE IF NOT EXISTS `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `meta_key` (`meta_key`),
  KEY `post_id` (`post_id`,`meta_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE IF NOT EXISTS `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  `view_count` int(11) NOT NULL,
  `meta_description` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`),
  KEY `post_date` (`post_date`),
  KEY `author_status_type` (`post_author`,`post_status`,`post_type`,`post_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE IF NOT EXISTS `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE IF NOT EXISTS `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE IF NOT EXISTS `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`),
  KEY `meta_value` (`meta_value`(100),`meta_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE IF NOT EXISTS `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  `display_username` varchar(250) NOT NULL,
  `spam` tinyint(2) NOT NULL DEFAULT '0',
  `deleted` tinyint(2) NOT NULL DEFAULT '0',
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(10) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(12) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `gender` int(11) NOT NULL,
  `pregnancy_due_date` date DEFAULT NULL,
  `author_type` enum('mother','expert') NOT NULL,
  `biography` text NOT NULL,
  `tos` tinyint(1) NOT NULL,
  `newsletter` tinyint(1) NOT NULL,
  `registration_ip` varchar(50) NOT NULL,
  `comment_notification` tinyint(1) NOT NULL DEFAULT '1',
  `profile_image_ext` varchar(4) DEFAULT NULL,
  `login_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `display_username` (`display_username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_users_interests`
--

CREATE TABLE IF NOT EXISTS `wp_users_interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `interest_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `interest_id` (`interest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_user_children`
--

CREATE TABLE IF NOT EXISTS `wp_user_children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wp_user_id` (`user_id`),
  KEY `child_birthdate_user` (`birthdate`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wp_user_tokens`
--

CREATE TABLE IF NOT EXISTS `wp_user_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expires` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure for view `categories`
--
DROP TABLE IF EXISTS `categories`;

CREATE ALGORITHM=UNDEFINED DEFINER=`c1mamaplaats`@`localhost` SQL SECURITY DEFINER VIEW `categories` AS select `wp_term_taxonomy`.`term_taxonomy_id` AS `id`,`wp_term_taxonomy`.`term_id` AS `term_id`,`wp_term_taxonomy`.`parent` AS `parent_id`,`wp_terms`.`slug` AS `slug`,`wp_terms`.`name` AS `title`,`wp_term_taxonomy`.`description` AS `description`,`wp_term_taxonomy`.`count` AS `count` from (`wp_term_taxonomy` join `wp_terms`) where ((`wp_term_taxonomy`.`term_id` = `wp_terms`.`term_id`) and (`wp_term_taxonomy`.`taxonomy` = 'category'));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coupon_offers`
--
ALTER TABLE `coupon_offers`
  ADD CONSTRAINT `coupon_offers_ibfk_1` FOREIGN KEY (`coupon_shop_id`) REFERENCES `coupon_shops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `coupon_offers_ibfk_2` FOREIGN KEY (`coupon_category_id`) REFERENCES `coupon_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coupon_shops`
--
ALTER TABLE `coupon_shops`
  ADD CONSTRAINT `coupon_shops_ibfk_1` FOREIGN KEY (`coupon_category_id`) REFERENCES `coupon_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `featured_section_blocks`
--
ALTER TABLE `featured_section_blocks`
  ADD CONSTRAINT `featured_section_blocks_ibfk_1` FOREIGN KEY (`featured_section_id`) REFERENCES `featured_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`follower_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`following_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo_contest_entries`
--
ALTER TABLE `photo_contest_entries`
  ADD CONSTRAINT `photo_contest_entries_ibfk_2` FOREIGN KEY (`photo_contest_id`) REFERENCES `photo_contests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `photo_contest_entries_ibfk_3` FOREIGN KEY (`wp_user_id`) REFERENCES `wp_users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `photo_contest_rewards`
--
ALTER TABLE `photo_contest_rewards`
  ADD CONSTRAINT `photo_contest_rewards_ibfk_1` FOREIGN KEY (`photo_contest_id`) REFERENCES `photo_contests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo_contest_votes`
--
ALTER TABLE `photo_contest_votes`
  ADD CONSTRAINT `photo_contest_votes_ibfk_1` FOREIGN KEY (`photo_contest_entry_id`) REFERENCES `photo_contest_entries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`review_product_id`) REFERENCES `review_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews_media`
--
ALTER TABLE `reviews_media`
  ADD CONSTRAINT `reviews_media_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_media_ibfk_2` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_media_ibfk_3` FOREIGN KEY (`review_section_id`) REFERENCES `review_sections` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `review_products`
--
ALTER TABLE `review_products`
  ADD CONSTRAINT `review_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_products_media`
--
ALTER TABLE `review_products_media`
  ADD CONSTRAINT `review_products_media_ibfk_1` FOREIGN KEY (`review_product_id`) REFERENCES `review_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_products_media_ibfk_2` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_product_ratings`
--
ALTER TABLE `review_product_ratings`
  ADD CONSTRAINT `review_product_ratings_ibfk_1` FOREIGN KEY (`review_product_id`) REFERENCES `review_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_product_remarks`
--
ALTER TABLE `review_product_remarks`
  ADD CONSTRAINT `review_product_remarks_ibfk_1` FOREIGN KEY (`review_product_id`) REFERENCES `review_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_product_sections`
--
ALTER TABLE `review_product_sections`
  ADD CONSTRAINT `review_product_sections_ibfk_1` FOREIGN KEY (`review_product_id`) REFERENCES `review_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_ratings`
--
ALTER TABLE `review_ratings`
  ADD CONSTRAINT `review_ratings_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ratings_ibfk_2` FOREIGN KEY (`review_product_rating_id`) REFERENCES `review_product_ratings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_remarks`
--
ALTER TABLE `review_remarks`
  ADD CONSTRAINT `review_remarks_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review_sections`
--
ALTER TABLE `review_sections`
  ADD CONSTRAINT `review_sections_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_sections_ibfk_2` FOREIGN KEY (`review_product_section_id`) REFERENCES `review_product_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wp_users_interests`
--
ALTER TABLE `wp_users_interests`
  ADD CONSTRAINT `wp_users_interests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wp_users_interests_ibfk_2` FOREIGN KEY (`interest_id`) REFERENCES `interests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wp_user_children`
--
ALTER TABLE `wp_user_children`
  ADD CONSTRAINT `wp_user_children_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wp_user_tokens`
--
ALTER TABLE `wp_user_tokens`
  ADD CONSTRAINT `wp_user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE;
