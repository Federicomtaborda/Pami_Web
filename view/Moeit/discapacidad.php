<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Páginas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="?c=inicio">Inicio</a>
            </li>
            <li class="active">
                <strong>Discapacidad</strong>
            </li>
        </ol>
    </div>
 </div>


<div class="wrapper wrapper-content animated fadeInRight">
	<div class="ibox-content text-center p-md">

                    <h2><span class="text-navy"><i class="fa fa-search" aria-hidden="true"></i> Seguimiento de Afiliados con Discapacidad.</span>

                        <h3>Digitalización de la Documentación.</h3>
                 
                 	</div>

        <div class="wrapper wrapper-content animated fadeInRight">
           


<br>
        
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    
          
                    <div class="ibox-content">
                        <a href="?c=moeit&a=Crud"><button class="btn btn-primary dim" type="button"> <i class="fa fa-user"></i> </button></a>
            <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        
                        <th>Apellido y Nombre</th>
                        
                        <th>Certificado</th>
                                              
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->model->discapacidad() as $r): ?>
                    <tr>
                        
                        <td><?php echo $r->apellido_nombre; ?></td>  
                                              
                        <td><a href="archivos/discapacidad/<?php echo $r->certificado; ?>" target="_blank" type="button" class="btn btn-success btn-xs">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        &nbsp;Ver Certificado</a>

                        
                    	</td>
                        
                                                
                    </tr>
                    <?php endforeach; ?>
                                       
                    </tfoot>
                    </table>
                        </div>

                    </div>
            </div>
            </div>


<div class="ibox-content">
    
    <h3>DISCAPACIDAD</h3>
    
    <small><strong><u>GENERALIDAD:</u></strong>&nbsp; El Programa Integral de Discapacidad (PROIDIS) 
        constituye un sistema de prestaciones básicas de atención 
        integral a favor de las personas con discapacidad. <br>
         Contempla acciones de prevención, asistencia, promoción y protección, 
         con el objeto de brindar una cobertura integral a sus necesidades y requerimientos. <br>
     Incumbe a todos los afiliados menores de 60 años de acuerdo a las pautas de la Leyes 22.431 y 24.901. </small><br>
    <br>
    <a class="btn btn-info btn-xs" href="archivos/discapacidad/resoluciones/resol_337-05.pdf" target="_blank">
    RESOLUCIÓN 337/05</a>
    <a class="btn btn-info btn-xs" href="archivos/discapacidad/resoluciones/dispo_1741-10.pdf" target="_blank">
    DISPOSICIÓN 1741/10</a>
    <a class="btn btn-info btn-xs" href="archivos/discapacidad/resoluciones/ley_24901_-_discapacidad.pdf" target="_blank">
    LEY DE DISCAPACIDAD</a>
    <a class="btn btn-info btn-xs" href="http://www.desarrollosocial.gob.ar/discapacidad" target="_blank">
    <i class="fa fa-shield" aria-hidden="true"></i>&nbsp;Min. Desarrollo Social</a>&nbsp;
    <a href="http://simap.pami.ar/subtipo_detalle.php?id_sub=305" target="_blank">
    <i class="fa fa-database" aria-hidden="true"></i>&nbsp;fuente de datos</a>
    
</div>


            </div>

            </div>
            </div>
          
            <div class="row">

                        <div class="footer">
                            <div class="pull-right">
                                <STRONG>Bootstrap</STRONG> | responsive design <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            </div>
                            <div>
                                <strong><i class="fa fa-coffee" aria-hidden="true"></i> Desarrollo</strong>| Informática TANDIL &copy; 2016
                            </div>
                        </div>
 </div>






</div>	








   <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>

        $(document).ready(function(){ 


            $('.dataTables-example').DataTable({
                               
                "iDisplayLength": 10,

            });
        });
        
    </script>