<?php
include 'conexion.php';

$email = $_GET["email"];
$pass = $_GET["pass"];

$login = $conexion->prepare("SELECT * from usuarios WHERE Correo = '$email' AND Password = '$pass'");

$login->setFetchMode(PDO::FETCH_ASSOC);
$login->execute();

while($usuario = $login->fetch()){
    session_start();
    $_SESSION["Correo"] = $usuario["Correo"];
    header("Location: index.php");
}