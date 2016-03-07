<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest {

	public $errors = array();

	public function __construct()
	{
		// Legacy
	}

	/**
	 * @return string Load the basepath
	 */
	public function basepath()
	{
		return URL::base();
	}

	public function errors()
	{
		$errors = array();
		foreach ($this->errors as $error)
		{
			$errors['messages'][] = array('error' => $error);
		}

		return $errors;
	}

	public function set_errors($errors)
	{
		$this->errors = $errors;
	}

	protected function _share_text($title, $type = 'guest')
	{
		switch ($type) :
			case 'owner': return 'Help mij deze fotowedstrijd te winnen: '.$title;
			case 'voted': return 'Op deze foto heb ik gestemd: '.$title;
			default: return 'Deze foto vind ik echt leuk: '.$title;
		endswitch;
	}

	/**
	 * Get the url to a single entry
	 *
	 * @param string $entry_id The ID of the entry
	 * @return string The url to the single entry page
	 */
	protected function _single_url($entry_id)
	{
		return URL::site('fotowedstrijd/bekijk/foto/'.$entry_id);
	}
}