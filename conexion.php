<?php

try {
    $dsn = "mysql:host=localhost;dbname=MercaDelivery";
    $conexion = new PDO($dsn,"admin","admin",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
} catch (PDOException $e){
    echo $e->getMessage();
}
