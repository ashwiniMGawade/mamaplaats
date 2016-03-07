<?php

class User_ProfileProgressHelper {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Follower
	 */
	private $_repository_follower;

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var array
	 */
	private $_list_stages = array(
		'profile_completed' => array(),
		'blog_written' => 0,
		'writers_followed' => 0,
		'review_joined' => 0
	);

	public function __construct($repository_user, $repository_follower, $repository_review)
	{
		$this->_repository_user = $repository_user;
		$this->_repository_follower = $repository_follower;
		$this->_repository_review = $repository_review;
	}

	public function stages_details($user_id = NULL)
	{
		if(empty($user_id))
		{
			return false;
		}

		$user = $this->_repository_user->load_object(array(array('id', '=', $user_id)));
		$user_progress_data = $this->_repository_user->load_user_statistics($user_id);
		$following = $this->_repository_follower->get_following($user_id);
		$user_reviews = $this->_repository_review->load_set(array(array('user_id', '=', $user_id)));

		$this->_prepare_stages_details($user, $user_progress_data, $following, $user_reviews);

		return $this->_list_stages;
	}

	private function _prepare_stages_details($user, $user_progress_data, $following, $user_reviews)
	{
		$this->_required_profile_info($user);

		if( ! empty($user_progress_data['blog_count']))
		{
			$this->_list_stages['blog_written'] = 1;
		}

		if( ! empty($following))
		{
			$this->_list_stages['writers_followed'] = 1;
		}

		if( ! empty($user_reviews))
		{
			$this->_list_stages['review_joined'] = 1;
		}
	}

	private function _required_profile_info($user)
	{
		$profile_info = array();

		if( ! empty($user->id) AND ! empty($user->biography))
		{
			$profile_info['id'] = $user->id;
			$profile_info['biography'] = $user->biography;
		}

		$this->_list_stages['profile_completed'] = $profile_info;
	}

	private function _calculate_percentage()
	{
		$profile_percentage = 0;
		$total_stages = count($this->_list_stages);

		$stages_completed = 0;
		foreach ((array)$this->_list_stages as $stage)
		{
			if($stage == 1)
			{
				$stages_completed = $stages_completed+1;
			}
		}

		if( !empty ($stages_completed))
		{
			$profile_percentage = $stages_completed/$total_stages*100;
		}

		return $profile_percentage;
	}
}