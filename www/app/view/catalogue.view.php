<main>
    <section class="catalogue">
        <?php foreach ($bieres as $biere): ?>
            <div class="catalogue-carte">
                <a href="index.php?route=biere&id=<?= $biere['id_biere'] ?>">
                    <img src="<?= '../../../public/images/' . htmlspecialchars($biere['image_url']) ?>" alt="Bière <?= $biere['id_biere'] ?>">
                    <h2><?= htmlspecialchars($biere['nom']) ?></h2>
                    <h2><?= number_format((float)$biere['prix'], 2) ?> €</h2>
                    <p><?= htmlspecialchars($biere['description']) ?></p>
                </a>
                <div class="btn-panier">
                    <div>
                        <form action="index.php?route=ajouter_panier" method="POST" value="ajouter">
                            <input type="hidden" name="id" value="<?= $biere['id_biere'] ?>">
                            <input type="hidden" name="nom" value="<?= htmlspecialchars($biere['nom']) ?>">
                            <input type="hidden" name="prix" value="<?= htmlspecialchars($biere['prix']) ?>">
                            <input type="hidden" name="image" value="<?= htmlspecialchars($biere['image_url']) ?>">
                            <button type="submit">Ajouter au panier</button>
                        </form>
                    </div>
                    <div>
                        <button class="btn btn-secondary" value="acheter">Acheter</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>