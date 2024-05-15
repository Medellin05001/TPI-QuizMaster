<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 06.05.2024
    Description > Page de classement
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
    ?>
  <meta charset="UTF-8">
  <title>Classement</title>
</head>
<body>
    <?php
    // Données à afficher dans le tableau
    $ranking = $db->getRanking();
    $counter = 0;
    ?>
    
    <div class="container">
        <div class="table-container">
        <h2 class="text-center mb-4">Classement</h2>
            <table class ="table table-dark table-hover table-striped">
                <?php
                // Création du tableaau
                foreach ($ranking as $row) {
                    // Stocke la position de l'utilisateur connecté dans une variable lorsque ses données seront scannés
                    if ($utilisateur[0]['utiNomUtilisateur'] == $row['utiNomUtilisateur']){
                        $positionUtilisateur = $row['position'];
                    }
                    // Permet l'affichage uniquement des 7 premiers joueurs
                    if ($counter < 7){
                        echo "<tr>";
                        echo "<td>" . $row['position'] . ". " . $row['utiNom'] . "</td>";
                        echo "<td>" . $row['utiPrenom'] . "</td>";
                        echo "<td> | " . $row['utiScore'] . " Points" . "</td>";
                        echo "</tr>";
                        $counter++;
                    }
                }
                ?>
                <tr>
                    <!-- Ligne vide afin de séparer le score personnel et général--> 
                    <td></td>
                    <td></td>
                    <td class="invisibleTexte">.</td>
                </tr>
                <tr>
                    <td>
                        <?php
                        echo("Votre score : " . $utilisateur[0]['utiScore']);
                        ?>
                    </td>
                    <td>
                    </td>
                    <td>
                        <?php echo("votre position : " . $positionUtilisateur); ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
        
</body>
<footer>
  <?php require("src/html/footer.html"); ?>
</footer>
</html>
