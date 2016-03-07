<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This task keeps widget items imported from the datafeed products sync with the datafeed products
 */

class Task_UpdateUserProfileImage extends Minion_Task {
	
	protected $_options = array();

	/**
	 * Execute the task
	 */
	public function _execute(array $params)
	{
		$update_user_profile_image = new Usecase_User_UpdatesProfileImage(Factory_Repository::user());
		$update_user_profile_image->execute();
	}
}