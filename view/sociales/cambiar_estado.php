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


    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    
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
    <div class="col-md-8">

                <h3 class="page-header">
                    Cambio de estado 
                </h3>

        <form class="form-horizontal" action="?c=sociales&a=guardar_estado" method="POST" id="form" name="form" onsubmit="return validacion()">
            <div class="form-group">
                <div class="form-group">
                	<input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
                    
                    <label class="control-label col-xs-3">Apellido y Nombre:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $alm->apell_nom; ?>" disabled>
                    </div>
                </div>
                <div class="form-group">
                    
                    <label class="control-label col-xs-3">estado actual:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" value="<?php echo $alm->estado; ?>" style="color:#27ae60;" disabled >
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label col-xs-3">Nuevo Estado:</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="estado" name="estado" autofocus>
                          <option selected hidden>-Nuevo estado-</option>
                          <?php foreach($this->model->listar_estados() as $r): ?>
                            <option value="<?php echo $r->id; ?>"><?php echo $r->estado; ?></option>
                           <?php endforeach; ?>


                        </select>
                       
                    </div>
                </div>
                
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-success" value="Guardar">
                        <a class="btn btn-default" href="?c=sociales&a=tramite">Volver</a>
                    </div>
                </div>
        
            </div>
    </form>

           
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


        

    </div>
    <!-- /.container -->

   

</body>
<script>

   function validacion() {

        indice = document.getElementById("estado").selectedIndex;
              
       
       
         if( indice == null || indice == 0 ) {
            alert('Debe seleccionar un nuevo estado.');
            return false;
        }

            return true;  
        
   }

</script>

</html>


