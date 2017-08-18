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

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">

 

</head>

<body>

<div class="animated fadeIn">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              
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
                    Nuevo registro de tramite
                </h3>

        <form class="form-horizontal" action="?c=seguimiento&a=guardar_tramite" method="POST" id="form" name="form" onsubmit="return validacion()">
            <div class="form-group">
                <div class="form-group">
                    
                    <label class="control-label col-xs-3">Apellido y Nombre:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="apellido y nombre" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Teléfono:</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono" >
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-xs-3" >N° Expediente:</label>
                    <div class="col-xs-6">
                        <input type="tel" class="form-control" name="expediente" 
                        id="expediente" placeholder="N° de expediente" 
                        maxlength="16" onkeypress="return solo_numeros(event)">
                        <small class="text-success"><i>ingrese expediente, solo numeros sin guiones</i></small>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Tramite Realizado:</label>
                    <div class="col-xs-8">
                        <select class="form-control" id="tramite" name="tramite">
                          <option selected hidden >--Seleccione Tramite--</option>
                          <?php foreach($this->model->tramite() as $r): ?>
                             <option value="<?php echo $r->id; ?>">
                                    <?php echo $r->tramite; ?>
                             </option>


                           <?php endforeach; ?>
                          
                        </select>
                       
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a class="btn btn-default" href="?c=seguimiento&a=seguimiento">Volver</a>
                    </div>
                </div>
        
            </div>
    </form>

           
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

</div>
<script>

    function solo_numeros(e){

        var expediente = document.getElementById('expediente').value;

        tecla = (document.all) ? e.keyCode : e.which;
        

        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

  
        // Patron de entrada, en este caso solo acepta numeros
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }



   function validacion() {

        indice = document.getElementById("tramite").selectedIndex;
        var apellido = document.getElementById('apellido').value;
        var telefono = document.getElementById('telefono').value;
        var expediente = document.getElementById('expediente').value;
        indice = document.getElementById("tramite").selectedIndex;
       
       
        //Test campo obligatorio
        if(apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)){
            alert('Ingrese nombre y apellido..');
            return false;
        }
       
        if(expediente == null ||  expediente.length < 16 || /^\s+$/.test(expediente) ){
            alert('número de expediente no valido..');
            return false;
        }

        if(telefono == null ||  telefono.length < 7 || /^\s+$/.test(telefono) ){
            alert('Ingrese un Teléfono..');
            return false;
        }

        if( indice == null || indice == 0 ) {
            alert('Debe Seleccionar un tramite..');
            return false;
        }
         
            return true;  
        
   }



</script>

</html>


