<?php
require_once 'model/sociales.php';

class SocialesController{

   
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new sociales();
    }
    
    public function documentacion(){
        require_once 'view/header.php';
        require_once 'view/sociales/documentacion.php';
        require_once 'view/footer.php';
    }

    public function tramite(){
       
      require_once 'view/sociales/registro_medi.php';
             

    }
    public function autorizados(){
       
      require_once 'view/sociales/autorizados.php';    

    }
    public function pendientes(){
       
      require_once 'view/sociales/pendientes.php';    

    }
    public function rechazados(){
       
      require_once 'view/sociales/rechazados.php';    

    }

     public function sub_economico(){
      require_once 'view/header.php'; 
      require_once 'view/sociales/sub_economico.php';  
      require_once 'view/footer.php';  

    }

     public function Crud(){

        $alm = new sociales();

        $ip = $_SERVER['REMOTE_ADDR']; 

       if($ip == "10.11.30.21" || $ip == "10.11.30.30" 
            || $ip == "10.11.30.51" || $ip == "10.11.30.32" || $ip == "10.11.30.26"){

        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
            require_once 'view/sociales/cambiar_estado.php';
        }
        
    }else{ 
       require_once 'view/sociales/validado.php';  
       require_once 'view/sociales/registro_medi.php'; 

    }

}
public function eliminar(){

        $alm = new sociales();

        $ip = $_SERVER['REMOTE_ADDR']; 

       if($ip == "10.11.30.21" || $ip == "10.11.30.30" 
            || $ip == "10.11.30.51" || $ip == "10.11.30.32" || $ip == "10.11.30.26"){

        if(isset($_REQUEST['id'])){
            $alm = $this->model->eliminar($_REQUEST['id']);
            require_once 'view/sociales/correcto.php';  
            require_once 'view/sociales/registro_medi.php';
        }
        
    }else{ 
       require_once 'view/sociales/validado.php';  
       require_once 'view/sociales/registro_medi.php'; 

    }

}

public function Guardar_estado(){
        $alm = new sociales();

        $alm->id = $_REQUEST['id'];
        $alm->estado = $_REQUEST['estado'];
        $alm->pase_moeit = date('Y-m-d');     
        $this->model->Actualizar($alm);
        require_once 'view/sociales/correcto.php';
        require_once 'view/sociales/registro_medi.php'; 
    }

    public function cargar_registro(){
        $ip = $_SERVER['REMOTE_ADDR']; 
       if($ip == "10.11.30.21" || $ip == "10.11.30.30" 
            || $ip == "10.11.30.51" || $ip == "10.11.30.32" || $ip == "10.11.30.26"){ 

        require_once 'view/sociales/carga_registro.php';
    }else{ 
       require_once 'view/sociales/validado.php';  
       require_once 'view/sociales/registro_medi.php'; 

    }   
}
    


    public function Guardar(){
        $alm = new sociales();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $alm->apellido = $_REQUEST['apellido'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->incidencia = $_REQUEST['incidencia'];
        $alm->usuario = $_REQUEST['usuario'];

        $this->model->Registrar($alm);
        
        require_once 'view/sociales/correcto.php';
        require_once 'view/sociales/carga_registro.php';
        
    }//if cierre
        
        
    }

}

?>
