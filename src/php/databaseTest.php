<?php

/* ETML
 * Auteur       > Alexandre Fernandes
 * Date         > 22.05.2024
 * Description  > Test unitaires pour la fonction getRanking
 * Règles       > Il faut au préalable vider la table t_utilisateur, et rendre publique les fonctions querySimpleExecute et queryPrepareExecute du fichier database.php
 */


require 'Database.php';

class DatabaseTest {
    private $db;

    public function __construct() {
        $this->db = new Database();

        // Configuration initiale de la base de données pour les tests
        $this->setUpDatabase();
    }

    private function setUpDatabase() {

        // Création d'utilisateurs fictifs
        $this->db->queryPrepareExecute(
            'INSERT INTO t_utilisateurs (utiNomUtilisateur, utiMotDePasse, utiNom, utiPrenom, utiScore) VALUES
            (:username1, :password1, :nom1, :prenom1, :score1),
            (:username2, :password2, :nom2, :prenom2, :score2),
            (:username3, :password3, :nom3, :prenom3, :score3)',
            [
                ['paramName' => 'username1', 'paramValue' => 'user1', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'password1', 'paramValue' => 'password1', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'nom1', 'paramValue' => 'Nom1', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'prenom1', 'paramValue' => 'Prenom1', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'score1', 'paramValue' => 300, 'paramType' => PDO::PARAM_INT],

                ['paramName' => 'username2', 'paramValue' => 'user2', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'password2', 'paramValue' => 'password2', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'nom2', 'paramValue' => 'Nom2', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'prenom2', 'paramValue' => 'Prenom2', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'score2', 'paramValue' => 200, 'paramType' => PDO::PARAM_INT],

                ['paramName' => 'username3', 'paramValue' => 'user3', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'password3', 'paramValue' => 'password3', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'nom3', 'paramValue' => 'Nom3', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'prenom3', 'paramValue' => 'Prenom3', 'paramType' => PDO::PARAM_STR],
                ['paramName' => 'score3', 'paramValue' => 100, 'paramType' => PDO::PARAM_INT],
            ]
        );
    }

    // Test afin de vérifier si le classement est correct
    public function testGetRanking() {
        $ranking = $this->db->getRanking();

        $this->assertTrue(count($ranking) == 3, 'Le nombre de rangs doit être 3');
        $this->assertTrue($ranking[0]['utiNomUtilisateur'] == 'user1', 'Le premier utilisateur doit être user1');
        $this->assertTrue($ranking[0]['position'] == 1, 'Le rang du premier utilisateur doit être 1');
        $this->assertTrue($ranking[1]['utiNomUtilisateur'] == 'user2', 'Le deuxième utilisateur doit être user2');
        $this->assertTrue($ranking[1]['position'] == 2, 'Le rang du deuxième utilisateur doit être 2');
        $this->assertTrue($ranking[2]['utiNomUtilisateur'] == 'user3', 'Le troisième utilisateur doit être user3');
        $this->assertTrue($ranking[2]['position'] == 3, 'Le rang du troisième utilisateur doit être 3');

        echo "All tests passed.\n";
    }

    private function assertTrue($condition, $message = '') {
        if (!$condition) {
            echo "Test failed: " . $message . PHP_EOL;
        } else {
            echo "Test passed: " . $message . PHP_EOL;
        }
        echo "<br>";
    }
}

// Exécute les tests
$test = new DatabaseTest();
$test->testGetRanking();