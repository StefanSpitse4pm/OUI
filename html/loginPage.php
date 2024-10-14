<?php 

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();

}

if (!empty($_SESSION['user'])) {
    header("Location: ../html/laCarte.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();

    if (!empty($_POST['logout'])) {
        session_destroy(); // Vernietig de sessie
        header("Location: ../html/loginPage.php"); // Verwijs terug naar loginpagina na uitloggen
        exit();
    }

    

    $users = [
        "user" => [ "email" => "user@user.com", "password" => "user"]
    ];

    

    $failed = '';

    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = filter_input(INPUT_POST, "username");
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "password");
        }
        if ($email === false) {
            $failed = "<div class='error'><h2>Ongeldig e-mailadres.</h2></div>";
        } else {
            if (!empty($users[$username]) && $users[$username]['password'] === $password) {
                if ($users[$username]['email'] === $email) {
                    $_SESSION['user'] = $email;
                    header("Location: ../html/laCarte.html");
                    exit();
                } else {
                    $failed = "<div class='error'><h2>Ongeldige email of wachtwoord.</h2></div>";
                }
            } else {
                $failed = "<div class='error'><h2>Ongeldige gebruikersnaam of wachtwoord.</h2></div>";
            }
        }
    } else {
        $failed = "<div class='error'><h2>Vul alle velden in.</h2></div>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Oui - Login</title>
    <link rel="stylesheet" href="../css/loginPage.css" type="text/css">
</head>
<body>
    <main>
        <div class="loginContent">
            <div class="loginfoto">
                <img src="../Img/loginPage-foto.png" alt="coffee-drinking-image">
            </div>
            <div class="login">
                <img src="../Img/Logo-04.png" alt="">
                <hr> 
                <?php
                    if (!empty($failed)) {
                        echo $failed;
                    }
                ?>
                <div class="loginform">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <label for="username">Gebruikersnaam</label>
                        <input type="text" name="username" id="username">
                        <label for="email">Emailadres</label>
                        <input type="email" name="email" id="email">
                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" id="password">
                        <div class="checkboxbox">
                            <input type="checkbox" name="TOS" id="TOS">
                            <label for="TOS">Ik ga akkoord met de <a href="">algemene voorwaarden</a></label>
                        </div>
                        <div class="checkboxbox">
                            <input type="checkbox" name="nieuwsbrief" id="nieuwsbrief">
                            <label for="nieuwsbrief">Ja, ik wil me inschrijven voor updates en het laatste nieuws van Café OUI!</label>
                        </div>
                        <input type="submit" value="Inloggen">
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>