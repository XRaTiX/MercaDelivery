<?php
include 'conexion.php';

$email = $_GET["email"];
$pass = $_GET["pass"];

$consultar_usuario = $conexion->prepare("SELECT * from usuarios WHERE Correo = '$email' AND Password = '$pass'");

$consultar_usuario->setFetchMode(PDO::FETCH_ASSOC);
$consultar_usuario->execute();

while($usuario = $consultar_usuario->fetch()){
    $_SESSION["Correo"] = $usuario["Correo"];
    header("Location: index.php");
}