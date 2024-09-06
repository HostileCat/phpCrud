<?php

class Persona extends Model{
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $genero;
    protected $carrera;

    public function __construct(
        $id,
        $tabla,
        PDO $connection
    ){
        parent::__construct($id, $tabla, $connection);
        
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setApellido($apellido){
        $this->apellido = $apellido;
    }

    function getApellido(){
        return $this->apellido;
    }
    
    function setEdad($edad){
        $this->edad = $edad;
    }

    function getEdad(){
        return $this->edad;
    }

    function setGenero($genero){
        $this->genero = $genero;
    }

    function getGenero(){
        return $this->genero;
    }

    function setCarrera($carrera){
        $this->carrera = $carrera;
    }

    function getCarrera(){
        return $this->carrera;
    }

    function saludar(){
        return "hola soy ". $this->nombre ." ". $this->apellido;
    }
    
}

?>