<?php
/*
    Importante: Deben enviar el link a la resolución en su 
    repositorio en GitHub del ejercicio.

    La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar 
    la información referente a sus viajes. De cada viaje se precisa 
    almacenar el código del mismo, destino, cantidad máxima de pasajeros 
    y los pasajeros del viaje.

    Realice la implementación de la clase Viaje e implemente los métodos 
    necesarios para modificar los atributos de dicha clase (incluso los datos de los
    pasajeros). Utilice clases y arreglos  para   almacenar la información 
    correspondiente a los pasajeros. 
    Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.

    Implementar un script testViaje.php que cree una instancia de 
    la clase Viaje y presente un menú que permita cargar la información del viaje, 
    modificar y ver sus datos.

    Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los
    atributos nombre, apellido, numero de documento y teléfono. El viaje ahora contiene 
    una referencia a una colección de objetos de la clase Pasajero. 
    También se desea guardar la información de la persona responsable de realizar 
    el viaje, para ello cree una clase ResponsableV que registre el número de empleado,
    número de licencia, nombre y apellido. La clase Viaje debe hacer referencia 
    al responsable de realizar el viaje.

    Implementar las operaciones que permiten modificar el nombre, apellido y 
    teléfono de un pasajero. Luego implementar la operación que agrega los pasajeros 
    al viaje, solicitando por consola la información de los mismos. Se debe verificar 
    que el pasajero no este cargado mas de una vez en el viaje. De la misma forma 
    cargue la información del responsable del viaje.
*/

class Viaje{

    // Atributos
    private $codigo;
    private $destino;
    private $cantMaximaPasajeros;
    private $objPasajeros;
    private $objResponsableViaje;
    
    // Metodo Constructor
    public function __construct($codigoViaje, $destinoViaje, $cantMax, $pasajeros, $responsableViaje){

        // Inicialiazion de los Valores
        $this->codigo = $codigoViaje;
        $this->destino = $destinoViaje;
        $this->cantMaximaPasajeros = $cantMax;
        $this->objPasajeros = $pasajeros;
        $this->objResponsableViaje = $responsableViaje;

    }

    // Metodo de Acceso Get
    public function getCodigoViaje(){
        return $this->codigo;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function getCantMaximaPasajeros(){
        return $this->cantMaximaPasajeros;
    }

    public function getObjPasajeros(){
        return $this->objPasajeros;
    }

    public function getObjResponsableViaje(){
        return $this->objResponsableViaje;
    }

    // Metodo Corregir Informacion de Pasajero
    public function corregirInformacion($nombre, $apellido, $telefono, $nroPersona){

        // inicializacion
        $personas = $this->getObjPasajeros(); // arreglo de personas
        $num = $nroPersona - 1;

        // Actualizacion de Informacion de Pasajero Asignado
        $personas[$num]->setNombre($nombre);
        $personas[$num]->setApellido($apellido);
        $personas[$num]->setTelefono($telefono);

    }

    // Metodo toString
    public function __toString(){
        
        // Inicializacion
        $pasajeros = $this->getObjPasajeros();
        $resPersona = $this->getObjResponsableViaje();

        $info = "\nInformacion del Viaje Feliz:\n\n";
        $info .= "  Codigo del Viaje: " . $this->getCodigoViaje() . ".\n\n";
        $info .= "  Destino del Viaje: " . $this->getDestino() . ".\n\n";
        $info .= "  Cantidad Max de Pasajeros: " . $this->getCantMaximaPasajeros() . ".\n\n";
        $info .= "  Informacion de Pasajeros:\n\n";
        for ($i = 0; $i < $this->getCantMaximaPasajeros(); $i++){
            $info .= "       Pasajero N°" . ($i + 1) . ":\n";
            $info .= "       Nombre: " . $pasajeros[$i]->getNombre() . ".\n";
            $info .= "       Apellido: " . $pasajeros[$i]->getApellido() . ".\n";
            $info .= "       Numero de DNI: " . $pasajeros[$i]->getNroDni() . ".\n";
            $info .= "       Numero de Telefono: " . $pasajeros[$i]->getTelefono() . ".\n\n";
        }
        $info .= "  Informacion de la Persona Responsable de Realizar el Viaje:\n\n";
        $info .= "       Nombre: " . $resPersona->getNombreEmpleado() . ".\n";
        $info .= "       Apellido: " . $resPersona->getApellidoEmpleado() . ".\n";
        $info .= "       Numero de Licencia: " . $resPersona->getNroLicencia() . ".\n";
        $info .= "       Numero de Empleado: " . $resPersona->getNroEmpleado() . ".\n\n";

        return $info;

    }

}
