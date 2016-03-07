<?php

trait View_Helper_ImagePath {

	protected function get_image_path($type, $name, $width = 100, $height = 'n',$extension='png')
	{
		if ( empty($extension))
		{
			$extension = "png";
		}

		if ($type == 'avatar' AND ! file_exists('uploads/avatar/'.$name.'.'.$extension))
		{
			$name = 'default';
			$extension = "png";
		}

		return '/image/'.$type.'/'.$name.'_'.$width.'x'.$height.".".$extension;
	}

	protected function get_image($path, $width = 100, $height = 'n', $upscale = TRUE)
	{

		$path = str_replace('uploads/', '', $path);
		$path = urldecode($path);

		list($path, $ext) = explode('.', $path);
		if ( ! file_exists('uploads/'.$path.'.'.$ext))
		{
			return '/image/no-image_'.$width.'x'.$height.'.png';
		}

		if ($upscale === FALSE)
		{
			list($ori_width) = getimagesize('uploads/'.$path.'.'.$ext);
			if ($width > $ori_width)
			{
				$width = $ori_width;
				$height = 'n';
			}
		}

		return '/image/'.$path.'_'.$width.'x'.$height.'.'.$ext;
	}

	protected function get_image_legacy($legacy_path, $width = 100, $height = 'n', $upscale = TRUE)
	{

		$legacy_path = parse_url($legacy_path);
		$legacy_path['path'] = str_replace('/wordpress/wp-content/uploads/', '', $legacy_path['path']);
		$legacy_path['path'] = str_replace('/wp-content/uploads/', '', $legacy_path['path']);

		if (strpos($legacy_path['path'], '.') === FALSE)
		{

			return '/image/no-image_'.$width.'x'.$height.'.png';
		}

		list($path, $ext) = explode('.', $legacy_path['path']);

		if ( ! file_exists('uploads/legacy/'.$path.'.'.$ext))
		{
			return '/image/no-image_'.$width.'x'.$height.'.png';
		}

		if ($upscale === FALSE)
		{
			list($ori_width) = getimagesize('uploads/legacy/'.$path.'.'.$ext);
			if ($width > $ori_width)
			{
				$width = $ori_width;
				$height = 'n';
			}
		}

		return '/image/legacy/'.$path.'_'.$width.'x'.$height.'.'.$ext;
	}

	protected function get_advertisement_image($name)
	{
		if ( empty($name) OR ! file_exists('uploads/advertisements/'.$name))
		{
			return FALSE;
		}

		return '/uploads/advertisements/'.$name;
	}
}
