<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 03.05.2024
    Description > Page de connexion
-->
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
  <title>Connexion</title>
  <link rel="stylesheet" type="text/css" href="src/css/general.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Connexion</h2>
      <form action="src/php/connexionSystem.php" method="POST">
        <div class="form-group">
          <label>Login</label>
          <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="form-group">
          <label>Mot de passe</label>
          <input type="password" class="form-control" id="motDePasse" name="motDePasse" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="submit">Se connecter</button>
      </form>
      <div class="text-center mt-3">
        <p>Vous n'avez pas encore de compte ?</p>
        <a href="inscription.php" class="btn btn-secondary">Cliquez ici</a>
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
</html>
