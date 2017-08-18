<?php
require_once 'model/contable.php';

class ContableController{
    
    private $model;


    public function __CONSTRUCT(){
        $this->model = new Contable();
    }
    
    public function listar_zregion(){
        require_once 'view/header.php';
        require_once 'view/contable/zregion.php';
        require_once 'view/footer.php';
    }


    }
?>    