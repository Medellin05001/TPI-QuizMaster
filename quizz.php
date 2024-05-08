<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 08.05.2024
    Description > Page de quizz
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
        //Si l'id est vide le site ne se charge pas
        if(!isset($_GET['id']) || empty($_GET['id'])){
            die("Aucun quizz n'a été trouver");
        }else{
            $idQuizz = $_GET['id'];
        }

        //Récuperation des donnée du quizz
        $quizz = $db->getQuizz($idQuizz);
    ?>
  <meta charset="UTF-8">
  <title>Quizz</title>
</head>
<body>
    <h2 class="text-center mb-4"><?php echo($quizz[0]['quiTitre'])?> </h2>
    <div id="quizz-container">
        <form id="quizz" action="src/php/traitementQuizz.php" method="post">
            <?php
            $counter = 1;
            foreach($quizz as $question){
                echo "<div class='question'>";
                    echo "<label for='question1'>" . $question['queTexte'] . "</label>";
                    echo "<input type='text' name='reponse" . $counter . "'>";
                echo "</div><hr>";
                $counter++;
            }
            ?>
            <!-- Ce label permet d'envoyer l'id du quizz en donnée dans le formulaire-->
            <input type="hidden" name="idQuizz" value="<?php echo $idQuizz; ?>">

            <input type="submit" value="Soumettre">
        </form>
    </div>
</body>
<footer>
    <?php require("src/html/footer.html"); ?>
</footer>
</html>
