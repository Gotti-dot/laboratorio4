<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validación simulada (en un caso real, verificaría en una base de datos)
    if ($email == "admin@example.com" && $password == "123456") {
        echo "<h1>Bienvenido, Admin!</h1>";
    } else {
        echo "<h1>Error: Credenciales incorrectas</h1>";
    }
}
?>