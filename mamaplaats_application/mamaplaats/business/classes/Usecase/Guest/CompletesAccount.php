<?php

class Usecase_Guest_CompletesAccount {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_User_Child
	 */
	private $_repository_child;

	/**
	 * @var Validate_User
	 */
	private $_validate_user;

	/**
	 * @var Validate_User_Child
	 */
	private $_validate_child;

	public function __construct($repository_user, $repository_child, $validate_user, $validate_child)
	{
		$this->_repository_user 		= $repository_user;
		$this->_repository_child 		= $repository_child;
		$this->_validate_user 			= $validate_user;
		$this->_validate_child 			= $validate_child;
	}

	public function execute($user_id, $key, $fields)
	{

		$user = $this->_repository_user->load_object(array(array('id', '=', $user_id), array('activation_key', '=', $key)));
		if (!empty($user)) {
			$user->pregnancy_due_date = ( ! empty($fields['pregnancy_due_date'])) ? $fields['pregnancy_due_date'] : NULL;
			$user->children = Arr::get($fields, 'children', array());

			// Validate the user & children
			$this->_validate_user($user);
			$this->_validate_children($user->children);

			// Set the user to activated and clean the key since the user is completely activated now
			$user->activation_key = '';
			$user->status = 1;

			// Update the user, children and subscriber
			$this->_repository_user->update($user);
		}

		return $user;
	}

	private function _validate_user(Entity_User $user)
	{
		$this->_validate_user->load($user->as_array());
		$this->_validate_user->default_rules();

		if ($this->_validate_user->check() !== TRUE)
		{
			throw new Validate_Exception('This User is not Valid!', $this->_validate_user->errors());
		}
	}

	private function _validate_children(array $children)
	{
		foreach ($children as $child)
		{
			$this->_validate_child->load($child);
			$this->_validate_child->default_rules();

			if ($this->_validate_child->check() !== TRUE)
			{
				throw new Validate_Exception('This User is not Valid!', $this->_validate_child->errors());
			}
		}
	}
}
