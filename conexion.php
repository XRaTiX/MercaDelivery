<?php

try {
    $dsn = "mysql:host=localhost;dbname=MercaDelivery";
    $conexion = new PDO($dsn,"admin","admin");
} catch (PDOException $e){
    echo $e->getMessage();
}
