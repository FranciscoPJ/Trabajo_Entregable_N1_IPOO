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

// Inicio del Programa------------------------------

do {
    echo "\nBienvenido al Sistema de Gestión de Viajes!\n";
    echo "1. Cargar información del viaje\n";
    echo "2. Modificar datos del pasajero\n";
    echo "3. Agregar pasajero\n";
    echo "4. Modificar datos de la Persona Responsable\n";
    echo "5. Mostrar datos del viaje\n";
    echo "6. Salir\n";
    $num = trim(fgets(STDIN)); // se elige un numero del menu

    switch ($num) {
        case 1:
            // Cargar información del viaje
            echo "Información del viaje cargada.\n";
            echo $viaje;
            break;
        case 2:
            // Modificar Informacion de un Pasajero
            $respuestaUno = $viaje->corregirInformacion("Lucas", "Stuart", "2995432134", "2995920060");
            
            // Se envia un mensaje de la operacion
            if ($respuestaUno == false) {
                echo "\n--------------- Se Modifico un Pasajero! ---------------\n\n";
            } else {
                echo "\n--------------- No se Modifico un Pasajero! ---------------\n\n";
            }

            $respuestaDos = $viaje->corregirInformacion("Ezequiel", "Gonzales", "2997658909", "2995449923");

            // Se envia un mensaje de la operacion
            if ($respuestaDos == false) {
                echo "\n--------------- Se Modifico un Pasajero! ---------------\n\n";
            } else {
                echo "\n--------------- No se Modifico un Pasajero! ---------------\n\n";
            }

            $respuestaTres = $viaje->corregirInformacion("Federico", "Kano", "2991234567", "2994569832");

            // Se envia un mensaje de la operacion
            if ($respuestaTres == false) {
                echo "\n--------------- Se Modifico un Pasajero! ---------------\n\n";
            } else {
                echo "\n--------------- No se Modifico un Pasajero! ---------------\n\n";
            }
            break;
        case 3:
            // Agregar un Nuevo Pasajero
            echo "Ingrese Nombre: ";
            $nombre = trim(fgets(STDIN));     // Se introduce un nuevo nombre

            echo "Ingrese Apellido: ";
            $apellido = trim(fgets(STDIN));     // Se introduce un nuevo apellido

            echo "Ingrese Numero de DNI: ";
            $nroDni = trim(fgets(STDIN));     // Se introduce un nuevo DNI

            echo "Ingrese Numero de Telefono: ";
            $nroTelefono = trim(fgets(STDIN));     // Se introduce un nuevo telefono

            // creacion de un nuevo objeto pasajero
            $nuevoPasajero = new Pasajero($nombre, $apellido, $nroDni, $nroTelefono);

            // Valor booleano (false = se puede agregar. True no se puede agregar)
            $res = $viaje->agregarPasajero($nuevoPasajero);

            if ($res == false) {
                echo "\n--------------- Se agrego en la lista el nuevo pasajero! ---------------\n\n";
            } else {
                echo "\n--------------- Esta informacion es invalida! ---------------\n";
            }
            break;
        case 4:
            // Corregir Datos de la Persona Responsable
            $op = $viaje->corregirInformacionResponsable("14", "987654321", "Leo", "Checo", "20");

            if ($op == false) {
                echo "\n--------------- Se corrigio los datos de la Persona Responsable! ---------------\n\n";
            } else {
                echo "\n--------------- No se corrigio los datos de la Persona Responsable! ---------------\n";
            }
            break;
        case 5:
            //Mostrar datos del viaje
            echo $viaje;
            break;
        default;
            break;
    }
} while ($num != 6);
?>