<main class="contenedor seccion">
        <h1>anuncios</h1>
        <div class="contenedor-anuncios">
<?php foreach($propiedades as $propiedad){?>
<div class="anuncio">
        <picture>
            <img loading="lazy" src="/imagenes/<?php  echo $propiedad->imagen;?>.jpg" alt="anuncio">
        </picture>
        <div class="contenido-anuncio">
            <h3><?php echo $propiedad->titulo;?></h3>
            <p><?php echo $propiedad->descripcion;?></p>
            <p class="precio">
                <?php echo $propiedad->precio;?>
            </p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad->wc;?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono wc">
                    <p><?php echo $propiedad->estacionamiento;?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono wc">
                    <p><?php echo $propiedad->habitaciones;?></p>
                </li>
            </ul>
            <a href="/anuncio?id=<?php echo $propiedad->id;?>" class="boton boton-amarillo"> Ver productos</a>
        </div>
    </div>
    <?php }?>
</div>
<?php 
   
?>    
</main>
