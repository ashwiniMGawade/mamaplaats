<?php
class Validate_Template
{
	/**
	 * @var Kohana_Validation
	 */
	private $_validation;

	public function load(array $data, $validation = FALSE)
	{
		$this->_validation = $validation;
		if ($validation === FALSE)
		{
			$this->_validation = new Validation($data);
		}
	}

	public function rules(array $field_rules)
	{
		foreach ($field_rules as $field => $rules)
		{
			$this->_validation->rules($field, $rules);
		}

		return $this->_validation;
	}

	public function check()
	{
		return $this->_validation->check();
	}

	public function error($field, $error, array $params = NULL)
	{
		return $this->_validation->error($field, $error, $params);
	}

	public function errors()
	{
		return $this->_validation->errors('validation');
	}
}