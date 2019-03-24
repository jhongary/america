<?php
App::uses('AppController', 'Controller');
class PagosController extends AppController {

    public $uses = array('Pago','Persona');
    public $layout = 'monster';

    public function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow();
    }
    public function pagos($idPersona) {
    	$persona = $this->Persona->find('first',array(
    		'recursive' => -1,
    		'conditions' => array('id' => $idPersona),

    	));
    	$pagos = $this->Pago->find('all',array(
    		'recursive' => 0,
    		'joins' => array(
		        array(
		            'table' => 'autos_personas',
		            'alias' => 'AutosPersona',
		            'type' => 'LEFT',
		            'conditions' => array(
		                'AutosPersona.auto_id = Pago.auto_id'
		            )
		        )
		    ),
    		'conditions' => array(
    			'AutosPersona.persona_id' => $idPersona
    		)

    	));
    	$this->set(compact('persona','pagos'));
    }
}
