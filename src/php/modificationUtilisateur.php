<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 24.05.2024
    Description > Modification de l'utilisateur
-->

<?php 
    // Insertion des cookies, démarrage d'une session php, et connexion à la base de donnée
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    SESSION_START();
    require_once("database.php");
    $db = new Database();

    // Récupération du nom d'utilisateur et mot de passe envoyés en paramètres depuis le script javascript
    $username = $_POST['username'];
    $score = $_POST['score'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $droit = $_POST['droit'];

    $redirection = "?><script>window.location.replace('../../listeUtilisateurs.php');</script><?php";

    // Vérifie si des données sont bien présentes
    if (isset($score) && isset($nom) && isset($prenom) && isset($droit)){
        // Création de l'utilisateur et redirection
        $db->updateUser($username, $nom, $prenom, $score, $droit);
        echo $redirection;
    }else{
        echo $redirection;
    }
?>
