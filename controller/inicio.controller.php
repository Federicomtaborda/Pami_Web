<?php
require_once 'model/inicio.php';



function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
    }

class InicioController{

    public $sugerencias;
    public $usuario;
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Inicio();
    }
    
    public function desactivar_notif(){
        $alm = new inicio();

          $ip = $_SERVER['REMOTE_ADDR']; 

        if($ip == "10.11.30.21"){
     
        $this->model->Actualizar_nov();
        $this->Index();
        
        }
   }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/inicio/inicio.php';
        require_once 'view/footer.php';

        //require_once 'view/inicio/alert_public.php';

        //require_once 'view/inicio/alerta.php'; 
        // require_once 'view/inicio/new_info.php';
        
        $this->verificar_cumple();        
        
    }

    public function verificar_cumple(){

        foreach($this->model->cumpleanos() as $r):; 
        $fecha_c = ($cumpleanos = date_format($fecha = new DateTime($r->fecha), 'd/m/Y'));
        $fecha_actual = ($cumpleanos = date('d/m/Y'));

        if ($fecha_c == $fecha_actual){

            require_once 'view/inicio/cumpleanos.php';
        }                   
        endforeach;
        
    }

     public function compartida(){
        require_once 'view/header.php';
        require_once 'view/inicio/compartida.php';
        require_once 'view/footer.php';
    }

    public function historia(){
        require_once 'view/header.php';
        require_once 'view/inicio/historia.php';
        require_once 'view/footer.php';
    }

     public function construccion(){
        require_once 'view/header.php';
        require_once 'view/inicio/en_construccion.php';
        require_once 'view/footer.php';
    }

 
       public function ingresar_comentario(){
        $alm = new Inicio();
        
       if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $sugerencias = limpiarDatos($_POST['sugerencias']);
        $usuario = limpiarDatos($_POST['usuario']);
        
        
        $alm->usuario= $usuario;
        $alm->sugerencias= $sugerencias;
        
        $this->model->comentario($alm);

        }

        if ($alm !=""){

        require_once 'view/header.php';
        require_once 'view/inicio/confirmacion.php';
        require_once 'view/footer.php'; 
        } 

        
    }




    
}