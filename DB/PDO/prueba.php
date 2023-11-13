<?php

    require('conexion.php');

    $stmt = $dbh->prepare("SELECT id_cuenta,nombre FROM CUENTA");

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmt->execute();
    // Mostramos los resultados
    while ($row = $stmt->fetch()){
        echo "ID Cuenta: {$row["id_cuenta"]} <br>";
        echo "Nombre: {$row["nombre"]} <br><br>";
    }
