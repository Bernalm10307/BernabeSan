<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Búsqueda de Objeto</h1>
  <form method="post" action="buscar.php">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Buscar">
  </form>
  <div id="resultado"></div>
<?php
$host = 'localhost';
$user = 'cesar';
$password = 'cesar123';
$database = 'alumnos';
$port = '3308';
$mysql = mysqli_connect($host, $user, $password, $database, $port);
$query = "SELECT * FROM ialumnos";
$resultado = mysqli_query($mysql, $query);
$data = mysqli_fetch_all($resultado);
echo "<select name ='Nombres'>";
foreach($data as $NuevoDato => $dato){
    echo '<option value =' .$dato[1].'>'.$dato[1].'</option>';
}   
echo "</select>";
?>
</body>
</html>