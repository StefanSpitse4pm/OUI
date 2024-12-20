<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require "../content/users-offpage.php";
function login($username, $email, $password, $users) {
    if (!empty($username) && !empty($email) && !empty($password)) {
        
        $username = filter_input(INPUT_POST, "username");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password");
        $gender = $users[$username]["gender"];
        

        if (!empty($users[$username]) && $users[$username]['password'] === $password) {
            if ($users[$username]['email'] === $email) {
                $_SESSION['username'] = $username;
                $_SESSION['gender'] = $gender;
                header("Location: ../index.php");
                exit();
            } else {
                return "<div class='error'><h2>Ongeldige email of wachtwoord.</h2></div>";
            }
        } else {
            return "<div class='error'><h2>Ongeldige gebruikersnaam of wachtwoord.</h2></div>";
        }
    } else {
        return "<div class='error'><h2>Vul alle velden in.</h2></div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && basename($_SERVER['PHP_SELF']) == 'loginPage.php')  {
    $failed = login($_POST['username'], $_POST['email'], $_POST['password'], $users);
}
?>