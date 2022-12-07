<?php
function conectar()
{
    $servidor = 'localhost';
    $basededatos = "alumnos";
    $usuario = "root";
    $password = "";

    $conexion = mysqli_connect($servidor,$usuario,$password,$basededatos) or die ("No se conecto");

    mysqli_select_db($conexion, $basededatos);

    return $conexion;
}
?>