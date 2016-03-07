<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Widget_Top extends View_Photo_Contest {

	/**
	 * @param Model_Photo_Contest $photo_contest The photo contest for this view
	 */
	public function __construct(Model_Photo_Contest $photo_contest)
	{
		$this->_photo_contest = $photo_contest;

		parent::__construct();
	}

	/**
	 * @return array The the top listed entries from this photo contest
	 */
	public function top_entries()
	{
		$top_entries = array();
		foreach ($this->_photo_contest->get_entries(5, 'amount_votes') as $top_entry)
		{
			$route_params = array(
				'type' => 'contest',
				'image' => $top_entry->photo_url,
				'width' => '196',
				'height' => '147'
			);

			if ($top_entry->rank == 1)
			{
				$route_params = array_merge($route_params, array('width' => '242', 'height' => '181'));
			}

			$photo_url = Route::get('image_resize')->uri($route_params);

			$top_entries[] = array_merge(
				$top_entry->as_array(),
				array(
					'photo_url' => URL::site($photo_url),
					'top' => ($top_entry->rank == 1),
					'rank' => $top_entry->rank,
					'username' => $top_entry->wp_user->display_name,
				)
			);
		}

		return $top_entries;
	}
} // End View_Photo_Contest_Widget_Top
