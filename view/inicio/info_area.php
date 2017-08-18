<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Modals</title>


<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2>
                    <i class="fa fa-child" aria-hidden="true"></i>&nbsp; Documento Digital - Prestaciones Sociales.
                </h2>
            </div>


            <div class="modal-body">
                 
                
                <h3><span class="text-danger" >El Área de Prestaciones Sociales 
                    digitalizo su documentación, 
                    para un mejor acceso a sus archivos.</span></h3>
                
                <br>

               <center>

                <div class="file">

                <div class="icon">
                    <i class="fa fa-file-pdf-o"></i>
                </div>

                </div>
                
                <button href="?c=sociales&a=documentacion" type="button" class="btn btn-primary" data-dismiss="modal">ingresar</button>
            

                </center>   
               

                    
         <br>
                                       

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">salir</button>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>    