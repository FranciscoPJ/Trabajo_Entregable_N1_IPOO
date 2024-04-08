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
$viaje = new Viaje(2024090420, "Futaleufu", 5, $ArregloPasajero, $personaResponsable);

// Inicio del Menu ------------------------------

do {
    echo "\nBienvenido al Sistema de Viaje Feliz!\n";
    echo "1. Cargar información del viaje\n";
    echo "2. Modificar datos del pasajero\n";
    echo "3. Agregar pasajero\n";
    echo "4. Modificar datos de la Persona Responsable\n";
    echo "5. Mostrar datos del viaje\n";
    echo "6. Salir\n";
    $num = trim(fgets(STDIN)); // se elige un numero del menu

    switch ($num) {
        case 1:
            // Se muestra los datos de la información cargada del viaje
            echo "--------------- Información del viaje cargada! ---------------\n";

            break;
        case 2:
            // Modificar Informacion de un Pasajero
            echo "\nIngrese el numero de DNI de la persona a modificar: ";
            $modDni = trim(fgets(STDIN));

            echo "\nIngrese el numero de DNI de la persona a modificar: ";
            $modNombre = trim(fgets(STDIN));

            echo "\nIngrese el numero de DNI de la persona a modificar: ";
            $modApellido = trim(fgets(STDIN));

            echo "\nIngrese el numero de DNI de la persona a modificar: ";
            $modTelefono = trim(fgets(STDIN));

            $respuestaUno = $viaje->corregirInformacion($modNombre, $modApellido, $modTelefono, $modDni);

            echo "\n--------------- Datos Modificados! ---------------\n\n";

            // Se envia un mensaje de la operacion
            if ($respuestaUno == false) {
                echo "\n--------------- Se Modifico un Pasajero! ---------------\n\n";
            } else {
                echo "\n--------------- No se Modifico un Pasajero! ---------------\n\n";
            }

            break;
        case 3:
            // Agregar un Nuevo Pasajero
            if (count($viaje->getObjPasajeros()) <= 5) {

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

            }
            else { // si se lleno la cantidad maxima de pasajeros, no puede agregar mas
                echo "\n--------------- No se puede agregar mas pasajeros, el viaje esta lleno. ---------------\n";
            }

            break;
        case 4:
            // Corregir Datos de la Persona Responsable
            $op = $viaje->corregirInformacionResponsable("14", "987654321", "Leo", "Checo", "20");

            if ($op == false) {
                echo "\n--------------- Se corrigio los datos de la Persona Responsable! ---------------\n\n";
            } else {
                echo "\n--------------- No se corrigio los datos de la Persona Responsable Porque Ya Existe! ---------------\n";
            }

            break;
        case 5:
            //Mostrar datos del viaje
            echo $viaje;

            break;
        default;
            echo "\n--------------- Fin Menu ---------------\n\n";

            break;
    }
} while ($num != 6);
