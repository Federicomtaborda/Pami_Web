<?php
require_once 'model/medicas.php';

class MedicasController{
    
    private $model;


    public function __CONSTRUCT(){
        $this->model = new Medicas();
    }
    
    public function ingresar(){
        require_once 'view/header.php';
        require_once 'view/medicas/internacion.php';
    }

    public function formularios(){
        require_once 'view/header.php';
        require_once 'view/medicas/formularios.php';
    }


    public function altas(){
     
        session_start();

        if (isset($_SESSION['usuario'])) {
        
        require_once 'view/header.php';
        require_once 'view/medicas/altas.php';
        require_once 'view/footer.php';

    }else{
        require_once 'view/medicas/inicio_login.php';
        }
    }


public function iniciar(){

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=pami_tandil', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();;
    }

    $statement = $conexion->prepare('
        SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
    );
    $statement->execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));

    $resultado = $statement->fetch();
    if ($resultado !== false) {

        session_start([
        'cookie_lifetime' => 3600,
        ]);
        $_SESSION['usuario'] = $usuario;

        require_once 'view/header.php';
        require_once 'view/medicas/internacion.php';
        

    } else {
        $errores .= '<li>Datos Incorrectos.</li>';
        require_once 'view/medicas/inicio_login.php';
     }
    }

}


    public function inicio_session(){

        session_start();

        if (isset($_SESSION['usuario'])) {
        
        require_once 'view/header.php';
        require_once 'view/medicas/internacion.php';

    }else{
        require_once 'view/medicas/inicio_login.php';
        }
    }

     public function cerrar_session(){

    session_start();
    session_destroy();
    $_SESSION = array();

    require_once 'view/medicas/inicio_login.php';
    
    }


    public function Crud(){
        $alm = new Medicas();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/medicas/altas.php';
        require_once 'view/footer.php';

    }

    public function Guardar(){
        $alm = new medicas();
        
        $alm->Apellido = $_REQUEST['id'];
        $alm->Apellido = $_REQUEST['Apellido'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellido = $_REQUEST['beneficio'];
        $alm->Nombre = $_REQUEST['telefono'];
        $alm->Apellido = $_REQUEST['mes_ano'];
        $alm->Nombre = $_REQUEST['domicilio'];
        $alm->Apellido = $_REQUEST['cud'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellido = $_REQUEST['prestacio'];
        $alm->Apellido = $_REQUEST['empresa'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }

     
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        require_once 'view/header.php';
        require_once 'view/medicas/internacion.php';
    }

      
}