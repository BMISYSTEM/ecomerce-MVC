<main class="contenedor seccion">
        <h1>anuncio one</h1>
        <div class="contenedor-anuncios">
<div class="anuncio">
        <picture>
            <img loading="lazy" src="./imagenes/<?php  echo $propiedades->imagen;?>.jpg" alt="anuncio">
        </picture>
        <div class="contenido-anuncio">
            <h3><?php echo $propiedades->titulo;?></h3>
            <p><?php echo $propiedades->descripcion;?></p>
            <p class="precio">
                <?php echo $propiedades->precio;?>
            </p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedades->wc;?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono wc">
                    <p><?php echo $propiedades->estacionamiento;?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono wc">
                    <p><?php echo $propiedades->habitaciones;?></p>
                </li>
            </ul>
            <a href="/" class="boton boton-amarillo"> Volver</a>
        </div>
    </div>

</div>
<?php 
   
?>    
</main>
