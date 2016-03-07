<?php

use Codeception\Util\Stub;

class GetsWinListTest extends \Codeception\TestCase\Test
{

    public function testItShouldLoadSubscribedWinListWhenUserIsOnSubscribedWinListPage()
    {
        $win_product_repository = $this->_create_win_repository_mock();
        $comment_repository = $this->_create_comment_repository_mock();
        $user_repository = $this->_create_user_repository_mock();

        $Win_products = new Usecase_User_GetsWinList($win_product_repository, $comment_repository);

        $limit =  15;
        $offset =  0;

        $win_list = $Win_products->execute($user_repository->load_object(array()), 'subscribed', $limit, $offset);
        $this->assertEquals($win_list, array(
            'open' => array(array(
                'win' => new Entity_Win(),
                'user' => new Entity_User(),
                'media' => new Entity_Media()
            )),
            'closed'=>array(array(
                'win' => new Entity_Win(),
                'user' => new Entity_User(),
                'media' => new Entity_Media()
            ))
        ));
    }

    public function testItShouldLoadUnSubscribedWinListWhenUserIsOnWinListSuggestionPage()
    {
        $win_product_repository = $this->_create_win_repository_mock();
        $comment_repository = $this->_create_comment_repository_mock();
        $user_repository = $this->_create_user_repository_mock();

        $Win_products = new Usecase_User_GetsWinList($win_product_repository, $comment_repository);

        $limit =  15;
        $offset =  0;
        // Factory_User::gets_review_list()
        $win_list = $Win_products->execute($user_repository->load_object(array()), 'suggestions', $limit, $offset);

        $this->assertEquals($win_list, array(
            'open' => array(array(
                'win' => new Entity_Win(),
                'user' => new Entity_User(),
                'media' => new Entity_Media()
            )),
            'closed'=>array(array(
                'win' => new Entity_Win(),
                'user' => new Entity_User(),
                'media' => new Entity_Media()
            ))
        ));
    }


    private function _create_win_repository_mock()
    {
        $entity_return = array();
        $entity_return[] = array(
            'win' => new Entity_Win(),
            'user' => new Entity_User(),
            'media' => new Entity_Media()
        );
        $win = $this->getMock('Repository_Win');

        $win->expects($this->any())
            ->method('load_set_by_category_id')
            ->will($this->returnValue($entity_return));

        return $win;
    }

    private function _create_comment_repository_mock()
    {
        $entity_return = array();
        $entity_return[] = new Entity_Comment();
        $comment = $this->getMock('Repository_Comment');

        $comment->expects($this->any())
            ->method('load_set')
            ->will($this->returnValue($entity_return));

        return $comment;
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