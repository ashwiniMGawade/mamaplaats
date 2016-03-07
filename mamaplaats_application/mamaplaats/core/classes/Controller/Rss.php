<?php

class Controller_Rss extends Controller_Base {

	public function before()
	{
		$this->auto_render = FALSE;

		parent::before();
	}

	public function action_popular_posts()
	{
		$offset = $this->request->query('offset');
		$offset = ( ! empty($offset)) ? $offset : 0;

		$post = new Model_WP_Post;
		$popular_posts = $post->get_popular_posts_between_dates(date('Y-m-d', strtotime('-1 week')), date('Y-m-d'));

		$items = array();
		foreach	($popular_posts as $post)
		{
			$image = substr($post['thumb'], 0, -4).'-90x90'.substr($post['thumb'], -4);
			if ( ! file_exists(substr($image, 25)))
			{
				$image = $post['thumb'];
			}

			$items[] = array(
				'title' => $post['post_title'],
				'author' => $post['comment_author'],
				'description' => Text::limit_chars($post['post_excerpt'], 100, '...'),
				'pubDate' => $post['post_date_gmt'],
				'link' => $post['guid'],
				'image' => $image,
			);
		}

		$this->response->headers('Content-type', 'application/rss+xml; charset=UTF-8');
		$this->response->body($this->_create_post_feed($items, $offset));
	}

	public function action_popular_comments()
	{
		$post = new Model_WP_Comment;
		$popular_comments = $post->get_all_popular_comments_between_dates(date('Y-m-d', strtotime('-1 week')), date('Y-m-d'));

		$info = array(
			'title' => 'Popular Comments',
			'pubDate' => date("r"),
			'description' => 'My popular comments',
		);

		$items = array();
		foreach	($popular_comments as $comment)
		{
			$items[] = array(
				'title' => htmlspecialchars($comment['post_title']),
				'author' => $comment['comment_author'],
				'description' => htmlspecialchars(Text::limit_chars($comment['comment_content'], 65, '...')),
				'pubDate' => strtotime($comment['comment_date_gmt']),
				'link' => $comment['guid'],
			);
		}

		$this->response->headers('Content-type', 'application/rss+xml; charset=UTF-8');
		$this->response->body(Feed::create($info, $items));
	}

	public function action_most_active_users()
	{
		$post = new Model_WP_User;
		$most_active_users = $post->get_most_active(date('Y-m-d', strtotime('-1 week')), date('Y-m-d'));

		$items = array();
		foreach	($most_active_users as $user)
		{
			$items[] = array(
				'title' => $user['display_name'],
				'author' => $user['display_name'],
				'description' => Text::limit_chars($user['biography'], 100, '...'),
				'link' => Route::url('author_page', array('author_slug' => $user['user_nicename'])),
				'image' => URL::site('wordpress/wp-content/avatars/100x100/'.$user['ID'].'.png'),
			);
		}

		$this->response->headers('Content-type', 'application/rss+xml; charset=UTF-8');
		$this->response->body($this->_create_post_feed($items, 0, 100, 100));
	}

	private function _create_post_feed($items, $offset = 0, $width = 90, $height = 90)
	{
		$feed = '<?xml version="1.0" encoding="UTF-8"?><rss version="2.0"><channel></channel></rss>';
		$feed = simplexml_load_string($feed);

		$feed->channel->addChild('title', 'Popular Posts');
		$feed->channel->addChild('pubDate', date("r"));
		$feed->channel->addChild('description', 'My popular blog posts');

		$items = array_slice($items, $offset);

		foreach ($items as $item)
		{
			// Skip if not valid image
			if ( ! Valid::url($item['image']))
			{
				continue;
			}

			// Add the item to the channel
			$row = $feed->channel->addChild('item');
			$row->addChild('title', htmlspecialchars($item['title']));
			$row->addChild('description', htmlspecialchars($item['description']));
			$row->addChild('pubDate', date('r', strtotime($item['pubDate'])));
			$row->addChild('link', $item['link']);

			$guid = $row->addChild('guid', $item['link']);
			$guid->addAttribute('isPermaLink', 'false');

			// Add the thumbnail
			$image = $row->addChild('media:content', FALSE, 'http://search.yahoo.com/mrss/');
			$image->addAttribute('url', $item['image']);
			$image->addAttribute('medium', 'image');
			$image->addAttribute('width', $width);
			$image->addAttribute('height', $height);
		}

		// Convert the feed object to a DOM object
		$feed = dom_import_simplexml($feed)->ownerDocument;

		// DOM generates more readable XML
		$feed->formatOutput = TRUE;

		// Export the document as XML
		return $feed->saveXML();
	}
}