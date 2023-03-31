<?php
include('viaje.php');

$viajeFeliz=new Viaje(123,"santa fe",24);
do{
echo $viajeFeliz->menu();
$opc=trim(fgets(STDIN));
echo $viajeFeliz->segun($opc);
}while($opc!=5);

    