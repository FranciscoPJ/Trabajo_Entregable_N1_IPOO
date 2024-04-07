<?php 

class Pasajero{
    
    // Atributos
    private $nombre;
    private $apellido;
    private $nroDni;

    // Metodo Constructor
    public function __construct($nombrePasajero, $apellidoPasajero, $nroDniPasajero){

        // Inicializacion de los Valores
        $this->nombre = $nombrePasajero;
        $this->apellido = $apellidoPasajero;
        $this->nroDni = $nroDniPasajero;
        
    }

    // Metodos de Acceso Get
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getNroDni(){
        return $this->nroDni;
    }

    // Metodo toString
    public function __toString(){
        
        $info = "\nNombre de Pasajero: " . $this->getNombre() . ".\n";
        $info .= "Apellido de Pasajero: " . $this->getApellido() . ".\n";
        $info .= "Numero de DNI de Pasajero: " . $this->getNroDni() . ".\n";

        return $info;
    }

}

?>