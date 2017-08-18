<?php
class Personal
{
	 
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

	public function listado_personal()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT
UPPER(listado_personal.apellido) as apellido,
UPPER(listado_personal.nombre) as nombre,
listado_personal.legajo,
LOWER(listado_personal.email) as email
FROM
listado_personal
ORDER BY
listado_personal.apellido ASC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



}