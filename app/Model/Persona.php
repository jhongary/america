<?php
App::uses('AppModel', 'Model');
/**
 * Persona Model
 *
 * @property Auto $Auto
 */
class Persona extends AppModel {


		//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = 'Auto';
}