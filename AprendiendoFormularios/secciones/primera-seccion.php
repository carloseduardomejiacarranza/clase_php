<div class="py-5 px-3 gap-3 section-items m-auto mb-5">

    <?php
    if(count($peliculas) > 0):
        foreach ($peliculas as $peli):
            ?>
            <div class="item border rounded-3 py-4 px-3 position-relative">
                <div class="img-container">
                    <img src="<?= $peli['imagen']; ?>" alt="<?= $peli['titulo']; ?>">
                </div>
                <div>
                    <h2 class="h4 m-0 mb-3"><?= $peli["titulo"]; ?></h2>
                    <p class="m-0 mb-3">
                        <?= $peli["universo"]; ?>
                    </p>
                </div>
            </div>
        <?php
        endforeach;
    else:
        ?>
        <div class="alert alert-warning py-3 px-5 no-pelis">
            <p class="display-6 m-0 text-center">
                No hay películas disponibles
            </p>
        </div>
    <?php
    endif;
    ?>

</div>