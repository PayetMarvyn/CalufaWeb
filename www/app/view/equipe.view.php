<main>
    <section>
        <h1>Trombinoscopes</h1>

        <h2>Équipe MMI</h2>

        <?php foreach ($membres as $membre): ?>
            <div class='carte'>
                <img src="$membre['photo'] . "' alt='Photo de " . $row['prenom'] . "'>
                <h2> <?= $biere['nom'] ?> </h2>
                <h3>Phrase d'accroche</h3>
                <p><?= $biere['description'] ?></p>
                <button> En savoir plus +</button>
            </div>
        <?php endforeach; ?>

        
        <div class="trombinoscope">
            <?php
                echo "<div class='carte'>";
                echo "<img src='" . $row['photo'] . "' alt='Photo de " . $row['prenom'] . "'>";
                echo "<p>" . $row['prenom'] . " " . $row['nom'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>

        <h2>Équipe GB</h2>
        <div class="trombinoscope" id="gb">
            <?php
            $result = mysqli_query($equipe, "SELECT * FROM equipe WHERE equipe_type='GB'");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='carte'>";
                echo "<img src='" . $row['photo'] . "' alt='Photo de " . $row['prenom'] . "'>";
                echo "<p>" . $row['prenom'] . " " . $row['nom'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>

        <script src="../../public/js/fonctionalites.js"></script>
    </section>
</main>