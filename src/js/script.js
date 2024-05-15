/**
 * ETML
 * Auteur : Alexandre Fernandes
 * Date : 06.05.2024
 * Description : Traite les données php afin de renvoyer des erreures si nécessaire
 */

// Permet de charger le javascript uniquement quand c'est demander
$(document).ready(function() {
    /**
     * Traitement des données de connexion
     */
    $("#connectSubmit").click(function() {
        var validationInput = 0;

        // Récupère le nom d'utilisateur introduit et vérifie s'il est vide
        var login = $("#nomUtilisateurInput").val();
        if (login === "") {
            $("#erreur_nomUtilisateur").html("Veuillez entrer un nom d'utilisateur !");
        } else {
            $("#erreur_nomUtilisateur").html("");
            validationInput++;
        }

        // Récupère le mot de passe introduit et vérifie s'il est vide
        var password = $("#motDePasseInput").val();
        if (password === "") {
            $("#erreur_motDePasse").html("Veuillez entrer un mot de passe !");
        } else {
            $("#erreur_motDePasse").html("");
            validationInput++;
        }

        // i toutes les données introduites sont correctes, il les renvoies en paramètres POST dans la page qui gère tout la suite de la connexion
        if (validationInput === 2) {
            $.ajax({
                method: "POST", 
                url: "src/php/connexionSystem.php",
                data: { username: login, password: password }
            })
            .done(function(response) {
                $("#solde").html(response);
            });
        }
    });

    /**
     * Traite les données du d'inscription
     */
    $("#registerSubmit").click(function() {
        var validationInput = 0;

        // Récupère le nom de famille introduit et vérifie s'il est correct
        var nom = $("#nomInput").val();
        if (nom == ""){
            $("#erreur_nom").html("Veuillez entrer un nom !");
        } else {
            if(!nom.match(/^[a-zA-Z0-9-]{3,50}$/)){
                $("#erreur_nom").html("Le nom doit comporter au minimum 3 charactères et au maximum 50 (Lettres et \"-\" uniquement)!");
            }else{
                $("#erreur_nom").html("");
                validationInput++;
            }
        }
        
        // Récupère le prenom introduit et vérifie s'il est correct
        var prenom = $("#prenomInput").val();
        if (prenom == "") {
            $("#erreur_prenom").html("Veuillez entrer un prenom !");
        } else {
            if(!prenom.match(/^[a-zA-Z0-9-]{3,35}$/)){
                $("#erreur_prenom").html("Le prenom doit comporter au minimum 3 charactères et au maximum 35 (Lettres et \"-\" uniquement) !");
            }else{
                $("#erreur_prenom").html("");
                validationInput++;
            }
        }

        // Récupère le nom d'utilisateur introduit et vérifie s'il est correct
        var login = $("#loginInput").val();
        if (login == "") {
            $("#erreur_nomUtilisateur").html("Veuillez entrer un login !");
        } else {
            if(!login.match(/^[a-zA-Z0-9-]{3,20}$/)){
                $("#erreur_nomUtilisateur").html("Le nom d'utilisateur doit comporter au minimum 3 charactères et au maximum 20 (Lettres et chiffres uniquement) !");
            }else{
                $("#erreur_nomUtilisateur").html("");
                validationInput++;
            }
        }

        // Récupère les deux mots de passes introduits et vérifie s'ils sont corrects
        var password = $("#motDePasseInput").val();
        if (password == ""){
            $("#erreur_motDePasse").html("Veuillez entrer un mot de passe !");
        } else {
            if(!password.match(/^[a-zA-Z0-9]{8,64}$/)){
                $("#erreur_motDePasse").html("Le nom doit comporter au minimum 8 caractères, et au maximum 64, (Lettres et chiffre uniquement) !");
            }else{
                if ($("#motDePasseConfirmInput").val() != password) {
                    $("#erreur_motDePasseConfirm").html("Les mot de passe ne correspondent pas !");
                } else {
                    $("#erreur_motDePasseConfirm").html("");
                    validationInput++;
                }
                $("#erreur_motDePasse").html("");
            }
        }

        // Si toutes les données introduites sont correctes, il les renvoies en paramètres POST dans la page qui gère tout la suite de l'inscription
        if (validationInput === 4) {
            $.ajax({
                method: "POST", 
                url: "src/php/inscriptionSystem.php",
                data: { username: login, password: password, nom: nom, prenom: prenom }
            })
            .done(function(response) {
                $("#solde").html(response);
            });
        }
    });

    var counter = 1;

    $("#addInput").click(function() {
        // Défini où ajouter les éléments suivants
        var container = $("#inputs_container");

        // Div row
        var rowDiv = $("<div>").addClass("row");

        // Div col pour question
        var colDivQuestion = $("<div>").addClass("col");

        // Div col pour réponse
        var colDivReponse = $("<div>").addClass("col");

        // Input question
        var question = $("<input>").addClass("form-control").attr({
            type: "text",
            name: "question" + counter,
            placeholder: "Question"
        });

        // Input réponse
        var reponse = $("<input>").addClass("form-control").attr({
            type: "text",
            name: "reponse" + counter,
            placeholder: "Réponse"
        });

        // Défini les parents de chaque éléments
        container.append("<br>").append(rowDiv);
        rowDiv.append(colDivQuestion).append(colDivReponse);
        colDivQuestion.append(question);
        colDivReponse.append(reponse);

        // Finalisations
        counter++;
    });
});