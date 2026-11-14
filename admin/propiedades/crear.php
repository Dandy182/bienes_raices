<?php 
    $inicio = $_SERVER["SCRIPT_NAME"];
    include '../../includes/template/header.php';

?>

<main class="contenedor">
    <h2>Crear</h2>
    <a href="/admin/index.php" class="btn btn__verde">Volver</a>

    <form method="post">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="titulo del anuncio">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad">

            <label for="imagen">Imagen del Inmueble</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <label for='descripcion'>Descripción:</label>
            <textarea placeholder="Agrede una descripción del inmueble"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la propiedad</legend>
        </fieldset>

    </form>

</main>



<?php include '../../includes/template/footer.php'?>

