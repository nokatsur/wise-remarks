<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
		'Auth' => array(
			'authenticate' => array(
				'Form' => array(
					'userModel' => 'User',
					'fields' => array(
						'username' => 'username',
						'password' => 'password',
					),
				),
			),
			'loginAction' => array(
				'controller' => 'users',
				'action' => 'login',
				'admin' => true,
			),
			'logoutRedirect' => array(
				'controller' => 'users',
				'action' => 'login',
				'admin' => true,
			),
			'loginRedirect' => array(
				'controller' => 'users',
				'action' => 'index',
				'admin' => true,
			)
		),
		'flash' => array(
			'element' => null,
			'params' => array(),
			'key' => 'flash',
		),
		'Flash',
		'Paginator',
		'RequestHandler',
		'DebugKit.Toolbar'
	);

	public $helpers = array('Html', 'Form', 'Session');

/**
 * Run before all controller's action
 *
 * @return void
 */
	public function beforeFilter() {
		// Set layout
		if (isset($this->params['plugin']) && $this->params['plugin'] === 'acl') {
			$this->layout = 'default';
		} elseif (strstr($_SERVER['SCRIPT_NAME'], 'admin')) {
			$this->layout = 'admin';
		}
	}
}
