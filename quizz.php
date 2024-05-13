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
        //Si l'utilsateur n'est pas connecté il est redirigé
        if(!isset($_SESSION["login"])){
            ?>
                <script>
                    window.location.replace("index.php");
                </script>
            <?php
        }

        //Si l'id est vide le site ne se charge pas
        if(!isset($_GET['id']) || empty($_GET['id'])){
            header("Location: ../../index.php");
            exit;
        }else{
            $idQuizz = $_GET['id'];
        }

        //Récuperation des donnée du quizz
        $quizz = $db->getQuizz($idQuizz);

        //Si le quizz est vide l'utilisateur est renvoyé
        if(!isset($quizz[0]['quiTitre'])){
            header("Location: ../../index.php");
            exit;
        }
    ?>
  <meta charset="UTF-8">
  <title>Quizz</title>
</head>
<body>
    <h2 class="text-center mb-4"><?php echo($quizz[0]['quiTitre'])?> </h2>
    <div id="quizz-container">
        <!-- Form après réponses-->
        <?php
            // Vérification si l'utilisateur est connecté
            if (isset($_SESSION['score']) && isset($_SESSION['reponses_utilisateur'])) {
                $reponsesUtilisateur = $_SESSION['reponses_utilisateur'];
                $score = $_SESSION['score'];
                ?>
                <form id="quizz">
                    <?php
                    $counter = 1;
                    $NmbreBonnesReponses = 0;
                    // Affiche la question avec sa réponse puis la réponse inscrite par l'utilisateur
                    foreach($quizz as $question){
                        echo "<div class='question'>";
                        echo "Question : <label'>" . $question['queTexte'] . "</label>";
                        echo " | Réponse correcte : <label>" . $question['repTexte'] . "</label>";

                        // Vérifier si la réponse de l'utilisateur pour cette question existe
                        if(isset($reponsesUtilisateur["reponse".$counter]) && str_replace(' ', '',$reponsesUtilisateur["reponse".$counter]) != "") {
                            echo "<br><label> Votre réponse : " . $reponsesUtilisateur["reponse".$counter] . "</label>";
                        } else {
                            echo "<br><label>Aucune réponse</label>";
                        }
                    
                        // Calcul du nombre de réponses juste sur le total de réponses
                        if($question['repTexte'] === $reponsesUtilisateur["reponse".$counter]){                    
                            $NmbreBonnesReponses++;
                        }
                        echo "</div><hr>";
                        $counter++;
                    }

                    echo "Total : ".$NmbreBonnesReponses."/".($counter-1). " <br>";
                    $db->addScore($score, $_SESSION["login"]);
                    echo "Votre nouveau score de classement général est de " . $utilisateur[0]['utiScore']+$score . " points (+" . $score . " points)";
                    ?>
                </form>
        <?php
        
            unset($_SESSION['score']);
            unset($_SESSION['reponses_utilisateur']);
            }else{
        ?>

        <!-- Form quand l'utilisateur n'a pas soumis de réponses -->
        <form id="quizz" action="src/php/traitementQuizz.php" method="post">
            <?php
            $counter = 1;
            foreach($quizz as $question){
                echo "<div class='question'>";
                    echo "<label>" . $question['queTexte'] . "</label>";
                    echo "<input type='text' name='reponse" . $counter . "'>";
                echo "</div><hr>";
                $counter++;
            }
            ?>
            <!-- Ce label permet d'envoyer l'id du quizz en donnée dans le formulaire-->
            <input type="hidden" name="idQuizz" value="<?php echo $idQuizz; ?>">

            <input type="submit" value="Soumettre">
        </form>
        <?php
        }
        ?>
    </div>
</body>
<footer>
    <?php require("src/html/footer.html"); ?>
</footer>
</html>
