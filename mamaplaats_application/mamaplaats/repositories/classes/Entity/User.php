<?php

class Entity_User extends Entity
{
	public $id;
	public $slug;
	public $display_name = '';
	public $username = '';
	public $password;
	public $email;
	public $activation_key = '';
	public $status = 0;
	public $spam = 0;
	public $deleted = 0;
	public $first_name = '';
	public $middle_name = '';
	public $last_name = '';
	public $birthdate;
	public $gender;
	public $pregnancy_due_date;
	public $author_type = 'mother';
	public $biography = '';
	public $tos;
	public $newsletter;
	public $registration_ip;
	public $registration_date;
	public $comment_notification = 1;
	public $profile_image_ext;
	public $login_count;
	public $phone_number;

	public $children = array();

	public function full_name()
	{
		// For Legacy Support we return old display names
		$display_name = trim($this->display_name);
		if ( ! empty($display_name))
		{
			return $display_name;
		}

		$middle_name = ' ';
		if ( ! empty($this->middle_name))
		{
			$middle_name = ' '.$this->middle_name.' ';
		}

		return $this->first_name.$middle_name.$this->last_name;
	}
}