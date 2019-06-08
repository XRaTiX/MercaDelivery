<?php
include 'conexion.php';

$email = $_GET["email"];
$pass = $_GET["pass"];

$insertar = $conexion->prepare("INSERT INTO usuarios ("
        . "Correo,"
        . "Password) VALUES ("
        . ":email,"
        . ":password)");
$insertar->bindParam(':email', $email);
$insertar->bindParam(':password', $pass);

if($insertar->execute() == 1){
    header("Location: index.php");
}
else{
    header("Location: register.php?error=true");
}