<?php

session_start();

if (!isset($_SESSION["usuario"]))
{
    header("Location: login.php");
    exit();
}

if ($_SESSION["role"] != "ADMIN")
{
    header("Location: dashboard.php");
    exit();
}

?>

    <form method="POST">

        <input type="text" name="nombre" placeholder="Nombre">

        <input type="number" name="precio" placeholder="Precio">

        <button>Guardar</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    ?>

    <div class="tarjeta">
        <h2><?= $_POST["nombre"] ?></h2>
        <p><?= $_POST["precio"] ?> €</p>
    </div>

    <?php
}
?>