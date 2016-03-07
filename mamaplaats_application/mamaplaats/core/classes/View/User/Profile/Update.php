<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Profile_Update {

	use View_Helper_Message, View_Helper_Select, View_Helper_Time, View_Helper_ImagePath;

	public $title = 'Profiel Wijzigen';

	/**
	 * @var Entity_User
	 */
	private $_user;
	private $_interests;

	private $_select_info;

	public function __construct(Entity_User $user, $interests, $select_info, $messages, $page)
	{
		$this->_user = $user;
		$this->_interests = $interests;

		$due_date = $this->_user->pregnancy_due_date;
		$due_date = (strtotime(date('Y-m-d', time())) < strtotime($due_date)) ? $due_date : '';

		$this->_user->is_pregnant = FALSE;
		if ( ! empty($due_date))
		{
			$this->_user->is_pregnant = TRUE;
		}

		$this->_user->has_children = FALSE;
		if ( ! empty($user->children))
		{
			$this->_user->has_children = TRUE;
		}

		$this->_select_info = $select_info;
		$this->messages = $messages;
		$this->page = $page;
	}

	public function page()
	{
		return array($this->page => $this->page);
	}

	public function author_types()
	{
		return $this->select_list($this->_select_info['author_types'], $this->_user->author_type);
	}

	public function children()
	{
		$children = array();
		foreach ($this->_user->children as $child)
		{
			if ( ! empty($child['birthdate']) AND ! is_array($child['birthdate']))
			{
				$child['birthdate'] = date_parse($child['birthdate']);
			}

			$children[] = $child;
		}

		return json_encode($children);
	}

	public function child_genders()
	{
		return $this->select_list($this->_select_info['child_genders']);
	}

	public function has_messages()
	{
		return $this->format_messages($this->messages);
	}

	public function user()
	{
		if ( ! empty($this->_user->pregnancy_due_date) AND ! is_array($this->_user->pregnancy_due_date))
		{
			$this->_user->pregnancy_due_date = date_parse($this->_user->pregnancy_due_date);
		}

		if ( ! empty($this->_user->birthdate) AND ! is_array($this->_user->birthdate))
		{
			$this->_user->birthdate = date_parse($this->_user->birthdate);
		}

		$this->_user->avatar = $this->get_image_path('avatar', $this->_user->id, 230, 150, $this->_user->profile_image_ext);

		return $this->_user;
	}

	public function genders()
	{
		return $this->select_list($this->_select_info['genders'], $this->_user->gender);
	}

	public function pregnant_select()
	{
		$is_pregnant = ($this->_user->is_pregnant) ? 1 : '';
		return $this->select_list(array('' => 'Nee', 1 => 'Ja'), $is_pregnant);
	}

	public function children_select()
	{
		$has_children = ($this->_user->has_children) ? 1 : '';
		return $this->select_list(array('' => 'Nee', 1 => 'Ja'), $has_children);
	}

	public function birthdate_year_select()
	{
		$birthdate_year = (isset($this->_user->birthdate['year'])) ? $this->_user->birthdate['year'] : '' ;
		$year_list = $this->get_year_range(120);

		return $this->select_list($year_list, $birthdate_year);
	}


	public function pregnancy_year_select()
	{
		$pregnancy_year = (isset($this->_user->pregnancy_due_date['year'])) ? $this->_user->pregnancy_due_date['year'] : '' ;
		$year_list = $this->get_year_range(0, 1);

		return $this->select_list($year_list, $pregnancy_year);
	}


	public function subscriptions()
	{
		if ( ! empty($this->_user->newsletter_subscriptions))
		{
			$subscriptions = $this->_user->newsletter_subscriptions;
		}

		$select_list = array();
		foreach ($this->_select_info['subscription_groups'] as $value => $label)
		{
			$select_list[] = array(
				'value' 	=> $value,
				'text' 		=> i18n::get($label),
				'selected' 	=> ( ! empty($subscriptions)) ? in_array($value, $subscriptions) : '',
			);
		}

		return $select_list;
	}

	public function interests()
	{
		return $this->_interests;
	}

	public function time()
	{
		return time();
	}
}