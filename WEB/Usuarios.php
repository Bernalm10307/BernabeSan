<?php
// Ejemplo de datos de usuarios
$usuarios = array(
    array("id" => 1, "nombre" => "Juan", "apellido" => "Pérez", "edad" => 30),
    array("id" => 2, "nombre" => "María", "apellido" => "Gómez", "edad" => 28),
    array("id" => 3, "nombre" => "Carlos", "apellido" => "López", "edad" => 35)
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>
    <h2>Usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario["id"]; ?></td>
            <td><?php echo $usuario["nombre"]; ?></td>
            <td><?php echo $usuario["apellido"]; ?></td>
            <td><?php echo $usuario["edad"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
