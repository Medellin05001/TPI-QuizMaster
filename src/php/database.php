<?php

/* ETML
 * Auteur       > Alexandre Fernandes
 * Date         > 03.05.2024
 * Description  > Liste des fonctions php utilisées pour les requêtes
 */


class Database {


    // Variable de classe
    private $connector;

    public function __construct(){

        // TODO: Se connecter via PDO et utilise la variable de classe $connector
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
        // TODO: permet de préparer, de binder et d’exécuter une requête (select avec where ou insert, update et delete)
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


    public function connect($NomUtilisateur){
        $query = ("SELECT * FROM t_utilisateurs WHERE utiNomUtilisateur = :NomUtilisateur");
        $binds = [['paramName' => 'NomUtilisateur', 'paramValue' => $NomUtilisateur, 'paramType' => PDO::PARAM_STR]];
        $statement = $this->queryPrepareExecute($query,$binds);
        return $this->formatData($statement);
    }

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
}