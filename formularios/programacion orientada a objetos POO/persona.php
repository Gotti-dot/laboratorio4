<?php
class Persona {
    // Propiedades
    private $nombre;
    private $edad;
    private $genero;

    // Constructor
    public function __construct($nombre, $edad, $genero) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
    }

    // Métodos Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getGenero() {
        return $this->genero;
    }

    // Método para mostrar información
    public function mostrarInfo() {
        return "Nombre: {$this->nombre}, Edad: {$this->edad}, Género: {$this->genero}";
    }
}
?>