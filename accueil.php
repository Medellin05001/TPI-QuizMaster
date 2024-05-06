<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 06.05.2024
    Description > Page de connexion
-->
<!DOCTYPE html>
<html lang="fr">
<?php 
    require("src/php/header.php");
    //Si l'utilsateur est déja connecté il est redirigé
    if(!isset($_SESSION["login"])){
    ?>
        <script>
            window.location.replace("index.php");
        </script>
    <?php
    }
?>
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
</head>
<body>

<?php require("src/html/footer.html"); ?>
</body>
</html>
