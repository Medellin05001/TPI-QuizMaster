<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 13.05.2024
    Description > Page de création de quiz
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

        // Si l'utilisateur n'est pas administrateur il est redirigé
        if($utilisateur[0]['utiDroits'] != 'admin'){
            header("Location: ../../index.php");
            exit;
        }
    ?>
  <meta charset="UTF-8">
  <title>Création quizz</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Création quizz</h2>
            Uniquement lettres et chiffres sont acceptés !<br>
            Seul les questions/reponses aux formats correctes seront ajoutées
            <form action="src/php/traitementCreationQuizz.php" method="POST">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" id="nomInput" placeholder="Nom du quizz - 50 charctères max" name="quizzName">
                        </div>
                    </div>
                </div>
                <div class="form-group" id="inputs_container">
                    <div class="row">
                        <div class="col">
                            <input type="texte" class="form-control" placeholder="Question" name="question0">
                        </div>
                        <div class="col">
                            <input type="texte" class="form-control" placeholder="Reponse" name="reponse0">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="idUtilisateur" value="<?php echo $utilisateur[0]['idUtilisateurs']; ?>">

                <button type="button" class="btn btn-primary btn-block" name="submit" id="addInput">Ajouter une question</button>
                <button type="submit" class="btn btn-primary btn-block" name="submit" id="createSubmit">Création du quizz</button>
            </form>
        </div>
    </div>
</div>
</body>
<footer>
    <?php require("src/html/footer.html"); ?>
</footer>
</html>
