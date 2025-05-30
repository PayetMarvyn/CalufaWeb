<main class="panier">
    <section>
        <h1>Votre panier</h1>

        <?php if (empty($panier)): ?>
            <p>Votre panier est vide.</p>
        <?php else: ?>
            <table>
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
                            <td><img src="<?= htmlspecialchars($article['image']) ?>" alt="<?= htmlspecialchars($article['nom']) ?>" style="width: 50px;"></td>
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
                        <td colspan="4"><strong>Total</strong></td>
                        <td><strong><?= number_format($total, 2) ?> €</strong></td>
                    </tr>
                </tfoot>
            </table>
        <?php endif; ?>

    </section>
</main>