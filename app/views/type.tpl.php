<h2 class="title_type">Cliquez sur le type pour voir tous les pokémons de ce type :</h2>
<section class="third">
    <?php foreach ($viewData['types'] as $number) : ?>
        <a href="http://localhost/S05/S05E09-S05-revisions-pokedex-MarianneHolveck/public/type/<?= $number->getId() ?>" style="background-color: #<?= $number->getColor() ?>" class="link_type"><article class="section_type">
            <p><?php echo $number->getName() ?></p>
        </article></a>
    <?php endforeach; ?>
</section>