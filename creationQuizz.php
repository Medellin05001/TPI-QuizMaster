<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 06.05.2024
    Description > Page de création de quiz
-->
<!DOCTYPE html>
<html lang="fr">
<head>
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
  <meta charset="UTF-8">
  <title>Création quizz</title>
</head>
<body>

<?php require("src/html/footer.html"); ?>
</body>
</html>
