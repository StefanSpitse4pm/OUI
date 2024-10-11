<?php 
    require '../functies/validation.php';

    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username");
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, "password");
        $passwordRepeat = filter_input(INPUT_POST, "passwordRepeat");
        $error = passwordValidation($password, $passwordRepeat);
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
                <h1>Inloggen</h1>
                <hr>
                <div class="loginform">
                    <form action="registerPage.php" method="POST">
                        <label for="username">Gebruikersnaam</label>
                        <input type="text" name="username" id="username">
                        <label for="email">Emailadres</label>
                        <input type="email" name="email" id="email">
                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" id="password">
                        <label for="passwordRepeat">Herhaal Wachtwoord</label>
                        <input type="passwordRepeat" name="passwordRepeat" id="passwordRepeat">
                        <div class="checkboxbox">
                            <input type="checkbox" name="TOS" id="TOS">
                            <label for="TOS">Ik ga akkoord met de <a href="">algemene voorwaarden</a></label>
                        </div>
                        <div class="checkboxbox">
                            <input type="checkbox" name="nieuwsbrief" id="nieuwsbrief">
                            <label for="nieuwsbrief">Ja, ik wil me inschrijven voor updates en het laatste nieuws van Café OUI!</label>
                            <input type="submit" value="Submit">
                        </div>  
                    </form>
                    <div class='error'>
                        <?php if ($_SERVER['REQUEST_METHOD'] === "POST" && !empty($error)) {
                            echo $error;
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>