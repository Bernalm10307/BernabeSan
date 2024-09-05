<?php

include("ConexionEstadistica.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM jugadores WHERE id=$id";

    if ($conn->query($sql) === TRUE) {

        $mensaje = "¡Jugador eliminado correctamente!";

// Mostrar la alerta utilizando JavaScript
echo '<script>';
echo 'alert("' . $mensaje . '");';
echo '</script>';
  

        
    } else {
        echo "Error al eliminar jugador: " . $conn->error;
    }
}
?>
