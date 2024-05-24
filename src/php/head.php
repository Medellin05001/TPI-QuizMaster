<!-- 
    ETML 
    Auteur	  	> Alexandre Fernandes 
    Date	    > 23.05.2024
    Description > Liaison avec divers script, css qui permettent le bon fonctionnement de l'application
-->
<?php 
  //Insertion des cookies et démarrage d'un session php
  ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);
  ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
  session_start();
?>
<head>
    <meta charset="utf-8" /> 
    <link rel = "icon" href ="resources/images/favIcon.png" type = "image/x-icon">
    <!-- Connexion au CSS local-->
    <link rel="stylesheet" type="text/css" href="../../resources/css/general.css">
    <!-- Nécessaire pour le responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Flexbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css" integrity="sha512-whyb3qZrPEJNH+Z7P4YpD27cQ4C44kFZxqrmlNVxNB13HZlB0qJ0Xv1LKshWjGjZGtPAf+W/J+aEck5FmCf/kw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Icon bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
