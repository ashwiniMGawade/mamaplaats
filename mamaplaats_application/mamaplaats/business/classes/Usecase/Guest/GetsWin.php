<?php

class Usecase_Guest_GetsWin {

	/**
	 * @var Repository_Win
	 */
	private $_repository_win;

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

	public function __construct($repository_win, $repository_user, $repository_media, $repository_comment, $item_nester)
	{
		$this->_repository_win 		= $repository_win;
		$this->_repository_user 	= $repository_user;
		$this->_repository_media 	= $repository_media;
		$this->_repository_comment	= $repository_comment;
		$this->_item_nester			= $item_nester;
	}


	public function execute($win_slug)
	{
		return $this->_get_win($win_slug);
	}

	private function _get_win($win_slug)
	{
		$win = $this->_repository_win->load_object(array(array('slug', '=', $win_slug)));
		if (empty($win) OR $win->status != 'publish')
		{
			throw new Exception('Unable to find blog with slug: '.$win_slug);
		}

		$win_meta = $this->_repository_win->load_meta_info($win->id);
		$win->meta_title = Arr::get($win_meta, '_yoast_wpseo_title');
		$win->meta_description = Arr::get($win_meta, '_yoast_wpseo_metadesc');

		$this->_repository_win->increase_view_count($win);

		$image = array();
		if ( ! empty($win->thumbnail_id))
		{
			$image 	= $this->_repository_media->load_object(array(array('id', '=', $win->thumbnail_id)));
		}

		$author = $this->_repository_user->load_object(array(array('id', '=', $win->author_id)));
		$comments = $this->_repository_comment->load_set_advanced(array(array('post_id', '=', $win->id)));
		$nested_comments = $this->_item_nester->nest($comments);

		return array(
			'author' 	=> $author,
			'image' 	=> $image,
			'win' 		=> $win,
			'comments' 	=> $nested_comments,
		);
	}
}