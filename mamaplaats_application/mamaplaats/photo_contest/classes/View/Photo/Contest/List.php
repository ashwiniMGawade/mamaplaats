<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_List extends View_Photo_Contest {

	public $_partials = array(
		'filter' 	=> 'photo/contest/list/filter'
	);

	/**
	 * @var string The page title
	 */
	public $title;

	/**
	 * @var array The filters to filter the entries by
	 */
	protected $_filters = array();

	/**
	 * @var array The amount of photo's to display on one page
	 */
	protected $_page_amounts = array(
		'9' 	=> '9',
		'18' 	=> '18',
		'36' 	=> '36',
		'72' 	=> '72',
	);

	public $page_amount = 9;

	/**
	 * @var array The fields that the photo's can be ordered by
	 */
	protected $_orders = array(
		'last_vote' 	=> 'Laatst Gestemd',
		'amount_votes' 	=> 'Populairste Eerst',
		'upload_date' 	=> 'Laatst Geplaatst',
	);

	/**
	 * @var Model_Photo_Contest The photo contest
	 */
	protected $_photo_contest;

	/**
	 * @var Model_WP_User The user that is logged in
	 */
	protected $_user;

	/**
	 * @param Model_Photo_Contest $photo_contest The photo contest for this view
	 * @param array $filters The filters to filter the entries by
	 */
	public function __construct(Model_Photo_Contest $photo_contest, Model_WP_User $user, array $filters)
	{
		$this->_photo_contest 	= $photo_contest;
		$this->_user 			= $user;
		$this->_filters 		= $filters;
		$this->page_amount 		= $filters['amount'];
		$this->title			= $this->_photo_contest->title;

		parent::__construct();
	}

	public function page_amounts()
	{
		$page_amounts = array();
		foreach ($this->_page_amounts as $page_amount)
		{
			$page_query = HTTP_build_query(array_merge($this->_filters, array('amount' => $page_amount)));

			$page_amounts[$page_amount] = $page_query;
		}

		return $this->_select_list($page_amounts, $this->_filters['amount']);
	}

	public function orders()
	{
		return $this->_select_list($this->_orders, $this->_filters['order_by']);
	}

	public function pages()
	{
		$amount_pages = ceil($this->_photo_contest->count_total_entries() / $this->page_amount);
		$pages = Arr::range(1, $amount_pages);

		return $this->_select_list($pages, $this->_filters['page']);
	}

	public function entries()
	{
		if ( ! array_key_exists($this->_filters['order_by'], $this->_orders))
		{
			$this->_filters['order_by'] = 'amount_votes';
		}

		// Get the entries form the database
		$entries = call_user_func_array(array($this->_photo_contest, 'get_entries'), $this->_filters);

		// Hide the vote button when the contest is not active
		$current_date 	= date('Y-m-d');
		$vote_hidden 	= FALSE;
		if($this->_photo_contest->start_date > $current_date
			OR $this->_photo_contest->end_date < $current_date)
		{
			$vote_hidden = TRUE;
		}

		$entry_array = array();
		foreach ($entries as $entry)
		{
			$single_url = $this->_single_url($entry->id);

			$photo_url = Route::get('image_resize')->uri(array(
				'type' => 'contest',
				'image' => $entry->photo_url,
				'width' => '224',
				'height' => '168'
			));

			$entry_array[] = array_merge($entry->as_array(), array(
				'photo_url' 	=> URL::site($photo_url),
				'single_url' 	=> $single_url,
				'title_short'	=> Text::limit_chars($entry->title, 20),
				'share_text' 	=> $this->_share($entry, $entry->title),
				'username' 		=> $entry->wp_user->display_name,
				'rank' 			=> $entry->rank,
				'voted'			=> (Cookie::get('contest_vote_'.$entry->id) == 1),
				'vote_hidden'	=> $vote_hidden,
			));
		}

		return $entry_array;
	}

	/**
	 * Protected function to generate a list usable for an dropdown
	 *
	 *     Example:
	 *     $this->_select_list(
	 *         array(
	 *             '1' => 'item1',
	 *             '2' => 'item2',
	 *             '3' => 'item3',
	 *         ),
	 *         '1'
	 *     );
	 *
	 * @param array $data The fields to show
	 * @param null $selected The value of the item to set on selected
	 * @return array
	 */
	protected function _select_list(array $data, $selected = NULL)
	{
		$select_list = array();

		foreach ($data as $value => $label)
		{
			$select_list[] = array(
				'value' => $value,
				'text' => i18n::get($label),
				'selected' => ( (string) $value === (string) $selected),
			);
		}

		return $select_list;
	}

	protected function _share($entry, $title)
	{
		$type = 'guest';
		if ($entry->wp_user_id == $this->_user->ID)
		{
			$type = 'owner';
		}
		else if (Cookie::get('contest_vote_'.$entry->id) == 1)
		{
			$type = 'voted';
		}

		return $this->_share_text($title, $type);
	}
}