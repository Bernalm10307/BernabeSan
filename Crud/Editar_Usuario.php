<?php

include("Conectar.php");
$con = conectar();

$Id=$_POST["IdActualizar"];
$Nombre = $_POST['NombreActualizar'];
$Apellido = $_POST['ApellidoActualizar'];
$Telefono = $_POST['TelefonoActualizar'];

$sql="UPDATE ialumnos SET Id_alumno='$Id',Nombre='$Nombre',Apellido='$Apellido',Telefono='$Telefono' WHERE Id_alumno='$Id'";
$query = mysqli_query($con, $sql);

if($query = true){
    Header("Location: Usuarios.php");
}else{

}

?>
