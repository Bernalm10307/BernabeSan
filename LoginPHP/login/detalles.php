<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Jugador</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Detalles del Jugador</h1>

    <?php
    include('ConexionEstadistica.php');
    $id = $_POST['id'];

    // Obtener los detalles del jugador
    $sql = "SELECT * FROM jugadores WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<table>";
        echo "<tr><th>ID</th><td>" . $row['id'] . "</td></tr>";
        echo "<tr><th>Nombre</th><td>" . $row['nombre'] . "</td></tr>";
        echo "<tr><th>Equipo</th><td>" . $row['equipo'] . "</td></tr>";
        echo "<tr><th>Partidos Jugados</th><td>" . $row['partidosJugados'] . "</td></tr>";
        echo "<tr><th>Goles Marcados</th><td>" . $row['golesMarcados'] . "</td></tr>";
        echo "<tr><th>Asistencias</th><td>" . $row['asistencias'] . "</td></tr>";
        echo "<tr><th>Tarjetas Amarillas</th><td>" . $row['tarjetasAmarillas'] . "</td></tr>";
        echo "<tr><th>Tarjetas Rojas</th><td>" . $row['tarjetasRojas'] . "</td></tr>";
        echo "</table>";
    } else {
        echo "No se encontraron detalles del jugador.";
    }
    ?>

    <br>
    <a href="Principal.php">Volver a la lista de jugadores</a>
</body>
</html>
