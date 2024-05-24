<?php

/* ETML
 * Auteur       > Alexandre Fernandes
 * Date         > 03.05.2024
 * Description  > Liste des fonctions php utilisées pour les requêtes
 */


class Database {
    private $connector;

    /**
     * Constructeur de la classe DB, il sert à tenter une connexion à la base de données
     */
    public function __construct(){
        try{
            $this->connector = new PDO('mysql:host=localhost;dbname=db_quizzmaster', "root", "root");
        }catch(PDOException $err){
            die("Erreur de connexion");
        }
        $this->connector->query("SET NAMES UTF8");
    }

    private function querySimpleExecute($query){
        return $this->connector->query($query);
    }

    private function queryPrepareExecute($query, $binds){
        $req = $this->connector->prepare($query);
        for($i = 0;$i < count($binds); $i++)
        {
            $req->bindValue($binds[$i]['paramName'],$binds[$i]['paramValue'],$binds[$i]['paramType']);
        }
        $req->execute();
        return $req;
    }

    private function formatData($req){
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * Sélectionne l'utilisateur inséré en paramètre dans la base de donnée
     * param $nomUtilisateur => Le nom d'utilisateur de l'utilisateur
     * return les données de la base de données de l'utilisateur sélectionné
     */
    public function connect($nomUtilisateur){
        $query = ("SELECT * FROM t_utilisateurs WHERE utiNomUtilisateur = :nomUtilisateur");
        $binds = [['paramName' => 'nomUtilisateur', 'paramValue' => $nomUtilisateur, 'paramType' => PDO::PARAM_STR]];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

    public function getAllUser(){
        $users = $this->querySimpleExecute("SELECT * FROM t_utilisateurs");
        return $this->formatData($users);
    }

    /**
     * Créer l'utilisateur en fonction des données insérer
     * param $login => Le nom d'utilisateur
     * param $password => Le mot de passe de l'utilisateur
     * param $nom => Le nom d'utilisateur
     * param $prenom => Le prenom de l'utilisateur
     * return les données de la base de données de l'utilisateur sélectionné
     */
    public function addUser($login,$password,$nom,$prenom){
        $query = "INSERT INTO `t_utilisateurs` (`utiNomUtilisateur`, `utiMotDePasse`, `utiNom`, `utiPrenom`) VALUES (:login,:password,:nom,:prenom)";
        $binds = [
            ["paramName" => "login", "paramValue" => $login, "paramType" => PDO::PARAM_STR],
            ["paramName" => "password", "paramValue" => $password, "paramType" => PDO::PARAM_STR],
            ["paramName" => "nom", "paramValue" => $nom, "paramType" => PDO::PARAM_STR],
            ["paramName" => "prenom", "paramValue" => $prenom, "paramType" => PDO::PARAM_STR]
        ];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

    /**
     * Permet d'obtenir le classement des joueurs dans l'ordre
     */
    public function getRanking(){
        // Exécute la première requête pour initialiser la variable @rank
        $this->querySimpleExecute("SET @rank = 0");
        
        $ranking = $this->querySimpleExecute("
            SELECT utiNomUtilisateur, utiNom, utiPrenom, utiScore, @rank := @rank + 1 AS position
            FROM t_utilisateurs
            ORDER BY utiScore DESC"
        );
    
        return $this->formatData($ranking);
    }  

    /**
     * Permet d'obtenir les informations de bases de tout les quizz de la base de donnée
     */
    public function getAllQuizz(){
        $quizzs = $this->querySimpleExecute("SELECT * FROM t_quizz INNER JOIN t_utilisateurs ON t_quizz.fkUtilisateurs = t_utilisateurs.idUtilisateurs ORDER BY t_quizz.idQuizz DESC");
        return $this->formatData($quizzs);
    }

    /**
     * Permet d'obtenir toutes les informations d'un quizz en particulier
     * param $idquizz => id du quizz en question que l'on souhaite obtenir l'information
     */
    public function getQuizz($idQuizz){
        $query = ("SELECT t_questions.idQuestions, t_questions.queTexte, t_reponses.idReponses, t_reponses.repTexte, t_quizz.idQuizz, t_quizz.quiTitre, t_utilisateurs.idUtilisateurs, t_utilisateurs.utiNomUtilisateur, t_utilisateurs.utiNom, t_utilisateurs.utiPrenom, t_utilisateurs.utiDroits, t_utilisateurs.utiScore FROM t_questions JOIN t_reponses ON t_questions.idQuestions = t_reponses.fkQuestions JOIN t_quizz ON t_questions.fkQuizz = t_quizz.idQuizz JOIN t_utilisateurs ON t_quizz.fkUtilisateurs = t_utilisateurs.idUtilisateurs WHERE t_quizz.idQuizz = :idQuizz;");
        $binds = [
            ["paramName" => "idQuizz", "paramValue" => $idQuizz, "paramType" => PDO::PARAM_INT]
        ];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

    /**
     * Permet d'ajouter un score à un utilisateur
     * param $score => score à additioner à son score actuel
     * param $idUtilisateur => id de l'utilisateur qui reçoit un nouveau score
     */
    public function addScore($score, $idUtilisateur){
        $query = ("UPDATE `t_utilisateurs` SET `utiScore` = `utiScore` + :score WHERE idUtilisateurs = :idUtilisateur");
        $binds = [
            ["paramName" => "score", "paramValue" => $score, "paramType" => PDO::PARAM_INT],
            ["paramName" => "idUtilisateur", "paramValue" => $idUtilisateur, "paramType" => PDO::PARAM_INT]
        ];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

    /**
     * Permet de supprimer un quizz
     * La fonction beginTransaction permet d'annuler toutes les opérations grâce à rollBack si un soucis est présent
     * param $idQuizz => id du quizz que l'on veut supprimer
     */
    public function deleteQuizz($quizzId){
        try {
            $this->connector->beginTransaction();

            // Suppression reponses
            $query = "DELETE t_reponses FROM t_reponses 
                      JOIN t_questions ON t_reponses.fkQuestions = t_questions.idQuestions 
                      WHERE t_questions.fkQuizz = :quizzId";
            $binds = [["paramName" => "quizzId", "paramValue" => $quizzId, "paramType" => PDO::PARAM_INT]];
            $this->queryPrepareExecute($query, $binds);

            // Suppression questions
            $query = "DELETE FROM t_questions WHERE fkQuizz = :quizzId";
            $this->queryPrepareExecute($query, $binds);

            // Suppression Quizz
            $query = "DELETE FROM t_quizz WHERE idQuizz = :quizzId";
            $this->queryPrepareExecute($query, $binds);

            $this->connector->commit();
        } catch (Exception $e) {
            $this->connector->rollBack();
            throw $e;
        }
    }

    /**
     * Permet de supprimer un utilisateur
     * La fonction beginTransaction permet d'annuler toutes les opérations grâce à rollBack si un soucis est présent
     * param $utilisateurId => id de l'utilisateur que l'on veut supprimer
     */
    public function deleteUser($utilisateurId){
        try {
            // Démarrer la transaction
            $this->connector->beginTransaction();

            // Supprimer les réponses associées aux questions de l'utilisateur
            $query = "DELETE t_reponses FROM t_reponses 
                      JOIN t_questions ON t_reponses.fkQuestions = t_questions.idQuestions 
                      JOIN t_quizz ON t_questions.fkQuizz = t_quizz.idQuizz 
                      WHERE t_quizz.fkUtilisateurs = :utilisateurId";
            $binds = [['paramName' => 'utilisateurId', 'paramValue' => $utilisateurId, 'paramType' => PDO::PARAM_INT]];
            $this->queryPrepareExecute($query, $binds);

            // Supprimer les questions associées aux quiz de l'utilisateur
            $query = "DELETE t_questions FROM t_questions 
                      JOIN t_quizz ON t_questions.fkQuizz = t_quizz.idQuizz 
                      WHERE t_quizz.fkUtilisateurs = :utilisateurId";
            $this->queryPrepareExecute($query, $binds);

            // Supprimer les quiz de l'utilisateur
            $query = "DELETE FROM t_quizz WHERE fkUtilisateurs = :utilisateurId";
            $this->queryPrepareExecute($query, $binds);

            // Supprimer l'utilisateur
            $query = "DELETE FROM t_utilisateurs WHERE idUtilisateurs = :utilisateurId";
            $this->queryPrepareExecute($query, $binds);

            // Valider la transaction
            $this->connector->commit();
        } catch (Exception $e) {
            // Annuler la transaction en cas d'erreur
            $this->connector->rollBack();
            throw $e;
        }
    }

    /**
     * Permet de modifier un utilisateur
     * param $username => Login de l'utilisateur qui va subir la modification
     * param $nom => Nouveau nom de famille
     * param $prenom => Nouveau prenom
     * param $score => Nouveau score
     * param $droit => Nouveau droits sur l'appli web (admin, utilisateur)
     */
    public function updateUser($username, $nom, $prenom, $score, $droit){
        $query = ("UPDATE `t_utilisateurs` SET `utiNom`=:nom, `utiPrenom`=:prenom, `utiDroits`=:droit, `utiScore`=:score WHERE `utiNomUtilisateur` = :username");
        $binds = [
            ["paramName" => "score", "paramValue" => $score, "paramType" => PDO::PARAM_INT],
            ["paramName" => "username", "paramValue" => $username, "paramType" => PDO::PARAM_STR],
            ["paramName" => "nom", "paramValue" => $nom, "paramType" => PDO::PARAM_STR],
            ["paramName" => "prenom", "paramValue" => $prenom, "paramType" => PDO::PARAM_STR],
            ["paramName" => "droit", "paramValue" => $droit, "paramType" => PDO::PARAM_STR]
        ];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

    /**
     * Permet de créer un quizz (uniquement pour la table t_quizz)
     * param $titre => Titre du quizz
     * param $idUtilisateur => id de l'utilisateur qui créer le quizz (clé étrangère)
     */
    public function createQuizz($titre, $idUtilisateur){
        $query = ("INSERT INTO t_quizz (quiTitre, fkUtilisateurs) VALUES (:titre, :idUtilisateur)");
        $binds = [
            ["paramName" => "idUtilisateur", "paramValue" => $idUtilisateur, "paramType" => PDO::PARAM_INT],
            ["paramName" => "titre", "paramValue" => $titre, "paramType" => PDO::PARAM_STR]
        ];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

    /**
     * Permet de créer un quizz (uniquement pour la table t_question)
     * param $texte => texte qui sera la question
     * param $idQuizz => id du quizz relier à cette question (clé étrangère)
     */
    public function createQuestion($texte, $idQuizz){
        $query = ("INSERT INTO t_questions (queTexte, fkQuizz) VALUES (:texte, :idQuizz)");
        $binds = [
            ["paramName" => "idQuizz", "paramValue" => $idQuizz, "paramType" => PDO::PARAM_INT],
            ["paramName" => "texte", "paramValue" => $texte, "paramType" => PDO::PARAM_STR]
        ];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

    /**
     * Permet de créer un quizz (uniquement pour la table t_reponse)
     * param $texte => texte de la réponse
     * param $idQuestion => id de la question relier à cette réponse (clé étrangère)
     */
    public function createReponse($texte, $idQuestion){
        $query = ("INSERT INTO t_reponses (repTexte, fkQuestions) VALUES (:texte, :idQuestion)");
        $binds = [
            ["paramName" => "idQuestion", "paramValue" => $idQuestion, "paramType" => PDO::PARAM_INT],
            ["paramName" => "texte", "paramValue" => $texte, "paramType" => PDO::PARAM_STR]
        ];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

    /**
     * Permet d'obtenir l'id du dernier élément créer dans la base de donnée
     */
    public function getLastId(){
        $lastId = $this->querySimpleExecute("SELECT LAST_INSERT_ID() AS id;");
        return $this->formatData($lastId);
    }
}