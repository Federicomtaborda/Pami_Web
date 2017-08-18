<?php
class Inicio
{
	private $pdo;
    
    public $id;
 
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

	public function comentario(Inicio $data)
	{
		try 
		{
		$sql = "INSERT INTO sugerencias (usuario,sugerencias) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->usuario, 
                    $data->sugerencias                
                )
			);

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function cumpleanos()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
			`cumpleanos_personal`.`apellido` AS `apellido`,
			`cumpleanos_personal`.`nombre` AS `nombre`,
			`cumpleanos_personal`.`fecha` AS `fecha`,
			`cumpleanos_personal`.`img` AS `img`,
			`cumpleanos_personal`.`id` AS `id`
		FROM
			`cumpleanos_personal`
		WHERE
		(
			`cumpleanos_personal`.`id` = MONTH (now())
		) order by fecha ");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Actualizar_nov()
	{
		try 
		{
			$sql = "UPDATE informacion SET 
						estado = 0";

			$this->pdo->prepare($sql)
			     ->execute(
				    array()
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}//actualizar



	public function Listar_Info()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
			informacion.id,
			informacion.fecha,
			informacion.tituto,
			informacion.descripcion,
			informacion.archivo,
			informacion.estado
			FROM
			informacion
			ORDER BY
			informacion.fecha DESC
			");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function cuentar_actualizados()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
			Count(informacion.estado) as actualizados
			FROM
			informacion
			WHERE
			informacion.estado = 1");
			$stm->execute();

			return $stm->fetch();

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function sugerencias()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
				sugerencias.usuario,
				sugerencias.sugerencias,
				sugerencias.fecha
				FROM
				sugerencias
				GROUP BY
				sugerencias.fecha desc");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function fecha_cobro()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
		fecha_cobro.id,
		fecha_cobro.mes,
		fecha_cobro.fecha_cobro,
		DATE_FORMAT(fecha_cobro.fecha, '%d') as fecha,
		DATEDIFF(fecha_cobro.fecha,NOW()) AS dias_restantes
		FROM
		fecha_cobro
		WHERE
		DATEDIFF(fecha_cobro.fecha,NOW()) >= '0'
		ORDER BY id ASC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function informacion()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
					informacion.fecha,
					informacion.tituto as titulo,
					informacion.descripcion,
					informacion.hora,
					informacion.archivo as archivo
					FROM
					informacion
					ORDER BY
					informacion.fecha desc");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function resoluciones()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
				resoluciones.id,
				resoluciones.titulo,
				resoluciones.comentario,
				resoluciones.fecha,
				resoluciones.hora,
				resoluciones.archivo
				FROM
				resoluciones
				ORDER BY
				resoluciones.fecha DESC
				");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



}