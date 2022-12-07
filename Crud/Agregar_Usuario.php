<?php
include("Conectar.php");
$con = conectar();

$Id_alumno = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Telefono = $_POST['Telefono'];

$sql = "INSERT INTO ialumnos VALUES($Id_alumno,'$Nombre','$Apellido','$Telefono')" or die ("problema en la consulta");
$query = mysqli_query($con, $sql);

if($query = true){
    Header("Location: Usuarios.php");
}else{

}

?>