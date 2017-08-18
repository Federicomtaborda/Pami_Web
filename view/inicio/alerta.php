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
                <h2 class="modal-title">
                    <i class="fa fa-line-chart"></i> 
                    &nbsp;Reporte de Atención MOEIT - NOVIEMBRE 2016
                </h2>
            </div>
            <div class="modal-body">

                <center>
                    <span class="text-danger">Se encuentra disponible el reporte de atención correspondiente a <strong>NOVIEMBRE</strong></span>
                    <br>
                       <hr>

                    <a href="archivos/reporte.pdf">

                    <img src="img/reporte_moeit.jpg" class="img-responsive">

                    <img src="img/reporte.jpg" class="img-responsive">

                    </a>

                    <hr>
                    <br>
                 


                    <a href="archivos/reporte.pdf" class="btn btn-w-lg btn-success" tarjet="_blank">
                        <i class="fa fa-hand-o-up" aria-hidden="true"></i>
                        </i>&nbsp;ver reporte
                        </a>

                </center>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">salir</button>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>    