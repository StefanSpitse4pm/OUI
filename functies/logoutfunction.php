<?php
    session_start();
    session_destroy(); // Destroy the session
    header("Location: ../content/loginPage.php"); // Redirect to login page after logging out
    exit();
?>