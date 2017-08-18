<?php
require_once 'model/informatica.php';

class InformaticaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Informatica();
    }
    
    public function ingresar(){
        require_once 'view/header.php';
        require_once 'view/informatica/informatica.php';

    }

    public function formularios(){
        require_once 'view/header.php';
        require_once 'view/informatica/formularios.php';
        require_once 'view/footer.php';
                
    }

    
}