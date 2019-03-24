<?php
App::uses('AppModel', 'Model');
/**
 * Pago Model
 *
 * @property Auto $Auto
 */
class Pago extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Auto' => array(
			'className' => 'Auto',
			'foreignKey' => 'auto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
