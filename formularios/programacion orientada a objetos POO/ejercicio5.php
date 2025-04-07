<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO con Persona</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Personas</h1>

        <!-- Formulario -->
        <form method="post" class="persona-form">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required min="1">
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <select id="genero" name="genero" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn">Crear Persona</button>
 </form>

<!-- Resultado -->
<?php
require_once 'persona.php';

if (isset($_POST['submit'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = intval($_POST['edad']);
    $genero = htmlspecialchars($_POST['genero']);

    // Crear objeto Persona
    $persona = new Persona($nombre, $edad, $genero);

    // Mostrar información
    echo '<div class="resultado">';
    echo '<h2>Información de la Persona</h2>';
    echo '<p>' . $persona->mostrarInfo() . '</p>';
    echo '<p>Nombre: ' . $persona->getNombre() . '</p>';
    echo '<p>Edad: ' . $persona->getEdad() . ' años</p>';
    echo '<p>Género: ' . $persona->getGenero() . '</p>';
    echo '</div>';
}
?>
</div>
</body>
</html>