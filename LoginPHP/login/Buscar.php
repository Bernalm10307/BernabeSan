<!DOCTYPE html>
<html>
<head>
    <title>Buscar Jugador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
                        <a class="nav-link" href="Admin.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Principal.php">Agregar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="IndexAdmin.php">Mostrar</a>
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
    <div class="container">
        <h1>Buscar Jugador</h1>

        <form action="" method="GET" class="form-inline mb-3">
            <input type="text" name="search" placeholder="Ingrese un dato para buscar" required class="form-control mr-sm-2">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <?php
        include("ConexionEstadistica.php");
        // Verificar si se realizó una búsqueda
        if (isset($_GET['search'])) {
            $search = $_GET['search'];

            // Realizar la consulta utilizando el dato ingresado en la búsqueda
            $sql = "SELECT * FROM jugadores WHERE nombre LIKE '%$search%' OR equipo LIKE '%$search%' OR  partidosJugados LIKE '%$search%' OR golesMarcados LIKE '%$search%' OR asistencias LIKE '%$search%' OR tarjetasAmarillas LIKE '%$search%' OR tarjetasRojas LIKE '%$search%' OR id LIKE '%$search%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<h2>Resultados de la búsqueda:</h2>";
                echo "<table class='table'>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nombre</th>";
                echo "<th>Equipo</th>";
                echo "<th>Partidos Jugados</th>";
                echo "<th>Goles Marcados</th>";
                echo "<th>Asistencias</th>";
                echo "<th>Tarjetas Amarillas</th>";
                echo "<th>Tarjetas Rojas</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

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

                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>No se encontraron resultados para la búsqueda.</p>";
            }
        }
        ?>
    </div>
</body>
</html>

