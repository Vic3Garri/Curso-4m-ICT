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
                <li><a href="iniciar.php">Iniciar Sesión</a></li>
                </ul>
            </div>
    </header>
    
    <h1 class="h1_inicio">
        Instituto de Ciencias y Tecnologia de Talagante
    </h1>

    <div class="slide">
        <div class="slide-inner">
            <input class="slide-open" type="radio" id="slide-1" 
                name="slide" aria-hidden="true" hidden="" checked="checked">
            <div class="slide-item">
                <img src="img/fotos aprobadas/patio/cancha_2.jpg" class="imagen_carusel">
            </div>
            <input class="slide-open" type="radio" id="slide-2" 
                name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <img src="img/fotos aprobadas/patio/patio1_3.jpg" class="imagen_carusel">
            </div>
            <input class="slide-open" type="radio" id="slide-3" 
                name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <img src="img/fotos aprobadas/patio/chacha1_2.jpg" class="imagen_carusel">
            </div>
            <label for="slide-3" class="slide-control prev control-1">‹</label>
            <label for="slide-2" class="slide-control next control-1">›</label>
            <label for="slide-1" class="slide-control prev control-2">‹</label>
            <label for="slide-3" class="slide-control next control-2">›</label>
            <label for="slide-2" class="slide-control prev control-3">‹</label>
            <label for="slide-1" class="slide-control next control-3">›</label>
            <ol class="slide-indicador">
                <li>
                    <label for="slide-1" class="slide-circulo">•</label>
                </li>
                <li>
                    <label for="slide-2" class="slide-circulo">•</label>
                </li>
                <li>
                    <label for="slide-3" class="slide-circulo">•</label>
                </li>
            </ol>
        </div>
    </div>

    <p class="introduccion">
        Te damos la bienvenida a la plataforma en línea de El Instituto de Ciencias y
        Tecnología, un establecimiento educacional ubicado en la comuna de Talagante.
        Especializados en programación, nos enorgullece ofrecer educación de calidad de
        manera gratuita. Aquí encontrarás información sobre nuestra institución y los
        programas que ofrecemos para aquellos interesados en desarrollar habilidades en el
        ámbito tecnológico.
    </p>

    <P class="p_vision">
        Visión:
        “Constituirnos en una comunidad educativa que forme jóvenes y 
        adultos con valores claros y definidos en la dimensión personal, 
        profesional y cívica con sólidas competencias técnicas, que les 
        permitan insertarse en la vida laboral y adaptarse a las exigencias de 
        un mundo cada vez más diversificado y competitivo”. Nuestro 
        Colegio pretende ser una entidad formadora de personas íntegras, 
        con competencias generales y específicas que le permitan adaptarse 
        a los cambios e innovaciones tecnológicas en el campo laboral, 
        accediendo a empleos calificados y/o continuar estudios en la 
        enseñanza superior.
        
    </P>
    <p class="p_mision">
        Misión:
        “Formar estudiantes en la modalidad Técnico Profesional con sello
        de calidad en los mandos medios, con una sólida formación 
        académica y valórica para que puedan responder con eficiencia y 
        eficacia a las exigencias y desafíos del mundo social y laboral” 
        siendo protagonistas de sus aprendizajes, que les permita ser 
        personas responsables que vivencien los valores. 
        Además de obtener conocimientos y desarrollar habilidades, que le 
        faciliten su desarrollo personal, reunirán las competencias 
        pertinentes a una sociedad en constante cambio. Realizando 
        sistemáticamente una enseñanza con altos niveles de conocimiento y 
        práctica”
    </p>
    <div><a href="textos/Discurso Ivan Muñoz(Ex Estudiante).pdf">Discurso Ivan Muñoz</a></div>

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
</html> 
