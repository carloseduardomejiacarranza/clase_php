<?php
$peliculas = [
        ["id" => 1, "titulo" => "Iron Man", "universo" => "Marvel", "director" => "Jon Favreau", "anyo" => 2008, "duracion" => 126, "puntuacion" => 7.9, "disponible" => true, "imagen" => "img/ironman.jpg"],
        ["id" => 2, "titulo" => "The Dark Knight", "universo" => "DC", "director" => "Christopher Nolan", "anyo" => 2008, "duracion" => 152, "puntuacion" => 9.0, "disponible" => true, "imagen" => "img/darkknight.jpg"],
        ["id" => 3, "titulo" => "Avengers: Endgame", "universo" => "Marvel", "director" => "Anthony y Joe Russo", "anyo" => 2019, "duracion" => 181, "puntuacion" => 8.4, "disponible" => true, "imagen" => "img/endgame.jpg"],
        ["id" => 4, "titulo" => "Aquaman", "universo" => "DC", "director" => "James Wan", "anyo" => 2018, "duracion" => 143, "puntuacion" => 6.9, "disponible" => false, "imagen" => "img/aquaman.jpg"],
        ["id" => 5, "titulo" => "Spider-Man: No Way Home", "universo" => "Marvel", "director" => "Jon Watts", "anyo" => 2021, "duracion" => 148, "puntuacion" => 8.2, "disponible" => true, "imagen" => "img/spiderman.jpg"],
        ["id" => 6, "titulo" => "Wonder Woman", "universo" => "DC", "director" => "Patty Jenkins", "anyo" => 2017, "duracion" => 141, "puntuacion" => 7.4, "disponible" => false, "imagen" => "img/wonderwoman.jpg"],
        ["id" => 7, "titulo" => "Black Panther", "universo" => "Marvel", "director" => "Ryan Coogler", "anyo" => 2018, "duracion" => 134, "puntuacion" => 7.3, "disponible" => true, "imagen" => "img/blackpanther.jpg"],
        ["id" => 8, "titulo" => "Joker", "universo" => "DC", "director" => "Todd Phillips", "anyo" => 2019, "duracion" => 122, "puntuacion" => 8.4, "disponible" => true, "imagen" => "img/joker.jpg"],
];

$watchlist = [
        ["pelicula_id" => 1, "vista" => true],
        ["pelicula_id" => 3, "vista" => false],
        ["pelicula_id" => 8, "vista" => false],
];

$filtroUniverso = "Marvel";
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primera web PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<main>
    <h1 class="h1">CARTELERA CINEMATOGRAFICA</h1>
    <section class="pelicula">

        <?php if (count($peliculas) > 0): ?>
            <?php foreach ($peliculas as $pelicula): ?>
                <?php
                /*
                // 1. Filtro por universo
                if (isset($filtroUniverso) && $pelicula["universo"] != $filtroUniverso) {
                    continue;
                }

                // 2. Filtro por puntuación
                if ($pelicula["puntuacion"] < 8.0) {
                    continue;
                }

                // 3. Filtro por watchlist
                $yaVista = false;
                foreach ($watchlist as $item) {
                    if ($item["pelicula_id"] == $pelicula["id"]) {
                        if ($item["vista"] == true) {
                            $yaVista = true;
                            break;
                        }
                    }
                }

                if ($yaVista) {
                    continue;
                }
                */
                ?>

                <div class="item">
                    <span class="category"><?= $pelicula["universo"]; ?></span>
                    <img src="<?= $pelicula['imagen']; ?>" alt="<?= $pelicula["titulo"]; ?>">
                    <h2 class="title text-center"><?= $pelicula["titulo"]; ?></h2>
                    <p class="description text-center">DIRECTOR: <?= $pelicula["director"]; ?></p>
                    <p class="description text-center">AÑO: <?= $pelicula["anyo"]; ?></p>
                    <p class="description text-center">DURACION: <?= $pelicula["duracion"]; ?> min.</p>
                    <p class="description text-center">DISPONIBLE: <?= $pelicula["disponible"] ? "Sí" : "No"; ?></p>
                    <p class="description text-center">PUNTUACION: <?= $pelicula["puntuacion"]; ?></p>
                </div>

            <?php endforeach; ?>
        <?php else: ?>
            <div class="no_games">
                <p>Película no disponible</p>
            </div>
        <?php endif; ?>

    </section>
    <br>
    <form class="formulario">
        <h2>Añadir Película</h2>
        <label for="titulo">Título</label><br>
        <input type="text" name="titulo" id="titulo" placeholder="nombre de la película"><br><br>
        <label for="universo">Elige un universo:</label><br>
        <select id="universo" name="universo"><br><br>
            <option value=""></option>
            <option value="dc">DC Comics</option>
            <option value="marvel">Marvel Comics</option>
        </select><br><br>
        <label for="director">Director</label><br>
        <input type="text" name="director" id="director" placeholder="christopher nolan"><br><br>
        <label for="anyo">Año</label><br>
        <input type="number" name="anyo" id="anyo" placeholder="2024"><br><br>
        <label for="duracion">Duración</label><br>
        <input type="number" name="duracion" id="duracion" placeholder="120 min"><br><br>
        <label for="puntuacion">Puntuación</label><br>
        <input type="number" name="puntuacion" id="puntuacion" placeholder="puntuación 0-10" step="0.1"><br><br>
        <label for="imagen">Imagen</label><br>
        <input type="file" name="imagen" id="imagen"><br><br>
        <label for="disponible">Disponible</label>
        <input type="checkbox" name="disponible" id="disponible"><br><br>
        <button type="submit">Enviar</button>
    </form>
</main>

</body>
</html>