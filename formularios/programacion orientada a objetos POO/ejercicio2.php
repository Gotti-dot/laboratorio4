<?php
class Persona {
    // Propiedades
    public $nombre;
    public $edad;
    private $ci; // Propiedad privada

    // Constructor
    public function __construct($nombre, $edad, $ci) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ci = $ci;
    }

    // Método público
    public function saludar() {
        return "Hola, soy {$this->nombre} y tengo {$this->edad} años.";
    }

    // Método privado (solo accesible dentro de la clase)
    private function getCi() {
        return $this->ci;
    }

    // Método público para acceder a un dato privado
    public function mostrarCi() {
        return " C.I.: " . $this->getCi();
    }
}

// Uso de la clase
$persona1 = new Persona("Jacob", 25, "12345678A");
echo $persona1->saludar();
echo $persona1->mostrarCi();
?>