<main>
    <h1>iniciar seccion</h1>
    <?php foreach($errores as $error){?>
        <div class="alerta error">
            <?php echo $error;?>
        </div>
    <?php }?>
    <form method="POST" class="formulario" action="/login">
        <fieldset>
            <legend>email and password</legend>
            <label for="email">email</label>
            <input type="email" name="email" placeholder="email" id="email">
            <label for="password">password</label>
            <input type="password" name="password"  id="password">

        </fieldset>
        <input type="submit" value="Iniciar seccion" class="boton-inline">
    </form>
</main>