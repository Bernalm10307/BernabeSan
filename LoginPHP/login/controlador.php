<?php
if (!empty($_POST["btnIngresar"])) {

    if(empty($_POST["IdCorreo"]) and empty($_POST["Password"]))
    {
        
    }

    $Correo = $_POST["IdCorreo"];
    $Password = $_POST["password"];
    $sql = $conexion->query("SELECT * FROM cuenta WHERE Correo = '$Correo'  AND Contrasena = '$Password' AND Id = 1");
    $sqlAux = $conexion->query("SELECT * FROM cuenta WHERE Correo = '$Correo' AND Contrasena= '$Password' AND Id <> 1");
    if ($datos = $sql->fetch_object())
    {
        header("Location:Admin.php");
    } 
    else if($datos = $sqlAux->fetch_object())
     {
        header("Location:Usuario.php");   
    }
}
?>