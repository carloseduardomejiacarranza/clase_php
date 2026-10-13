<?php

session_start();

?>

<form>
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="password" placeholder="Password">
    <button>Entrar</button>
</form>

<?php
if(isset($_GET["error"])){
    echo "<p>Usuario o contraseña incorrectos</p>";
}
?>