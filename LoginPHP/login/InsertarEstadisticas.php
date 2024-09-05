<?php
include("ConexionEstadistica.php");

// Insertar un nuevo jugador
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $equipo = $_POST['equipo'];
    $partidos_jugados = $_POST['partidosJugados'];
    $goles_marcados = $_POST['golesMarcados'];
    $asistencias = $_POST['asistencias'];
    $tarjetas_amarillas = $_POST['tarjetasAmarillas'];
    $tarjetas_rojas = $_POST['tarjetasRojas'];

    $sql1 = "INSERT INTO jugadores (nombre, equipo, partidosJugados, golesMarcados, asistencias, tarjetasAmarillas, tarjetasRojas)
            VALUES ('$nombre', '$equipo', '$partidos_jugados', '$goles_marcados', '$asistencias', '$tarjetas_amarillas', '$tarjetas_rojas')";

    if ($conn->query($sql1) === TRUE) {
        $mensaje = "Jugador agregado correctamente";

        // Mostrar la alerta utilizando JavaScript
        echo '<script>';
        echo 'alert("' . $mensaje . '");';
        echo '</script>';
    } else {
        echo "Error al agregar jugador: " . $conn->error;
    }
}
?>
