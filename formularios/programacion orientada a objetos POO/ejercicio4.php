<?php
include "ejercicio2.php";

class Estudiante extends Persona { // Hereda de Persona
    // Propiedad adicional
    public $carrera;

    // Constructor
    public function __construct($nombre, $edad, $ci, $carrera) {
        parent::__construct($nombre, $edad, $ci); // Llama al constructor de Persona
        $this->carrera = $carrera;
    }

    // Método adicional
    public function estudiar() {
        return "{$this->nombre} está estudiando {$this->carrera}.";
    }

    // Sobrescritura de método (override)
    public function saludar() {
        return parent::saludar() . " Soy estudiante de {$this->carrera}.";
    }
}

// Uso de la clase
$estudiante1 = new Estudiante("Alejandro", 20, "87654321B", "Informatica Industrial");
echo "<br>";
echo $estudiante1->saludar();
echo "<br>";
echo $estudiante1->estudiar();
?>