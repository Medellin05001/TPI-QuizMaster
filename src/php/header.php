<?php 
  ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
  ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
  session_start();
?>
<head>
    <meta charset="utf-8" /> 
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel = "icon" href ="resources/images/logo.ico" type = "image/x-icon"> -->
</head>
<body>
<?php
    if(isset($_SESSION["login"])){
        require_once("database.php");
        $db = new Database();
        $utilisateur = $db->connect($_SESSION["login"]);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Mon Site</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Créer quizz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Classement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
    }
?>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>