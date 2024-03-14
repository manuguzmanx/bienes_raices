<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="Imagen contacto" loading="lazy">
        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form action="" class="formulario">
            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre">

                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" placeholder="Tu email">

                <label for="telefono">Teléfono: </label>
                <input type="tel" name="telefono" id="telefono" placeholder="Tu telefono">

                <label for="mensaje">Mensaje: </label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>
            
            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o Compra: </label>
                <select name="opciones" id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o presupuesto: </label>
                <input type="number" name="presupuesto" id="presupuesto" placeholder="Tu presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>¿Cómo desea ser contactado?</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-emial">E-mail</label>
                    <input name="contacto" type="radio" value="emial" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y hora para ser contactado</p>

                <label for="fecha">Teléfono: </label>
                <input type="date" name="fecha" id="fecha">

                <label for="hora">Hora: </label>
                <input type="time" name="hora" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>