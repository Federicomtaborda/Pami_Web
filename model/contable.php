<?php
class contable
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

}	