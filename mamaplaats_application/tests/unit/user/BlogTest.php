<?php

use Codeception\Util\Stub;

class BlogTest extends \Codeception\TestCase\Test
{
	public function testGetsOwnBlogList()
	{
		$entity_user = new Entity_User;

		$blog_repository = $this->_create_blog_repository_mock(array());

		$limit = 15;
		$offset = 0;
		$blog_list = new Usecase_User_GetsOwnBlogList($blog_repository);

		$add_filters = array(
			array('blog.post_author', '=', 1),
			array('blog.post_status', '=', 'draft')
		);

		$return_value = $blog_list->execute($entity_user, $add_filters,$limit, $offset);

		$required_values = array();

		$this->assertEquals($return_value, $required_values);
	}

	public function testMostReadBlogList()
	{
		$blog_repository = $this->_create_blog_repository_mock(array());

		$limit = 15;
		$offset = 0;
		$blog_list = new Usecase_User_GetsMostReadBlogs($blog_repository);

		$filters = array(
			array('blog.post_date', '>', date('Y-m-d 00:00:00', strtotime('-30 days'))),
		);

		$return_value = $blog_list->execute($filters, $limit, $offset);

		$required_values = array();

		$this->assertEquals($return_value, $required_values);
	}

	public function testFollowingUsersBlogList()
	{
		$entity_user = new Entity_User;

		$blog_repository = $this->_create_blog_repository_mock(array());
		$following_repository = $this->_create_following_repository_mock(array());

		$limit = 15;
		$offset = 0;
		$blog_list = new Usecase_User_GetsFollowingUsersBlogList($following_repository, $blog_repository);

		$return_value = $blog_list->execute($entity_user, $limit, $offset);

		$required_values = array();

		$this->assertEquals($return_value, $required_values);
	}

    public function testItShouldGetAdminBlogsListWhenUserIsOnAdminBlogListPage()
    {
        $blog_repository = $this->_create_blog_repository_mock(array());

        $limit = 15;
        $offset = 0;

        $filters = array(
            'post_status' => 'publish'
        );

        $blog_list = new Usecase_User_GetsAdminBlogList($blog_repository);
        $return_value = $blog_list->execute($filters, $limit, $offset);
        $required_values = array();
        $this->assertEquals($return_value, $required_values);
    }

	private function _create_blog_repository_mock($blog_list)
	{
		$blog = $this->getMock('Repository_Blog');

		$blog->expects($this->once())
			->method('load_set_advanced')
			->will($this->returnValue($blog_list));

		return $blog;
	}

	private function _create_following_repository_mock($followers)
	{
		$follower = $this->getMock('Repository_Follower');

		$follower->expects($this->any())
			->method('get_following_users')
			->will($this->returnValue($followers));

		return $follower;
	}
}