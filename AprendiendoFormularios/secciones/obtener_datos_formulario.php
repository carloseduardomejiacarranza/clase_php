<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Los datos los obtenemos con $_POST (ya que el formulario está enviando con este método).
    // Y dentro de POST, usamos el name del input/select/textarea para acceder al valor introducido por el usuario

    $titulo = $_POST['titulo'];
    $universo = $_POST['universe'];
    $director = $_POST['director'];
    $anyo = $_POST['anyo'];
//    $disponible = $_POST['disponible'] ?? false;

    // "Isset" tiene dos resultados => "true"/"false". Comprueba si un valor existe, no es null ni undefined (las 3 validaciones a la vez).
    // Con checkbox se tiene que hacer así, ya que si está deshabilitado, el checkbox directamente noe existe ni se recibe nada de este input
    $disponible = isset($_POST['disponible']);
    echo $disponible;


    $new_item = [
        "titulo" => $titulo,
        "universo" => $universo,
        "director" => $director,
        "anyo" => $anyo,
        "disponible" => $disponible,
        "imagen" => "img/ironman.jpg"
    ];

    $peliculas[] = $new_item; // Otra forma de hacerse: array_push($peliculas, $new_item);
}