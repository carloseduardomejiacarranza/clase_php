<?php

include_once("../data.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: ../index.php");
    exit();
}

$usuario = $_POST["usuario"];
$password = $_POST["password"];


foreach ($usuarios as $user) {
    if ($user["usuario"] == $usuario && $user["password"] == $password) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["role"] = $user["role"];
        header("location: ../dashboard.php");
        exit();
    }
}
header("location: login.php?error=1");
exit();
