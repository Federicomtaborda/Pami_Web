<?php
class informatica
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

	public function datos_pc()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
upper(datos_pc.usuario) as usuario,
datos_pc.ip,
datos_pc.marca,
datos_pc.area,
datos_pc.inventario
FROM
datos_pc
GROUP BY
datos_pc.usuario
");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function equipamiento_info()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
			equipamiento_info.id,
			equipamiento_info.equipo,
			equipamiento_info.ip,
			equipamiento_info.mac,
			equipamiento_info.inventario
			FROM
			equipamiento_info
			ORDER BY
			equipamiento_info.equipo ASC
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