<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal({backdrop: 'static'});
                    
    });
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <center><h2>
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    &nbsp;Ingreso a la Administración de datos
                </h2></center>
            </div>
            <div class="modal-body">

                <form form action="?c=moeit&a=ingreso_admin" method="post">

                <div class="row">
                    <div class="col-xs-12 col-md-8">    
                    <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Ingrese usuario.." required autofocus>
                    </div>

                    <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese contraseña.." required >
                    </div>

                    </div>
                </div>    

                    
                        <button type="submit" class="btn btn-success">
                        </i>&nbsp;Ingresar
                        </button>

                        <a href="?c=moeit&a=disca" class="btn btn-default">
                        </i>&nbsp;Cancelar
                        </a>

                        <br><br>

                        <?php if(!empty($errores)): ?>
                
                        <span class="text-danger" >
                        <?php echo $errores; ?>
                        </span>
                        <?php endif; ?>

                 </div>
                

               </form>          

            </div>
            <div class="modal-footer"><center>
    <small>* Esta pagina se registra la documentación referente a los afiliados con discapacidad.</small>
            </center></div>
        </div>
    </div>
</div>
</body>
</html>    