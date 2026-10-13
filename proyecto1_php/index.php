<?php
include_once("config.php");
include_once("data.php");
include_once("controllers/pintarTarjeta.php");

?>

<h1><?= APP_NAME ?></h1>

<?php

foreach ($comidas as $comida) {
    if ($comida["destacado"]) {
        pintarTarjeta($comida);
    }
}

?>



