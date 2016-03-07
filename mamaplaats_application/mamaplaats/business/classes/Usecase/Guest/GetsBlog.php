<?php

class Usecase_Guest_GetsBlog {

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Legacy_Media
	 */
	private $_repository_media;

	/**
	 * @var Repository_Comment
	 */
	private $_repository_comment;

	/**
	 * @var Item_Nester
	 */
	private $_item_nester;

	public function __construct($repository_blog, $repository_user, $repository_media, $repository_comment, $item_nester)
	{
		$this->_repository_blog 	= $repository_blog;
		$this->_repository_user 	= $repository_user;
		$this->_repository_media 	= $repository_media;
		$this->_repository_comment	= $repository_comment;
		$this->_item_nester		= $item_nester;
	}

	public function execute($blog_slug)
	{
		return $this->_get_blog($blog_slug);
	}

	private function _get_blog($blog_slug)
	{
		$blog = $this->_repository_blog->load_object(array(array('slug', '=', $blog_slug)));
		if (empty($blog) OR $blog->status != 'publish')
		{
			throw new Exception('Unable to find blog with slug: '.$blog_slug);
		}

		$blog_meta = $this->_repository_blog->load_meta_info($blog->id);
		$blog->meta_title = Arr::get($blog_meta, '_yoast_wpseo_title');
		$blog->meta_description = Arr::get($blog_meta, '_yoast_wpseo_metadesc');

		$this->_repository_blog->increase_view_count($blog);

		$image = array();
		if ( ! empty($blog->thumbnail_id))
		{
			$image 	= $this->_repository_media->load_object(array(array('id', '=', $blog->thumbnail_id)));
		}

		$author = $this->_repository_user->load_object(array(array('id', '=', $blog->author_id)));
		$related = $this->_get_related_blogs($blog->id);
		$comments = $this->_repository_comment->load_set_advanced(array(array('post_id', '=', $blog->id)));
		$nested_comments = $this->_item_nester->nest($comments);

		$next_blog		= $this->_repository_blog->get_next($blog->created);
		$previous_blog	= $this->_repository_blog->get_prev($blog->created);

		return array(
			'author' 	=> $author,
			'image' 	=> $image,
			'blog' 		=> $blog,
			'related'	=> $related,
			'comments' 	=> $nested_comments,
			'next_blog' => $next_blog,
			'previous_blog' => $previous_blog,
		);
	}

	private function _get_related_blogs($blog_id)
	{
		$related_blogs = $this->_repository_blog->load_set_related($blog_id, 3);

		$blogs = array();
		foreach ($related_blogs as $related_blog)
		{
			$blogs[] = array(
				'author' 	=> $related_blog['user'],
				'image' 	=> $related_blog['media'],
				'blog' 		=> $related_blog['blog'],
			);
		}

		return $blogs;
	}
}