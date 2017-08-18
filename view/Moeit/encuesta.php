<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Páginas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="?c=inicio">Inicio</a>
            </li>
            <li class="active">
                <strong>Encuesta Interna</strong>
            </li>
        </ol>
    </div>

</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="ibox-content text-center p-md">

		<h2><span class="text-navy"><i class="fa fa-pencil"></i>&nbsp;&nbsp;Encuesta Interna - Sobre el uso de Internet en los afiliados de nuestros agencia.</span></h2>

                    <p>
                      Datos de Afiliados de atención en MOEIT.
                    </p>
                    
	</div>


<br>

<div class="ibox-title">
                            <h3>Encuenta sobre uso de internet en los afiliados de nuestra agencia.</h3>
                            <div class="ibox-tools">
                                
                            </div>
                        </div>


<div class="ibox-content">
<br>
    <form class="form-horizontal" action="?c=moeit&a=Guardar_encuesta" method="post" onsubmit="return validacion()" >
        
        <div class="form-group">
            <label class="control-label col-xs-3">SELECCIONE GÉNERO</label>
            <div class="col-xs-3">
                <select class="form-control" id="genero" name="genero">
                    <option disabled selected style="display: none;" value="">Seleccione..</option>
                    <option value="1" >Masculino</option>
                    <option value="2" >Femenino</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">EDAD DEL AFILIADO</label>
            <div class="col-xs-2">
                <input type="text" class="form-control" id="edad" name="edad" SIZE="2"
                onkeypress="return valideKey(event);">
            </div>
        </div>
        <br>
       
        <div class="form-group">
            <div class="col-xs-12">
        <h2 class="text-navy"><i class="fa fa-check-square-o" aria-hidden="true"></i>


        POR QUE MEDIOS ACCEDE A LA INFORMACIÓN DE PAMI..?</h2>
            </div>
        </div>
        <hr>

        <div class="form-group">
            <div class="col-xs-12">
                <h3>
                   Aceede por medio de Internet..?
                </label></h3>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <label class="checkbox-inline">
                    <input type="radio" value="3"  id="internet" name="internet"> Si, pero con ayuda de un familiar.
                </label>
                 <label class="checkbox-inline">
                    <input type="radio" value="4" id="internet" name="internet"> Ingresa por sus propios medios.
                </label>
                <label class="checkbox-inline">
                    <input type="radio" value="5" id="internet" name="internet" checked> No utiliza Internet.
                </label>
            </div>
        </div> 

        <hr>
        <div class="form-group">
            <div class="col-xs-12">
                <h3>
                Accede por medios masivos de comunicación..?
                </label></h3>
            </div>
        </div>
    
        <div class="form-group">
            <div class="col-xs-12">
                <label class="checkbox-inline">
                    <input type="checkbox" id="medios1" name="medios1" value="6" > Televisión.
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="medios2" name="medios2" value="7" > Radio.
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="medios3" name="medios3" value="8" > Diarios.
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="medios4" name="medios4" value="9" > Otros medios de comunicación.
                </label>
            </div>
        </div>
        
        <hr>
        <div class="form-group">
            <div class="col-xs-12">
                <h3>
                Accede por Redes Sociales..?
                </label></h3>
                
                    <label class="checkbox-inline">
                    <input type="radio" id="red_social" name="red_social" value="10" > SI
                    </label>
                    <label class="checkbox-inline">
                    <input type="radio" id="red_social" name="red_social" value="11" checked> NO
                    </label>
              
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="col-xs-12">
        <h2 class="text-navy"><i class="fa fa-check-square-o" aria-hidden="true"></i>


        ENCUESTA INFORMAVITA SOBRE DIABETES.</h2>

            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <h3>El Afiliado es Diabético..?
                </label></h3>

            </div>
        </div>
         <div class="form-group">
            <div class="col-xs-12">
                <label class="checkbox-inline">
                    <input type="radio" id="insulina_tipo" name="insulina_tipo" value="12" > Tipo I.
                </label>
                <label class="checkbox-inline">
                    <input type="radio" id="insulina_tipo" name="insulina_tipo" value="13" > Tipo II.
                </label>
                <label class="checkbox-inline">
                    <input type="radio" id="insulina_tipo" name="insulina_tipo" value="14" > Tipo II - (Con Insulina).
                </label>
                <label class="checkbox-inline">
                    <input type="radio" id="insulina_tipo" name="insulina_tipo" value="15" checked> El afiliado no es diabético.
                </label>
            </div>
        </div>

        <br>
        <div class="form-group">
            <div class="col-xs-9">
                <button class="btn btn-primary">Guardar encuesta</button>
                <button type="reset" class="btn btn-default">Cancelar</button>
            </div>
        </div>
    </form>
                            
</div>	
<br>

<script type="text/javascript">
    function valideKey(evt)
    {
        var code = (evt.which) ? evt.which : evt.keyCode;
        if(code==8)
        {
            //backspace
            return true;
        }
        else if(code>=48 && code<=57)
        {
            //is a number
            return true;
        }
        else
        {
            return false;
        }
    }
</script>

<script type="text/javascript">
function validacion(){

indice = document.getElementById("genero").selectedIndex;
if( indice == null || indice == 0 ) {
  alert('Seleccione Genero Masculino - Femenino!');
  return false;
}    

    valor = document.getElementById("edad").value;
if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
  alert('Ingrese una Edad!');
  return false;
}

}
</script>
