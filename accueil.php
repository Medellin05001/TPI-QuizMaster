<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 08.05.2024
    Description > Page d'accueil
-->
<?php require("src/php/head.php"); ?>
  <title>Accueil</title>
</head>
<body>
    <?php require("src/php/header.php");
        //Si l'utilsateur n'est pas connecté il est redirigé
        if(!isset($_SESSION["login"])){
            ?>
                <script>
                    window.location.replace("index.php");
                </script>
            <?php
        }
        $quizzs = $db->getAllQuizz();
    ?>
    <div class="custom-width">
        Bienvenue : <?php echo($utilisateur[0]['utiPrenom']." ".$utilisateur[0]['utiNom']." (".$utilisateur[0]['utiNomUtilisateur'].")");?>
        <h2 class="text-center mb-4">Quizz récents</h2>    
        <div class="container mt-5">
            <div class="row">
                <?php
                    // Affichage de tout les quizz, du plus récent au plus vieux
                    foreach($quizzs as $quizz){
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <?php echo"<a class='card-link' href='quizz.php?id=". $quizz["idQuizz"] ."'>"; ?>
                                    <div class="card bg-dark text-white">
                                        <div class="card-body text-center">
                                            <h5 class="card-title"><?php echo($quizz['quiTitre']); ?></h5>
                                            <?php if($utilisateur[0]['utiDroits'] == 'admin'){
                                                echo "<h6 class='card-subtitle'><a onclick='questionQuizz(".$quizz['idQuizz'].")' href='#'>Supprimer Quizz</a></h6>";
                                            }  ?>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text card-text-small">Par : <?php echo($quizz['utiNom']." ".$quizz['utiPrenom']); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                    }  
                ?>
            </div>
        </div>
    </div>
    <?php require("src/html/footer.html"); ?>
</body>
</html>
