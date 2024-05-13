<!-- 
    ETML 
    Auteur		  > Alexandre Fernandes 
    Date	    	> 03.05.2024
    Description > Page de connexion
-->
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php 
      require("src/php/header.php");
      //Si l'utilsateur n'est pas connecté il est redirigé
      if(isset($_SESSION["login"])){
        ?>
            <script>
                window.location.replace("index.php");
            </script>
        <?php
      }
  ?>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css" integrity="sha512-whyb3qZrPEJNH+Z7P4YpD27cQ4C44kFZxqrmlNVxNB13HZlB0qJ0Xv1LKshWjGjZGtPAf+W/J+aEck5FmCf/kw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
  <!-- Formulaire de connexion -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Connexion</h2>
        <form method="POST">
          <div class="form-group">
            <input type="text" class="form-control" id="nomUtilisateurInput" placeholder="Entrez le nom d'utilisateur" name="login">
            <div class="erreur"><p id="erreur_nomUtilisateur"></p></div>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="motDePasseInput" placeholder="Entrez le mot de passe" name="motDePasse">
            <div class="erreur"><p id="erreur_motDePasse"></p></div>
            <div class="erreur"><p id="erreur_motDePasseRegex"></p></div>
          </div>
          <button id ="connectSubmit"  type="button" class="btn btn-primary btn-block" name="submit">Se connecter</button>
          <div style="color:red;" id="solde"></div>
        </form>
        <div class="text-center mt-3">
          <p>Vous n'avez pas encore de compte ?</p>
          <a href="inscription.php" class="btn btn-secondary">Cliquez ici</a>
        </div>
      </div>
    </div>
  </div>
</body>
<footer>
  <?php require("src/html/footer.html"); ?>
</footer>
</html>
