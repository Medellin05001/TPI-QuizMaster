<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 24.05.2024
    Description > Page d'information de l'utilisateur
-->
<?php require("src/php/head.php"); ?>
    <title>Detail Utilisateurs</title>
</head>
<body>
    <?php 
        require("src/php/header.php");
        // Si l'utilsateur n'est pas connecté il est redirigé
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

        // Si l'id est vide le site ne se charge pas
        if(!isset($_GET['id']) || empty($_GET['id'])){
            header("Location: ../../index.php");
            exit;
        }else{
            $utilisateurSpecifique = $_GET['id'];
        }

        // Si l'utilisateur n'existe pas il est redirigé
        if (!$db->connect($utilisateurSpecifique)){
            header("Location: ../../index.php");
            exit;
        }

        // Récuperation des donnée de l'utilisateur
        $utilisateurSpecifique = $db->connect($utilisateurSpecifique);
        ?>
        <div class="custom-width">
        <h2 class="text-center">Detail -> <?php echo $utilisateurSpecifique[0]['utiNomUtilisateur']?> </h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" id="nomInput" name="nom" value="<?php echo $utilisateurSpecifique[0]['utiNom'] ?>">
                <div class="erreur"><p id="erreur_nom"></p></div>
            </div>
            <div class="form-group">
                <label>Prenom</label>
                <input type="text" class="form-control" id="prenomInput" name="prenom" value="<?php echo $utilisateurSpecifique[0]['utiPrenom'] ?>">
                <div class="erreur"><p id="erreur_prenom"></p></div>
            </div>
            <div class="form-group">
                <label>Score</label>
                <input type="num" class="form-control" id="scoreInput" name="score" value="<?php echo $utilisateurSpecifique[0]['utiScore'] ?>">
                <div class="erreur"><p id="erreur_score"></p></div>
            </div>
            <div class="form-group">
                <label>Droits</label>
                <select class="form-control" id="droitInput" name="score">
                <?php
                    if($utilisateurSpecifique[0]['utiDroits'] == 'admin'){
                        ?>
                            <option>admin</option>
                            <option>utilisateur</option>
                        <?php
                    }else{
                        ?>
                            <option>utilisateur</option>
                            <option>admin</option>
                        <?php
                    }
                ?>
                </select>
            </div>
            <label type="text" class="form-control" id="loginInputModif" name="login"><?php echo $utilisateurSpecifique[0]['utiNomUtilisateur'] ?></label>
            <button type="submit" class="btn btn-primary btn-block" name="submit" id="modificationSubmit">Modifier</button>
            <div style="color:red;" id="solde"></div>
        </form>
    <?php require("src/html/footer.html"); ?>
</body>
</html>
