<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 03.05.2024
    Description > Page d'inscription
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
  <title>Inscription</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css" integrity="sha512-whyb3qZrPEJNH+Z7P4YpD27cQ4C44kFZxqrmlNVxNB13HZlB0qJ0Xv1LKshWjGjZGtPAf+W/J+aEck5FmCf/kw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- Formulaire d'inscription -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2 class="text-center mb-4">Inscription</h2>
      <form action="src/php/inscriptionSystem.php" method="POST">
        <div class="form-group">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="nomInput" placeholder="Nom de famille" name="nom">
              <span class="erreur"><p id="erreur_nom"></p></span>
            </div>
            <div class="col">
              <input type="text" class="form-control" id="prenomInput" placeholder="Prénom" name="prenom">
              <span class="erreur"><p id="erreur_prenom"></p></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="loginInput" placeholder="Login" name="login">
          <span class="erreur"><p id="erreur_nomUtilisateur"></p></span>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col">
              <input type="password" class="form-control" id="motDePasseInput" placeholder="Mot de passe" name="motDePasse">
              <span class="erreur"><p id="erreur_motDePasse"></p></span>
            </div>
            <div class="col">
              <input type="password" class="form-control" id="motDePasseConfirmInput" placeholder="Confirmation du mot de passe" name="confirmMotDePasse">
              <span class="erreur"><p id="erreur_motDePasseConfirm"></p></span>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary btn-block" name="submit" id="registerSubmit">Se connecter</button>
      </form>
      <div class="text-center mt-3">
        <p>Vous avez déjà un compte ?</p>
        <a href="connexion.php" class="btn btn-secondary">Cliquez ici</a>
        <div style="color:red;" id="solde"></div>
      </div>
    </div>
  </div>
</div>

<?php require("src/html/footer.html"); ?>
</body>
</footer>
</html>
