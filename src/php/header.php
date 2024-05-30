<!-- 
    ETML 
    Auteur	  	> Alexandre Fernandes 
    Date		    > 03.05.2024
    Description > Contient toute la NavBar
-->
<?php
    // Vérifie si l'utilisateur est connecter
    if(isset($_SESSION["login"])){
      require_once("database.php");
      $db = new Database();
      $utilisateur = $db->connect($_SESSION["login"]);

      // Récupérer le nom du fichier dans le quel l'utilisateur se situe
      $path = $_SERVER['PHP_SELF'];
      $file = basename ($path);
?>

<!-- La balise nav ci-dessous est affichée (Si utilisateur connecté) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top custom-width">
  <a class="navbar-brand" href="accueil.php"><img class="logo" src="resources/images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <!-- Si l'utilisateur se trouve dans la page accueil.php, le mot accueil sera mis en évidence-->
        <li class="nav-item <?php if($file == 'accueil.php'){echo " active";}?>">
          <a class="nav-link" href="accueil.php">Accueil</a>
        </li>
        <?php
        if ($utilisateur[0]['utiDroits'] == 'admin'){
          ?>
        <!-- Si l'utilisateur se trouve dans la page creationQuizz.php, le mot Créer quizz sera mis en évidence-->
        <li class="nav-item <?php if($file == 'creationQuizz.php'){echo " active";}?>">
          <a class="nav-link" href="creationQuizz.php">Créer quizz</a>
        </li>
        <li class="nav-item <?php if($file == 'listeUtilisateurs.php'){echo " active";}?>">
          <a class="nav-link" href="listeUtilisateurs.php">Liste utilisateurs</a>
        </li>
        <?php
        }
        ?>
        <!-- Si l'utilisateur se trouve dans la page classement.php, le mot classement sera mis en évidence-->
        <li class="nav-item <?php if($file == 'classement.php'){echo " active";}?>">
          <a class="nav-link" href="classement.php">Classement</a>
        </li>
        <li class="nav-item">
          <a id="deconnexion" class="nav-link" href="src/php/deconnexion.php">Déconnexion</a>
        </li>
      </ul>
    </div>
</nav>
<?php
    }
?>