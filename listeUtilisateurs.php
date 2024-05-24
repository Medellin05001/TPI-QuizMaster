<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 24.05.2024
    Description > Page qui permet de lister les utilisateurs
-->
<?php require("src/php/head.php"); ?>
    <title>Liste Utilisateurs</title>
</head>
<body>
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
        $utilisateurs = $db->getAllUser();
    ?>
    <div class="custom-width">
        <h2 class="text-center">liste Utilisateurs</h2>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Nom d'utilisateur</th>
                <th scope="col">Droits</th>
                <th scope="col">Score</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($utilisateurs as $utilisateurSpecifique){
                        echo "<tr>";
                        echo "<th scope='row'>" . $utilisateurSpecifique['idUtilisateurs'] . "</th>";
                        echo "<td>" . $utilisateurSpecifique['utiNom'] . "</td>";
                        echo "<td>" . $utilisateurSpecifique['utiPrenom'] . "</td>";
                        echo "<td>" . $utilisateurSpecifique['utiNomUtilisateur'] . "</td>";
                        echo "<td>" . $utilisateurSpecifique['utiDroits'] . "</td>";
                        echo "<td>" . $utilisateurSpecifique['utiScore'] . "</td>";
                        echo "<td><a href='detailUtilisateur.php?id=".$utilisateurSpecifique['utiNomUtilisateur']."'><i class='bi bi-pen'></i></a>";
                        if($utilisateurSpecifique['utiNomUtilisateur'] != $utilisateur[0]['utiNomUtilisateur']){
                            echo " <a onclick='questionUtilisateur(\"".$utilisateurSpecifique['utiNomUtilisateur']."\")' href='#'><i class='bi bi-trash'></i></a>";
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
                <tr>
            </tbody>
        </table>
    </div>
    <?php require("src/html/footer.html"); ?>
</body>
</html>
