<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Concatenación de Cadenas</title>
</head>
<body>
    <?php
    // Definición de variables string
    $ciudad = "Lima";
    $pais = "Perú";
    $continente = "América del Sur";

    // Concatenación en una cuarta variable usando el operador punto (.)
    $ubicacion_completa = $ciudad . ", " . $pais . " - " . $continente . "<br>";
    echo $ubicacion_completa;

    // Variable numérica entera
    $codigo_postal = 15001;

    // Concatenación explícita de texto y número
    echo "El código postal de " . $ciudad . " es " . $codigo_postal . "<br>";
    ?>
</body>
</html>