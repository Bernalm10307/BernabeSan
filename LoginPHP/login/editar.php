<!DOCTYPE html>
<html>
<head>
    <title>Editar Jugador</title>
</head>
<body>
    <h1>Editar Jugador</h1>

    <?php

    include("ConexionEstadistica.php");
  
    $id = $_POST['id'];

    // Obtener los datos del jugador
    $sql = "SELECT * FROM jugadores WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
        <form action="Update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Nombre: </label>
            <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
            <label>Equipo: </label>
            <input type="text" name="equipo" value="<?php echo $row['equipo']; ?>"><br>
            <label>Partidos Jugados: </label>
            <input type="number" name="partidos_jugados" value="<?php echo $row['partidosJugados']; ?>"><br>
            <label>Goles Marcados: </label>
            <input type="number" name="goles_marcados" value="<?php echo $row['golesMarcados']; ?>"><br>
            <label>Asistencias: </label>
            <input type="number" name="asistencias" value="<?php echo $row['asistencias']; ?>"><br>
            <label>Tarjetas Amarillas: </label>
            <input type="number" name="tarjetas_amarillas" value="<?php echo $row['tarjetasAmarillas']; ?>"><br>
            <label>Tarjetas Rojas: </label>
            <input type="number" name="tarjetas_rojas" value="<?php echo $row['tarjetasRojas']; ?>"><br>
            <input type="submit" value="Actualizar Jugador">
        </form>
    <?php
    } else {
        echo "No se encontraron detalles del jugador.";
    }
    ?>
    <br>
    <a href="Principal.php">Volver a la lista de jugadores</a>
</body>
</html>
