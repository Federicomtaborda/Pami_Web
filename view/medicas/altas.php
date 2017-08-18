<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Páginas</h2>
        <ol class="breadcrumb">
            <li>
                <a href="?c=inicio">Inicio</a>
            </li>
            <li class="active">
                <strong>Internación</strong>
            </li>
        </ol>
    </div>
 </div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content text-center p-md">

        <h2><span class="text-navy"><i class="fa fa-search" aria-hidden="true"></i> Rehabilitación a Domicilio.</span>

        </h2>

                <h3>Altas Bajas Modificación</h3>
                 
    </div><br>
                  

<div class="ibox-title">
    <h5>Altas Bajas y Modificación: <span class="text-danger"><?php echo $alm->id != null ? $alm->apellido : 'Ingreso de un nuevo registro'; ?></span></h5>
 &nbsp;/ <a href="?c=medicas&a=ingresar">Volver Atras</a>
</div>

<div class="ibox-content">


<div class="row">
   <div class="col-lg-10">     
<form action="?c=Alumno&a=Guardar" >
    <br>

    <div class="row">
        <div class="col-xs-12 col-md-6">    
          <div class="form-group">
            <label>APELLIDO</label>
            <input type="text" class="form-control" id="apellido" value="<?php echo $alm->apellido; ?>" placeholder="Ingrese apellido.." required="" autofocus="">
          </div>
     
          <div class="form-group">
            <label>NOMBRE</label>
            <input type="text" class="form-control" id="nombre" value="<?php echo $alm->nombre; ?>" placeholder="Ingrese nombre.." required="">
          </div>

          <div class="form-group">
            <label>BENEFICIO</label>
            <input type="text" class="form-control" id="beneficio" value="<?php echo $alm->beneficio; ?>" placeholder="Ingrese beneficio.." required="">
          </div>

        </div> 
    </div> 
    <div class="hr-line-dashed"></div>
     <div class="row">
        <div class="col-xs-12 col-md-4">    
                  
          <div class="form-group">
            <label>TELÉFONO</label>
            <input type="text" class="form-control" id="telefono" value="<?php echo $alm->telefono; ?>" placeholder="Ingrese teléfono..">
          </div>
          
          <div class="form-group">
            <label>MES | AÑO</label>
            <input type="text" class="form-control" id="mes_ano" value="<?php echo $alm->mes_ano; ?>" placeholder="Ingrese fecha.." required="">
          </div>
          <div class="form-group">
            <label>DIRECCIÓN</label>
            <input type="text" class="form-control" id="direccion" value="<?php echo $alm->domicilio; ?>" placeholder="Ingrese dirección..">
          </div>

          <div class="form-group">
                <div class="form-check">
                <label>CUD</label>
                <br>
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="<?php echo $alm->cud; ?>" checked>
                        SI
                      </label>&nbsp;&nbsp;
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="<?php echo $alm->cud; ?>" checked>
                        NO
                      </label>&nbsp;
                      <a href="?c=moeit&a=discapacidad" target="_blank"><i class="fa fa-file-o"></i> Certif. Disc.</a>
                </div>
          </div>

          <div class="form-group">
            <label for="exampleSelect1">PRESTACIÓN</label>
            <select class="form-control" id="exampleSelect1" >
              <?php foreach($this->model->prestacion() as $r): ?>
              
              <option value="<?php $alm->id ?>"><?php echo $r->prestacion; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">

            <label for="exampleSelect1">EMPRESA</label>
            <select class="form-control">
              
              <?php foreach($this->model->empresa() as $r):

              if($selected == $alm->empresa){  ?>
            <?php echo "<option selected value='$alm->empresa'>$r->empresa</option>" ; ?>
            <?php  } else{ ?>
            <?php echo "<option value='$r->id'>$r->empresa</option>" ; ?>

            <?php } ?>
           
              <?php endforeach; ?>

            </select>
          </div>

          <?php echo $alm->empresa; ?>


          <div class="hr-line-dashed"></div>

          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="?c=medicas&a=ingresar" class="btn btn-default">Cancelar</a>
          
        </div>
    </div>

</form>


</div>

</div>


</div> <br>


</div>