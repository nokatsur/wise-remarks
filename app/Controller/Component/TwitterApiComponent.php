<?php

App::uses('Component', 'Controller');
App::uses('ComponentCollection', 'Controller');
App::import('Vendor', 'OAuth/OAuthClient');

/**
 *
 * @author Hiro
 */
class TwitterApiComponent extends Component {

	/**
	 *
	 * @var OAuthClient
	 */
	private $OAuthClient;

	public function __construct(\ComponentCollection $collection, $settings = array()) {
		parent::__construct($collection, $settings);
		$this->createClient();
	}

	public function post($message) {
		return $this->OAuthClient->post(
						TWITTER_ACCESS_TOKEN,
						TWITTER_ACCESS_TOKEN_SECRET,
						'https://api.twitter.com/1.1/statuses/update.json',
						array('status' => $message)
		);
    }

    private function createClient() {
        $this->OAuthClient = new OAuthClient(
				TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET
		);
	}


}
