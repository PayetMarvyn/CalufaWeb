<main class="biere">
    <section class="produit">
        <figure class="img_biere">
            <img src="<?= '../../../public/images/' . $biere['image_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>">
        </figure>
        <div class="infos_biere">
            <h2 class="nom_biere"><?= $biere['nom'] ?></h2>
            <p class="desc_biere"><?= $biere['description'] ?></p>
            <h3 class="prix_biere"><?= $biere['prix'] ?></h3>
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