<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 06.05.2024
    Description > Page de classement
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
  <title>Classement</title>
</head>
<body>
    <?php
    // Données à afficher dans le tableau
    $ranking = $db->getRanking();
    $counter = 1;
    $insideCounter = 0;

    ?>
    <div>
        <?php
        // Début du tableau HTML
        echo "<table class ='table table-dark table-hover' border='1'>";

        // Création du tableaau
        foreach ($ranking as $row) {
            echo "<tr>";
            //Affiche toutes les données avec un numéro de positionnement uniquement avant le nom de famille
            foreach ($row as $value) {
                if($insideCounter == 0){
                    echo "<td>$counter. | $value</td>";
                    $counter++;
                }else{
                    echo "<td>$value</td>";
                }
                if($insideCounter == 2){
                $insideCounter = 0;
                }else{
                    $insideCounter++;
                }
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </div>
<?php require("src/html/footer.html"); ?>
</body>
</html>
