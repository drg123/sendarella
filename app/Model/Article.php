<?php
App::uses('AppModel', 'Model');
/**
 * Email Model
 *
 * @property User $User
 */
class Article extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Newsletter' => array(
			'className' => 'Newsletter',
			'foreignKey' => 'newsletter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);
}
