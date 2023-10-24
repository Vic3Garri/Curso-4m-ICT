<!DOCTYPE html>
<html lang="es">
<html>
    <head>
        <meta charset="utf-8">
        <title>Iniciar Sesion</title>
        <link rel="stylesheet" href="css/añañi.css">
    </head>
    <body>
        <div class="fondo">
        
            <div class="login-box">
                <img src="img/logo_PNG_vintage_ICT.png" class="avatar" alt="Avatar Image">
                <h1>Inicia sesion </h1>
                <form action="iniciar.php" method="POST">
                    <!-- USERNAME INPUT -->
                    <label for="username"> Nombre de usuario</label>
                    <input type="text" placeholder="Ingresa nombre de usuario" name="username">
                    <!-- PASSWORD INPUT -->
                    <label for="password"> Contraseña </label>
                    <input type="password" placeholder="Ingresa contraseña" name="password">
                    <input type="submit" value="Siguiente">
                    <a href="#"> Olvidaste tu contraseña?</a><br>
                    <a href="#"> No tienes una cuenta?</a>
                </form>
            </div>
        </div>  
    </body>
    <?php
        if($_POST){
            session_start();
            require('../DB/PDO/conexion.php');
            $rut = $_POST['username'];
            $pass = $_POST['password'];
            $conexion->setAttribute(POD::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query=$conexion->prepare("SELECT * FROM cuenta WHERE rut = '$rut' AND pass = '$pass'");
            $query->bindParam(':rut', $rut);
            $query->bindParam(':pass', $pass);
            $query->execute();
            $rut=$query->fetch(PDO::FETCH_ASSOC);
            if($rut){
                $_SESSION['username'] = $rut['rut'];
                header('Location: ../index.php');
             }else{
                echo "Usuario o contraseña incorrecta";
            }

                
            
            }
    ?>
</html>
