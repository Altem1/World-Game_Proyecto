<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acción</title>
    <link rel="stylesheet" href="../Css/Aventura.css">
</head>
<body>
    <header class="header">
            <div class="contenedor logo-nav-contenedor">
                <span class="menu-icon">Menu...</span>
                <nav class="navegacion">
                    <ul>
                        <li class="menu-hambur" id="icono-menu">
                            <!--<i class="fa-solid fa-bars-staggered"></i>-->
                            <img src="../Img/ico2.png" alt="" class="img-mas">
                        </li>
                        <li><img src="#" alt="" class="logo"></li>
                        <li><a href="../index.html" class="A">Juegos</a></li>
                        <li><a href="#" class="A">Comentarios</a></li>
                        <li><a href="#" class="A">Acerca de...</a></li>
                    </ul>
                </nav>
            </div>
    </header>

    <div class="cont-menu active" id="menu">
        <ul>
            <li onclick="location.href='Aventura.php'">Aventura</li>
            <li onclick="location.href='Open_World.php'">Mundo abierto</li>
            <li onclick="location.href='Accion.php'">Acción</li>
            <li onclick="location.href='Shooters.php'">Fps</li>
        </ul>
    </div>

    <!-- Apartado de juegos -->

    <div class="Contenedor_Juegos">

        <div class="fila1">

            <div class="Cuadro1">
                <img onclick="INJUSTICE()" class="Img1" src="../Img/gods.jpg" alt="">
                <p>Injustice: Gods among us</p>
            </div>

            <div class="Cuadro2">
                <img onclick="TUNIC()" class="Img2" src="../Img/tun.jpg" alt="">
                <p>Tunic</p>
            </div>

        </div>

        <div class="fila2">

            <div class="Cuadro3">
                <img onclick="GOTHAM()" class="Img3" src="../Img/bats.jpg" alt="">
                <p>Gotham Knights</p>
            </div>

            <div class="Cuadro4">
                <img onclick="DARK()" class="Img4" src="../Img/dark.jpg" alt="">
                <p>Dark Souls</p>
            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="../Js/Boton.js"></script>

</body>
</html>
