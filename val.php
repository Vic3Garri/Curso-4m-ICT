<?php
    session_start();
    include("conecta.php");

    if(isset($_POST['nombre']) && $_POST['contraceña']){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    

    $usuario = validate($_POST['nombre']);
    $Clave = validate($_POST['clave']);


    if (empty($usuario)){
        header("location: iniciar.php?error-El Usuario es requerido");
    }elseif(empty($Clave)){
        header("location: iniciar.php?error-la Clave es requerido");
    }else{
        //$Clave = md5($Clave);

        $Sql = "SELECT * FROM cuenta where nombre = '$Usuario' and clave = '$Clave'";
        $result = mysqli_query($conecta, $Sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['nombre'] === $Usuario && $row['clave'] === $Clave){
                $_SESSION['Usuario'] = $row['Usuario'];
                $_SESSION['Clave'] = $row['Clave'];
                header("location: Inicio.html");
                exit();
            }else{
                header("location: iniciar.php?error-El usuario o la clave son incorrecto");
                exit();
            }
        }else{
            header("location: iniciar.php?error-El usuario o la clave son incorrecto");
            exit();
        }
    }
}else{
    header("location: iniciar.php");
            exit();
}
?>