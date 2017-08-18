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

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">

     

</head>

<body>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Agregar Observación 
                        <small>| tramite en curso.
                        </small>
                    </h4>
                </div>

    <div class="modal-body">
        <div class="container-fluit">
            <form class="form-horizontal" action="?c=seguimiento&a=obser&id=<?php echo $seguimiento->id; ?>" method="POST" id="form" name="form" 
            onsubmit="return validacion()">
         
                <h5 class="text-primary text-center">
                    <i class="fa fa-exclamation-triangle"></i>
                    Ingrese un observación del estado del tramite al día de la fecha
                </h5><br>

                <div class="form-group">
                    <div class="col-md-12">
                        <label class="label-control">Áre de Observación:</label>
                        <select class="form-control" id="iniciador" name="iniciador">
                          <option selected hidden>--Seleccione un Área--</option> 

                             <option value="1">MOEIT</option>
                             <option value="2">JEFATURA</option>  

                        </select>
                       
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label class="label-control">Observación:</label>
                        <textarea class="form-control text-warning" rows="5" 
                        id="observaciones" name="observaciones" 
                        placeholder="Ingrese Observaciones.." autofocus></textarea>
                    </div>
                </div> <br>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    <button type="button" 
                        class="btn btn-default" data-dismiss="modal">Cerrar
                    </button>
                </div>
            </form> 
        </div>   
    </div>
            </div>
        </div>
    </div>

<div class="animated fadeIn flash">



    <div class="row">
    <div class="container">

            <h2 class="text-center" style="text-transform:uppercase;">
                <?php echo $seguimiento->apellido; ?>
                
            </h2>

            <p class="text-muted text-center">
                <?php $seguimiento->apellido; ?>

            </p>
            <p class="text-center"><code>
                Inicio del Tramite:
                <strong><?php 
                 echo date_format($fecha = new DateTime($seguimiento->fecha), 'd/m/Y'); ?>
                 </strong>
                 - Tiempo transcurrido: 
                <strong>
                         <?php 
                            $date2 = new DateTime();
                            date_format($fecha = new DateTime($seguimiento->fecha), 'd/m/Y');
                            echo tiempo_transcurrido( $fecha,$date2 );
                        ?>
                </strong> <br>
                Exp:<strong><?php echo $seguimiento->expediente ?></strong> |

                Tipo de Tramite: <strong><?php echo $seguimiento->tramite; ?></strong> |
                <?php if ($seguimiento->estado =='1') {  ?>
                  <span>Estado: 
                    <strong> <i class="fa fa-clock-o" aria-hidden="true"></i>PENDIENTE </strong>
                    
                    
                 </span>
                <?php } ?>

                <?php if ($seguimiento->estado =='2') {  ?>
                    <span>
                    Estado:<strong> <i class="fa fa-check" aria-hidden="true"></i>FINALIZADO</span>

                    

                 <?php } ?>
                </code>

            </p>

               <a id="btnAdd" class="btn btn-info btn-xs">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Agregar Observación
                </a>

                <a href="?c=seguimiento&a=seguimiento" class="btn btn-default btn-xs">
                <i class="fa fa-reply" aria-hidden="true"></i>
                Volver al listado
                </a>
     
            <hr>

            <?php $valor=0; $c=1;  
            //total de registros
            $result=count( $this->model->listar_detalle($seguimiento->id) ); ?>

            <small class="text-muted">Total de observaciones: <b> <?php echo $result ?> </b></small>

            <?php foreach($this->model->listar_detalle($seguimiento->id) as $r): ?>

            <br>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        # <?php echo $result-- ?> -
                        <b><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            
                            Observación: <?php echo date_format($fecha_modif = new DateTime($r->fecha_modif), 'd/m/Y'); ?>
                             - tiempo transcurrido: 
                            <span class="badge">
                                <?php 
                                    $datetime2 = new DateTime();
                                    $datetime1 = new DateTime($r->fecha_modif);
                                    echo tiempo_transcurrido( $datetime1,$datetime2 );
                                ?>
                            </span>
                            
                        </b>
                    </div>
                    <div class="bot-derechos">
                        <a href="" 
                            class="btn btn-default btn-xs">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <a href="?c=seguimiento&a=Eliminar&id=<?php echo $r->id_detalle; ?>&id_seg=<?php echo $seguimiento->id; ?>" 
                            class="btn btn-default btn-xs" 
                            onclick="javascript:return confirm('¿Realmente desea eliminar esta observación..?');">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </div>                  
                    <div class="panel-body">
                        <p><?php echo $r->detalle; ?></p>
                    </div>

                        <small>
                            <p class="observado text-right text-muted">
                            <?php if ($r->iniciador =='1') {  ?>
                            Observado por: <strong>MOEIT</strong>
                            <?php } ?>
                            </p>
                        </small>
                        <small>
                            <p class="observado text-right text-muted">
                            <?php if ($r->iniciador =='2') {  ?>
                            Observado por: <strong>JEFATURA</strong>
                            <?php } ?>
                            </p>
                        </small>

                </div><hr>

                <?php $valor=1; ?>

              <?php endforeach; ?> 

              <?php if($valor<>1){ ?>
       
                <div class="alert alert-info alert-dismissable fade in">
                    <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <h5>
                        <center>
                            No existen observaciones cargadas para este tramite.. 
                        </center>
                    </h5>
                </div>

              <?php } ?>
  
    </div>
    <br>
</div>    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">
       
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
<body>

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $("#btnAdd").click(function(){   
                    $("#myModal").modal('show');
                }); 

            var estado = <?php echo $seguimiento->estado ?>;
               if (estado==2){
                    $('#btnAdd').hide();
                }else{

                    $('#btnAdd').show();
                }                  

            });
    </script>

    <script type="text/javascript">

     function validacion() {

                var observaciones = document.getElementById('observaciones').value;
                 var indice = document.getElementById("iniciador").selectedIndex;

                if( indice == null || indice == 0 ) {
                alert('Debe Seleccionar un Área de gestión..');
                return false;

                } 
                
                if(observaciones == null || observaciones.length < 5 || /^\s+$/.test(observaciones)){
                    alert('Ingrese una Observacion');
                    return false;
                }

                return true;

            }

    </script>     
</body>

</html>




