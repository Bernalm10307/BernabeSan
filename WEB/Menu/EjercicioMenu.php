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

// Función para imprimir el inicio del header
function imprimirInicioHeader() {
    echo '<!DOCTYPE html>';
    echo '<html lang="es">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<title>Mi sitio web</title>';
    echo '</head>';
    echo '<body>';
}

// Función para imprimir el fin del header
function imprimirFinHeader() {
    echo '<header>';
    echo '<h1>Mi sitio web</h1>';
    echo '<nav>';
    // Aquí podrías imprimir los enlaces a otras páginas del sitio
    echo '</nav>';
    echo '</header>';
}

// Llamamos a la función para imprimir el inicio del header
imprimirInicioHeader();

// Llamamos a la función para imprimir el fin del header
imprimirFinHeader();

?>
</body>
</html>
