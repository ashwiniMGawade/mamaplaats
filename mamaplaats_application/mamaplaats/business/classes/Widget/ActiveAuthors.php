<?php

class Widget_ActiveAuthors {

	use Media_UserProfileImageExtension;
	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_user)
	{
		$this->_repository_user = $repository_user;
	}

	public function load()
	{
		$active_authors = $this->_repository_user->load_set_latest_active(12);

		/* temporary code to update user image extension
		 * @created: 26 Nov,2014
		 * Remove this below code after one year from date created
		 * Also remove Media_UserProfileImageExtension with this code
		 */
		if ( ! empty($active_authors))
		{
			foreach ($active_authors as $author)
			{
				if ($this->_check_user_image_exists($author))
				{
					$this->_repository_user->update($author);
				}
			}
		}

		return $active_authors;
	}
}