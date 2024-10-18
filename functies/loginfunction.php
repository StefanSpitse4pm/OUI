<?php

    session_start();

    if (isset($_SESSION['user'])) {
        header("Location: ../html/menu.html");
        exit();
    }

    $users = [
        "user" => [ "email" => "user@user.com", "password" => "user"]
    ];

    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    
    }

    $failed = '';

    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = filter_input(INPUT_POST, "username");
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password");
        }

        if (!empty($users[$username]) && $users[$username]['password'] === $password) {
            if ($users[$username]['email'] === $email) {
                $_SESSION['user'] = $email;
                header("Location: ../html/Frontpage.php");
                exit();
            } else {
                $failed = "<div class='error'><h2>Ongeldige email of wachtwoord.</h2></div>";
            }
        } else {
            $failed = "<div class='error'><h2>Ongeldige gebruikersnaam of wachtwoord.</h2></div>";
        }
    } else {
        $failed = "<div class='error'><h2>Vul alle velden in.</h2></div>";
    }
?>