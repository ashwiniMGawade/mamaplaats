<?php

require_once('mamaplaats/core/classes/View/Helper/ImagePath.php');
require_once('mamaplaats/business/classes/Media/UserProfileImageExtension.php');
require_once('mamaplaats/business/classes/Widget/ActiveAuthors.php');



use Codeception\Util\Stub;

class ProfileImageExtensionTest extends \Codeception\TestCase\Test
{
	use View_Helper_ImagePath;
	use Media_UserProfileImageExtension;

	public function testProfileImagePathIsCorrect()
	{
		$imagePath = $this->get_image_path('avatar','10','100','100','jpg');
		$this->assertEquals('/image/avatar/default_100x100.png',$imagePath);
	}

	public function testReturnDefaultImagePathWhenProfileImageNotExists()
	{
		$imagePath = $this->get_image_path('avatar','01','100','100','jpg');
		$this->assertEquals('/image/avatar/default_100x100.png',$imagePath);
	}

	public function testReturnEmptyWhenNoActiveAuthorAvailable()
	{
		$author_repository = $this->_create_author_repository_mock(array());

		$widget_active_authors = new Widget_ActiveAuthors($author_repository);

		$return_value = $widget_active_authors->load();

		$this->assertEquals($return_value, array());
	}

	private function _create_author_repository_mock($active_authors)
	{
		$author = $this->getMock('Repository_User');

		$author->expects($this->any())
			->method('load_set_latest_active')
			->will($this->returnValue($active_authors));

		return $author;
	}
}