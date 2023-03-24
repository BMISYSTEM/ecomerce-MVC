<main class="contenedor seccion">
        <h1>contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.jpg" type="img/jpg">
            <img src="build/img/destacada3.jpg" alt="imagen titulo">
        </picture>
        <h2>Llene el formulario de contacto</h2>
        <form action="/contacto" method="post" class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]" required>
                <label for="Email">Email</label>
                <input type="email" placeholder="Tu correo" id="Email" name="contacto[email]" required>
                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu telefono" id="telefono" name="contacto[telefono]" required>
                <label for="mensaje">Mensaje</label>
                <textarea name="contacto[mensaje]" id="mensaje" cols="30" rows="10" placeholder="Digite su mensaje" required></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre propiedad</legend>
                <label for="opciones"  >vende o compra</label>
                <select name="contacto[opciones]" id="opciones" required>
                    <option value="" disabled selected>--Seleccionar--</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                </select>
                <label for="presupuesto">Presupuesto</label>
                <input type="number" placeholder="Tu Presupuesto" id="presupuesto" name="contacto[presupuesto]" required>
                
            </fieldset>
            <fieldset>
                <legend>Contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto" >
                    <label for="telefono-radio">Telefono</label>
                    <input name="contacto[contac]" type="radio" value="telefono" id="telefono-radio" required>
                    <label for="correo-contacto">Email</label>
                    <input name="contacto[contac]" type="radio" value="Email" id="correo-contacto" required>
                </div>  
                <p>Si eligio telefono escoja la fecha y la hora</p>  
                <label for="fecha">Fecha</label>
                <input type="date" id="telefono" name="contacto[fecha]" required>    
                <label for="hora">Hora</label>
                <input type="time"  id="telefono" min="09:00" max="15:00" name="contacto[hora]" required>       
            </fieldset>
            <input type="submit" value="Enviar" class="boton">
        </form>
    </main>