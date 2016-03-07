<?php

class Controller_Core_Route extends Controller {

	public function action_index()
	{
		$type = $this->request->param('item_type');
		$id = $this->request->param('item_id');

		switch($type)
		{
			case 'blog':
			case 'post':
			case 'post_short':
			case 'post_picture':
			case 'post_video':
			case 'Blog':
			case 'Vraag':
			case 'Foto Blog':
			case 'Video Blog':
				$url = Route::url('core_route_blog', array('blog_id' => $id));
				break;
			case 'comment':
			case 'Reactie':
				$blog_id = $this->_get_comment_blog_id($id);
				$url = Route::url('core_route_comment', array('blog_id' => $blog_id, 'comment_id' => $id));
				break;
			case 'Tip & Win':
			case 'tip_win':
				$url = Route::url('core_route_tipwin');
				break;
			case 'follower':
			case 'Volger':
				$author_id = $this->_get_user_id($id);
				$url = Route::url('author_page', array('author_slug' => $author_id));
				break;
			default:
				$url = URL::base();
		}

		$this->redirect($url);
	}

	private function _get_comment_blog_id($comment_id)
	{
		$comment = new Model_WP_Comment($comment_id);
		return $comment->comment_post_ID;
	}

	private function _get_user_id($user_id)
	{
		$user = new Model_WP_User($user_id);
		return $user->user_nicename;
	}
}