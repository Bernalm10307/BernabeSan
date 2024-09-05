<?php
// Datos de conexión a la base de datos
$host = "localhost";
$dbname = "login";
$username = "cesar";
$password = "cesar123";
$port = "3308"



    $username = $_POST["username"];
    $password = $_POST["password"];

    // Crear una conexión a la base de datos
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $port);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para verificar las credenciales del usuario
    $query = "SELECT * FROM usuarios WHERE IdUsuario = :IdUsuario AND Contraseña = :Contraseña";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":IdUsuario", $username);
    $stmt->bindParam(":Contraseña", $password);
    $stmt->execute();

    // Verificar si se encontró un registro coincidente
    if ($stmt->rowCount() == 1) {
        // Las credenciales son válidas, redirigir al usuario a la página de inicio
        header("Location: Usuarios.php");
        exit();
    } else {
        // Las credenciales son incorrectas, mostrar un mensaje de error
        $error = "Usuario o contraseña incorrectos";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>

