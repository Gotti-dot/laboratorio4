<?php
class Persona{
    #Propiedades
    public $nombre = 'Alejandro';
    public $edad = 45;
    public $altura = 1.89;

    #Metodos
    function Mostrar(){
        echo "Su nombre es: {$this->nombre} <br>";
        echo "Su Edad es: {$this->edad} <br>";
        echo "Su Altura es: {$this->altura} <br>";
    }
}

$persona = new Persona();
echo $persona->Mostrar();
?>