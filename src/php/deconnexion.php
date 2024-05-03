<?php
    // Start the session
    session_start();

    // Destroy the session data
    session_destroy();

    // Redirect to the 'index.php' page after destroying the session
    header('Location: ../../index.php');

    // Terminate script execution
    exit;