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
    <div class="col-md-8">
       

                <h3 class="page-header">
                    Nuevo registro
                </h3>

        <form class="form-horizontal" action="?c=sociales&a=Guardar" method="POST" id="form" name="form" onsubmit="return validacion()">
            <div class="form-group">
                <div class="form-group">
                    
                    <label class="control-label col-xs-3">Apellido y Nombre:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" 
                        name="apellido" id="apellido" 
                        placeholder="apellido y nombre" focused>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Teléfono:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-xs-3" >N° de Incidencia:</label>
                    <div class="col-xs-8">
                        <input type="tel" class="form-control" name="incidencia" id="incidencia" placeholder="N° de Incidencia" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">usuario de carga:</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="usuario" name="usuario">
                          <option selected hidden>--Seleccione Usuario--</option>
                          <?php foreach($this->model->listar_usuarios() as $r): ?>
                          
                            <option value="<?php echo $r->id; ?>"><?php echo $r->usuario; ?></option>
                           <?php endforeach; ?>

                        </select>
                       
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Estado:</label>
                    <div class="col-xs-8">
                        <input style="color:#27ae60;" type="text" class="form-control" value="Pendiente de utorización" disabled>
                    </div>
                    
                </div>

                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
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
                                <li><a href="?c=sociales&a=rechazados">Rechazados  <span class="badge red"><?php echo $recha['rechazados']; ?></span></a></li>
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

  

</body>
<script>


   function validacion() {

        indice = document.getElementById("usuario").selectedIndex;
        var apellido = document.getElementById('apellido').value;
        var telefono = document.getElementById('telefono').value;
        var incidencia = document.getElementById('incidencia').value;
       
       
        //Test campo obligatorio
        if(apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)){
            alert('Ingrese nombre y apellido..');
            return false;
        }
        if(telefono == null || telefono.length == 0 || /^\s+$/.test(telefono)){
            alert('Ingrese un telefono..');
            return false;
        }
        if(incidencia == null || incidencia.length == 0 || isNaN(incidencia)){
            alert('número de incidencia no valido..');
            return false;
        }
         if( indice == null || indice == 0 ) {
            alert('Debe Seleccionar un usuario..');
            return false;
        }

            return true;  
        
   }



</script>

</html>


