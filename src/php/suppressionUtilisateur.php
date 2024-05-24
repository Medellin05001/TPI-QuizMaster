<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 24.05.2024
    Description > Suppression d'un utilisateur
-->

<?php
    // Insertion des cookies, démarrage d'une session php, et connexion à la base de donnée
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    SESSION_START();
    require_once("database.php");
    $db = new Database();
    $utilisateur = $db->connect($_SESSION["login"]);
    
    //Si l'id est vide le site ne se charge pas
    if(!isset($_GET['id']) || empty($_GET['id'])){
        header("Location: ../../index.php");
        exit;
    }else{
        $NomUtilisateurUtilisateur = $_GET['id'];
    }
    
    //Si l'utilsateur n'est pas connecté il est redirigé
    if(!isset($_SESSION["login"])){
        header("Location: ../../index.php");
        exit;
    }
    
    // Si l'utilisateur n'est pas administrateur il est redirigé
    if($utilisateur[0]['utiDroits'] != 'admin'){
        header("Location: ../../index.php");
        exit;
    }

    // Si l'utilisateur tente de se supprimer il est redirigé
    if($utilisateur[0]['utiNomUtilisateur'] == $NomUtilisateurUtilisateur){
        header("Location: ../../listeUtilisateurs.php");
        exit;
    }
    

    if($db->connect($NomUtilisateurUtilisateur)){
        $utilisateurSupprimer = $db->connect($NomUtilisateurUtilisateur);
        $db->deleteUser($utilisateurSupprimer[0]['idUtilisateurs']);
        echo "Utilisateur supprimer avec succès";
        header("Location: ../../listeUtilisateurs.php");
        exit;
    }else{
        ?><script>alert("L'utilisateur est introuvable");</script><?php
        header("Location: ../../listeUtilisateurs.php");
        exit;
    }