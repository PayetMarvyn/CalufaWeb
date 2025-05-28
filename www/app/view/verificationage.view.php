<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="icon" type="image/png" href="/public/images/logo_calufa.png">
  <link rel="stylesheet" href="/public/css/styles.css">
  <link rel="stylesheet" href="/public/css/<?= htmlspecialchars($pageSpecificCss) ?>">
  <link href="https://fonts.cdnfonts.com/css/gagalin" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<script src="../../../public/js/fonctionalites.js"></script>

<body>

  <main>
    <section class="verif-age">
      <h1>Bienvenue chez CALUFA 🍻</h1>
      <img src="/public/images/logo_calufa.png" alt="Logo Calufa" class="logo-calufa">
      <h2>Ce site est réservé aux personnes majeures</h1>
        <p>Avez-vous plus de 18 ans ?</p>
        <form method="POST" action="index.php?route=verificationage">
          <button type="submit" name="accepte_age" value="oui">Oui, j'ai plus de 18 ans</button>
          <button type="submit" name="accepte_age" value="non">Non</button>
        </form>
    </section>
  </main>
</body>

</html>