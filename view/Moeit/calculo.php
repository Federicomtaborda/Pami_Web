<html lang="en">
<head>
  <title>Calculo Medicamentos</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Nunito:650&amp;subset=latin-ext" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    

  <link rel="stylesheet" href="css/estilos.css">

  
  <style>
  .contenido{
    margin: 15px;
  }
 
  label{
    margin-top: 5px;
  }


 </style>

</head>
<body>

<div class="container">
    <div class="titulo">  
        <div class="container text-center">
            <h2>Cálculo de Medicamentos</h2>       
            <small>Ingrese el valor de cada medicamentos con la cantidad correspondiente y verifique según el calculo si supera el 5%.</small> 
        <button type="button" class="btn btn-primary btn-xs" title="Estimativo de gasto" id="btn"> 
                <span class="glyphicon glyphicon-cog"> </button>
    </div>    


    
<div class="contenido">

<div id="result" class="well well-lg">
    <div class="row">
        <div class="col-xs-12">
                    <h4 id="sum_total"></h5>
                    <h4 id="total_ingresos"></h5>
                       
                    <center><h1 id="validacion_final" style='font-weight: bold'></h1>
                    <span id="monto_sup"></span>
                    </center> 
                    
                    <a href="?c=moeit&a=calculo" type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-refresh"></span> Volver a calcular </a>    
                    
        </div>
    </div>                                            
</div>  

        
    <div class="row">

        <div class="input_ingresos">
            <div class="col-md-3"></div>
<form id="formulario" method="post">
                <div class="col-md-2">

                    <label>Jubilación</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="jub" id="jub" class="form-control" placeholder="0.00" aria-describedby="basic-addon1" autofocus>
                    </div>
                </div>  
                <div class="col-md-2"> 
                    <label>Pensión</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="pension" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                </div> 
                <div class="col-md-2"> 
                    <label>Otros Ingresos</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="otros" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                </div>
        </div>    
    </div>

   
    <hr> 

    <div class="row">

        

            <div class="input_medicamentos">
                <div class="col-md-3"></div>
                    <div class="col-md-2">
                    <label>Medicamento 1</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_1" id="med_1" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <label>Medicamento 2</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_2" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <label>Medicamento 3</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_3" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <label>Medicameto 4</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_4" class="form-control text-primary" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <label>Medicamento 5</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_5" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div></div>
            

                <div class="col-md-1">
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_1" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_2" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_3" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_4" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_5" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                </div>

               
                <div class="col-md-2">
                    <label>Medicamento 6</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_6" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <label>Medicamento 7</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_7" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <label>Medicamento 8</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_8" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <label>Medicamento 9</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_9" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                    <label>Medicamento 10</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">$</span>
                        <input type="text" name="med_10" class="form-control" placeholder="0.00" aria-describedby="basic-addon1">
                    </div>
                </div>
              
           
                <div class="col-md-1">
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_6" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_7" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_8" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_9" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>
                    <label>cant</label>
                    <div class="input-group">
                        <input type="number" name="cant_10" class="form-control" value="1" aria-describedby="basic-addon1">
                    </div>   
                </div>

            </div>
        </form>        

    </div>

</fomr>  

        <div class="row"><br>
            <div class="col-md-3"></div>
                <div class="col-xs-6">
                    <button type="button" id="calcular" class="btn btn-block btn-outline btn-primary btn-lg"> Calcular % </button>
                </div>
            </div> 

           

 
</div> 

        <div class="cont_final">
            <div class="row">
                <p>Los datos obtenidos del Vademecum son los mismos que se encuentran en <a href="http://simap.pami.ar" target="_blank">SIMAP - MEDICAMENTOS</a></p>

                <div class="col-xs-12">
                    <iframe src="http://vademecum.pami.ar/controllers/VademecumConsulta.php" id="iframeVademecum" frameborder="0"></iframe>
               </div> 
            </div>

        </div>  

 <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title">Valores de Referencia | Ingresos / Gastos </h5>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <center><img src="img/calculo.jpg"></center>   
                    </div>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


</body>
</html>


<script type="text/javascript">

$( document ).ready(function() {

    $('#btn').click(function(){
        $('#myModal').modal('show');
    });

$("#result").hide();

$('#calcular').click(function(){

    var jub = $('#jub').val();
    var med = $('#med_1').val();

    if ( med.length<1) {

        alert("Verificar el ingreso de datos..");
      
    }else if ( jub.length<1){

        alert("Verificar el ingreso de datos..");
    }else{
        var url = "view/Moeit/fun_calcular.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#formulario").serialize(), 
           success: function(data)             
           {
            var valores = JSON.parse(data);
             $('#sum_total').text("Gasto total en medicamentos es: $" + valores["suma"] ); 
             $('#total_ingresos').text("Suma total de ingresos: $" + valores["ingresos"]);
             var calculo = valores["porcentaje"];
             if (calculo<5){
             $('#validacion_final').text("No supera el gasto" + " " + valores["porcentaje"] +"%");  
             $('#validacion_final').css("color", "#d54444");
             $("#result").fadeIn(1000);
             $('#monto_sup').show(); 
             $('#monto_sup').html('<h4 style=color:#7e7e7e>El gasto en medicamentos debera ser >= a <b style=color:#d54444;>$' + valores["monto_sup"]  + 
                '</b> para superar el 5% de sus ingresos.</h4>');

             } else{
             $('#validacion_final').text("Supera el gasto" + " " +  valores["porcentaje"] + "%");  
             $('#validacion_final').css("color", "#337ab7");
             $('#monto_sup').hide();
             $("#result").fadeIn(2000);

             }          
             
             
           }

        });
    
    }

    });
    
   

});

</script>

