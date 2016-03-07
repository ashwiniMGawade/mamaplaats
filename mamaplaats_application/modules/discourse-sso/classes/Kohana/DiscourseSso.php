<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Class Kohana_DiscourseSso
 */
class Kohana_DiscourseSso  {

	/**
	 * @var
	 */
	private $secret;

	/**
	 * Creates a new DiscourseSso object.
	 *
	 * @param array $config
	 * @return DiscourseSso
	 */
	public static function factory(array $config = array())
	{
		return new DiscourseSso($config);
	}

	/**
	 * Creates a new DiscourseSso object.
	 *
	 * @param array $config configuration information
	 * @throws Exception
	 */
	public function __construct(array $config = array())
	{
		// Load configuration from DiscourseSso config file
		$this->_config = ( ! empty($config)) ? $config : Kohana::$config->load('settings')->get('forum');
	}

	public function setSecret() {
		$this->secret = $this->_config['secret_key'];
	}

	/**
	 * @param $payload
	 * @param $signature
	 * @return mixed
	 */
	public function validatePayload($payload, $signature) {
		$payload = urldecode($payload);
		return $this->signPayload($payload) === $signature;
	}

	/**
	 * @param $payload
	 * @return mixed
	 * @throws Exception
	 */
	public function getNonce($payload) {
		$payload = urldecode($payload);
		$query = array();
		parse_str(base64_decode($payload), $query);
		if (!array_key_exists('nonce', $query)) {
			throw new Exception('Nonce not found in payload');
		}
		return $query['nonce'];
	}

	/**
	 * @param $nonce
	 * @param $id
	 * @param $email
	 * @param array $extraParameters
	 * @return string
	 */
	public function getSignInString($nonce, $id, $email, $extraParameters = array()) {
		$parameters = array(
			'nonce' => $nonce,
			'external_id' => $id,
			'email' => $email,
			'avatar_url' => $this->get_image_path('avatar', $id, 140, 120, $extraParameters['profile_image_ext']),
			'avatar_force_update' => 'true'
		);
		$parameters = array_merge($parameters, $extraParameters);
		$payload = base64_encode(http_build_query($parameters));
		$data = array(
			'sso' => $payload,
			'sig' => $this->signPayload($payload)
		);
		return http_build_query($data);
	}

	/**
	 * @param $payload
	 * @return string
	 */
	protected function signPayload($payload) {
		return hash_hmac('sha256', $payload, $this->secret);
	}

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

		return URL::base().'image/'.$type.'/'.$name.'_'.$width.'x'.$height.".".$extension;
	}
}
