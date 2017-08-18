<?php
class seguimiento

{
    private $pdo;
    
    public $id;

    public $apellido;
    Public $telefono;
    Public $expediente;
    Public $tramite;
    Public $observaciones;
    public $iniciador;
 
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

    public function Obtener($id)
    {
        try 
        {
            $stm = $this->pdo
                ->prepare("SELECT
                seguimiento_tramite.id,
                seguimiento_tramite.apellido,
                seguimiento_tramite.telefono,
                seguimiento_tramite.expediente,
                seguimiento_tramite.fecha,
                seguimiento_tramite.estado,
                seguimiento_tipo_tramite.tramite,
                seguimiento_tipo_tramite.detalle
                FROM
                seguimiento_tramite
                INNER JOIN seguimiento_tipo_tramite 
                ON seguimiento_tramite.tramite = seguimiento_tipo_tramite.id
                WHERE
                seguimiento_tramite.id= ?");
                    
                    $stm->execute(array($id));
                    return $stm->fetch(PDO::FETCH_OBJ);
                } catch (Exception $e) 
                {
                    die($e->getMessage());
                }
            }

    public function reg_observacion(seguimiento $data)
    {
        try 
        {
        $sql = "INSERT INTO seguimiento_detalle (id,detalle,iniciador) 
                VALUES (?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->id,
                    $data->observaciones, 
                    $data->iniciador                 
                )
            );

        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }//registrar.        

    
    public function Registrar(seguimiento $data)
    {
        try 
        {
        $sql = "INSERT INTO seguimiento_tramite (apellido,telefono,expediente,tramite,estado) 
                VALUES (?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
                array(
                    $data->apellido,
                    $data->telefono, 
                    $data->expediente,
                    $data->tramite,
                    $data->estado                  
                )
            );

        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }//registrar.

    public function tramite(){
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * from seguimiento_tipo_tramite order by tramite asc");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }//fin function tramite


    public function pendientes(){
        try
        {
            $result = array();

                    $stm = $this->pdo->prepare("SELECT
Count(seguimiento_tramite.estado) AS pendientes
FROM
seguimiento_tramite
WHERE
seguimiento_tramite.estado = 1");
            $stm->execute();

            return $stm->fetch();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function finalizado(){
        try
        {
            $result = array();

                    $stm = $this->pdo->prepare("SELECT
Count(seguimiento_tramite.estado) AS finalizado
FROM
seguimiento_tramite
WHERE
seguimiento_tramite.estado = 2");
            $stm->execute();

            return $stm->fetch();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


    public function listar_detalle($id){
        try
        {
            $stm = $this->pdo->prepare("SELECT
            seguimiento_detalle.id,
            seguimiento_detalle.id_detalle,
            seguimiento_detalle.detalle,
            seguimiento_detalle.fecha_modif,
            seguimiento_detalle.iniciador
            FROM
            seguimiento_detalle 
            where  seguimiento_detalle.id= $id
            ORDER BY seguimiento_detalle.fecha_modif DESC");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }

    }

    public function listar(){
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT
                seguimiento_tramite.id,
                seguimiento_tramite.apellido,
                seguimiento_tramite.telefono,
                seguimiento_tramite.expediente,
                seguimiento_tipo_tramite.tramite,
                seguimiento_tramite.fecha,
                seguimiento_tramite.estado
                FROM
                seguimiento_tipo_tramite
                INNER JOIN seguimiento_tramite ON seguimiento_tramite.tramite = seguimiento_tipo_tramite.id
                ");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }//fin function tramite

    public function eliminar_detalle($id)
    {
        try 
        {
            $stm = $this->pdo
                        ->prepare("DELETE FROM seguimiento_detalle WHERE id_detalle = ?");                      

            $stm->execute(array($id));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

  

}