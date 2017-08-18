<?php
function tiempo_transcurrido($fechaInicio,$fechaFin)
{
    $fecha1 = $fechaInicio;
    $fecha2 = $fechaFin;
    $fecha = $fecha1->diff($fecha2);
    $tiempo = "";
         
    //años
    if($fecha->y > 0)
    {
        $tiempo .= $fecha->y;
             
        if($fecha->y == 1)
            $tiempo .= " año ";
        else
            $tiempo .= " años ";
    }
         
    //meses
    if($fecha->m > 0)
    {
        $tiempo .= $fecha->m;
             
        if($fecha->m == 1)
            $tiempo .= " mes ";
        else
            $tiempo .= " meses ";
    }
         
    //dias
    if($fecha->d > 0)
    {
        $tiempo .= $fecha->d;
             
        if($fecha->d == 1)
            $tiempo .= " día ";
        else
            $tiempo .= " días ";
    }

    //dias 0
    if(!$fecha->d)
    {
            $tiempo .= "0 días";
    }
         
    /* //horas
    if($fecha->h > 0)
    {
        $tiempo .= $fecha->h;
             
        if($fecha->h == 1)
            $tiempo .= " hora, ";
        else
            $tiempo .= " horas, ";
    }
         
    //minutos
    if($fecha->i > 0)
    {
        $tiempo .= $fecha->i;
             
        if($fecha->i == 1)
            $tiempo .= " minuto";
        else
            $tiempo .= " minutos";
    }
    else if($fecha->i == 0) //segundos
        $tiempo .= $fecha->s." segundos";
    */     
    return $tiempo; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seguimiento de tramites</title>



    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/datatable.css">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">

</head>

<body>

<div class="animated fadeIn">
    <div class="row">
    <div class="container">
        <div class="jumbotron">

            <h1>Seguimiento de tramites.</h1>

            <p>Estado de expedientes en tramite</p>

            <?php  $pendientes = $this->model->pendientes() ?>
            <?php  $finalizado = $this->model->finalizado() ?>             

                <span class="btn btn-warning btn-mg">Pendientes 
                    <span class="badge blue"> 
                    <?php echo $pendientes['pendientes']; ?> 
                    </span>
                </span>
 
                <a href="#" class="btn btn-success btn-mg">Finalizados <span class="badge blue"> <?php echo $finalizado['finalizado']; ?> </span></a>

                
          </div>
    </div>
</div>    

    <!-- Page Content -->
<div class="contenedor">

        <div class="row">

            <!-- Blog Entries Column -->
<div class="col-md-12">
                
        <div class="botones">
            <a type="button" id="nuevo"
            class="btn btn-default" 
            href="?c=seguimiento&a=carga_tramite">
            <i class="fa fa-file-text" aria-hidden="true"></i>
            Cargar Tramite
            </a>

        </div>
   <h4 class="text-right text-success">
        <i class="fa fa-search"></i>
            Busqueda de tramites cargados.
    </h4>     

    <div class="tabla">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">INICIO</th>
                        <th class="text-center">APELLIDO Y NOMBRE</th>
                        <th class="text-center">TELEFONO</th>
                        <th class="text-center">EXPEDIENTE</th>
                        <th class="text-center">TRAMITE Y ESTADO</th>
                        <th></th>
                     
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach($this->model->listar() as $r): ?>
                        <tr>
                            <td>
                                <?php echo date_format($fecha = new DateTime($r->fecha), 'd/m/Y h:i'); ?> hs
                                
                            </td>
                            <td style="text-transform:uppercase;">
                                <?php echo $r->apellido; ?>
                            </td>
                            <td>
                                <?php echo $r->telefono; ?>
                            </td>
                            <td>
                                <?php echo $r->expediente; ?>
                            </td>
                            <td class="tramite">
    
                                    <?php echo $r->tramite; ?> |
                                    <?php if ($r->estado =='1') {  ?>
                                <span class="text-warning">PENDIENTE</span>
                                <?php } ?>

                                <?php if ($r->estado =='2') {  ?>
                                <span class="text-success">FINALIZADO</span>
                                <?php } ?>
                                
                                <?php 
                                    $datetime2 = new DateTime();
                                    $datetime1 = new DateTime($r->fecha);
                                    echo tiempo_transcurrido( $datetime1,$datetime2 );
                                ?>

                            </td>                       
                            <td class="text-center">
                                                                
                                <a href="?c=seguimiento&a=Crud&id=<?php echo $r->id; ?>" class="btn btn-primary btn-xs" 
                                    data-toggle="tooltip" title="Ver el detalle del tramite ingresado..">
                                    <i class="fa fa-cogs" aria-hidden="true"></i> 
                                     ver
                                </a>
                            </td>
                    <?php endforeach; ?>    
                        
                    </tr>
                </tbody>
            </table> 

    </div>               

                

            </div>

            
       
       </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="texto-centrado">Informática Tandil</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->


</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


<script type="text/javascript">


(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded', function(){

    $('#example').DataTable();
    

  });
  
})();

</script>



    <script type="text/javascript">

    $(document).ready(function(){


        $('[data-toggle="tooltip"]').tooltip();   

    });

    </script>



