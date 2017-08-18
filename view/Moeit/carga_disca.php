<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Páginas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="?c=inicio">Inicio</a>
            </li>
            <li class="active">
                <strong>Funcionalidad</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="ibox-content text-center p-md">

    <h2><span class="text-navy">Carga de Documentación</span></h2>
     Ingreso de Certificados de Discapacidad y documentación de Afiliados
                    
	</div>

    <div class="row">
   <div class="col-lg-10">     
<form action="?c=moeit&a=Guardar" method="post" enctype="multipart/form-data">
    <br>

    <div class="row">
        <div class="col-xs-12 col-md-6">    
          <div class="form-group">
            <label>Apellido y Nombre</label>
            <input type="text" class="form-control" name="apellido_nombre" placeholder="Ingrese Apellido y Nombre.." required autofocus>
          </div>
              
          <div class="form-group">
            <label class="control-label">Seleccione un Archivo .PDF</label>
            <input id="pdf" name="pdf" type="file" class="file">
          </div>

          <div class="form-group">
            <button class="btn btn-success" type="submit">Guardar</button>
            <a href="?c=moeit&a=disca" class="btn btn-default">Cancelar</a>
          </div>

        </div> 
    </div>

    </form>
  </div>
</div>
</div>	

