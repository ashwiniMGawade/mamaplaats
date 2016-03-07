<?php

use Codeception\Util\Stub;

class ObjectmapperTest extends \Codeception\TestCase\Test
{
	public function testIfTheObjectMapperAcceptsAnObjectAnArrayAndAWhitelist()
	{
		$object = new stdClass;
		$array = array();
		$whitelist = array();

		$object_mapper = new ObjectMapper;
		$object_mapper->map($array, $object, $whitelist);
	}

	public function testIfTheObjectMapperMapsArrayValuesToTheObjectValues()
	{
		$object = new stdClass;
		$object->title = '';


		$array = array('title' => 'title text here');
		$whitelist = array();

		$object_mapper = new ObjectMapper;
		$mapped_object = $object_mapper->map($array, $object, $whitelist);

		$this->assertEquals($mapped_object->title, 'title text here');
	}

	public function testIfTheObjectMapperDoesNotMapObjectValuesThatAreNotInTheWhitelist()
	{
		$object = new stdClass;
		$object->id = '';

		$array = array('id' => 1);
		$whitelist = array('title');

		$object_mapper = new ObjectMapper;
		$mapped_object = $object_mapper->map($array, $object, $whitelist);

		$this->assertEquals($mapped_object->id, '');
	}

	public function testIfTheObjectMapperMapsObjectValuesThatAreInTheWhitelist()
	{
		$object = new stdClass;
		$object->title = '';

		$array = array('title' => 'title text here');
		$whitelist = array('title');

		$object_mapper = new ObjectMapper;
		$mapped_object = $object_mapper->map($array, $object, $whitelist);

		$this->assertEquals($mapped_object->title, 'title text here');
	}

	public function testIfObjectMapperThrowsExceptionWhenTryingToFillObjectArrayValueWithDifferentType()
	{
		$this->setExpectedException('ObjectMapperException', 'Trying to fill object array value with different type');

		$object = new stdClass;
		$object->items = array();

		$array = array('items' => 'not an array');
		$whitelist = array();

		$object_mapper = new ObjectMapper;
		$object_mapper->map($array, $object, $whitelist);
	}

	public function testIfObjectMapperDoesNotMapArrayFieldsThatAreNotPresentInObjectArray()
	{
		$object = new stdClass;
		$object->existing_field = '';

		$array = array('not_existing_field'=>'value of not existing field');
		$whitelist = array();

		$object_mapper = new ObjectMapper;
		$mapped_object = $object_mapper->map($array, $object, $whitelist);

		$this->assertFalse(isset($mapped_object->not_existing_field));
	}

	public function testIfObjectMapperFactoryResturnsObjectMapperInstance()
	{
		$object_mapper = ObjectMapper::factory();
		$this->assertInstanceOf('ObjectMapper', $object_mapper);
	}

	public function testIfObjectMapperDoesMapTheWholeSubArraysWhenASubArrayIsPresent()
	{
		$object = new stdClass;
		$object->fields = array();

		$array = array('fields'=> array(
			array('item_title' => 'title'),
		));

		$whitelist = array('fields');

		$object_mapper = new ObjectMapper;
		$mapped_object = $object_mapper->map($array, $object, $whitelist);

		$this->assertEquals($mapped_object->fields[0]['item_title'], 'title');
	}

	public function testIfObjectMapperMergesSubArraysBasedOnIdField()
	{
		$object = new stdClass;
		$object->fields = array(
			array('id' => 1, 'item_title' => 'title'),
		);

		$array = array('fields'=> array(
			array('id' => 1, 'item_title' => 'title2'),
		));

		$whitelist = array('fields');

		$object_mapper = new ObjectMapper;
		$mapped_object = $object_mapper->map($array, $object, $whitelist);

		$this->assertEquals(array('id' => 1, 'item_title' => 'title2'), $mapped_object->fields[0]);
	}

	public function testIfObjectMapperPrependsSubArraysBasedOnIdField()
	{
		$object = new stdClass;
		$object->fields = array(
			array('id' => 1, 'item_title' => 'title'),
		);

		$array = array('fields'=> array(
			array('id' => 2, 'item_title' => 'title2'),
		));

		$whitelist = array('fields');

		$object_mapper = new ObjectMapper;
		$mapped_object = $object_mapper->map($array, $object, $whitelist);

		$this->assertEquals(array('id' => 2, 'item_title' => 'title2'), $mapped_object->fields[1]);
	}
}