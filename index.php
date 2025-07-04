<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Proyecto Web</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Bienvenido a mi proyecto web en PHP</h1>
    <p>Este sitio tiene PHP, CSS y JavaScript.</p>

    <?php
        // PHP embebido
        echo "<p>Hoy es " . date("d/m/Y") . "</p>";
    ?>

    <button onclick="saludar()">Haz clic</button>

    <script src="js/script.js"></script>
</body>
</html>
