<main>
    <section class="catalogue">
        <?php foreach ($bieres as $biere): ?>
<<<<<<< Updated upstream
            <div class="catalogue-carte">
                <a href="index.php?route=biere&id=<?= $biere['id_biere'] ?>"><img src="<?= '../../../public/images/' . $biere['image_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>"></a>
                <h2> <?= $biere['nom'] ?> </h2>
                <p><?= $biere['description'] ?></p>
                <a href="index.php?route=biere&id=<?= $biere['id_biere'] ?>"><button> En savoir plus +</button></a>
=======
            <div class="carrousel-carte" class="article"> 
                <a href="index.php?route=biere&id=<?= $biere["id"]?>">
                    <a href="etudiant.php?id=<?= $student['id'] ?>"><img src="<?= '../../../public/images/' . $biere['image_url'] ?>" alt="Bière <?= $biere['id_biere'] ?>" ></a>
                    <h2> <?= $biere['nom'] ?> </h2>
                    <h3>Phrase d'accroche</h3>
                    <p><?= $biere['description'] ?></p>
                    <button> En savoir plus +</button>
                </a>
>>>>>>> Stashed changes
            </div>
        <?php endforeach; ?>
    </section>
</main>