<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../IMG/Icons n Banners/favicon.ico" type="image/x-icon">
        <!-- STYLE & BOOTSTRAP-->
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/style.css">
        <title>DEATH FAMILY</title>
    </head>
    <body>
        <div class="container bg-black">
            <div id="conexion-database">
                <?php 
                    require_once('./DB/conexion.php');
                ?>
            </div>

            <header>
                <div>
                    <img src="../IMG/Icons n Banners/logo.png" alt="LOGO">
                    <h1>CJAVAT GAMERS STORE</h1>
                    <span></span>
                </div>
                <nav>
                    <a href="./index.html">Inicio</a>
                    <a href="#">Productos</a>
                    <a href="#">Quienes Somos</a>
                    <a href="#">Carito</a>
                </nav>
            </header>
        </div>
        <!-- SCRIPT & BOOTSTRAP -->
        <script src="JS/bootstrap.bundle.min.js"></script>
        <script src="JS/script.js"></script>
    </body>
</html>