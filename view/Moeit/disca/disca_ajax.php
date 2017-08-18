<?php

$db = new PDO('mysql:host=localhost;dbname=pami_tandil;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	//$q = isset($_GET["q"]);

switch ($_GET["op"]) {

	case 'listar':
		sleep(1);
		try {
	$stmt = $db->prepare("SELECT
	discapacidad.id,
	lower(discapacidad.apellido_nombre) as apellido_nombre,
	discapacidad.certificado,
	DATE_FORMAT(discapacidad.fecha,'%d-%m-%Y') as fecha
	FROM
	discapacidad ORDER BY apellido_nombre ASC");
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($rows);
} catch(PDOException $ex) {

    echo $ex->getMessage();
    exit;
}

		break;
	
	case 'buscar':

	$q=$_GET['q'];
		try {
	$stmt = $db->prepare("SELECT
	discapacidad.id,
	lower(discapacidad.apellido_nombre) as apellido_nombre,
	discapacidad.certificado,
	DATE_FORMAT(discapacidad.fecha,'%d-%m-%Y') as fecha
	FROM discapacidad WHERE
	apellido_nombre like '%{$q}%' ORDER BY apellido_nombre ASC");
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if($rows){
		echo json_encode($rows);
	}else{
		echo "vacio";
	}
	
} catch(PDOException $ex) {

    echo $ex->getMessage();
    exit;
}

		break;
}





?>