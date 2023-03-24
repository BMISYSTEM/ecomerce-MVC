<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes raizes</title>
    <link rel="stylesheet" href="build/css/app.css">

</head>
<body>
    <header class="header <?php  echo $inicio ? 'inicio' : ''?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                <img src="/build/img/logo.svg" alt="logotipo de vienes raices">
                </a>
                <div class="mobil">
                    <img src="/build/img/barras.svg" alt="menu mobil">
                </div>
                <div class="derecha">
                    <img class="darkmode" src="/build/img/dark-mode.svg" alt="imagen negro">
                    <nav class="navegacion">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/anuncios">Anuncios</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                    </nav>
                </div>
                
            </div>
            <?php if($inicio){?>
            <h1>venta de casa y esclusivos</h1>
            <?php }?>
        </div>
    </header>

    <?php echo $contenido;?>


    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyrig">todos los derechos reservados&copy;</p>
    </footer>
    <script src="build/js/bundle.min.js" ></script>
</body>
</html>