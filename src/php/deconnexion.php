<?php

/* ETML
 * Auteur       > Alexandre Fernandes
 * Date         > 03.05.2024
 * Description  > Système qui permet de déconnecter l'utilisateur de son compte
 */

    // Détruit la sesion actuel de l'utilisateur et le redirige vers la page index
    session_start();
    session_destroy();
    header('Location: ../../index.php');
    exit;