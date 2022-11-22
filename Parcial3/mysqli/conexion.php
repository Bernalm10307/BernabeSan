
<?php

$servidor = "localhost";
$basedatos = "bdalumnos";
$usuario = "cesar";
$password = "cesar123";
$port = "3306";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar al localhost");
$consulta = "select * from alumnos";

$registros = mysqli_query($con,$consulta) or die("Problema con el select");

$result = mysqli_fetch_all($registros);

mysqli_close($con);
echo json_encode($result); 
?>

