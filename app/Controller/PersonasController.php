

<?php
App::uses('AppController', 'Controller');
class PersonasController extends AppController {

    public $uses = array('Persona','User','Auto');
    public $layout = 'monster';

    public function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow();
    }
    public function index() {
        
        $personas = $this->Persona->find('all');
        $this->set(compact('personas'));
    }
    public function persona($idPersona = NULL) {
       // $this->layout = 'ajax';
        $this->Persona->id = $idPersona;
        $this->request->data = $this->Persona->read();

        $autos = $this->Auto->find('list',array(
      'recursive' => -1,
      'conditions' => array('!ISNULL(user_id)'),
      'fields' => array('id','placa')
    ));
        //debug($autos);exit;
        
        $this->set(compact('idPersona','autos'));
    }
    public function guarda_persona() {
        if (!empty($this->request->data)) {

            if (!empty($this->request->data['Persona']['imagen_up']['name'])) {
                $archivo = $this->request->data['Persona']['imagen_up'];
                $extension = explode('.', $archivo['name']);
                $ext = end($extension);
                if ($archivo['error'] === UPLOAD_ERR_OK) {
                  $nombre = String::uuid();
                  if (move_uploaded_file($archivo['tmp_name'], WWW_ROOT . 'img/fotos' . DS . $nombre . '.' . $ext)) {
                    $nombre_archivo = $nombre . '.' . $ext;
                    $this->request->data['Persona']['imagen'] = $nombre_archivo;
                }
            } else {
              $this->Session->setFlash('Ocurrio un error al cargar la imagen ' . $archivo['name'], 'msgerror');
              $this->redirect($this->referer());
          }
      }


      
      $this->Persona->create();
      $valida = $this->validar('Persona');
      if (empty($valida)) {
        $this->request->data['Persona']['id_user'] = $this->Session->read('Auth.User.id');
        if ($this->Persona->save($this->request->data['Persona'])) {
            
            $this->Session->setFlash('Se registro correctamente los datos!!!', 'msgbueno');
        } else {
            $this->Session->setFlash('NO se pudo registrar los datos de la categoria!!!', 'msgerror');
        }
    } else {
        $this->Session->setFlash($valida, 'msgerror');
    }
} else {
    $this->Session->setFlash('NO se pudo registrar los datos de la categoria!!!', 'msgerror');
}
$this->redirect(array('controller'=>'Personas','action'=>'index'));
}
public function ver($idPersona = null)
{
    $this->Persona->id = $idPersona;
    $this->request->data = $this->Persona->read();
    $per = $this->Persona->read();
        //debug($per);exit;
    
    $this->set(compact('per'));
}



 public function eliminar($idPersona){
        $this->Persona->id = $idPersona;
        $e_persona['deleted'] = date('Y-m-d');
        $e_auto['auto_id'] = null;
        $this->Persona->save($e_persona);
        $this->Persona->save($e_auto);
        $this->Session->setFlash("Se ha eliminado al conductor exitosamente!!",'msgbueno');
        $this->redirect($this->referer());
    }

public function ajaxfoto($idPersona = null)
{
        //debug($idPersona);exit;
    $this->layout = 'ajax';
    $persona = $this->Persona->findByid($idPersona, null, null, null, null, -1);


    if (empty($persona['Persona']['imagen'])) {
        $imagen = 'user.jpg';
    } else {
        $imagen = 'fotos/' . $persona['Persona']['imagen'];
    }
    $this->set(compact('idPersona', 'persona', 'imagen'));
}

public function guardafoto()
{
    $archivoImagen = $this->request->data['Persona']['foto'];
    $nombreOriginal = $this->request->data['Persona']['foto']['name'];
    $idPersona = $this->request->data['Persona']['id'];
        //debug($idPersona);exit;

    if ($archivoImagen['error'] === UPLOAD_ERR_OK) {
            //$nombre = string::uuid();
        $nombre = $idPersona . date("Y-m-d H-i-s");
        $persona = $this->Persona->findByid($idPersona, null, null, null, null, -1);
            //debug($mascota['Mascota']['imagen']);exit;
        if (move_uploaded_file($archivoImagen['tmp_name'], WWW_ROOT . 'img/fotos' . DS . $nombre . '.jpg')) {
            if (!empty($persona['Persona']['imagen'])) {
                    $dir = WWW_ROOT . 'img/fotos' . DS . $persona['Persona']['imagen']; //puedes usar dobles comillas si quieres
                    if (file_exists($dir)) {
                        unlink($dir);
                    }
                }

                //$mascota = $this->Mascota->findByid($idMascota,null,null,null,null,-1);
                //debug($mascota);
                $this->Persona->id = $idPersona;
                $this->request->data = $this->Persona->read();
                //$this->Mascota->create();
                $this->request->data['Persona']['imagen'] = $nombre . '.jpg';
                //debug($this->request->data['Mascota']);exit;
                $this->Persona->save($this->request->data['Persona']);
                $this->Session->setFlash('Se gurado correctamente!!!', 'msgbueno');
                $this->redirect(array('action' => 'persona'));
            } else {
                $this->redirect(array('action' => 'persona'));
            }
        } else {
            $this->redirect(array('action' => 'persona'));
        }
    }


    public function verauto($idAuto = null)
    {
        $this->Auto->id = $idAuto;
        $this->request->data = $this->Auto->read();
        $auto = $this->Auto->read();
        //debug($per);exit;

        $this->set(compact('auto'));
    }

    public function auto($idAuto = null) {
        $this->layout = 'ajax';
        $this->Auto->id = $idAuto;
        $this->request->data = $this->Auto->read();
    }


    public function guarda_auto() {
        if (!empty($this->request->data)) {
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



    
    
}