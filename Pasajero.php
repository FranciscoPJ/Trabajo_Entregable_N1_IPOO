<?php 
class Pasajero{
    
    // Atributos
    private $nombre;
    private $apellido;
    private $nroDni;
    private $telefono;

    /** Metodo Constructor.
     * Recibe como parametros los valores de los atributos. Retorna vacio
     * @param STRING $nombrePasajero
     * @param STRING $apellidoPasajero
     * @param INT $nroDniPasajero
     * @param INT $telefono
     */
    public function __construct($nombrePasajero, $apellidoPasajero, $nroDniPasajero, $telefono){

        // Inicializacion de los Valores
        $this->nombre = $nombrePasajero;
        $this->apellido = $apellidoPasajero;
        $this->nroDni = $nroDniPasajero;
        $this->telefono = $telefono;
        
    }

    // Metodos de Acceso Get
    /** Metodo de Acceso Get.
     * Retorna un nombre
     * @return STRING */
    public function getNombre(){
        return $this->nombre;
    }

    /** Metodo de Acceso Get.
     * Retorna un apellido
     * @return STRING */
    public function getApellido(){
        return $this->apellido;
    }

    /** Metodo de Acceso Get.
     * Retorna un numero de DNI
     * @return INT */
    public function getNroDni(){
        return $this->nroDni;
    }

    /** Metodo de Acceso Get.
     * Retorna un numero de una persona
     * @return STRING */
    public function getTelefono(){
        return $this->telefono;
    }

    // Metodos de Acceso Set
    /** Metodo de Acceso Set.
     * Recibe como parametro un nuevo nombre. 
     * Retorna un nuevo nombre de una persona
     * @param STRING $nuevoNombre
     * @return STRING */
    public function setNombre($nuevoNombre){
        return $this->nombre = $nuevoNombre;
    }

    /** Metodo de Acceso Set.
     * Recibe como parametro un nuevo apellido. 
     * Retorna un nuevo apellido de una persona
     * @param STRING $nuevoApellido
     * @return STRING */
    public function setApellido($nuevoApellido){
        return $this->apellido = $nuevoApellido;
    }

    /** Metodo de Acceso Set.
     * Recibe como parametro un nuevo numero DNI. 
     * Retorna un nuevo numero de DNI de una persona
     * @param INT $nuevoDni
     * @return INT */
    public function setNroDni($nuevoDni){
        return $this->nroDni = $nuevoDni;
    }

    /** Metodo de Acceso Set.
     * Recibe como parametro un nuevo telefono. 
     * Retorna un nuevo numero de telefono de una persona
     * @param INT $nuevoNumero
     * @return INT */
    public function setTelefono($nuevoNumero){
        return $this->telefono = $nuevoNumero;
    }

    /** Metodo toString.
     * Retorna una cadena de carateres de todos los atributos
     * @return STRING */
    public function __toString(){
        
        $info = "\nNombre de Pasajero: " . $this->getNombre() . ".\n";
        $info .= "Apellido de Pasajero: " . $this->getApellido() . ".\n";
        $info .= "Numero de DNI de Pasajero: " . $this->getNroDni() . ".\n";
        $info .= "Numero de telefono de Pasajero: " . $this->getTelefono() . ".\n";

        return $info;
    }

}

?>