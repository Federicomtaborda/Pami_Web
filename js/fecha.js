var LaFecha=new Date();
var Mes=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasem=new Array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
var diasemana=LaFecha.getDay();
var FechaCompleta="";
var NumeroDeMes="";


NumeroDeMes=LaFecha.getMonth();
FechaCompleta=diasem[diasemana]+" "+LaFecha.getDate()+" de "+Mes[NumeroDeMes]+" de "+LaFecha.getFullYear();
document.write (FechaCompleta);