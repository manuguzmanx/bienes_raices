<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="imagen propiedad" loading="lazy">
        </picture>
        
        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por <span>Admin</span></p>
        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, enim labore. Quibusdam maiores dolor nam explicabo. Quam laboriosam porro esse voluptatum! Necessitatibus fugiat hic recusandae consequuntur a repellendus aliquam doloremque aliquid, repellat id saepe laudantium impedit, cum quidem voluptates et fugit deserunt, suscipit odio. Ad nobis distinctio repellendus dolores dignissimos illum officiis veritatis? Reiciendis exercitationem deserunt adipisci eius tempora ea sint nobis quaerat. Expedita dolorem consectetur incidunt iusto quae, maxime tempore sequi ad quod officiis pariatur. Dolores eveniet expedita minus!</p>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo ipsa dignissimos, vitae eaque consectetur eum repellendus exercitationem, quas quam nihil in maxime consequatur? Debitis, odit.</p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>