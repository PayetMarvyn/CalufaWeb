<?php
$pdo = getDatabaseConnexion();
$query = $pdo->prepare("SELECT * FROM `bieres`");
$query->execute();
$bieres = $query->fetchAll();
?>

<main>
    <section class="carrousel">
        <?php foreach ($bieres as $biere): ?>
            <div class="carrousel-carte">
                <a href="etudiant.php?id=<?= $student['id'] ?>"><img src="<?= '../../../public/images/' . $biere['image_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>" ></a>
                <h2> <?= $biere['nom'] ?> </h2>
                <h3>Phrase d'accroche</h3>
                <p><?= $biere['description'] ?></p>
                <button> En savoir plus +</button>
            </div>
        <?php endforeach; ?>
    </section>
</main>