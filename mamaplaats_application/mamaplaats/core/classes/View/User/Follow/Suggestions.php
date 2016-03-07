<?php

class View_User_Follow_Suggestions {

	use View_Helper_ImagePath;

	public $title = 'Volg suggesties';
	public $messages = array();

	private $_user;
	private $_suggestions;

	public function __construct($user, $suggestions)
	{
		$this->_user = $user;
		$this->_suggestions = $suggestions;
	}

	public function user()
	{
		return $this->_user;
	}

	public function suggestions()
	{
		$suggestions = array();
		foreach ($this->_suggestions as $suggestion)
		{
			$suggestions[] = array_merge($suggestion->as_array(), array(
				'avatar' => $this->get_image_path('avatar', $suggestion->id, 140, 120, $suggestion->profile_image_ext),
				'biography' => Text::limit_chars($suggestion->biography, 200, '...', TRUE),
			));
		}

		return $suggestions;
	}
}