<fieldset>
     <legend>informacion general del vendedor</legend>
     <label for="titulo">Nombre</label>
     <input type="text" id="nombre" placeholder="Nombre" name="vendedor[nombre]" value="<?php echo s($vendedor->nombre);?>">
     <label for="titulo">Apellido</label>
     <input type="text" id="apellido" placeholder="apellido" name="vendedor[apellido]" value="<?php echo s($vendedor->apellido);?>">

     <label for="titulo">telefono</label>
     <input type="number" id="telefono" placeholder="telefono" name="vendedor[telefono]" value="<?php echo s($vendedor->telefono);?>">
</fieldset>