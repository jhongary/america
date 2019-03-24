<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class AutosController extends AppController {

    public $uses = array('Auto','Persona');
    public $layout = 'monster';

    public function beforeFilter() {
        parent::beforeFilter();
        // $this->Auth->allow();
    }

    public function index() {
        $autos = $this->Auto->find('all',array(
            'recursive' => 1,
            'order' => 'Auto.id ASC',
            'limit' => 15));

       // $nro=$this->Auto.Persona.length
        //debug($nro);exit;


        $this->set(compact('autos'));
    }
   

    public function auto($idAuto = null) {
        $this->layout = 'ajax';
        $this->Auto->id = $idAuto;
        $this->request->data = $this->Auto->read();
    }


    public function guarda_auto() {
        if (!empty($this->request->data)) {
                if (!empty($this->request->data['Auto']['imagen_up']['name'])) {
                $archivo = $this->request->data['Auto']['imagen_up'];
                $extension = explode('.', $archivo['name']);
                $ext = end($extension);
                if ($archivo['error'] === UPLOAD_ERR_OK) {
                  $nombre = String::uuid();
                  if (move_uploaded_file($archivo['tmp_name'], WWW_ROOT . 'img/fotos' . DS . $nombre . '.' . $ext)) {
                    $nombre_archivo = $nombre . '.' . $ext;
                    $this->request->data['Auto']['imagen'] = $nombre_archivo;
                }
            } else {
              $this->Session->setFlash('Ocurrio un error al cargar la imagen ' . $archivo['name'], 'msgerror');
              $this->redirect($this->referer());
          }
      }

            $this->Auto->create();
            $valida = $this->validar('Auto');
            if (empty($valida)) {
                $this->request->data['Auto']['user_id'] = $this->Session->read('Auth.User.id');
                if ($this->Auto->save($this->request->data['Auto'])) {
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

    public function ver($idAuto = null)
    {
        $this->Auto->id = $idAuto;
        $this->request->data = $this->Auto->read();
        $auto = $this->Auto->read();
        
        //debug($auto);exit;

        $this->set(compact('auto'));
    }

    public function eliminar($idAuto = null) {
        if ($this->Auto->delete($idAuto)) {
            $this->Session->setFlash('Se elimino correctamente!!!', 'msgbueno');
        } else {
            $this->Session->setFlash('No se pudo eliminar, verifique que el auto exista!!!', 'msgerror');
        }
        $this->redirect($this->referer());
    }
    public function vercon($idPersona = null)
{

    $this->Persona->id = $idPersona;
    $this->request->data = $this->Persona->read();
    $per = $this->Persona->read();
        //debug($per);exit;
    
    $this->set(compact('per'));
}


    

 

}
