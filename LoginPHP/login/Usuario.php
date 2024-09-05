<!DOCTYPE html>
<html>
<head>
    <title>ESTADISTICAS DE CADA JUGADOR</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
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
                </ul>
            </div>
        </nav>
    </header>
    
    <main>
        <!-- Contenido de la página -->
    </main>
    
    <footer>
        <p>© <?php echo date("Y"); ?> Elaborado Por Cesar Bernabe #19100150</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>