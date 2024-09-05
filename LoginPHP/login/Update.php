<?php
include("ConexionEstadistica.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $equipo = $_POST['equipo'];
    $partidos_jugados = $_POST['partidos_jugados'];
    $goles_marcados = $_POST['goles_marcados'];
    $asistencias = $_POST['asistencias'];
    $tarjetas_amarillas = $_POST['tarjetas_amarillas'];
    $tarjetas_rojas = $_POST['tarjetas_rojas'];

    $sql = "UPDATE jugadores SET nombre='$nombre',equipo='$equipo',partidosJugados='$partidos_jugados', golesMarcados='$goles_marcados', asistencias='$asistencias', tarjetasAmarillas='$tarjetas_amarillas', tarjetasRojas='$tarjetas_rojas' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Jugador actualizado correctamente.";
        Header("Location: Principal.php");
    } else {
        echo "Error al actualizar jugador: " . $conn->error;
    }
}
?>
