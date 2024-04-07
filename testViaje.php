<?php
include_once "Viaje.php";
include_once "Pasajero.php";
include_once "ResponsableV.php";

$personaResponsable = new ResponsableV("20", "123456789", "Pedro", "Torres");

$personaUno = new Pasajero("Francisco", "Pandolfi", "12345678", "2995920060");
$personaDos = new Pasajero("Esteban", "Pilchu", "23456789", "2995449923");
$personaTres = new Pasajero("Rodrigo", "Blanca", "87654321", "2994569832");

$ArregloPasajero = [];
$ArregloPasajero[0] = $personaUno;
$ArregloPasajero[1] = $personaDos; 
$ArregloPasajero[2] = $personaTres;  

$viaje = new Viaje(2024090420, "Futaleufu", count($ArregloPasajero), $ArregloPasajero, $personaResponsable);

echo $viaje;


?>