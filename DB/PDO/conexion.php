<?php

    $host='localhost';
    $user='root';
    $pass='123456789';
    $dbname='ict_web';
   
    try {
        $dsn = "mysql:host=$host;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $pass);
        echo "conexion exitosa";
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    $dbh = null;

    
   