<?php if (!empty($_SESSION['toast'])): ?>
    <div id="toast"><?= $_SESSION['toast'] ?></div>
    <?php unset($_SESSION['toast']); ?>
<?php endif; ?>


<main>
    <div id="toast" class="toast-hidden">
        🛒 Produit ajouté au panier !
    </div>

    <section class="catalogue">
        <?php foreach ($bieres as $biere): ?>
            <div class="catalogue-carte">
                <a href="index.php?route=biere&id=<?= $biere['id_biere'] ?>">
                    <img src="<?= '../../../public/images/' . htmlspecialchars($biere['image_url']) ?>" alt="Bière <?= $biere['id_biere'] ?>">
                    <h2><?= htmlspecialchars($biere['nom']) ?></h2>
                    <h2><?= htmlspecialchars($biere['prix']) ?></h2>
                    <p><?= htmlspecialchars($biere['description']) ?></p>
                </a>
                <div class="btns-panier">
                    <div>
                        <form action="index.php?route=ajouter_panier" method="post" id="form-ajout-panier">
                            <input type="hidden" name="id" value="<?= $biere['id_biere'] ?>">
                            <input type="hidden" name="nom" value="<?= $biere['nom'] ?>">
                            <input type="hidden" name="prix" value="<?= $biere['prix'] ?>">
                            <input type="hidden" name="image" value="<?= $biere['image_url'] ?>">
                            <input type="hidden" name="quantite" id="input_quantite" value="1">

                            <input type="hidden" name="redirect_url" value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">

                            <button class="btn-ajouter" type="submit">Ajouter au panier</button>
                        </form>

                    </div>
                    <div>
                        <button class="btn-acheter" value="acheter">Acheter</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>