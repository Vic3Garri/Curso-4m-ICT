<?php

    $host="localhost";
    $user="ictAdm";
    $pass="ict#2023";
    $dbname="ict_web";

    try{
        $DBH = new PDO("mysql:host=$host;dbname=$dbname, $user, $pass");
    }catch(PDOException $e) {
        echo $e->getMessage();
    }
    $DBH = null;

   