<?php
App::uses('AppModel', 'Model');
/**
 * Remark Model
 *
 * @property User $User
 */
class Remark extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'local';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'remark';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'remark' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
