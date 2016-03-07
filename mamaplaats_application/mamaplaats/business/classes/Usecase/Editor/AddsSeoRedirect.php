<?php

class Usecase_Editor_AddsSeoRedirect {

	/**
	 * @var Repository_Seo_Redirect
	 */
	private $_repository_redirect;

	/**
	 * @var Validate_Template
	 */
	private $_validate_template;

	public function __construct($repository_redirect, $validate_template)
	{
		$this->_repository_redirect = $repository_redirect;
		$this->_validate_template = $validate_template;
	}

	public function execute(Entity_Seo_Redirect $redirect)
	{
		$redirect->created = date('Y-m-d H:i:s');

		if ($this->_valid_redirect($redirect) !== TRUE)
		{
			throw new Validate_Exception('This redirect is invalid !', $this->_validate_template->errors());
		}

		return $this->_repository_redirect->create($redirect);
	}

	private function _valid_redirect(Entity_Seo_Redirect $redirect)
	{
		$this->_validate_template->load(get_object_vars($redirect));
		$this->_validate_template->rules(array(
			'from_url' 	=> array(array('not_empty')),
			'to_url' 	=> array(array('not_empty')),
			'created' 	=> array(array('not_empty'), array('date')),
		));

		return $this->_validate_template->check();
	}
}