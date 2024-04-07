<?php
include_once "Viaje.php";
include_once "Pasajero.php";
include_once "ResponsableV.php";

// Objetos Pasajeros
$personaUno = new Pasajero("Francisco", "Pandolfi", "12345678", "2995920060");
$personaDos = new Pasajero("Esteban", "Pilchu", "23456789", "2995449923");
$personaTres = new Pasajero("Rodrigo", "Blanca", "87654321", "2994569832");

// Arreglo de Listado de Pasajeros
$ArregloPasajero = [];
$ArregloPasajero[0] = $personaUno;
$ArregloPasajero[1] = $personaDos; 
$ArregloPasajero[2] = $personaTres; 

// Objeto Persona Responsable de Realizar el Viaje
$personaResponsable = new ResponsableV("20", "123456789", "Pedro", "Torres");

// Objeto Viaje
$viaje = new Viaje(2024090420, "Futaleufu", count($ArregloPasajero), $ArregloPasajero, $personaResponsable);

// Muestra de valores inciales
echo $viaje;

// Modificar Informacion de un Pasajero
$viaje->corregirInformacion("Lucas", "Stuart", "2995432134", 1);
$viaje->corregirInformacion("Ezequiel", "Gonzales", "2997658909", 2);
$viaje->corregirInformacion("Federico", "Kano", "2991234567", 3);

// Muestra de valores Modificados
echo "\n--------------- Muestra de Informacion Modificada: ---------------\n" . $viaje;

// Agregar un Nuevo Pasajero
echo "Ingrese Nombre: ";
$nombre = trim(fgets(STDIN));

echo "Ingrese Apellido: ";
$apellido = trim(fgets(STDIN));

echo "Ingrese Numero de DNI: ";
$nroDni = trim(fgets(STDIN));

echo "Ingrese Numero de Telefono: ";
$nroTelefono = trim(fgets(STDIN));

// nuevo objeto pasajero ("Manuel", "Perez", "205678906", "2995433098")
$nuevoPasajero = new Pasajero($nombre, $apellido, $nroDni, $nroTelefono);

// se agrega el nuevo pasajero a la lista del viaje de pasajeros
echo "\nAgregar Pasajero:\n";

// Valor booleano (false = se puede registrar. True no se puede registrar)
$res = $viaje->agregarPasajero($nuevoPasajero);

if($res == false){
    echo "\nSe agrego en la lista el nuevo pasajero!\n\n";
    $ArregloPasajero[count($ArregloPasajero)] = $viaje->getObjPasajeros()[count($ArregloPasajero)];
}
else{
    echo "\n--------------- Esta informacion es invalida! ---------------\n";
}

// Se visualiza el nuevo pasajero en la lista
echo $viaje;

?>