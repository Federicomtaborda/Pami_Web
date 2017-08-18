<?php
require_once 'model/personal.php';

class PersonalController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Personal();
    }
    
    public function ingresar(){
        require_once 'view/header.php';
        require_once 'view/personal/listado.php';
            
	}
}