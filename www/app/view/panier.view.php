<main class="panier">
    <section class="conteneur-panier">
        <h1>Votre panier</h1>

        <?php if (empty($panier)): ?>
            <p class="panier-vide">Votre panier est vide.</p>
        <?php else: ?>
            <table class="panier-tableau">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($panier as $article): ?>
                        <tr>
                            <td><img class="image-produit" src="public/images/<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['nom']) ?>"></td>
                            <td><?= htmlspecialchars($article['nom']) ?></td>
                            <td><?= $article['quantite'] ?></td>
                            <td><?= number_format($article['prix'], 2) ?> €</td>
                            <td><?= number_format($article['prix'] * $article['quantite'], 2) ?> €</td>
                        </tr>
                        <?php $total += $article['prix'] * $article['quantite']; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"><strong>Total à payer</strong></td>
                        <td><strong><?= number_format($total, 2) ?> €</strong></td>
                    </tr>
                </tfoot>
            </table>

            <div class="actions-panier">
                <button class="btn-secondaire" onclick="window.location.href='index.php?action=catalogue'">Continuer vos achats</button>
                <button class="btn-primaire" onclick="window.location.href='index.php?action=validerPanier'">Passer la commande</button>
            </div>
        <?php endif; ?>
    </section>
</main>
