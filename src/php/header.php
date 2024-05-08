<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 03.05.2024
    Description > header, liaison avec divers script, css qui permettent le bon fonctionnement de l'application
-->

<?php 
  //Insertion des cookies et démarrage d'un session php
  ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
  ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
  session_start();
?>
<head>
    <meta charset="utf-8" /> 
    <!-- Connexion au CSS local-->
    <link rel="stylesheet" type="text/css" href="../../resources/css/general.css">
    <!-- Nécessaire pour le responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Connexion à bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel = "icon" href ="resources/images/favIcon.png" type = "image/x-icon">
</head>
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
  <div class="container">
    <a class="navbar-brand" href="accueil.php"><img class="logo" src="resources/images/logo.png"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <!-- Si l'utilisateur se trouve dans la page accueil.php, le mot accueil sera mis en évidence-->
        <li class="nav-item <?php if($file == 'accueil.php'){echo " active";}?>">
          <a class="nav-link" href="accueil.php">Accueil</a>
        </li>
        <?php
        if ($utilisateur[0]['utiDroits'] == 'admin'){
          ?>
        <li class="nav-item <?php if($file == 'creationQuizz.php'){echo " active";}?>">
          <a class="nav-link" href="creationQuizz.php">Créer quizz</a>
        </li>
        <?php
        }
        ?>
        <li class="nav-item <?php if($file == 'classement.php'){echo " active";}?>">
          <a class="nav-link" href="classement.php">Classement</a>
        </li>
        <li class="nav-item">
          <a id="deconnexion" class="nav-link" href="src/php/deconnexion.php">Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
    }
?>
<!-- Nécessaire pour le bon fonctionnement de bootstrap & liaison à jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Connexion au script javascript local-->
<script src="src/js/script.js"></script>