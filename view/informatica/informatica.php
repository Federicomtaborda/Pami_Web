<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Páginas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="?c=inicio">Inicio</a>
            </li>
            <li class="active">
                <strong>Informática - Imventario</strong>
            </li>
        </ol>
    </div>

</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="ibox-content text-center p-md">

                    <h2><span class="text-navy"><i class="fa fa-desktop"></i>&nbsp;AREA DE INFORMATICA - Documentación e Información</span>
                     <br></h2>

                    <p>
                       Inventario de equipamiento informático | Formularios de solicitudes | Uso y funcionamientos de sistemas.
                    </p>

	</div>
</div>



        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
            
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-desktop fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Cantidad de PC'S </span>
                            <h2 class="font-bold">31</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-print fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Impresoras </span>
                            <h2 class="font-bold">10</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-hdd-o fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Escaner </span>
                            <h2 class="font-bold">5</h2>
                        </div>
                    </div>
                </div>
            </div>
</div>


<br>


           
<a href="https://smallpdf.com/es" 
target="_blank" type="button" 
class="btn btn-w-m btn-default">
<i class="fa fa-file-o"></i>&nbsp;Corvertir archivos OnLine</a>
                                                              
<hr>     

        


            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Pc's de la Agencia.</h5>
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

            <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>USUARIO</th>
                        <th>AREA</th>
                        <th>IP</th>
                        <th>MARCA</th>
                        <th>INVENTARIO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->model->datos_pc() as $r): ?>
                    <tr >
                        <td><?php echo $r->usuario; ?></td>
                        <td><?php echo $r->area; ?></td>
                        <td><?php echo $r->ip; ?></td>
                        <td><?php echo $r->marca; ?></td>
                        <td><?php echo $r->inventario; ?></td>
                        
                    </tr>
                    <?php endforeach; ?>
                                       
                    </tfoot>
                    </table>
                        </div>

                    </div>
            </div>

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Equipamiento.</h5>
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

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>EQUIPO</th>
                        <th>IP</th>
                        <th>MAC</th>
                        <th>INVENTARIO</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($this->model->equipamiento_info() as $r): ?>
                    <tr class="gradeX">
                        
                        <td><?php echo $r->equipo; ?></td>
                        <td><?php echo $r->ip; ?></td>
                        <td><?php echo $r->mac; ?></td>
                        <td><?php echo $r->inventario; ?></td>

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
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
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
