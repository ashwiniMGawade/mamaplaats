<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Entry_Vote extends View_Photo_Contest {

	/**
	 * @var string The page title
	 */
	public $title = 'Stem op deze foto';

	/**
	 * @var bool Was the save successful
	 */
	public $success = FALSE;

	/**
	 * @var array The form data to pass trough
	 */
	public $form = array();

	/**
	 * @var Model_Photo_Contest_Entry The photo contest entry
	 */
	protected $_entry;

	/**
	 * Load the entry view.
	 *
	 * @param Model_Photo_Contest_Entry $entry
	 */
	public function __construct(Model_Photo_Contest_Entry $entry)
	{
		$this->_entry = $entry->with('wp_user');

		parent::__construct();
	}

	/**
	 * @return Model_Photo_Contest_Entry Return the contest entry
	 */
	public function entry()
	{
		$photo_url = Route::get('image_resize')->uri(array(
			'type' => 'contest',
			'image' => $this->_entry->photo_url,
			'width' => '142',
			'height' => 'n'
		));

		return array_merge($this->_entry->as_array(), array(
			'photo_url' => URL::site($photo_url),
			'username' => $this->_entry->wp_user->display_name,
			'single_url' => $this->_single_url($this->_entry->id),
			'share_text' => $this->_share_text($this->_entry->title),
		));
	}

	public function captcha()
	{
		$captcha = Captcha::instance('alpha');

		return $captcha->render();
	}
}