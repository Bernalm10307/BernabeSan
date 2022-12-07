<?php
include("Conectar.php");
$con = conectar();



$Id_Usuario = $_GET['id'];

    $sql = "SELECT * FROM ialumnos WHERE Id_alumno ='$Id_Usuario'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Usuarios.css">
    <title>Document</title>
</head>

<body>

    <body>

        <div class="Usuarios">
            <h1>Editar</h1>
            <form action="Editar_Usuario.php" method="POST">
                <label for="Id">Id</label>
                <input type="text" name="IdActualizar" placeholder="Id" value="<?= $row['Id_alumno']?>">
                <label for="Id">Nombre</label>
                <input type="text" name="NombreActualizar" placeholder="Nombre" value="<?= $row['Nombre']?>">
                <label for="Id">Apellido</label>
                <input type="text" name="ApellidoActualizar" placeholder="Apellido" value="<?= $row['Apellido']?>">
                <label for="Id">Correo</label>
                <input type="text" name="TelefonoActualizar" placeholder="Telefono" value="<?= $row['Telefono']?>">

                <input id="Actualizar" type="submit" value="Actualizar">

            </form>
        </div>
    </body>

</html>