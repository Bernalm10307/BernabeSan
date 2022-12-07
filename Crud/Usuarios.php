<?php
include('Conectar.php');
$con = conectar();
$sql = "SELECT * FROM ialumnos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Usuarios.css">
    <title>Usuarios</title>
</head>
<body>
    <h1 id="Encabezado">Alumnos</h1>
    
    
    <div class="Usuarios" id="Formusuarios">
        <h2>Agregar alumno</h2>
        <form action="Agregar_Usuario.php" method="POST">
       <input type="text" name="Id" placeholder="Id">
        <input type="text" name="Nombre" placeholder="Nombre">
        <input type="text" name="Apellido" placeholder="Apellido">
        <input type="text" name="Telefono" placeholder="Telefono">


    
        <button id="btnagg" type="submit" value="Agregar">Agregar alumno</button>   
        
        </form>
    </div>

    <div class="alumnos-table">
        <h3>Alumnos</h3>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th id="theditar">Editar</th>
                    <th id="theliminar">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['Id_alumno'] ?></th>
                        <th><?= $row['Nombre'] ?></th>
                        <th><?= $row['Apellido'] ?></th>
                        <th><?= $row['Telefono'] ?></th>
                        <th><a href="Actualizar_Usuario.php?id=<?= $row['Id_alumno'] ?>">Editar alumno</a></th>
                        <th><a href="Eliminar_Usuario.php?id=<?= $row['Id_alumno'] ?>">Eliminar alumno</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    

</body>

</html>