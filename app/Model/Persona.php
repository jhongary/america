<?php
App::uses('AppModel', 'Model');
/**
 * Persona Model
 *
 * @property Auto $Auto
 * @property Auto $Auto
 * @property Auto $Auto
 */
class Persona extends AppModel {


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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Auto' => array(
			'className' => 'Auto',
			'foreignKey' => 'persona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Auto' => array(
			'className' => 'Auto',
			'joinTable' => 'autos_personas',
			'foreignKey' => 'persona_id',
			'associationForeignKey' => 'auto_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
