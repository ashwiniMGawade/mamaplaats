<?php

class Usecase_Guest_GetsAdvise {

	/**
	 * @var Repository_Advise
	 */
	private $_repository_advise;

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

	public function __construct($repository_advise, $repository_user, $repository_media, $repository_comment, $item_nester)
	{
		$this->_repository_advise 	= $repository_advise;
		$this->_repository_user 	= $repository_user;
		$this->_repository_media 	= $repository_media;
		$this->_repository_comment	= $repository_comment;
		$this->_item_nester			= $item_nester;
	}


	public function execute($advise_slug)
	{
		return $this->_get_advise($advise_slug);
	}

	private function _get_advise($advise_slug)
	{
		$advise = $this->_repository_advise->load_object(array(array('slug', '=', $advise_slug)));
		if (empty($advise) OR $advise->status != 'publish')
		{
			throw new Exception('Unable to find advise with slug: '.$advise_slug);
		}

		$advise_meta = $this->_repository_advise->load_meta_info($advise->id);
		$advise->meta_title = Arr::get($advise_meta, '_yoast_wpseo_title');
		$advise->meta_description = Arr::get($advise_meta, '_yoast_wpseo_metadesc');

		$this->_repository_advise->increase_view_count($advise);

		$image = array();
		if ( ! empty($advise->thumbnail_id))
		{
			$image 	= $this->_repository_media->load_object(array(array('id', '=', $advise->thumbnail_id)));
		}

		$author = $this->_repository_user->load_object(array(array('id', '=', $advise->author_id)));
		$related = $this->_get_related_advise($advise->id);
		$comments = $this->_repository_comment->load_set_advanced(array(array('post_id', '=', $advise->id)));
		$nested_comments = $this->_item_nester->nest($comments);

		$next_blog		= $this->_repository_advise->get_next($advise->created);
		$previous_blog	= $this->_repository_advise->get_prev($advise->created);

		return array(
			'author' 	=> $author,
			'image' 	=> $image,
			'advise' 	=> $advise,
			'related'	=> $related,
			'comments' 	=> $nested_comments,
			'next_blog' => $next_blog,
			'previous_blog' => $previous_blog,
		);
	}

	private function _get_related_advise($advise_id)
	{
		$related_advises = $this->_repository_advise->load_set_related($advise_id, 3);

		$advises = array();
		foreach ($related_advises as $related_advise)
		{
			$advises[] = array(
				'author' 	=> $related_advise['user'],
				'image' 	=> $related_advise['media'],
				'advise' 	=> $related_advise['advise'],
			);
		}

		return $advises;
	}
}