<?php

class Entity
{
	/**
	 * Global constructor for entities
	 * @param array $data
	 */
	public function __construct($data = NULL)
	{
		if ( ! empty($data))
		{
			$this->exchange_data($data);
		}
	}

	public function as_array()
	{
		return get_object_vars($this);
	}

	public function set_fields(array $data)
	{
		foreach (array_intersect_key($data, $this->as_array()) as $key => $value)
		{
			$this->$key = $value;
		}
	}

	private function exchange_data($data)
	{
		foreach ($this as $name => $value)
		{
			$this->{$name} = NULL;

			if (array_key_exists($name, $data))
			{
				$this->{$name} = $data[$name];
			}
		}
	}
}