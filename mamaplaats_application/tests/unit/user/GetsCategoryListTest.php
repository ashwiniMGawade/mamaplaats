<?php
use Codeception\Util\Stub;

class GetsCategoryListTest extends \Codeception\TestCase\Test
{

    public function testItShouldReturnCategoriyListWhenParentIsSpecified()
    {
        $repository_category = $this->_create_category_repository_mock(array());

        $get_category_list = new Usecase_User_GetsCategoryList($repository_category);

        $parent_id = 0;
        $return_value = $get_category_list->execute($parent_id);
        $this->assertEquals($return_value, array());
    }

    public function testHaltExecutionAndReturnFalseWhenNoParentIsSpecified()
    {
        $repository_category = $this->_create_category_repository_mock(array());

        $get_category_list = new Usecase_User_GetsCategoryList($repository_category);

        $parent_id = null;

        $return_value = $get_category_list->execute($parent_id);

        $this->assertEquals($return_value, false);
    }


    private function _create_category_repository_mock($entity_return)
    {
        $blog = $this->getMock('Repository_Category');

        $blog->expects($this->any())
            ->method('load_set')
            ->will($this->returnValue($entity_return));

        return $blog;
    }
}