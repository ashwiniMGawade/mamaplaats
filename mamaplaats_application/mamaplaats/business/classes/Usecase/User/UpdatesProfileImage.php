<?php

class Usecase_User_UpdatesProfileImage {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_user)
	{
		$this->_repository_user = $repository_user;
	}

	public function execute()
	{
		$users = $this->_repository_user->count_users_to_update_image_extension();

		$limit = 500;
		for($offset=0; $offset<=$users['total_users']; $offset+=$limit)
		{
			$list_users = $this->_repository_user->get_users_to_update_image_extension($limit, $offset);

			if( ! empty($list_users))
			{
				$this->_update_users_with_latest_image_extension($list_users);
			}
		}
	}

	private function _update_users_with_latest_image_extension($list_users)
	{
		foreach($list_users as $user)
		{
			$user_detail = $this->_user_detail_with_extension($user);

			if( ! empty($user_detail['profile_image_ext']))
			{
				$user = $this->_repository_user->load_object(array(array('id', '=', $user_detail['id'])));
				$user->profile_image_ext = $user_detail['profile_image_ext'];

				// Update the user
				$this->_repository_user->update($user);
				echo $user_detail['id'].'==';
			}
		}
	}

	private function _user_detail_with_extension($user)
	{
		$user_detail = array();
		$user_images = glob("uploads/avatar/".$user['id']."*");
		if ( ! empty($user_images))
		{
			arsort($user_images);
			$latest_file = $user_images[key($user_images)];
			$file_extension = pathinfo($latest_file, PATHINFO_EXTENSION);

			if($user['profile_image_ext'] != $file_extension)
			{
				$user_detail['id'] = $user['id'];
				$user_detail['profile_image_ext'] = $file_extension;
			}
		}

		return $user_detail;
	}
}