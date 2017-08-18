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
            </div>
            <div class="modal-body">

                <center>
                    <h2>Hoy es el Cumpleaños de</h2><br>

                    <?php foreach($this->model->cumpleanos() as $r):; ?>
                    <?php $fecha_c = ($cumpleanos = date_format($fecha = new DateTime($r->fecha), 'd/m/Y')); ?>
                    <?php $fecha_actual = ($cumpleanos = date('d/m/Y')); ?>
                    <?php if ($fecha_c == $fecha_actual){ ?>
                    <img alt="image" class="img-circle" src="img/<?php echo $r->img; ?>.jpg"><br><br>
                    <h3 class="text-navy"><?php echo $r->nombre; ?> <?php echo $r->apellido; ?></h3>
                    <small><script src="js/fecha.js"></script></small><br>
                    <small> Felicidades!</small>
                    <br><br>
                    <?php } ?> 
                    <?php endforeach; ?>
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