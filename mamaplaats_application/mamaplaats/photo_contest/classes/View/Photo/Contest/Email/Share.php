<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Email_Share extends Kostache {

	/**
	 * @var string The page title
	 */
	public $subject = '';

	/**
	 * @var array
	 */
	public $message = array();

	/**
	 * @var Model_Photo_Contest_Entry
	 */
	private $_entry;

	/**
	 * Load the entry view.
	 *
	 * @param Model_Photo_Contest_Entry $entry
	 * @param Model_WP_User $user
	 */
	public function __construct(Model_Photo_Contest_Entry $entry, array $message)
	{
		$this->_entry = $entry;
		$this->message = $message;

		// Set the subject
		$this->subject = $message['subject'];

		parent::__construct();
	}

	public function entry()
	{
		$photo_url = Route::get('image_resize')->uri(array(
			'type' => 'contest',
			'image' => $this->_entry->photo_url,
			'width' => '196',
			'height' => 'n'
		));

		return array_merge($this->_entry->as_array(), array(
			'photo_url' => URL::site($photo_url),
			'single_url' => URL::site('fotowedstrijd/bekijk/foto/'.$this->_entry->id),
		));
	}
}