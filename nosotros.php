<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="imagen nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <h4>25 años de experiencia</h4>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, repellat possimus facere optio esse velit amet molestiae corporis modi, iusto quas veniam ratione, nostrum repudiandae doloribus cum dolore tempora rem iure eos quis perferendis consequatur voluptatibus debitis. Quia at nobis esse delectus modi totam aspernatur facere hic officia corrupti voluptatem iste, eveniet voluptas tempore consectetur? Ipsam quasi, quisquam facilis recusandae labore iure unde rem corporis molestiae repudiandae repellendus aut reiciendis praesentium iste at vero quaerat, quidem cupiditate in obcaecati sunt.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit iusto voluptates natus consectetur aut dolores obcaecati debitis similique facere hic.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sapiente magni, quidem, quasi, accusamus sunt illum tempora asperiores hic perspiciatis deleniti repudiandae sed pariatur provident!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sapiente magni, quidem, quasi, accusamus sunt illum tempora asperiores hic perspiciatis deleniti repudiandae sed pariatur provident!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono a tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus sapiente magni, quidem, quasi, accusamus sunt illum tempora asperiores hic perspiciatis deleniti repudiandae sed pariatur provident!</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>