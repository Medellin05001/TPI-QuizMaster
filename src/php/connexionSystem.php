<?php 
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    SESSION_START();
    require_once("database.php");
    $db = new Database();
    if(isset($_POST['submit'])){
        
        if (isset($_POST['login']) && isset($_POST['motDePasse'])){
            $utilisateur = $db->connect($_POST['login']);
            $hashedPassword = hash('sha256', $_POST['motDePasse']);
            foreach($utilisateur as &$utilisateurs) {
                if ($utilisateurs['utiMotDePasse'] == $hashedPassword){
                    $_SESSION["login"] = $_POST['login'];
                    header("Location:../../index.php");
                }
            }
            header("Location:../../connexion.php");
        }
    } else {
        header("Location:../../connexion.php");
    }