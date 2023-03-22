<main class="contenedor seccion">
    <h1>administrador</h1>
    <?php  
    if($resultado){
        $mensaje = mostrar_notificacion(intval($resultado));
        if($mensaje){?>  
        <p><?php echo s($mensaje)?></p>
    <?php }
    }?> 
    <a class='boton boton-inline' href="/admin/propiedades/crear.php" >Nueva propiedad</a>
    <a class='boton-amarillo-block' href="/admin/vendedores/crear.php" >Nuevo vendedor</a>
        <h2>Propiedades</h2>
    <table class="propiedades">
        <thead>
            <th>Id</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <?php foreach($propiedades as $propiedades):?>
                <tr>
                    <td><?php echo $propiedades->id;?></td>
                    <td><?php echo $propiedades->Titulo;?></td>
                    <td><img src="/imagenes/<?php echo $propiedades->imagen;?>.jpg" alt="imagen"class= "imagen tabla"></td>
                    <td>$<?php echo $propiedades->Precio;?></td>  
                    <td>
                        <form method="POST" class="W-100">
                            <input type="hidden" name="id" value = "<?php echo $propiedades->id;?>">
                            <input type="hidden" name="tipo" value = "propiedad">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedades->id;?>" class="boton-verde-block">Actualizar</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</main>