<?php defined('SYSPATH') or die('No direct script access.');


Route::set('image_resize', 'image/<image>_<width>x<height>.<ext>', array('image' => '[-0-9a-zA-Z_ /()]+', 'width' => '[0-9]+|n', 'height' => '[0-9]+|n'))
	->defaults(array(
		'directory' => 'Media',
		'controller' => 'Image',
		'action' => 'render'
	));