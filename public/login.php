<?php
$page = "connexion";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trellroz Connexion</title>
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


  <main class="login-container">
    <form class="login-form" method="post">
      <h1>Connexion</h1>
      <label for="email">Email <span>*</span></label>
      <input type="email" id="email" name="email" required />

      <label for="password">Mot de passe <span>*</span></label>
      <input type="password" id="password" name="password" required />

      <button type="submit">Se connecter</button>
    </form>
    <br>
    <p>Pas de compte ? <a class="register_button" href="register.php">S'inscrire</a></p>
  </main>

  <footer class="footer">
    <?php
    require '../src/partials/footer.php';
    ?>
  </footer>
</body>

</html>