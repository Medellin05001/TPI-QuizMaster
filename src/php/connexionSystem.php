<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 03.05.2024
    Description > Système de connexion, intéraction avec la base de données
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

    // Stocker les données qui permet la redirection à la page index
    $indexRedirection = "?><script>window.location.replace('../../index.php');</script><?php";


    // Vérifie si des données sont bien présentes
    if (isset($username) && isset($password)){
        // Vérifie si l'utilisateur existe bien dans la base de données
        if($utilisateur = $db->connect($username)){
            $hashedPassword = hash('sha256', $password);

            // Vérifie si l'utilisateur et le mot de passe introduit correspondent
            if ($utilisateur[0]['utiMotDePasse'] == $hashedPassword){
                $_SESSION["login"] = $username;
                echo $indexRedirection;
            }else{
                echo "Le nom d'utilisateur et le mot de passe ne correspondent pas !";
            }
        } else {
            echo "L'utilisateur est introuvable !";
        }
    }else{
        echo $indexRedirection;
    }