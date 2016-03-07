<?php

use Codeception\Util\Stub;

class GetsSearchAdviseListTest extends \Codeception\TestCase\Test
{

    public function testItShouldReturnSearchResultWhenNoCategorySpecified()
    {
        $entity_advise = new Entity_Advise();
        $advise_repository = $this->_create_advise_repository_mock($entity_advise, 'any', 'once');

        $query = array('query' => 'm');

        $guest_gets_searched_advise_list = new Usecase_Guest_GetsSearchAdviseList($advise_repository, null, null);

        $guest_gets_searched_advise_list->execute('', $query, 5, 0);
    }

    public function testItShouldReturnSearchResultWhenCategoryIsSpecified()
    {
        $entity_advise = new Entity_Advise();
        $advise_repository = $this->_create_advise_repository_mock($entity_advise, 'once', 'any');

        $entity_category = new Entity_Category();
        $entity_category->id = 1;
        $entity_category->term_id = 11;

        $category_repository = $this->_create_category_repository_mock($entity_category);

        $query = array('query' => 'm');

        $guest_gets_searched_advise_list = new Usecase_Guest_GetsSearchAdviseList($advise_repository, $category_repository, new Item_Nester());

        $guest_gets_searched_advise_list->execute('babys', $query, 5, 0);
    }

    private function _create_advise_repository_mock($entity_return, $call_to_load_advies_by_category_id, $call_to_load_set_advanced)
    {
        $advise = $this->getMock('Repository_Advise');

        $advise->expects($this->$call_to_load_advies_by_category_id())
            ->method('load_advies_by_category_id')
            ->will($this->returnValue($entity_return));

        $advise->expects($this->$call_to_load_set_advanced())
            ->method('load_set_advanced')
            ->will($this->returnValue($entity_return));

        return $advise;
    }


    private function _create_category_repository_mock($entity_return)
    {
        $category = $this->getMock('Repository_Category');

        $category->expects($this->once())
            ->method('load_set')
            ->will($this->returnValue(array($entity_return)));

        $category->expects($this->once())
            ->method('load_object')
            ->will($this->returnValue($entity_return));

        return $category;
    }
}