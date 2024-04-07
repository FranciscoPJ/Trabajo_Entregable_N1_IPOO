<?php
include_once "Viaje.php";
include_once "Pasajero.php";

$personaUno = new Pasajero("Francisco", "Pandolfi", "12345678");
$personaDos = new Pasajero("Esteban", "Pilchu", "23456789");
$personaTres = new Pasajero("Rodrigo", "Blanca", "87654321");

$ArregloPasajero = [];
$ArregloPasajero[0] = $personaUno;
$ArregloPasajero[1] = $personaDos; 
$ArregloPasajero[2] = $personaTres;  

$viaje = new Viaje(2024090420, "Futaleufu", count($ArregloPasajero), $ArregloPasajero);

echo $viaje;


?>