
<?php  if($inicio === '/index.php'):?>  
   <section class="contacto">
        <div class="contenedor">
            <h3>Encuentra la casa de tus sueños</h3>
            <p>Llene el formulario de contacto y un asesor se pondrá en contacto contigo en breve</p>
            <a href="contacto" class="btn btn__naranja btn_1">Contactanos</a>
        </div>
    </section>
<?php else: ?>
    <main class="contenedor contactanos">
        <h2>Contactanos</h2>
        <picture>
            <img loading="lazy" src="/src/img/destacada3.jpg" alt='destacada'>
        </picture>
        <form class="formulario__contacto">

        </form>
    </main>

<?php endif ?>

