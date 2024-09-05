<?php
// Verificar si se envió el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    // Verificar si se envió el formulario de inicio de sesión
    if ($action == "login") {
        // Obtener los datos del formulario de inicio de sesión
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Crear una conexión a la base de datos
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $port);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para verificar las credenciales del usuario
        $query = "SELECT * FROM usuarios WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        // Verificar si se encontró un registro coincidente
        if ($stmt->rowCount() == 1) {
            // Las credenciales son válidas, redirigir al usuario a la página de inicio
            header("Location: inicio.php");
            exit();
        } else {
            // Las credenciales son incorrectas, mostrar un mensaje de error
            $error = "Usuario o contraseña incorrectos";
        }
    }

    // Verificar si se envió el formulario de registro
    elseif ($action == "register") {
        // Obtener los datos del formulario de registro
        $newUsername = $_POST["new_username"];
        $newPassword = $_POST["new_password"];

        // Crear una conexión a la base de datos
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para insertar el nuevo usuario en la tabla "usuarios"
        $query = "INSERT INTO usuarios (username, password) VALUES (:username, :password)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $newUsername);
        $stmt->bindParam(":password", $newPassword);
        $stmt->execute();

        // Redirigir al usuario a la página de inicio de sesión después del registro
        header("Location: index.php");
        exit();
    }
}
?>