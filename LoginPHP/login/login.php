<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="Header"> Login</div>
    <div class="info">
        <h1 id="Saludo">¡Bienvenido de nuevo!</h1>
        <img id="FotoUser"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5qU2u20-kcXSxdA8cjiLXIeRYXMA-gJ7mXw&usqp=CAU">
        <form method="POST" action="">
              <!--<input type="text" name="Id_Cuenta" placeholder="Id_Cuenta" id="Id_Cuenta">-->
            <label for="Correo" id="lblCorreo">Correo:</label>
            <input id="IdCorreo" type="text" class="input" name="IdCorreo">
    </div>
    <div class="password">
        <label for="Contrasena" id="lblContrasena">Contraseña:</label>
        <input id="password" type="text" class="input" name="password">
    </div>
    <div class="Ingresar">
        <input class="btn" type="submit" value= "Iniciar sesion" name="btnIngresar">
    </div>
    <?php
    include("conexion.php");
    include("controlador.php");
    ?>
    </form>


</body>

</html>