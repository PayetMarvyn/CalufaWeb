<?php
session_start();

$message = $_SESSION['flash'] ?? "Une erreur est survenue.";
unset($_SESSION['flash']);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Erreur</title>
</head>
<body>
    <h1>Oups !! Il y a une erreur !</h1>
    <p><?= htmlspecialchars($message) ?></p>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
    <title>CalufaWeb - Erreur</title>
  </head>
  <body>
    <header>
      <logo> Tech'Etud </logo>
      <div class="login" aria-label="You're logged">
        <a class="btn btn-login" href="#">Login</a>
      </div>
      <nav>
        <ul>
          <li><a href="/">Accueil</a></li>
          <li class="current"><a href="trombinoscope.html">Trombinoscope</a></li>
          <li><a href="#">Cours</a></li>
        </ul>
      </nav>
    </header>
    <main class="trombi">
      <h1>OUPS !! Il y a une erreur !</h1>
      <div class="line-decoration" aria-hidden="true">
        <div class="line" id="line1"></div>
        <div class="line" id="line2"></div>
      </div>
      <div class="trombi-decoration" aria-hidden="true">
      </div>
      <div class="erreur">
        <p>La connexion à la base de données à échouer.</p>
      </div>
    </main>
  </body>
</html>
