<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro Social Mededicamentos</title>



    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" rget="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Registro Social | Subsidio de Medicamentos</a>
            </div>
            
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-10">

                <h3 class="page-header">
                    Listado de Afiliados | <span>SOLO AUTORIZADOS</span>
                </h3>
<div class="botones">
<a type="button" id="nuevo"
class="btn btn-default" 
href="?c=sociales&a=cargar_registro">Nuevo Registro</a>
</div>

<div class="tabla">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Inicio</th>
                        <th>Apellido y Nombre</th>
                        <th>Telefono</th>
                        <th>N° Incidencia</th>
                        <th>Usuario</th>
                        <th>Pase Moeit</th>
                        <th>Estado</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                    </tr>
                </tfoot>
                <tbody>
                <?php foreach($this->model->listar_autorizados() as $r): ?>
                    <tr>

                        <td><?php echo date_format($fecha = new DateTime($r->fecha_inic), 'd/m/Y'); ?></td>
                        <td style="text-transform:uppercase;"><?php echo $r->apell_nom; ?></td>
                        <td><?php echo $r->telefono; ?></td>
                        <td><?php echo $r->n_incidencia; ?></td>
                        <td style="text-transform:uppercase;"><?php echo $r->usuario; ?></td>
                        <td><?php echo date_format($fecha = new DateTime($r->pase_moeit), 'd/m/Y'); ?></td>
                        
                        <td><?php if ($r->estado =='PENDIENTE DE AUT.'){?>
                            <span class="label label-warning"><?php echo $r->estado; ?></span>
                            <?php }if ($r->estado =="AUTORIZADO"){ ?>
                            <span class="label label-success"><?php echo $r->estado; ?></span>
                            <?php }if ($r->estado =='RECHAZADO'){?>
                            <span class="label label-danger"><?php echo $r->estado; ?></span>
                            <?php }?>
                        </td>

                           <td class="boton">
                            <a type="button" class="btn-xs btn-primary" 
                            href="?c=sociales&a=Crud&id=<?php echo $r->id; ?>"
                            data-toggle="tooltip" title="Cambiar estado"><span class="glyphicon glyphicon-cog"></span></a>
                            <a type="button" class="btn-xs btn-default" 
                            href="?c=sociales&a=eliminar&id=<?php echo $r->id; ?>"
                            data-toggle="tooltip" title="Eliminar registro" onclick="javascript:return confirm('¿Realmente desea eliminar este registro..?');"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        
                        
                    </tr>
                <?php endforeach; ?>
                    
                </tbody>
            </table> 

    </div>               

                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-2">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Paremetros de Selección</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php  $auto = $this->model->cuenta_autorizados() ?>
                                <?php $pend = $this->model->cuenta_pendientes() ?>
                                <?php  $recha = $this->model->cuenta_rechazados() ?>
                                <?php  $total = $this->model->registro() ?>
                                
                                <li><a href="?c=sociales&a=autorizados">Autorizados  <span class="badge"><?php echo $auto['autorizados']; ?></span></a></li>
                                <li><a href="?c=sociales&a=pendientes">Pendientes  <span class="badge"><?php echo $pend['pendientes']; ?></span></a></li>
                                <li><a href="?c=sociales&a=rechazados">Rechazados  <span class="badge"><?php echo $recha['rechazados']; ?></span></a></li>
                                <li><a href="?c=sociales&a=tramite">Total: <?php echo $resultado = count($total); ?></a></li>
                                      
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
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

</body>

</html>


<script type="text/javascript">


(function(){
  'use strict';
  document.addEventListener('DOMContentLoaded', function(){

    $('#example').DataTable();

    $(".btn").click(function(){
      $("#myModal").modal('show');
   });

  });
  
})();

</script>
 <script type="text/javascript">

    $(document).ready(function(){

        $('[data-toggle="tooltip"]').tooltip();   

    });

    </script>



