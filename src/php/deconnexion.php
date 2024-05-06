<?php
    // Détruit la sesion actuel de l'utilisateur et le redirige vers la page index
    session_start();
    session_destroy();
    header('Location: ../../index.php');
    exit;