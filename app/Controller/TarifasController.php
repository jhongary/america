<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class TarifasController extends AppController {

    public $uses = array('Tarifa','User');
     var $components = array('RequestHandler', 'DataTable');
    public $layout = 'monster';

    public function beforeFilter() {
        parent::beforeFilter();

         if ($this->RequestHandler->responseType() == 'json') {
      $this->RequestHandler->setContent('json', 'application/json');
    }
        // $this->Auth->allow();
    }

    public function index() {
        $tarifas = $this->Tarifa->find('all');
       // $nro=$this->Auto.Persona.length
       // debug($tarifas);exit;
        $this->set(compact('tarifas'));
    }

    public function index2() {
    //$this->Cliente->recursive = 0;
    //$this->set('clientes', $this->paginate());
    //debug($clientes);exit;
    if ($this->RequestHandler->responseType() == 'json') {
      $sql = "(SELECT * FROM tarifas )";
      
      $editar = '<button class="button orange-gradient compact icon-pencil" type="button" onclick="editarc(' . "',Tarifa.id,'" . ')">Editar</button>';
      $elimina = '<button class="button red-gradient compact icon-cross-round" type="button" onclick="eliminarc(' . "',Tarifa.id,'" . ')">Eliminar</button>';
      $acciones = "$editar $elimina";
      $this->Tarifa->virtualFields = array(
        'distribuidor' => "$sql",
        'acciones' => "CONCAT('$acciones')"
      );
      $this->DataTable->fields = array('tarifa.inicio', 'tarifa.destino', 'tarifa.diurno', 'tarifa.nocturno', 'tarifa.acciones');
        $this->set('tarifas', $this->DataTable->getResponse());
      $this->set('_serialize', 'tarifas');
    }
    
  }

   

    public function tarifa($idTarifa = null) {
        $this->layout = 'ajax';
        $this->Tarifa->id = $idTarifa;
        $this->request->data = $this->Tarifa->read();
    }


    public function guarda_tarifa() {
        if (!empty($this->request->data)) {
            $this->Tarifa->create();
            $valida = $this->validar('Tarifa');
            if (empty($valida)) {
               // $this->request->data['Tarifa']['user_id'] = $this->Session->read('Auth.User.id');
                if ($this->Tarifa->save($this->request->data['Tarifa'])) {
                    $this->Session->setFlash('Se registro correctamente los datos!!!', 'msgbueno');
                } else {
                    $this->Session->setFlash('NO se pudo registrar los datos del auto!!!', 'msgerror');
                }
            } else {
                $this->Session->setFlash($valida, 'msgerror');
            }
        } else {
            $this->Session->setFlash('NO se pudo registrar los datos del auto!!!', 'msgerror');
        }
        $this->redirect($this->referer());
    }

   

    public function eliminar($idTarifa = null) {
        if ($this->Tarifa->delete($idTarifa)) {
            $this->Session->setFlash('Se elimino correctamente!!!', 'msgbueno');
        } else {
            $this->Session->setFlash('No se pudo eliminar, verifique que el auto exista!!!', 'msgerror');
        }
        $this->redirect($this->referer());
    }



    

 

}
