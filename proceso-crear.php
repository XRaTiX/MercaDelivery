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

$insertar->execute();
echo 'Usuario Creado correctamente';