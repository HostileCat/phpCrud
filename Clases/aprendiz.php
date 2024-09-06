<?php
    include_once("persona.php");

    class Aprendiz extends Persona{
        private $cuenta;
        private $promedio;
        

        public function __construct(PDO $connection){
            parent::__construct("id", "usuario", $connection);
        }

        function setCuenta($cuenta){
            $this->cuenta = $cuenta;
        }

        function getCuenta(){
            return $this->cuenta;
        }

        function setPromedio($promedio){
            $this->promedio = $promedio;
        }

        function getPromedio(){
            return $this->promedio;
        }

        function saludar(){
            return "hola soy ". $this->cuenta ." ". $this->promedio;
        }

        public function cancelarMatricula(){
            echo "<p>Cancelar Matricula del aprendiz ". $this->nombre . "</p>";
        }
    }

    
?>