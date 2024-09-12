<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styleCrud.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Estadísticas de Jugadores</title>
    <style>
         /* Estilo personalizado para el menú */
         .navbar-custom {
            background-color: #343a40;
            background-image: linear-gradient(to right, #343a40, #1e272e);
        }
        
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {
            color: #fff;
        }
        
        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-nav .nav-link:hover {
            color: #ffca28;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <a class="navbar-brand" href="#">ESTASDISTICAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Usuario.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Mostrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Buscar.php">Buscar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Cerrar Sesion.</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <footer>
        <p>© <?php echo date("Y"); ?> Elaborado Por Cesar Bernabe #19100150</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <h1>Estadísticas de Jugadores</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Equipo</th>
            <th>Partidos Jugados</th>
            <th>Goles Marcados</th>
            <th>Asistencias</th>
            <th>Tarjetas Amarillas</th>
            <th>Tarjetas Rojas</th>
        </tr>

        <?php
        include("ConexionEstadistica.php");
        $sql = "SELECT * FROM jugadores";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['equipo'] . "</td>";
                echo "<td>" . $row['partidosJugados'] . "</td>";
                echo "<td>" . $row['golesMarcados'] . "</td>";
                echo "<td>" . $row['asistencias'] . "</td>";
                echo "<td>" . $row['tarjetasAmarillas'] . "</td>";
                echo "<td>" . $row['tarjetasRojas'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No se encontraron jugadores</td></tr>";
        }
        ?>

    </table>

</body>
</html>