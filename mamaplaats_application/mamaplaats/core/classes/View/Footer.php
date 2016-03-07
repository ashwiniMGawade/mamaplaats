<?php

class View_Footer {

	private $_menu_items;
	private $_partners;
	private $_request_url;

	public function __construct($menu_items, $partners, $request_url)
	{
		$this->_menu_items = $menu_items;
		$this->_partners = $partners;
		$this->_request_url = $request_url;
	}

	public function menu()
	{
		foreach ($this->_menu_items as $b => $menu_block)
		{
			foreach ($menu_block['menu_block'] as $m => $menu)
			{
				foreach ($menu['sub_menu'] as $s => $sub_menu)
				{
					$this->_menu_items[$b]['menu_block'][$m]['sub_menu'][$s]['path'] = URL::site($sub_menu['path']);
				}
			}
		}

		return $this->_menu_items;
	}

	public function partners()
	{
		$partners = array();
		foreach ($this->_partners as $partner)
		{
			$partner['image'] = URL::site($partner['image'], TRUE);
			$partners[] = $partner;
		}

		return $partners;
	}

	public function show_ad()
	{
		$controller = $this->_request_url->controller();
		$action = $this->_request_url->action();

		if (($controller == "Home" AND $action == "index")
			OR ($action == "list")
			OR ($controller == "Blog" AND $action == "index")
			OR ($controller == "Advise" AND $action == "index")
			OR ($controller == "Expert" AND $action == "index")
			OR ($controller == "Review" AND $action == "finished")
		)
		{
			return false;
		}

		return true;
	}
}
