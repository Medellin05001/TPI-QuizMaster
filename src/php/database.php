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
            $this->connector = new PDO('mysql:host=localhost;dbname=quizzmaster', "root", "root");
        }catch(PDOException $err){
            die("Erreur de connexion");
        }
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
     * Permet d'obtenir le classement des 7 meilleurs joueurs
     */
    public function getRanking(){
        $ranking = $this->querySimpleExecute("SELECT utiNom, utiPrenom, utiScore FROM `t_utilisateurs` ORDER BY utiScore DESC LIMIT 7");
        return $this->formatData($ranking);
    }

    
}