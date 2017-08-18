
<br> 
<center>
<div class="col-lg-12">

	<br>
    <div class="jumbotron">

        <h1><i class="fa fa-wrench" aria-hidden="true"></i></h1>
        <h2><strong>Página en Construcción.</strong></h2>
        <br>

        	<p class="lead">Esperamos tus segerencias para construir este sitio,
        	 envianos un comentario a cerca de la información que queres que este en esta página.</p>

		<form id="frm_construccion" action="?c=inicio&a=ingresar_comentario" method="post">
		    
		    
		    	<input required class="form-control" autofocus name="usuario" placeholder="ingrese tu nombre.."></input>
		   
		 
				<br>
		    	
		    	<textarea required class="form-control" name="sugerencias" rows="4" cols="50" placeholder="Ingresa tu sugerencias..."></textarea>
		   		<br>


		    <div class="input-group">
		   		<button class="btn btn-primary" type="submit">Enviar</button>&nbsp;
		   		<a href="?c=inicio" class="btn btn-default" type="button">Volver al inicio</button></a>
			</div>
		</form>
		<br>

		<?php foreach($this->model->sugerencias() as $r): ?>
		<div class="feed-element">
                <a class="pull-left">
      				<img alt="image" class="img-circle" src="img/user.png"></a>
                          <div class="media-body ">
                              <strong><?php echo $r->usuario; ?></strong>&nbsp;
                              <small>
							 <?php
							$fecha = new DateTime();
							echo $fecha->format('d/m/Y');
								?>
                              </small>
        <div class="well">
           <?php echo $r->sugerencias; ?>
        </div>

          </div>
        </div>
       <?php endforeach; ?>                        
			

</div>     


</div>  
</center>  


    