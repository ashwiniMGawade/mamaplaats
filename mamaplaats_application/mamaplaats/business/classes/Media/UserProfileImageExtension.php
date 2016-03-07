<?php

trait Media_UserProfileImageExtension {

	private $_extensions = array('png', 'jpg', 'gif', 'jpeg');

	protected function _check_user_image_exists($author)
	{
		foreach ($this->_extensions as $extension)
		{
			if (file_exists('uploads/avatar/'.$author->id.'.'.$extension)
				OR file_exists('image/avatar/'.$author->id.'.'.$extension))
			{
				$author->profile_image_ext = $extension;

				return true;
			}
		}

		return false;
	}
}
