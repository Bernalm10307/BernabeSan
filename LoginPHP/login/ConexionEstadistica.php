<?php
$host = 'localhost';
$db = 'estadisticas_jugadores';
$user = 'cesar';
$pass = 'cesar123';
$port = '3308';

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}
?>
