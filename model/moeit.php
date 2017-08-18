<?php
class Moeit
{
	private $pdo;
    
    public $id;
    public $apellido_nombre;
    public $certificado;

    public $genero;
    public $edad;
    public $internet;
    public $medios1;
    public $medios2;
    public $medios3;
    public $medios4;
    public $red_social;
    public $insulina_tipo;
     
    
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}

	public function Registrar(Moeit $data)
	{
		try 
		{
			$target_path = "archivos/discapacidad/";

			$target_path = $target_path . basename($data->certificado); 
			
			$target_path = iconv('UTF-8', 'CP1252', $target_path);


			if($_FILES['pdf']['type']=="application/pdf") {


				move_uploaded_file($_FILES['pdf']['tmp_name'], $target_path);

				
			

				$sql = "INSERT INTO discapacidad (apellido_nombre,certificado)
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->apellido_nombre,
                    $data->certificado,                                       
                )
			);

		   			  
			} 
					    

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function duplicados_disca()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
Count(*) as duplicados
FROM
discapacidad
GROUP BY apellido_nombre
HAVING count(*) > 1");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

public function discapacidad()
	{
		try
		{
			
			$stm = $this->pdo->prepare("SELECT
UCASE(discapacidad.apellido_nombre) as apellido_nombre,
discapacidad.certificado
FROM
discapacidad
order by discapacidad.apellido_nombre asc");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Registrar_encuesta(Moeit $data)
	{
		try 
		{
		$sql = "INSERT INTO encuesta_moeit (genero,edad,internet,medios1,medios2,medios3,medios4,red_social,insulina_tipo) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->genero, 
                    $data->edad,
                    $data->internet,
                    $data->medios1,
                    $data->medios2,
                    $data->medios3,
                    $data->medios4,
                    $data->red_social,
                    $data->insulina_tipo                               
                )
			);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


}

