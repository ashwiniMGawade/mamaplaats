<?php

use Codeception\Util\Stub;

class UpdatesOwnBlogTest extends \Codeception\TestCase\Test
{
    public function testItShouldThrowExceptionWhenBlogDoesNotExist()
    {
        $this->setExpectedException('Exception', 'This blog does not exist');

        $user_repository = $this->_create_user_repository_mock();
        $blog_repository = $this->_create_blog_repository_mock(array());
        $legacy_media_repository = $this->_create_legacy_media_repository_mock(array(), "any");
        $category_repository = $this->_create_category_repository_mock();

        $user = $user_repository->load_object(array());

        $usecase = new Usecase_User_GetsOwnBlog(
            $blog_repository,
            $legacy_media_repository,
            $category_repository
        );
        $usecase->execute($user, 11);
    }

    public function testItShouldThrowExceptionWhenBlogIsNotOwnedByTheLoggedInUser()
    {
        $this->setExpectedException('Exception', 'This blog does not belong to you');

        $entity_blog = new Entity_Blog();
        $entity_blog->id = 1;
        $entity_blog->author_id = 11;
        $entity_blog->created = date('Y-m-d H:i:s', time());
        $entity_blog->thumbnail_id = '';

        $user_repository = $this->_create_user_repository_mock();
        $blog_repository = $this->_create_blog_repository_mock($entity_blog);
        $legacy_media_repository = $this->_create_legacy_media_repository_mock(array(), "any");
        $category_repository = $this->_create_category_repository_mock();

        $user = $user_repository->load_object(array());

        $usecase = new Usecase_User_GetsOwnBlog(
            $blog_repository,
            $legacy_media_repository,
            $category_repository
        );
        $usecase->execute($user, 1);
    }

    public function testItShouldGetThumbnailFromMediaRepositoryWhenThumbnailIdIsNotEmpty()
    {

        $entity_blog = new Entity_Blog();
        $entity_blog->id = 1;
        $entity_blog->author_id = 1;
        $entity_blog->created = date('Y-m-d H:i:s', time());
        $entity_blog->thumbnail_id = 1;

        $entity_media = new Entity_Media();
        $entity_media->path = "test";

        $user_repository = $this->_create_user_repository_mock();
        $blog_repository = $this->_create_blog_repository_mock($entity_blog);
        $legacy_media_repository = $this->_create_legacy_media_repository_mock($entity_media, "once");
        $category_repository = $this->_create_category_repository_mock();

        $user = $user_repository->load_object(array());

        $usecase = new Usecase_User_GetsOwnBlog(
            $blog_repository,
            $legacy_media_repository,
            $category_repository
        );
        $usecase->execute($user, 1);
    }

    public function testItShouldUpdateTheBlogWhenValidDataIsPassed()
    {
        $entity_blog = new Entity_Blog();
        $entity_blog->id = 1;
        $entity_blog->author_id = 1;
        $entity_blog->created = date('Y-m-d H:i:s', time());
        $entity_blog->thumbnail_id = '';

        $user_repository = $this->_create_user_repository_mock();
        $blog_repository = $this->_create_blog_repository_mock($entity_blog);
        $legacy_media_repository = $this->_create_legacy_media_repository_mock(array(), "any");
        $category_repository = $this->_create_category_repository_mock();

        $user = $user_repository->load_object(array());

        $usecase = new Usecase_User_GetsOwnBlog(
            $blog_repository,
            $legacy_media_repository,
            $category_repository
        );
        $return_value = $usecase->execute($user, 1);
        $this->assertEquals($return_value, $entity_blog);
    }

    private function _create_blog_repository_mock($entity_return = array())
    {
        $blog = $this->getMock('Repository_Blog');

        $blog->expects($this->any())
            ->method('load_object')
            ->will($this->returnValue($entity_return));

        return $blog;
    }

    private function _create_legacy_media_repository_mock($entity_return = array(), $called_times)
    {
        $media = $this->getMock('Repository_Legacy_Media');

        $media->expects($this->$called_times())
            ->method('load_object')
            ->will($this->returnValue($entity_return));
        return $media;
    }

    private function _create_category_repository_mock()
    {
        $entity_return = array();
        $category = $this->getMock('Repository_Category');

        $category->expects($this->any())
            ->method('load_object')
            ->will($this->returnValue($entity_return));
        return $category;
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