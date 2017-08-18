<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Páginas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="?c=inicio">Inicio</a>
            </li>
            <li class="active">
                Internación /
            </li>
            
            <a class="text-success" type="button" href="?c=medicas&a=cerrar_session"> cerrar seccion</a>
            

        </ol>
        
    </div>
 </div>


<div class="wrapper wrapper-content animated fadeInRight">
	<div class="ibox-content text-center p-md">

                    <h2><span class="text-navy"><i class="fa fa-search" aria-hidden="true"></i> Rehabilitación a domicilio.</span>

                        <h3>Listado de Prestación.</h3>
                 
                 	</div>

        <div class="wrapper wrapper-content animated fadeInRight">
           

<br>
        
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>listado - Tandil.</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
          
                    <div class="ibox-content">

                    <a href="?c=medicas&a=Crud" type="button" class="btn btn-primary btn-md">
                    <i class="fa fa-user" aria-hidden="true"></i> Agregar</a><br>

            <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>N° Beneficio</th>
                        <th>empresa</th>
                        <th>aciones</th>
                      
                       
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->model->internacion() as $r): ?>
                    <tr>
                        
                        <td><?php echo $r->apellido; ?></td>
                        <td><?php echo $r->nombre; ?></td> 
                        <td><?php echo $r->beneficio; ?></td>  
                        <td><?php echo $r->empresa; ?></td>                     

                        <td>
                        <a href="?c=medicas&a=Crud&id=<?php echo $r->id; ?>" type="button" class="btn btn-success btn-xs">
                        editar</a>
                       
                        <a class="btn btn-danger btn-xs" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=medicas&a=Eliminar&id=<?php echo $r->id;?>">eliminar</a>

                        </td>

                                                                        
                    </tr>
                    <?php endforeach; ?>
                                       
                    </tfoot>
                    </table>
                        </div>

                    </div>
            </div>
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
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    
                    
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                            
                    }
                    }
                ]

            });
        });
        
    </script>