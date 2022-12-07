<?php
include("Conectar.php");
$con = conectar();

$Id=$_GET["id"];

$sql = "DELETE FROM ialumnos WHERE Id_alumno = '$Id'";
$query = mysqli_query($con, $sql);

if($query=true){
    Header("Location: Usuarios.php");
}else{

}
?>
