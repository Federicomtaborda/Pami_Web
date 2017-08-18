<link href="css/home.css" rel="stylesheet">

<div class="animated fadeIn">

  <div id="delete">
  	<div class="container">	
  		<div class="alert alert-danger alert-dismissable fade in">
  	    	<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
      		<strong>Eliminado!</strong> El registro fue eliminado.
    		</div>
    	</div>
  </div>
</div>  

<script type="text/javascript">

	setTimeout(function() {
                    setTimeout(function() {
                    	$('#delete').fadeToggle(1000);
                        //$('#theDiv').html('More replacement text goes here');
                    }, 2000) 
                });

</script>