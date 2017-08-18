<?php
class Medicas
{
	private $pdo;
    
    public $id;
    public $usuario;
    public $pass;

    public $apellido;
    public $nombre;
    public $beneficio;
    public $telefono;
    public $mes_ano;
    public $domicilio;
    public $cud;
    public $prestacion;
    public $empresa;
 
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

	public function Registrar(Medicas $data)
	{
		try 
		{
		$sql = "INSERT INTO internacion (apellido,nombre,beneficio,telefono
			mes_ano,domicilio,cud,prestacion,empresa) 
		        VALUES (?, ?, ?, ?, ?, ?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->Apellido, 
                    $data->Nombre,
                    $data->beneficio, 
                    $data->telefono,
                    $data->mes_ano, 
                    $data->domicilio,
                    $data->cud, 
                    $data->prestacion,
                    $data->empresa, 
                                       
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE internacion SET 
						nombre          = ?, 
						apellido        = ?,
                        
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre, 
                        $data->Apellido,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM internacion WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
         

	
    public function internacion()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM internacion");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function prestacion()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
			prestacion_internacion.id,
			UPPER(prestacion_internacion.prestacion) as prestacion
			FROM
			prestacion_internacion");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function empresa()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
empresa_internacion.id as id,
UPPER(empresa_internacion.empresa) as empresa
FROM
empresa_internacion
");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM internacion WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



}

