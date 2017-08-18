<?php

$jubilacion = $_POST['jub']; 
$pension= $_POST['pension'];
$otros = $_POST['otros'];

$medicamento1 = $_POST['med_1'];  
$medicamento2 = $_POST['med_2']; 
$medicamento3 = $_POST['med_3'];  
$medicamento4 = $_POST['med_4']; 
$medicamento5 = $_POST['med_5']; 
$medicamento6 = $_POST['med_6'];
$medicamento7 = $_POST['med_7']; 
$medicamento8 = $_POST['med_8']; 
$medicamento9 = $_POST['med_9']; 
$medicamento10 = $_POST['med_10'];  

$cant1 = $_POST['cant_1'];
$cant2 = $_POST['cant_2'];
$cant3 = $_POST['cant_3'];
$cant4 = $_POST['cant_4'];
$cant5 = $_POST['cant_5'];
$cant6 = $_POST['cant_6']; 
$cant7 = $_POST['cant_7'];
$cant8 = $_POST['cant_8'];
$cant9 = $_POST['cant_9'];
$cant10 = $_POST['cant_10'];

$ingresos=($jubilacion+$pension+$otros);

$suma = ($medicamento1*$cant1 + $medicamento2*$cant2 + $medicamento3*$cant3 + $medicamento4*$cant4 + $medicamento5*$cant5 + $medicamento6*$cant6 + $medicamento7*$cant7 + $medicamento8*$cant8 + $medicamento9*$cant9 + $medicamento10*$cant10);

$porcentaje= round($suma/$ingresos*100,2);

$monto_sup=( $ingresos*0.05 );

$datos = array('porcentaje' => $porcentaje, 'ingresos' => $ingresos, 'suma' =>$suma, 'monto_sup'=>$monto_sup);

echo json_encode($datos);