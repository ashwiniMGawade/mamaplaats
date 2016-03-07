<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Layout extends View_Layout {

	/**
	 * @var array The menu items with their paths
	 */
	protected $_menu_items = array(
		'Home' 			=> 'fotowedstrijd',
		'Stemmen' 		=> 'fotowedstrijd/bekijk',
		'Deelnemen' 	=> 'fotowedstrijd/meedoen',
		'Sponsors' 		=> 'fotowedstrijd/sponsors',
		'Winnaars' 		=> 'fotowedstrijd/winnaars',
	);

	/**
	 * @var string The currently active menu item based on the key for $_menu_items
	 */
	protected $_active_item = '';

	/**
	 * @var string The title to use
	 */
	public $title = '';

	/**
	 * @var string The html data to place in content
	 */
	public $content = '';

	/**
	 * @var array|bool
	 */
	public $sponsor = FALSE;

	/**
	 * @var array
	 */
	public $widgets = array();

	/**
	 * @param string $content The html data to place in content
	 * @param string $sponsor The sponsor data to show
	 */
	public function __construct($content, $sponsor = FALSE)
	{
		if ($sponsor !== FALSE)
		{
			$sponsor_photo = Route::get('image_resize')->uri(array(
				'type' => 'sponsor',
				'image' => $sponsor->sponsor_photo,
				'width' => 'n',
				'height' => '95'
			));

			$this->sponsor = array(
				'sponsor_id' => $sponsor->id,
				'sponsor_title' => $sponsor->sponsor_title,
				'sponsor_photo' => URL::site($sponsor_photo),
			);
		}

		$this->content = $content;

		parent::__construct();
	}

	/**
	 * @return array Build the menu
	 */
	public function menu()
	{
		$active_item = $this->_active_item();

		$menu = array();
		foreach ($this->_menu_items as $label => $url)
		{
			$menu[] = array(
				'url' => $this->basepath().$url,
				'text' => i18n::get($label),
				'active' => ( (string) $label === (string) $active_item),
			);
		}

		return $menu;
	}

	/**
	 * @param $widget The widget content
	 */
	public function add_widget($widget)
	{
		$this->widgets[]['content'] = $widget;
	}

	/**
	 * Delete a menu item based on it's name
	 *
	 * @param $name string The menu item label
	 */
	public function delete_menu_item($name)
	{
		if (array_key_exists($name, $this->_menu_items))
		{
			unset($this->_menu_items[$name]);
		}
	}

	/**
	 * Set a menu item active
	 *
	 * @param $name string The menu item label
	 */
	public function activate_menu_item($name)
	{
		$this->_active_item = $name;
	}

	/**
	 * @return string Get the active menu items
	 */
	protected function _active_item()
	{
		if (array_key_exists($this->_active_item, $this->_menu_items))
		{
			return $this->_active_item;
		}

		return array_search(Request::current()->uri(), $this->_menu_items);
	}
} // End View_Photo_Contest_Layout
