<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/ico" href="img/Logo_ICT_PNG_Chico.ico">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/añañi.css">
</head> 
<body>
    <header>
        <div class="Logotipo">
            <img src="img/logo_PNG_vintage_ICT.png" width="100" alt="">
        </div>
        <nav>
            <ul class="menu">
                <li><a href="Inicio.php">Inicio</a></li>
                <li><a href="Historia.html">Nuestra historia</a></li>
                <li><a href="Especialidad.html">Especialidad</a></li>
                <li><a href="Logros.html">Logros</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <li><a href="Contactanos.html">Contactanos</a></li>
                <li><a href="docentes.html">Docentes</a></li> 
                <li><a href="actividades.html">Actividades</a></li>
            </ul>
            <div class="iniciarsesion">
                <ul>
                <li><a href="iniciar.html">Iniciar Sesión</a></li>
                </ul>
            </div>
            </nav>
    </header>

    <div class="inicio">
    <form action="val.php" method="post">
        <h1>Registrarse</h1>
        <HR>
        <?php
            if(isset($_get['error'])) {
                ?>
                <p class="error" >
                    <?php
                    echo $_get['error'];
                    ?>
                </p>
        <?php
            }
        ?>

        <i class="fa-solid fa-unlock"></i>
        <label>Rut</label>
        <input type="text" name="Rut" placeholder="Rut">

        <i class="fa-solid fa-user"></i>
        <label>Nombre y Apellido</label>
        <input type="text" name="Nombre" placeholder="Nombre">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="text" name="Clave" placeholder="Clave">

        <i class="fa-solid fa-unlock"></i>
        <label>Email</label>
        <input type="text" name="mail" placeholder="mail">

        <i class="fa-solid fa-unlock"></i>
        <label>Telefono [Opcional]</label>
        <input type="text" name="Telefono" placeholder="Telefono">

        <i class="fa-solid fa-unlock"></i>
        <label>Tipo de Cuenta</label>
        <input type="text" name="Tipo" placeholder="Tipo Cuenta">

        <button type="submit">Registrarse</button>
        <a href="Inicio.php">Volver al inicio</a>
    </form>
</div>