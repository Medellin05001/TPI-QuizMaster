<?php 
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    SESSION_START();
    require_once("database.php");
    $db = new Database();

    if(isset($_POST['submit'])){
        if (!empty($_POST['login']) || !preg_match("/^[A-z0-9]*$/", $_POST['login'])){
            if (!empty($_POST['motDePasse']) && isset($_POST['motDePasse'])){
                if($_POST['motDePasse'] == $_POST['confirmMotDePasse']){
                    if(!$db->connect($_POST['login'])){
                        $hashedPassword = hash('sha256', $_POST['confirmMotDePasse']);
                        $db->addUser($_POST['login'], $hashedPassword, $_POST['nom'], $_POST['prenom']);
                        ?>
                        <script>
                            window.location.replace("../../connexion.php");
                        </script>
                        <?php
                    }else{
                        header("Location:../../inscription.php");
                    }
                }else{
                    header("Location:../../inscription.php");
                }
            }else{
                header("Location:../../inscription.php");
            }
        }else{
            header("Location:../../inscription.php");
        }
    }else{
        header("Location:../../index.php");
    }
?>
