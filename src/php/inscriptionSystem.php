<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 03.05.2024
    Description > Système d'inscription, intéraction avec la base de données
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
    $password = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    // Stocker les données qui permet la redirection à la page index
    $indexRedirection = "?><script>window.location.replace('../../index.php');</script><?php";

    // Stocker les données qui permet la redirection à la page connexion
    $connexionSuccess = "?><script>alert('La création du compte à été complétée avec succès');window.location.replace('../../connexion.php');</script><?php";

    // Vérifie si des données sont bien présentes
    if (isset($username) && isset($password) && isset($nom) && isset($prenom)){
        // Vérifie le nom d'utilisateur introduit existe déja dans la base de donnée
        if(!$db->connect($username)){
            $hashedPassword = hash('sha256', $password);
            
            // Création de l'utilisateur et redirection
            $db->addUser($username, $hashedPassword, $nom, $prenom);
            echo ($connexionSuccess);
        }else{
            echo "Ce nom d'utilisateur n'est plut disponible !";
        }
    }else{
        echo $indexRedirection;
    }
?>
