<?php
require_once 'model/seguimiento.php';

class SeguimientoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new seguimiento();
    }


    public function seguimiento(){

        require_once 'view/seguimientos/seguimiento.php';

    }

    public function carga_tramite(){

        require_once 'view/seguimientos/carga_tramite.php';

    }

    public function datalle(){

        require_once 'view/seguimientos/detalle.php';

    } 

public function Eliminar(){

    $ip = $_SERVER['REMOTE_ADDR']; 

    if($ip == "10.11.30.21"){

        $id_seg=$_REQUEST['id_seg'];

        $this->model->eliminar_detalle($_REQUEST['id']);
       
        
        $seguimiento = $this->model->Obtener($id_seg);

        require_once 'view/seguimientos/eliminar.php';
        require_once 'view/seguimientos/detalle.php';

        }else{

            require_once 'view/sociales/validado.php';
            $this->seguimiento();
            
        }

    }    

public function Crud(){

        $seguimiento = new seguimiento();

        $ip = $_SERVER['REMOTE_ADDR']; 

        if(isset($_REQUEST['id'])){
            $seguimiento = $this->model->Obtener($_REQUEST['id']);
            
            require_once 'view/seguimientos/detalle.php';

    }

}   


function obser(){

        $alm = new seguimiento();

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id_crud=($_REQUEST['id']);

        $alm->id = $_REQUEST['id'];
        $alm->iniciador =($_REQUEST['iniciador']);
        $alm->observaciones = trim($_REQUEST['observaciones']);
        

        $this->model->reg_observacion($alm);
        
        
        $seguimiento = $this->model->Obtener($id_crud);

        require_once 'view/sociales/correcto.php';
        require_once 'view/seguimientos/detalle.php';
        $id_crud="";
        
    }//if cierre
        
        
    }




function guardar_tramite(){

    $ip = $_SERVER['REMOTE_ADDR']; 

    if($ip == "10.11.30.21"){

        $alm = new seguimiento();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $alm->apellido = trim($_REQUEST['apellido']);
        $alm->telefono = trim($_REQUEST['telefono']);
        $alm->expediente = trim($_REQUEST['expediente']);
        $alm->tramite = $_REQUEST['tramite'];
        $alm->estado ="1";

        $this->model->Registrar($alm);
        
        require_once 'view/sociales/correcto.php';
        require_once 'view/seguimientos/seguimiento.php';

        }//if cierre

      }else{

        require_once 'view/sociales/validado.php';
        require_once 'view/seguimientos/seguimiento.php';

      }   
        
    }


  }  