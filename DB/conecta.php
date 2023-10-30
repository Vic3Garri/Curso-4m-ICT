<? 
$servidor= "localhost";
$usuario= "pma";
$password= "";
$db= "ict_web";
$conexion = new mysqli($servidor, $usuario, $password, $db);
if($conexion->connect_errno){
    die("coneccion fallida: ".$conexion->connect_errno);
}
else{
    echo "conexion exitosa";
}
?>