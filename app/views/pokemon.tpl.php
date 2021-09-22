<section class="second">
            <h2 class="détails">Détails de <?php echo $viewData['pokemon']->getNom() ?></h2>
            
            <section class="second_article">
                <img class="pokemon_description" src="../public/img/<?= $viewData['pokemon']->getNumero() ?>.png" alt="">

                <article class="description">
                    <h3>#<?php echo $viewData['pokemon']->getNumero() ?> <?php echo $viewData['pokemon']->getNom() ?></h3>
                    <aside class="description_types">
                        <p style="background-color: #<?= $viewData['type'][0]->getColor() ?>" class="type"><?php echo $viewData['type'][0]->getName() ?></p>
                        <?php if(isset($viewData['type'][1])) : ?> <p style="background-color: #<?= $viewData['type'][1]->getColor() ?>" class="type"><?php echo $viewData['type'][1]->getName() ?></p> <?php endif; ?>
                    </aside>
                    <h4>Statistiques</h4>
                    <section class="table_stats">
                        <article class="line_stats">
                            <p class="stats">PV</p>
                            <p class="stats"><?php echo $viewData['pokemon']->getPv() ?></p>
                            <meter class="stats_meter" min="0" max="255" low="50" high="200" optimum="150"
                                value="<?php echo $viewData['pokemon']->getPv() ?>"><?php echo $viewData['pokemon']->getPv() ?></meter>
                        </article>
                        <article class="line_stats">
                            <p class="stats">Attaque</p>
                            <p class="stats"><?php echo $viewData['pokemon']->getAttaque() ?></p>
                            <meter class="stats_meter" min="0" max="255" low="50" high="200" optimum="150"
                                value="<?php echo $viewData['pokemon']->getAttaque() ?>"><?php echo $viewData['pokemon']->getAttaque() ?></meter>
                        </article>
                        <article class="line_stats">
                            <p class="stats">Défense</p>
                            <p class="stats"><?php echo $viewData['pokemon']->getDefense() ?></p>
                            <meter class="stats_meter" min="0" max="255" low="50" high="200" optimum="150"
                                value="<?php echo $viewData['pokemon']->getDefense() ?>"><?php echo $viewData['pokemon']->getDefense() ?></meter>
                        </article>
                        <article class="line_stats">
                            <p class="stats">Attaque Spé.</p>
                            <p class="stats"><?php echo $viewData['pokemon']->getAttaque_spe() ?></p>
                            <meter class="stats_meter" min="0" max="255" low="50" high="200" optimum="150"
                                value="<?php echo $viewData['pokemon']->getAttaque_spe() ?>"><?php echo $viewData['pokemon']->getAttaque_spe() ?></meter>
                        </article>
                        <article class="line_stats">
                            <p class="stats">Défense Spé.</p>
                            <p class="stats"><?php echo $viewData['pokemon']->getDefense_spe() ?></p>
                            <meter class="stats_meter" min="0" max="255" low="50" high="200" optimum="150"
                                value="<?php echo $viewData['pokemon']->getDefense_spe() ?>"><?php echo $viewData['pokemon']->getDefense_spe() ?></meter>
                        </article>
                        <article class="line_stats">
                            <p class="stats">Vitesse</p>
                            <p class="stats"><?php echo $viewData['pokemon']->getVitesse() ?></p>
                            <meter class="stats_meter" min="0" max="255" low="50" high="200" optimum="150" value="<?php echo $viewData['pokemon']->getVitesse() ?>"><?php echo $viewData['pokemon']->getVitesse() ?></meter>
                        </article>


                    </section>

                </article>
               
            </section>
            <nav class="bottom_nav"><a href="<?= $router->generate('home') ?>">Revenir à la liste</a></nav>
        </section>