<?php
class sociales
{
	private $pdo;
    
    public $id;

    public $apellido;
    Public $telefono;
    Public $incidencia;
    Public $estado;
    Public $usuario;
    public $pase_moeit;
 
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



	public function documentos_sociales()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM doc_sociales order by titulo");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function registro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
				registro_sociales.id,
				registro_sociales.fecha_inic,
				registro_sociales.apell_nom,
				registro_sociales.telefono,
				registro_sociales.n_incidencia,
				usuario_registro.usuario as usuario,
				estados_registros.estado as estado,
				registro_sociales.pase_moeit
				FROM
				usuario_registro
				INNER JOIN registro_sociales ON registro_sociales.usuario = usuario_registro.id
				INNER JOIN estados_registros ON registro_sociales.estado = estados_registros.id");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listar_autorizados()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
							registro_sociales.id,
							registro_sociales.fecha_inic,
							registro_sociales.apell_nom,
							registro_sociales.telefono,
							registro_sociales.n_incidencia,
							usuario_registro.usuario as usuario,
							estados_registros.estado as estado,
							registro_sociales.pase_moeit
							FROM
							usuario_registro
							INNER JOIN registro_sociales ON registro_sociales.usuario = usuario_registro.id
							INNER JOIN estados_registros ON registro_sociales.estado = estados_registros.id
							WHERE
							estados_registros.id = 2
							ORDER BY
							registro_sociales.fecha_inic DESC");
							$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listar_pendientes()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
							registro_sociales.id,
							registro_sociales.fecha_inic,
							registro_sociales.apell_nom,
							registro_sociales.telefono,
							registro_sociales.n_incidencia,
							usuario_registro.usuario as usuario,
							estados_registros.estado as estado,
							registro_sociales.pase_moeit
							FROM
							usuario_registro
							INNER JOIN registro_sociales ON registro_sociales.usuario = usuario_registro.id
							INNER JOIN estados_registros ON registro_sociales.estado = estados_registros.id
							WHERE
							estados_registros.id = 1
							ORDER BY
							registro_sociales.fecha_inic DESC");
							$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function listar_rechazados()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
							registro_sociales.id,
							registro_sociales.fecha_inic,
							registro_sociales.apell_nom,
							registro_sociales.telefono,
							registro_sociales.n_incidencia,
							usuario_registro.usuario as usuario,
							estados_registros.estado as estado,
							registro_sociales.pase_moeit
							FROM
							usuario_registro
							INNER JOIN registro_sociales ON registro_sociales.usuario = usuario_registro.id
							INNER JOIN estados_registros ON registro_sociales.estado = estados_registros.id
							WHERE
							estados_registros.id = 3
							ORDER BY
							registro_sociales.fecha_inic DESC");
							$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function registro_auto()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
				registro_sociales.id,
				registro_sociales.fecha_inic,
				registro_sociales.apell_nom,
				registro_sociales.telefono,
				registro_sociales.n_incidencia,
				usuario_registro.usuario as usuario,
				estados_registros.estado as estado,
				registro_sociales.pase_moeit
				FROM
				usuario_registro
				INNER JOIN registro_sociales ON registro_sociales.usuario = usuario_registro.id
				INNER JOIN estados_registros ON registro_sociales.estado = estados_registros.id");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function cuenta_pendientes()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
		Count(registro_sociales.id) as pendientes
		FROM
		registro_sociales
		WHERE
		registro_sociales.estado = 1");
			$stm->execute();

			return $stm->fetch();

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function cuenta_autorizados()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
		Count(registro_sociales.id) as autorizados
		FROM
		registro_sociales
		WHERE
		registro_sociales.estado = 2");
			$stm->execute();

			return $stm->fetch();

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function cuenta_rechazados()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
		Count(registro_sociales.id) as rechazados
		FROM
		registro_sociales
		WHERE
		registro_sociales.estado = 3");
			$stm->execute();

			return $stm->fetch();

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(sociales $data)
	{
		try 
		{
		$sql = "INSERT INTO registro_sociales (apell_nom,telefono,n_incidencia,usuario,estado) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->apellido,
					$data->telefono, 
                    $data->incidencia,
                    $data->usuario,
                    $data->estado='1'                  
                )
			);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}//registrar

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM registro_sociales WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE registro_sociales SET 
						estado = ?, 
						pase_moeit = ?
                        WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->estado, 
                        $data->pase_moeit,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}//actualizar


	public function listar_usuarios(){
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from usuario_registro order by usuario asc");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}


	}

	public function listar_estados(){
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * from estados_registros order by estado");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}


	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT
				registro_sociales.id,
				registro_sociales.apell_nom,
				registro_sociales.estado,
				estados_registros.estado as estado
				FROM
				registro_sociales
				INNER JOIN estados_registros ON registro_sociales.estado = estados_registros.id
				WHERE
				registro_sociales.id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}