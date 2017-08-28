<br><div class="ibox-content text-center p-md">
        <h2 class="text-success">Seguimiento de Afiliados con Discapacidad.</h2>   
        <p>Digitalización de Certificados</p>              
    </div><br>
   
	
       <div class="ibox-content">
          <div id="cantidad" style="float:right" class="text-success"></div>
          <a href="?c=moeit&a=Crud"><button class="btn btn-success dim" type="button"> + <i class="fa fa-user"></i> </button></a>

            <form method="post">
            	<div class="input-group input-group-lg">
                    
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
            		<input id="buscar" type="text" 
                    class="form-control capitalize" value=""
                    placeholder="Ingresar el apellido del afiliado.."
                    maxlength="20">
                    
                </div>
            </form> 
        </div>
    
    <div class="row">

     <div class="container">

            <div id="app-body">

                  <div class="ultimos"><br>
                      <center>
                          <h3 id="titulo"></h3>
                      </center> 
                  </div>  

                <div class="ibox-content">
                     
                  <div class="tv-shows">
                      
                      <div class="loader">
                           <center>
                              <h2 class="text-danger">
                                  <i class="fa fa-refresh"></i>
                                  Cargando Datos...
                              </h2>
                           </center>
                      </div>

                     <div class="no_existe error" style="margin-top:20px;">
                        <div class="alert alert-danger">
                           <h2>
                            <center><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                No existen Resultados..
                            </center>  
                           </h2>
                        </div>
                     </div>

                   </div>

                </div>

            </div>
               
        </div>
            
      </div>




           


   <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
 
    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="view/Moeit/disca/disca.js"></script>
