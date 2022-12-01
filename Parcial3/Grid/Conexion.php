<?php
$servidor = "localhost";
$basededatos = "bdalumnos";
$usuario = "cesar";
$password = "cesar123";
$port = "3306";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos, $port) or die ("No se conecto");
$consulta = "select * from alumnos";  

$registros = mysqli_query($con,$consulta) or die ("Problema en el select");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);
?>