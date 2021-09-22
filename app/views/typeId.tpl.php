<section class="main">
    <?php foreach ($viewData['type'] as $numero) : ?>
        <article class="section_pokemon"><a href="http://localhost/S05/S05E09-S05-revisions-pokedex-MarianneHolveck/public/pokemon/<?= $numero->getNumero() ?>">
            <img src="../public/img/<?= $numero->getNumero() ?>.png" alt="Bulbizzare">
            <h2>#<?php echo $numero->getNumero() ?> <?php echo $numero->getNom() ?></h2>
            </a></article>
    <?php endforeach ?>
</section>