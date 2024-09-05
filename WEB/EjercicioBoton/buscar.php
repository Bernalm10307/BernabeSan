<?php
// Conexión a la base de datos
$host = 'localhost';
$user = 'cesar';
$password = 'cesar123';
$database = 'alumnos';
$port = '3308';

$conn = new mysqli_connect($host, $user, $password, $database, $port);
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el nombre del objeto enviado por el formulario
$nombre = $_POST["nombre"];

// Consulta SQL para buscar el objeto en la base de datos
$sql = "SELECT * FROM ialumnos WHERE Nombre = '$nombreObjeto'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Objeto encontrado, mostrar sus propiedades
  $objeto = $result->fetch_assoc();
  echo "Nombre: " . $objeto["Nombre"] . "<br>";
  echo "Propiedad 1: " . $objeto["Telefono"] . "<br>";
  echo "Propiedad 2: " . $objeto["Apellido"] . "<br>";
  // y así sucesivamente para cada propiedad que tenga el objeto
} else {
  // Objeto no encontrado
  echo "Objeto no encontrado.";
}

$conn->close();
?>