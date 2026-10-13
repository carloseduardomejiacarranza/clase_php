<?php

session_start();

include_once("data.php");

if (!isset($_SESSION["usuario"])) {
    header("location: login.php");
    exit();
}

?>

<h1>dashboard</h1>
<p>Bienvenido <?= $_SESSION["usuario"] ?> </p>
<p>Rol: <?= $_SESSION["role"] ?></p>
<p>Total de Platos: <?= count($comidas) ?></p>

<?php

if ($_SESSION["role"] == "admin") {

}
?>


?>
}
?>
