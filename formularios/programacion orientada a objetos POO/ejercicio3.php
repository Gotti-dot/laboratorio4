<?php
class Sumadora {
    // Propiedades
    private $numero1;
    private $numero2;

    // Constructor
    public function __construct($num1, $num2) {
        $this->numero1 = $num1;
        $this->numero2 = $num2;
    }

    // Método para sumar
    public function sumar() {
        return $this->numero1 + $this->numero2;
    }

    // Getters (Opcionales)
    public function getNumero1() {
        return $this->numero1;
    }

    public function getNumero2() {
        return $this->numero2;
    }
}

// --- Uso de la clase ---

// Crear objeto
$calculadora = new Sumadora(5, 3);

// Obtener números (opcional)
echo "Número 1: " . $calculadora->getNumero1() . "<br>";
echo "Número 2: " . $calculadora->getNumero2() . "<br>";

// Realizar suma
$resultado = $calculadora->sumar();
echo "La suma es: " . $resultado;
?>