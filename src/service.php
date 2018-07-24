<?php
	namespace Divinityfound\ServicesApi;

	class Service
	{
		public $key;
		public $url = 'http://services.mathisonprojects.com/api/v1/';
		public $client;
		public $params = [];

		public function __construct($args = [])
		{
			$this->client = new \GuzzleHttp\Client();
			$this->url .= $args['method'];
			if (isset($args['args']) && count($args['args']) > 0) {
				$this->params[$args['type']] = $args['args'];
			}
		}

		public function call() {
			if ($this->params == []) {
	            $response = $this->client->request('POST', $this->url);
	        } else {
	            $response = $this->client->request('POST', $this->url, $this->params);
	        }

	        $responseBody = $response->getBody();
	        $responseBody = $responseBody->read(131072);

			return $responseBody;
		}
	}

?>