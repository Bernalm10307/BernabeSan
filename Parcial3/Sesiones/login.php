<?php
session_start();
$user = $_POST['usuario'];
$pasw = $_POST['password'];

if(isset($_SESSION['usuario'])){
    printf("Nueva Sesion <br>");
    printf("Bienvenido de Nuevo".$_SESSION['usuario']);
}
else{
    $_SESSION['usuario'] = $user;
    printf("Nueva Sesion <br>");
    printf("Bienvenido %s",$user);
}
?>