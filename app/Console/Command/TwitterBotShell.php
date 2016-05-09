<?php

App::uses('ComponentCollection', 'Controller');
App::uses('TwitterApiComponent', 'Controller/Component');

/**
 * CakePHP TwitterBotShell
 * @author Hiro
 */
class TwitterBotShell extends AppShell {

    public $uses = array('Remark');
	public $tasks = array();

	/**
	 *
	 * @var TwitterApiComponet
	 */
	private $Twitter;

	public function startup() {
        parent::startup();
		$this->Twitter = new TwitterApiComponent(new ComponentCollection());
	}

	public function main() {

		// tweet文言をdbから取得
		$remarks = $this->Remark->find('all');
		$cnt = count($remarks);
		if ($cnt == 0) {
			$this->out(__METHOD__ . ' データが無い');
			return;
		}
		$key = array_rand($remarks);
		$targetRemark = $remarks[$key];

		$message = sprintf('%s  by %s', $targetRemark['Remark']['remark'], $targetRemark['Remark']['by']);

		// tweet
		$response = $this->Twitter->post($message);
		debug($response);
		if ($response->getHeader('status') === '200 OK') {
			$this->log('Success tweet!  message : ' . $message, LOG_INFO);
		} else {
			$this->log('Failed tweet!  message : ' . $message, LOG_ERR);
		}
	}
}
