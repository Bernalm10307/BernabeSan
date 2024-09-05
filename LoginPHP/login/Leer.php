<?php
// Obtener la lista de jugadores
$sql = "SELECT * FROM jugadores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Equipo: " . $row['equipo'] . "<br>";
        echo "Partidos jugados: " . $row['partidosJugados'] . "<br>";
        echo "Goles marcados: " . $row['golesMarcados'] . "<br>";
        echo "Asistencias: " . $row['asistencias'] . "<br>";
        echo "Tarjetas amarillas: " . $row['tarjetasAmarillas'] . "<br>";
        echo "Tarjetas rojas: " . $row['tarjetasRojas'] . "<br>";
        echo "<br>";
    }
} else {
    echo
