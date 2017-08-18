<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PAMI TANDIL | Sist. de Información</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><i class="icono izquierda fa fa-lock"></i></h1>

            </div>
            <h3>Inicio de Sección.</h3>
            <p>Complete los campos solicitados, para iniciar la administración de datos.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
           
            <form class="m-t" action="?c=medicas&a=iniciar" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="usuario" placeholder="Usuario.." required="" autofocus="">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña.." required="">
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Iniciar Sección.</button>


                <a href="?c=inicio" class="btn btn-default m-b">Volver al Inicio.</a>
            </form>
        </div>
    </div>
</body>

</html>