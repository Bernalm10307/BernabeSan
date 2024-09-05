<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Definimos la cantidad de tablas que queremos generar
$numero_tablas = 10;

// Iteramos sobre cada tabla
for ($tabla = 1; $tabla <= $numero_tablas; $tabla++) {

    // Imprimimos el título de la tabla
    echo "<h2>Tabla del $tabla</h2>";

    // Imprimimos la tabla de multiplicar
    echo "<table>";

    // Iteramos sobre los multiplicadores del 1 al 10
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++) {

        // Calculamos el resultado de la multiplicación
        $resultado = $tabla * $multiplicador;

        // Imprimimos una fila de la tabla
        echo "<tr><td>$tabla x $multiplicador</td><td>=</td><td>$resultado</td></tr>";
    }

    // Cerramos la tabla
    echo "</table>";
}

?>

</body>
</html>