<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>Bienes Raices</title>
        <link rel="stylesheet" href="./build/css/app.css">
    </head>
    <body>

        <header class="header <?php echo($inicio === '/index.php')? 'inicio': ''?>">
            <div class="contenedor encabezado">
                <a href="index.php"><h1>Bienes <span>Raices</span></h1></a>

                <nav class="navegacion principal">
                    <a href="nosotros.php" class="<?php echo($inicio ==='/nosotros.php')? 'active': ''?>">Nosotros</a>
                    <a href="anuncios.php" class="<?php echo($inicio ==='/anuncios.php')? 'active': ''?>">Anuncios</a>
                    <a href="blog.php"class="<?php echo($inicio ==='/blog.php')? 'active': ''?>">Blog</a>
                    <a href="contacto.php"class="<?php echo($inicio ==='/contacto.php')? 'active': ''?>">Contacto</a>
                </nav>

            </div>
    </header>