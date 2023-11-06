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
        <h1>INICIAR SESION</h1>
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
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="text" name="Clave" placeholder="Clave">

        <button type="submit">Iniciar Sesion</button>
        <a href="registro.php">Crear Cuenta</a>
    </form>
</div>
    
    
    
    
    
    
    
    
    
    
    <footer>
        <div class= "youtube" onclick="window.open('https://www.youtube.com/@colegioinstitutodeciencias77/videos','_blank');"> </div>
        <div class= "instagram" onclick="window.open('https://www.instagram.com/ict_talagante/?igshid=YmMyMTA2M2Y%3D','_blank');"> </div> 
        <div class= "twitter" onclick="window.open('https://twitter.com/ict_talagante','_blank');"> </div> 
        <div class= "facebook" onclick="window.open('https://m.facebook.com/ict.talagante.oficial','_blank');"> </div>
        <div class= "SAE" onclick="window.open('https://admision.mineduc.cl/vitrina-vue/establecimiento/41135','_blank');"> </div>          
        <h4>CONTACTOS:</h4>
    </div> 
    <div class="direccion"> 
        <h5>Balmaceda #627 Talagante,Chile</h5>
    </div>
    <div class="numero">   
        <h5>+56 9 4577 0442</h5></li>
    </div>
    <div class="correo">
        <h5>Icttalagante@gmail.com</h5>
    </div>       
    </footer>        


</body>

</html>    
