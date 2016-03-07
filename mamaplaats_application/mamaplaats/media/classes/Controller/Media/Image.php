<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Media_Image extends Controller {

	public function action_render()
	{
		$file = $this->request->param('image');
		$width = $this->request->param('width');
		$height = $this->request->param('height');
		$ext = $this->request->param('ext');

		try
		{
			$file_storage = File_Storage_Factory::file_system();
			$file = $file_storage->get($file.'.'.$ext);
			$path = $file->path;

			$this->_render_image($path, $width, $height);
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404('Picture does not exist');
		}
	}

	protected function _render_image($file_path, $width, $height)
	{
		// Spin up the local cache
		$cache = Cache::instance();

		// Calculate ETag from original file padded with the dimension specs
		$etag_sum = md5(base64_encode(file_get_contents($file_path)).$width.','.$height);

		// Render as image and cache for 1 hour
		$this->response->headers('Content-Type', 'image/jpeg')
			->headers('Cache-Control', 'max-age=31536000, public, must-revalidate')
			->headers('Expires', gmdate('D, d M Y H:i:s', time() + 31536000).' GMT')
			->headers('Last-Modified', date('r', filemtime($file_path)))
			->headers('ETag', $etag_sum);

		// Make sure we resize only 1 side
		$width = (is_numeric($width)) ? $width : NULL;
		$height = (is_numeric($height)) ? $height : NULL;

		if ($this->request->headers('if-none-match') AND
			(string) $this->request->headers('if-none-match') === $etag_sum)
		{
			$this->response->status(304)->headers('Content-Length', '0');
		}
		else
		{

			$image_rendered = base64_decode($cache->get('image_'.$etag_sum));

			// Render the file if there is no cache hit
			if (empty($image_rendered))
			{
				// Choose resize method
				$method = NULL;
				if (is_numeric($width) AND is_numeric($height))
				{
					$method = Image::INVERSE;
				}

				// Resize and Crop the Image
				$image_rendered = Image::factory($file_path)->resize($width, $height, $method);
				if ($method !== NULL)
				{
					$image_rendered->crop($width, $height);
				}

				$image_rendered->render('jpg', 70);

				// Save image in local cache
				$cache->set('image_'.$etag_sum, base64_encode($image_rendered));
			}

			$this->response->body($image_rendered);
		}
	}
}
