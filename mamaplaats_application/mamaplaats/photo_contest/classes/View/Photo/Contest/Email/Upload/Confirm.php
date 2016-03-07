<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Email_Upload_Confirm extends Kostache {

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
	 * @param array $message
	 */
	public function __construct(Model_Photo_Contest_Entry $entry, Model_Photo_Contest $contest, array $message)
	{
		// Entry for template 
		$this->entry = $entry;
		
		// Set the subject
		$this->subject = $message['subject'];
		$this->receiver_name = $message['receiver_name'];
		
		$photo_url = Route::get('image_resize')->uri(array(
				'type' => 'contest',
				'image' => $entry->photo_url,
				'width' => '300',
				'height' => 'n'
		));
		
		$this->uploaded_image_src 			= URL::site($photo_url);
		$this->photo_page_url 				= URL::site('fotowedstrijd/bekijk/');
		$this->button_photo_upload_src  	= URL::site('media/images/button-foto-uploaden.png');
		$this->mail_upload_footer_content	= $contest->mail_upload_footer_content;
		
		parent::__construct();
	}
}