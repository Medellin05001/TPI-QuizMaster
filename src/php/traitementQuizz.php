<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 08.05.2024
    Description > Traitement des données réponse d'un quizz et attribution du scole
-->

<?php
    // Insertion des cookies, démarrage d'une session php, et connexion à la base de donnée
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    SESSION_START();
    require_once("database.php");
    $db = new Database();

    // Vérifier si l'utilisateur est bien passer par le formulaire de quizz pour venir sur cette page
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quizz = $db->getQuizz($_POST['idQuizz']);

        // Récupération des réponses soumises par l'utilisateur
        $reponsesUtilisateur = [];
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'reponse') === 0) {
                $reponsesUtilisateur[$key] = $value;
            }
        }

        // Récupération des réponses attendues depuis la base de données via la variable $quizz
        $reponsesAttendues = [];
        foreach($quizz as $key => $question){
            $reponsesAttendues[$key] = $question['repTexte'];
        }

        
        // Comparaison des réponses de l'utilisateur avec les réponses attendues
        $score = 0;
        foreach ($reponsesAttendues as $key => $reponseAttendue) {
            if(isset($reponsesUtilisateur["reponse".$key+1])) {
                if($reponsesUtilisateur["reponse".$key+1] === $reponseAttendue){
                    $score++;
                }else{
                    if($score > 0){
                        $score--;
                    }
                }
            }
        }

        echo $score;

    }else{
        header("Location: ../../index.php");
        exit;
    }
    ?>