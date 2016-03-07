<?php

class Usecase_Guest_GetsExpert {

	/**
	 * @var Repository_Expert
	 */
	private $_repository_expert;

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

	public function __construct($repository_expert, $repository_user, $repository_media, $repository_comment, $item_nester)
	{
		$this->_repository_expert 	= $repository_expert;
		$this->_repository_user 	= $repository_user;
		$this->_repository_media 	= $repository_media;
		$this->_repository_comment	= $repository_comment;
		$this->_item_nester			= $item_nester;
	}


	public function execute($expert_slug)
	{
		return $this->_get_expert($expert_slug);
	}

	private function _get_expert($expert_slug)
	{
		$expert = $this->_repository_expert->load_object(array(array('slug', '=', $expert_slug)));
		if (empty($expert) OR $expert->status != 'publish')
		{
			throw new Exception('Unable to find expert with slug: '.$expert_slug);
		}

		$expert_meta = $this->_repository_expert->load_meta_info($expert->id);
		$expert->meta_title = Arr::get($expert_meta, '_yoast_wpseo_title');
		$expert->meta_description = Arr::get($expert_meta, '_yoast_wpseo_metadesc');

		$this->_repository_expert->increase_view_count($expert);

		$image = array();
		if ( ! empty($expert->thumbnail_id))
		{
			$image 	= $this->_repository_media->load_object(array(array('id', '=', $expert->thumbnail_id)));
		}

		$author = $this->_repository_user->load_object(array(array('id', '=', $expert->author_id)));
		$related = $this->_get_related_expert($expert->id);
		$comments = $this->_repository_comment->load_set_advanced(array(array('post_id', '=', $expert->id)));
		$nested_comments = $this->_item_nester->nest($comments);

		$next_blog		= $this->_repository_expert->get_next($expert->created);
		$previous_blog	= $this->_repository_expert->get_prev($expert->created);

		return array(
			'author' 	=> $author,
			'image' 	=> $image,
			'expert' 	=> $expert,
			'related'	=> $related,
			'comments' 	=> $nested_comments,
			'next_blog' => $next_blog,
			'previous_blog' => $previous_blog,
		);
	}

	private function _get_related_expert($expert_id)
	{
		$related_experts = $this->_repository_expert->load_set_related($expert_id, 3);

		$experts = array();
		foreach ($related_experts as $related_expert)
		{
			$experts[] = array(
				'author' 	=> $related_expert['user'],
				'image' 	=> $related_expert['media'],
				'expert' 	=> $related_expert['expert'],
			);
		}

		return $experts;
	}
}