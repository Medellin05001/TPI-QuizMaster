<!-- 
    ETML 
    Auteur		> Alexandre Fernandes 
    Date		> 13.05.2024
    Description > Permet de traiter les données de la création de quizz
-->

<?php
    // Insertion des cookies, démarrage d'une session php, et connexion à la base de donnée
    ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
    ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
    SESSION_START();
    require_once("database.php");
    $db = new Database();

    $nomQuizz = $_POST['quizzName'];
    $idUtilisateur = $_POST['idUtilisateur'];

    // Vérifier si l'utilisateur est bien passer par le formulaire de quizz pour venir sur cette page
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(preg_match("/^[\p{L}0-9\s]{1,50}$/u", $nomQuizz)) {

            $reponsesUtilisateurs = [];
            $questionsUtilisateur = [];

            // Boucle pour traiter toutes les entrées POST
            foreach ($_POST as $key => $value) {
                // Vérifier si c'est une question
                if (strpos($key, 'question') === 0) {
                    $questionNumber = substr($key, 8);

                    // Vérifier si la question est vide, si nom -> question ajoutée | si oui -> question supprimée du tableau
                    if (empty(trim($value))) {
                        unset($questionsUtilisateur[$key]);
                        unset($reponsesUtilisateurs['reponse' . $questionNumber]);
                    } else {
                        if(preg_match("/^[\p{L}0-9\s]{1,255}$/u", $value)){
                            $questionsUtilisateur[$key] = $value;
                        }else{
                            unset($questionsUtilisateur[$key]);
                            unset($reponsesUtilisateurs['reponse' . $questionNumber]);
                        }
                    }
                }

                // Vérifier si c'est une réponse
                if (strpos($key, 'reponse') === 0) {
                    $reponseNumber = substr($key, 7);

                    // Vérifier si la réponse est vide, si non -> question ajoutée | si oui -> question supprimée du tableau
                    if (empty(trim($value))) {
                        unset($reponsesUtilisateurs[$key]);
                        unset($questionsUtilisateur['question' . $reponseNumber]);
                    } else {
                        if(preg_match("/^[\p{L}0-9\s]{1,255}$/u", $value)){
                            $reponsesUtilisateurs[$key] = $value;
                        }else{
                            unset($reponsesUtilisateurs[$key]);
                            unset($questionsUtilisateur['question' . $questionNumber]);
                        }
                    }
                }
            }

            // Supprimer les réponses solitaires sans question associée
            foreach ($reponsesUtilisateurs as $key => $value) {
                $reponseNumber = substr($key, 7);
                if (!isset($questionsUtilisateur['question' . $reponseNumber])) {
                    unset($reponsesUtilisateurs[$key]);
                }
            }

            // Vérifie s'il y a plus de 0 question/réponse
            if(count($reponsesUtilisateurs) !== 0){

                //Création quizz
                $db->createQuizz($nomQuizz,$idUtilisateur);
                $idQuizz = $db->getLastId();
                foreach($questionsUtilisateur as $key=>$value){

                    //Création question
                    $db->createQuestion($value,$idQuizz[0]['id']);
                    $idQuestion = $db->getLastId();

                    // Création reponse
                    $key = str_replace('question','reponse',$key);
                    $db->createReponse($reponsesUtilisateurs[$key], $idQuestion[0]['id']);
                }
                ?>
                <script>
                    alert("Crétion effectuée avec succès");
                    window.location.replace("../../index.php");
                </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("Aucune question/réponse n'a été insérées");
                        window.location.replace("../../creationQuizz.php");
                    </script>
                <?php
            }
        }
    }
        ?>
            <script>
                alert("Une erreur est survenue lors de la création du Quizz");
                window.location.replace("../../creationQuizz.php");
            </script>