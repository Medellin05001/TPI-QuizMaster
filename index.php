<!-- 
    ETML 
    Auteur      > Alexandre Fernandes 
    Date        > 22.01.2024
    Description > Page de redirection en cas de problème
--> 
<?php
    //Insertion des cookies et démarrage d'un session php
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    session_start();

    // Si l'utilisateur est connecté il est redirigé vers la page d'accueil, sinon vers la page de connexion
    if (isset($_SESSION["login"])) {
        ?>
            <script>
                window.location.replace("accueil.php");
            </script>
        <?php
    }else{
        ?>
            <script>
                window.location.replace("connexion.php");
            </script>
        <?php
    }