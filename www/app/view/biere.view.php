<main class="biere">
    <section class="produit">
        <figure class="img_biere">
            <img src="<?= '../../../public/images/' . $biere['image_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>">
        </figure>
        <div class="texte">
            <div class="infos_biere">
                <h2 class="nom_biere"><?= $biere['nom'] ?></h2>
                <h2 class="prix_biere"><?= $biere['prix'] ?>€</h2>
                <p>75cl</p>
                <h3>Description</h3>
                <p class="desc_biere"><?= $biere['description'] ?></p>
                <h3>Taux d'alcool</h3>
                <p class="taux_alcool"><?= $biere['taux_alcool'] ?></p>
                <h3>Ingrédients</h3>
                <p class="ingredients"><?= $biere['ingredients'] ?></p>
            </div>
            <div class="ajout_panier">
                <div class="quantite_ajout">
                    <button id="panier_moins" class="btn_panier" type="button">-</button>
                    <h3 id="quantite_panier">1</h3>
                    <button id="panier_plus" class="btn_panier" type="button">+</button>
                </div>
                <button id="btn_ajout_panier" type="button">Ajouter au panier</button>
            </div>
        </div>
    </section>

    <section class="avis">
        <h2>Noter notre produit</h2>
        <ul class="form_avis">
            <li>
                <input type="range" min="1" max="5" id="star_rating">
            </li>
            <li>
                <input type="text" id="texte_avis" placeholder="Laisser un avis...">
            </li>
            <li>
                <input type="submit" id="btn_avis">
            </li>
        </ul>
    </section>
</main>