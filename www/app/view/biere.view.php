<main class="biere">
            <section class="produit">
                <figure class="img_biere">
                    <?php
                    if (empty ($biere['photo'])) {
                        $photo = 'defaut.png';
                    } else {
                        $photo = $biere['photo'];
                    }?>
                    <img src="public/images/<?= $photo?>" alt="Image de la bière">
                </figure>
                <div class="infos_biere">
                    <h2 class="nom_biere"><?= $biere['nom']?></h2>
                    <p class="desc_biere"><?= $biere['description']?></p>
                    <h3 class="prix_biere"><?= $biere['prix']?></h3>
                    <button id="btn_panier" type="button">Ajouter au panier</button>
                </div>
            </section>

            <section class="avis">
                <fieldset>
                    <legend>Noter notre produit</legend>
                    <input type="text" id="texte_avis" placeholder="Laisser un avis...">
                    <input type="submit" id="btn_avis">
                </fieldset>
                <input type="range" min="1" max="5" id="star_rating">
            </section>
        </main>