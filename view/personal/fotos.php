


     <link href="css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
   

        
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <br>
                    <ol class="breadcrumb">
                        <li>
                            <a href="?c=inicio">Inicio</a>
                        </li>
                        <li class="active">
                            <strong>Fotos Viaje Turistico</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <strong><h2><i class="fa fa-bus"></i> Viaje Turistico - Enbalse Río 3° Provincia de Cordoba</h2>
                        <h4>Del 19 al 23 de Septiembre del 2016</h4>
                        <br>

                        <div class="lightBoxGallery">
                            
                             <?php

                                for ( $i = 1; $i < 84; $i+=1 ){ ?>

                                <a href="img/embalse/fotos (<?php echo $i; ?>).jpg" title="Embalse Rio 3° - CORDOBA" data-gallery=""><img src="img/embalse/fotos (<?php echo $i; ?>).jpg"  width="85" height="75"></a>
                         <?php } ?>
                            <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <div class="slides"></div>
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
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

    <!-- blueimp gallery -->
    <script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

</body>

</html>
