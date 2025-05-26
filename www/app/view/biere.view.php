<main class="biere">
    <section class="produit">
        <figure class="img_biere">
            <img src="<?= '../../../public/images/' . $biere['image_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>">
        </figure>
        <div class="texte">
            <div class="infos_biere">
                <h2 class="nom_biere"><?= $biere['nom'] ?></h2>
                <h2 class="prix_biere"><?= $biere['prix'] ?></h2>
                <p>75ml</p>
                <h3>Description</h3>
                <p class="desc_biere"><?= $biere['description'] ?></p>
                <h3>Taux d'alcool</h3>
                <p class="taux_alcool"><?= $biere['taux_alcool'] ?></p>
                <h3>Ingrédients</h3>
                <p class="ingredients"><?= $biere['ingredients'] ?></p>
            </div>
            <div class="ajout_panier">
                <select name="quantite" class="quantite">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button id="btn_panier" type="button">Ajouter au panier</button>
            </div>
        </div>
    </section>

    <!-- Fonction du header au moment du scroll (a ne pas éffacer) -->
    <script src="../../../public/js/fonctionalites.js"></script>

    <section class="avis">
        <h2>Noter notre produit</h2>
        <ul class="form_avis">
            <li>
                <input type="text" id="texte_avis" placeholder="Laisser un avis...">
            </li>
            <li>
                <input type="submit" id="btn_avis">
            </li>
        </ul>
        <!--<input type="range" min="1" max="5" id="star_rating">-->
    </section>
</main>