<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$users = [
    "user" => [ "email" => "user@user.com", "password" => "user"]
];

$failed = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $username = filter_input(INPUT_POST, "username");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password");

        if (!empty($users[$username]) && $users[$username]['password'] === $password) {
            if ($users[$username]['email'] === $email) {
                $_SESSION['username'] = $username;
                if (!empty($_SESSION)) {
                    header("Location: ../html/Frontpage.php");
                    exit();
                }
            } else {
                $failed = "<div class='error'><h2>Ongeldige email of wachtwoord.</h2></div>";
            }
        } else {
            $failed = "<div class='error'><h2>Ongeldige gebruikersnaam of wachtwoord.</h2></div>";
        }
    } else {
        $failed = "<div class='error'><h2>Vul alle velden in.</h2></div>";
    }
}
?>