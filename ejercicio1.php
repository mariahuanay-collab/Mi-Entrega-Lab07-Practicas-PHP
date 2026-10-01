<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Ficha de Producto</title>
</head>
<body>
    <?php
    // Declaración de variables con tipos básicos
    $codigo = 1001;                 // integer
    $precio = 299.99;               // double
    $nombre = "Teclado Mecánico";   // string
    $disponible = true;             // boolean

    // Impresión de variables con etiquetas descriptivas
    echo "Código del producto: ";
    echo $codigo;
    echo "<br>";

    echo "Nombre del producto: ";
    echo $nombre;
    echo "<br>";

    echo "Precio del producto: S/ ";
    echo $precio;
    echo "<br>";

    echo "Disponible en stock: ";
    echo $disponible;
    echo "<br>";
    ?>
</body>
</html>