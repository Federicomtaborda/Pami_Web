<?php
require_once 'model/moeit.php';

class MoeitController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Moeit();
    }


     public function Crud(){

        $ip = $_SERVER['REMOTE_ADDR']; 

        if($ip == "10.11.30.21"){

        require_once 'view/header.php';
        require_once 'view/moeit/carga_disca.php';
        require_once 'view/footer.php';
        
        }else{
        require_once 'view/header.php';
        echo "<center><h2 class='text-danger'>No tiene permisos para agregar certificados!</h2></center>";
        require_once 'view/moeit/disca.php';
        
        require_once 'view/footer.php'; 
        }
    }

    

   


    public function Guardar(){
        $alm = new Moeit();
      
        $alm->apellido_nombre = $_REQUEST['apellido_nombre'];
        $var = ($_REQUEST['apellido_nombre']);
        $cadena =  preg_replace('/\s+/', '', $var); 
        $alm->certificado = $cadena.".pdf";
        
        $this->model->Registrar($alm);
        
        require_once 'view/header.php';
        require_once 'view/moeit/ok_discapacidad.php';
        require_once 'view/footer.php';
       
    }


    public function Guardar_encuesta(){
        $alm = new Moeit();

        $medios1='0';
      
        $alm->genero = $_POST['genero'];
        $alm->edad = $_POST['edad'];
        $alm->internet = $_POST['internet'];
        $alm->medios1 = isset($_POST['medios1']) ? $_POST['medios1'] : 0;
        $alm->medios2 = isset($_POST['medios2']) ? $_POST['medios2'] : 0;
        $alm->medios3 = isset($_POST['medios3']) ? $_POST['medios3'] : 0;
        $alm->medios4 = isset($_POST['medios4']) ? $_POST['medios4'] : 0;
        $alm->red_social = $_POST['red_social'];
        $alm->insulina_tipo = $_POST['insulina_tipo'];

        //inserto encuesta
        $this->model->Registrar_encuesta($alm);

        require_once 'view/header.php';
        require_once 'view/moeit/fin_encuesta.php';
        require_once 'view/footer.php';
        
    }
    
    public function ingresar(){
        require_once 'view/header.php';
        require_once 'view/moeit/moeit.php';
        require_once 'view/footer.php';
    }

    public function capacitacion(){
        require_once 'view/header.php';
        require_once 'view/moeit/capacitacion_moeit.php';
        require_once 'view/footer.php';
    }

    public function ostomia(){
        require_once 'view/header.php';
        require_once 'view/moeit/ostomia.php';
        require_once 'view/footer.php';
    }

    
    public function calculo(){
        require_once 'view/moeit/calculo.php';
    }


     public function tramites(){
        require_once 'view/header.php';
        require_once 'view/moeit/tramites.php';
        require_once 'view/footer.php';
    }

      public function cronograma(){
        require_once 'view/header.php';
        require_once 'view/moeit/panales_ostomia.php';
        require_once 'view/footer.php';
    }

     public function encuesta(){
        require_once 'view/header.php';
        require_once 'view/moeit/encuesta.php';
        require_once 'view/footer.php';
    }

     public function discapacidad(){
        require_once 'view/header.php';
        require_once 'view/moeit/discapacidad.php';
        //require_once 'view/inicio/alert_func.php';
                
    }

    public function disca(){
        require_once 'view/header.php';
        require_once 'view/moeit/disca.php';
                
    }

      
}

function validacheckboxex(){

if(!document.getElementById('check1').checked && !document.getElementById('check2').checked && !document.getElementById('check3').checked &&
!document.getElementById('check4').checked){

alert('no se a seleccionado ninguno');
}

}


function guardar_tramite(){

        $alm = new seguimiento();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $alm->apellido = $_REQUEST['apellido'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->expediente = $_REQUEST['expediente'];
        $alm->tramite = $_REQUEST['tramite'];
        $alm->observaciones = $_REQUEST['observaciones'];

        $this->model->Registrar($alm);
        
        require_once 'view/seguimientos/correcto.php';
        require_once 'view/seguimientos/seguimiento.php';
        
    }//if cierre
        
        
    }

