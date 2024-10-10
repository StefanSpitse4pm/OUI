<?php 
    require '../functies/loginfunction.php';

    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password");
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
                <div class="loginform">
                    <form action="loginfunction.php" method="POST">
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