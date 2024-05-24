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

        // Si toutes les données introduites sont correctes, il les renvoies en paramètres POST dans la page qui gère tout la suite de la connexion
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
            if(!nom.match(/^[a-zA-Z-]{3,50}$/)){
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
            if(!prenom.match(/^[a-zA-Z-]{3,35}$/)){
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

    /**
     * Traite les données du de modification d'utilisateur
     */
    $("#modificationSubmit").click(function(e) {
        // Désactiver comportement du bouton pour pas qu'il redirige

        e.preventDefault();
        var validationInput = 0;

        // Récupère le nom de famille introduit et vérifie s'il est correct
        var nom = $("#nomInput").val();
        if (nom == ""){
            $("#erreur_nom").html("Veuillez entrer un nom !");
        } else {
            if(!nom.match(/^[a-zA-Z-]{3,50}$/)){
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
            if(!prenom.match(/^[a-zA-Z-]{3,35}$/)){
                $("#erreur_prenom").html("Le prenom doit comporter au minimum 3 charactères et au maximum 35 (Lettres et \"-\" uniquement) !");
            }else{
                $("#erreur_prenom").html("");
                validationInput++;
            }
        }

        // Récupère le nom d'utilisateur
        var login = $("#loginInput").text();

        // Récupère le score de l'utilisateur introduit et vérifie s'il est correct
        var score = $("#scoreInput").val();
        if (score == "") {
            $("#erreur_score").html("Veuillez entrer un score !");
        } else {
            if(score.match(/^(0|[1-9][0-9]{0,9}|1[0-9]{0,9}|2[0-9]{0,8}|21[0-3][0-9]{0,7}|214[0-6][0-9]{0,6}|2147[0-3][0-9]{0,5}|21474[0-7][0-9]{0,4}|214748[0-2][0-9]{0,3}|2147483[0-5][0-9]{0,2}|21474836[0-3][0-9]{0,1}|214748364[0-7])$/) && score <= 2147483647 && score >= 0){
                $("#erreur_score").html("");
                validationInput++;
            }else{
                $("#erreur_score").html("Le score doit être un chiffre, supérieur à 0 et inférieur à 2'147'483'647!");
            }
        }

        // Récupère le score de l'utilisateur introduit et vérifie s'il est correct
        var droit = $("#droitInput").val();
        if (droit == "utilisateur" || droit == "admin") {
            $("#erreur_nomUtilisateur").html("");
            validationInput++;
        }else{
            $("#erreur_nomUtilisateur").html(droit);
        }


        // Si toutes les données introduites sont correctes, il les renvoies en paramètres POST dans la page qui gère tout la suite de l'inscription
         if (validationInput === 4) {
             $.ajax({
                 method: "POST", 
                 url: "src/php/modificationUtilisateur.php",
                 data: { username: login, nom: nom, prenom: prenom, score: score, droit: droit }
             })
             .done(function(response) {
                 $("#solde").html(response);
             });
         }
    });
});

function questionQuizz(id){
    if (confirm('Etes-vous sûr de vouloir supprimer ce quizz ?')) {
        //Si oui
        window.location.replace("src/php/suppressionQuizz.php?id="+id+"");
      }
}

function questionUtilisateur(login){
    if (confirm('Etes-vous sûr de vouloir supprimer cet utilisateur ('+login+') ?')) {
        //Si oui
        window.location.replace("src/php/suppressionUtilisateur.php?id="+login+"");
      }
}