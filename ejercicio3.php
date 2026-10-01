<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Datos de Estudiante</title>
</head>
<body>
    <?php
    /* 
       Problema: Almacenar la información básica de un estudiante 
       utilizando diferentes tipos de datos (entero, decimal, cadena y booleano)
       e imprimir cada uno de sus valores en pantalla.
    */

    $edad = 20;                         // integer
    $promedio = 17.5;                   // double
    $nombre_completo = "María Luisa"; // string
    $inscripcion_activa = true;         // boolean

    echo "Nombre del Estudiante: ";
    echo $nombre_completo;
    echo "<br>";

    echo "Edad: ";
    echo $edad;
    echo "<br>";

    echo "Promedio de Calificaciones: ";
    echo $promedio;
    echo "<br>";

    echo "Estado de Inscripción Activa: ";
    echo $inscripcion_activa;
    echo "<br>";
    ?>
</body>
</html>