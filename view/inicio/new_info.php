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
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp; Nuevo Médico de Cabecera.
                </h2>
            </div>


            <div class="modal-body">
                 
                 <center>
                <h3>
                </i> <span>A partir del día de hoy 01 de Novimbre 2016 <br><br>
                Se incorpora como médico de Cabecera el <STRONG class="text-danger">Dr. MARCOS GONZALEZ</STRONG> 
                <br><br>
                 Dirección Belgrano 1188. - Télefono: Tel 422-1247</span></h3>
                
                <br>
                <small>"El mismo ya se encuentra incorporado en el listado de médicos prestadores."</small>
                
                </center> 

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">salir</button>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>    