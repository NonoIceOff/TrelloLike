<?php
$page = "index";
require '../src/utils/common.php';
require_once '../src/utils/database.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trellroz Accueil</title>
  <link rel="icon" href="assets/images/logo.png" />
  <link rel="stylesheet" href="assets/styles/pages.css" />
  <link rel="stylesheet" href="assets/styles/header.css" />
  <link rel="stylesheet" href="assets/styles/footer.css" />
</head>

<body>
  <header>
    <?php
    require '../src/partials/header.php';
    ?>
  </header>

  <div class="presentation-box">
    <div class="presentation-content">
      <h1>Rendez accessible l'organisation</h1>
      <p>Notre platforme vous permet à l'aide de stickers de rendre votre projet plus coordiné</p>
      <a href="#" class="btn-learn-more">Créez votre tableau</a>
    </div>
  </div>

  <section class="features-section">
    <div class="feature">
      <h2>Découvrez</h2>
      <p>Explorez une variété de tableaux conçus pour répondre à vos besoins. Personnalisez votre espace de travail selon vos préférences.</p>
    </div>
    <div class="feature">
      <h2>Collaborez</h2>
      <p>Collaborez avec d'autres utilisateurs, partagez des idées et participez aux tableaux disponibles à travers notre plateforme.</p>

    </div>
    <div class="feature">
      <h2>Participer</h2>
      <p>Créez un compte pour bénéficier de fonctionnalités exclusives. Connectez-vous avec d'autres passionnés, collaborez efficacement sur des projets et donnez vie à vos idées.</p>
    </div>
  </section>

  <footer class="footer">
    <?php
    require '../src/partials/footer.php';
    ?>
  </footer>
</body>

</html>