<?php

class ResponsableV{

    // Atributos
    private $nroEmpleado;
    private $nroLicencia;
    private $nombreEmpleado;
    private $apellidoEmpleado;

    // Metodo Constructor
    public function __construct($numEmpleado, $numLicencia, $nombre, $apellido){

        // Inicializacion
        $this->nroEmpleado = $numEmpleado;
        $this->nroLicencia = $numLicencia;
        $this->nombreEmpleado = $nombre;
        $this->apellidoEmpleado = $apellido;

    }

    // Metodos de Acceso Get
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }

    public function getNroLicencia(){
        return $this->nroLicencia;
    }

    public function getNombreEmpleado(){
        return $this->nombreEmpleado;
    }

    public function getApellidoEmpleado(){
        return $this->apellidoEmpleado;
    }

    // Metodos de Acceso Set
    public function setNroEmpleado($nuevoNumero){
        return $this->nroEmpleado = $nuevoNumero;
    }

    public function setNroLicencia($nuevaLicencia){
        return $this->nroLicencia = $nuevaLicencia;
    }

    public function setNombreEmpleado($nuevoNombre){
        return $this->nombreEmpleado = $nuevoNombre;
    }

    public function setApellidoEmpleado($nuevoApellido){
        return $this->apellidoEmpleado = $nuevoApellido;
    }

    // Metodo toString
    public function __toString(){
        
        $info = "\nInformacion de la Persona Responsable de Realizar el Viaje:\n";
        $info .= "     Numero de Empleado: " . $this->getNroEmpleado() . ".\n";
        $info .= "     Numero de Licencia: " . $this->getNroLicencia() . ".\n";
        $info .= "     Nombre de Empleado: " . $this->getNombreEmpleado() . ".\n";
        $info .= "     Apellido de Empleado: " . $this->getApellidoEmpleado() . ".\n\n";

        return $info;
    }
}
?>