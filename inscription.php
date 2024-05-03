<!DOCTYPE html>
<html lang="fr">
<?php 
    require("src/php/header.php");
    //Si l'utilsateur est déja connecté il est redirigé
    if(isset($_SESSION["login"])){
    ?>
        <script>
            window.location.replace("index.php");
        </script>
    <?php
    }
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="stylesheet" type="text/css" href="src/css/general.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Inscription</h2>
      <form action="src/php/inscriptionSystem.php" method="POST">
        <div class="form-group">
          <h4>Nom & Prénom</h4>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nom de famille" name="nom" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
            </div>
          </div>
        </div>
        <div class="form-group">
          <h4>Login</h4>
          <input type="text" class="form-control" placeholder="Login" name="login" required>
        </div>
        <div class="form-group">
          <h4>Mot de passe & Confirmation du mot de passe</h4>
          <div class="row">
            <div class="col">
              <input type="password" class="form-control" placeholder="Mot de passe" name="motDePasse" required>
            </div>
            <div class="col">
              <input type="password" class="form-control" placeholder="Confirmation du mot de passe" name="confirmMotDePasse" required>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">S'inscrire</button>
      </form>
      <div class="text-center mt-3">
        <p>Vous avez déjà un compte ?</p>
        <a href="connexion.php" class="btn btn-secondary">Cliquez ici</a>
      </div>
    </div>
  </div>
</div>

<?php require("src/html/footer.html"); ?>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</footer>
</html>
