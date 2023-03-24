<fieldset>
            <legend>informacion general de la propiedad</legend>
            <label for="titulo">titulo</label>
            <input type="text" id="titulo" placeholder="propiedad" name="propiedad[Titulo]" value="<?php echo s($propiedad->Titulo);?>">
            <label for="precio">Precio</label>
            <input type="number" id="Precio" placeholder="precio propiedad" name="propiedad[Precio]" value="<?php echo s($propiedad->Precio);?>">
            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accept="image/jpeg , image/png" name="propiedad[imagenes]">
                <?php if($propiedad->imagen){?>
                    <img src="/imagenes/<?php echo $propiedad->imagen?>.jpg" class="imagen-update">
                <?php }?>
            <label for="descripcion">descripcion</label>
            <textarea  id="descripcion" cols="30" rows="10"  name="propiedad[descripcion]" ><?php echo s($propiedad->descripcion);?></textarea>
        </fieldset>
        <fieldset>
            <legend>informacion de la propiedad</legend>
            <label for="habitacione">habitaciones</label>
            <input type="number" id="habitaciones" placeholder="Ej:3" min = "1" max="9" name="propiedad[habitaciones]" value="<?php echo s($propiedad->habitaciones);?>">
            <label for="banos">baños</label>
            <input type="number" id="banos" placeholder="Ej:3" min = "1" max="9" name="propiedad[wc]" value="<?php echo s($propiedad->wc);?>">
            <label for="esta">estacionamiento</label>
            <input type="number" id="esta" placeholder="Ej:3" min = "1" max="9" name="propiedad[estacionamiento]" value="<?php echo s($propiedad->estacionamiento);?>">
        </fieldset>
        <fieldset> 
            <legend>Vendedor</legend>
            <label for="vendedor">Vendedor</label>
           <select name="propiedad[vendedores_id]" id="vendedor">
                    <option selected value="">--seleccione--</option>
               <?php foreach($vendedor as $vendedor){?>
                    <option 
                    <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : '';?>
                    value="<?php echo $vendedor->id?>"><?php echo s($vendedor->nombre) . " " . s($vendedor->apellido)?></option>
               <?php }?>
               </select>
        </fieldset>