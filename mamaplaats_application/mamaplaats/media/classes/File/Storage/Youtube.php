<?php defined('SYSPATH') or die('No direct script access.');

class File_Storage_Youtube implements File_Storage_Interface {

	/**
	 * @var Google_YouTubeService
	 */
	private $_youtube_api;
	private $_config;

	public function __construct(array $config)
	{
		$this->_config = $config;

		// The Google Upload needs this to be able to process the video
		ini_set('memory_limit', '1024M');

		require Kohana::find_file('vendor', 'google-api-php-client/src/Google_Client','php');
		require Kohana::find_file('vendor', 'google-api-php-client/src/contrib/Google_YouTubeService','php');

		$this->_youtube_api = new Google_YouTubeService($this->_authenticate_client($this->_config));
	}

	public function store($category, File_Object $file, array $params = array())
	{
		try
		{
			$snippet = new Google_VideoSnippet();
			$snippet->setTitle($params['title']);
			$snippet->setDescription($params['description']);
			$snippet->setTags($params['tags']);
			$snippet->setCategoryId(22);

			$status = new Google_VideoStatus();
			$status->setPrivacyStatus($params['privacy']);

			$video = new Google_Video();
			$video->setSnippet($snippet);
			$video->setStatus($status);

			$createdFile = $this->_youtube_api->videos->insert('snippet,status', $video, array(
				'data' 		=> file_get_contents($file->path),
				'mimeType' 	=> $file->mime_type
			));

			return $createdFile;
		}
		catch (Exception $ex)
		{
			return $ex;
		}
	}

	public function get($file_name)
	{
		$video = $this->_youtube_api->videos->listVideos($this->_get_youtube_id($file_name), 'id,contentDetails');

		// Not implemented Yet
	}

	public function remove(File_Object $file)
	{
		$this->_youtube_api->videos->delete($this->_get_youtube_id($file->path));
	}

	private function _authenticate_client($config)
	{
		$client = new Google_Client();
		$client->setApplicationName($config['application_name']);
		$client->setClientId($config['client_id']);
		$client->setClientSecret($config['client_secret']);
		$client->setRedirectUri($config['redirect_uri']);
		$client->setDeveloperKey($config['developer_key']);
		$client->setAccessToken($config['token']);

		return $client;
	}

	private function _get_youtube_id($url)
	{
		parse_str(parse_url($url, PHP_URL_QUERY), $query);
		return $query['n'];
	}

	/**
	 * You need to use this once to get and api key hidden with private for now
	 */
	private function login_google_account()
	{
		$client = $this->_authenticate_client($this->_config);

		if (isset($_GET['code']))
		{
			$client->authenticate();
			$_SESSION['token'] = $client->getAccessToken();
			$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
			header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token']))
		{
			$client->setAccessToken($_SESSION['token']);
		}

		if ( ! $client->getAccessToken())
		{
			$authUrl = $client->createAuthUrl();
			print "<a href='$authUrl'>Connect Me!</a>";
		}
	}
}