<link href="css/home.css" rel="stylesheet">

<div class="animated fadeIn">

	<div id="correcto">
		<div class="container">	
			<div class="alert alert-success alert-dismissable fade in">
		    	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    		<strong>Correcto!</strong> Los datos fueron guardados correctamente.!
	  		</div>
	  	</div>
	</div>

</div>

<script type="text/javascript">

	setTimeout(function() {
                    setTimeout(function() {
                    	$('#correcto').fadeToggle(1000);
                        //$('#theDiv').html('More replacement text goes here');
                    }, 2000) 
                });

</script>
	

