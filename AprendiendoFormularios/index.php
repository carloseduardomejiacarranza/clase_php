<?php

include_once("arrays_a_usar.php");

// Si entramos en la página a través de POST, vamos a intentar recuperar/obtener los datos de los inputs que estén en el formulario desde donde se envía
// $_POST
// $_GET
include_once "secciones/obtener_datos_formulario.php";


?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Ejercicio PHP Web</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>


<?php
include "secciones/primera-seccion.php";
?>


<form class="row row-cols-2 w-50" method="post" action="" enctype="multipart/form-data">

    <div class="mb-3">
        <label class="form-label" for="titulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo">
    </div>

    <div class="mb-3">
        <label class="form-label" for="universe">Universo</label>
        <select class="form-select" name="universe" id="universe">
            <option selected="selected">Seleccione...</option>
            <option value="marvel">Marvel</option>
            <option value="dc">DC</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label" for="director">Director</label>
        <input type="text" class="form-control" name="director" id="director">
    </div>

    <div class="mb-3">
        <label class="form-label" for="anyo">Año</label>
        <input type="date" class="form-control" name="anyo" id="anyo">
    </div>

    <div class="mb-3 form-check form-switch">
        <input type="checkbox" class="form-check-input" name="disponible" id="disponible" checked>
        <label class="form-check-label" for="disponible">Disponible</label>
    </div>

    <div>
        <button type="submit" class="btn btn-outline-primary">Crear nueva pelicula</button>
    </div>


</form>











</body>
</html>