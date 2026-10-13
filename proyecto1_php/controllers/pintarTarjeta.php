<?php

function pintarTarjeta($comidas) {
    ?>

    <div class="tarjeta">

        <img src="<?= $comidas["imagen"] ?>" alt="<?= $comidas["nombre"] ?>">
        <h3><?= $comidas["nombre"] ?></h3>
        <p><?= $comidas["descripcion"] ?></p>
        <p><?= $comidas["calorias"] ?></p>
        <p><?= $comidas["precio"] ?></p>

    </div>

<?php
}
?>
