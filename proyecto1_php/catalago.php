<?php

require_once "config.php";
require_once "data.php";
require_once "controllers/pintarTarjeta.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<section class="catalogo">

    <?php

    foreach ($comidas as $comida)
    {
        pintarTarjeta($comida);
    }

    ?>

    </section>

    <hr>

    <h2>PLATOS DESTACADOS</h2>

    <section class="destacados">

        <?php

        foreach ($comidas as $comida)
        {
            if ($comida["destacado"] == true)
            {
                pintarTarjeta($comida);
            }
        }

        ?>

    </section>

    </body>
</html>