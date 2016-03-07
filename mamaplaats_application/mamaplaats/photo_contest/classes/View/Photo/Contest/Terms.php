<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Terms extends View_Photo_Contest {

	/**
	 * @var string The page title
	 */
	public $title = 'Uitleg & Voorwaarden';

	protected $_contest;

	/**
	 * @param Model_Photo_Contest $contest The photo contest for this view
	 */
	public function __construct(Model_Photo_Contest $contest)
	{
		$this->_contest = $contest;

		parent::__construct();
	}

	/**
	 * @return Model_Photo_Contest The contest to return
	 */
	public function contest()
	{
		return $this->_contest;
	}
}