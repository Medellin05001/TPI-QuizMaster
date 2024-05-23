<!-- 
    ETML 
    Auteur		  > Alexandre Fernandes 
    Date		    > 03.05.2024
    Description > Page d'inscription
-->
<?php require("src/php/head.php"); ?>
  <title>Inscription</title>
</head>
<body>
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
                <div class="erreur"><p id="erreur_nom"></p></div>
              </div>
              <div class="col">
                <input type="text" class="form-control" id="prenomInput" placeholder="Prénom" name="prenom">
                <div class="erreur"><p id="erreur_prenom"></p></div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="loginInput" placeholder="Login" name="login">
            <div class="erreur"><p id="erreur_nomUtilisateur"></p></div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col">
                <input type="password" class="form-control" id="motDePasseInput" placeholder="Mot de passe" name="motDePasse">
                <div class="erreur"><p id="erreur_motDePasse"></p></div>
              </div>
              <div class="col">
                <input type="password" class="form-control" id="motDePasseConfirmInput" placeholder="Confirmation du mot de passe" name="confirmMotDePasse">
                <div class="erreur"><p id="erreur_motDePasseConfirm"></p></div>
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
</html>
