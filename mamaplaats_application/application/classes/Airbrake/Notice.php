<?php defined('SYSPATH') OR die('No direct script access.');


class Airbrake_Notice extends Kohana_Airbrake_Notice {

	/**
	 * Robert-Jan: Overloading the as_xml class to support classes saved in sessions. Fix this later by not storing
	 * classes in sessions!!!!
	 */
	public function as_xml()
	{
		// Create document with API version and API key
		$notice = new SimpleXMLElement('<?xml version="1.0"?><notice />');
		$notice->addAttribute('version', Airbrake::API_VERSION);
		$notice->addChild('api-key', $this->api_key);

		// Attach notifier information
		$notifier = $notice->addChild('notifier');
		$notifier->addChild('name', $this->notifier_name);
		$notifier->addChild('version', $this->notifier_version);
		$notifier->addChild('url', $this->notifier_url);

		// Attach error details and backtrace
		$error = $notice->addChild('error');
		$error->addChild('class', $this->error_class);
		$error->addChild('message', $this->error_message);
		$this->backtrace->as_xml($error);

		// Attach environment and request variables
		if ($this->url OR $this->component OR $this->action)
		{
			$request = $notice->addChild('request');
			$request->addChild('url', $this->url);
			$request->addChild('component', $this->component);
			$request->addChild('action', $this->action);

			if ($this->parameters !== NULL AND ! empty($this->parameters))
			{
				// Attach parameters
				$this->xml_vars_for($request->addChild('params'), $this->parameters);
			}

			if ($this->session_data !== NULL AND ! empty($this->session_data))
			{
				// ------------ Start Patch --------- //
				if ( ! empty($this->session_data['auth_user']) AND is_object($this->session_data['auth_user']))
				{
					$this->session_data['auth_user'] = get_object_vars($this->session_data['auth_user']);
				}
				// ------------ End Patch --------- //

				// Attach session data
				$this->xml_vars_for($request->addChild('session'), $this->session_data);
			}

			if ($this->cgi_data !== NULL AND ! empty($this->cgi_data))
			{
				// Attach environment data
				$this->xml_vars_for($request->addChild('cgi-data'), $this->cgi_data);
			}
		}

		// Attach server environment details
		$server = $notice->addChild('server-environment');
		$server->addChild('project-root', $this->project_root);
		$server->addChild('environment-name', $this->environment_name);
		$server->addChild('hostname', $this->hostname);

		return $notice->asXML();
	}
}