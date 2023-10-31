<?php
$conecta = mysqli_connect("localhost", "root", "", "ict_web");
if($conecta->connect_error){

    die("Error al conectar la base de la pagina: " . $conecta->connect_error);
}
else{
echo "coneccion exitosa";
mysqli_close($conecta);
}
?>