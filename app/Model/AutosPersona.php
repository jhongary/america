<?php
App::uses('AppModel', 'Model');
/**
 * AutosPersona Model
 *
 * @property Persona $Persona
 * @property Auto $Auto
 */
class AutosPersona extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Auto' => array(
			'className' => 'Auto',
			'foreignKey' => 'auto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
