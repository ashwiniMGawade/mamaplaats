<?php

use Codeception\Util\Stub;

class GetsReviewListTest extends \Codeception\TestCase\Test
{
	public function testIfSuggestionListIsLoaded()
	{
		$review_product_repository = $this->_create_review_product_repository_mock();
		$user_repository = $this->_create_user_repository_mock();

		$review_products = new Usecase_User_GetsReviewList($review_product_repository);
		$review_products= $review_products->execute($user_repository->load_object(array()));
		$this->assertEquals($review_products, array());
		
	}

	public function testIfSuubscribedListIsLoaded()
	{
		$review_product_repository = $this->_create_review_product_repository_mock();
		$user_repository = $this->_create_user_repository_mock();

		$review_products = new Usecase_User_GetsReviewList($review_product_repository);
		$review_products= $review_products->execute($user_repository->load_object(array()), true);

		$this->assertEquals($review_products, array());
	}


	private function _create_review_product_repository_mock()
	{
		$entity_return = array();
		$entity_return[] = array(
			'review_product' => new Entity_Review_Product(),
			'review' => new Entity_Review()
		);
		$blog = $this->getMock('Repository_Review_Product');

		$blog->expects($this->any())
			->method('load_set_for_user')
			->will($this->returnValue($entity_return));

		return $blog;
	}

	private function _create_user_repository_mock()
	{
		$user_entity = new Entity_User();
		$user_entity->id = 1;
		$user_entity->email = 'testing@smartshore.nl';
		$user_return = $user_entity;
		$user = $this->getMock('Repository_User');

		$user->expects($this->any())
			->method('load_object')
			->will($this->returnValue($user_return));

		return $user;
	}	
}