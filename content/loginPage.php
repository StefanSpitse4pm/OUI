<?php 
    include '../functies/loginfunction.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Oui - Login</title>
    <link rel="stylesheet" href="../css/loginPage.css" type="text/css">
    <link rel="stylesheet" href="../css/frontpage.css" type="text/css">
</head>
<body>
    <main>
        <?php include '../functies/samenvoeg-nav.php'?>    
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
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <label for="username">Gebruikersnaam</label>
                        <input type="text" name="username" id="username">
                        <label for="email">Emailadres</label>
                        <input type="email" name="email" id="email">
                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" id="password">
                        <div class="checkboxbox">
                            <input type="checkbox" name="TOS" id="TOS" required>
                            <label for="TOS">Ik ga akkoord met de <a href="#">algemene voorwaarden</a></label>
                        </div>
                        <div class="checkboxbox">
                            <input type="checkbox" name="nieuwsbrief" id="nieuwsbrief">
                            <label for="nieuwsbrief">Ja, ik wil me inschrijven voor updates en het laatste nieuws van Café OUI!</label>
                        </div>
                        <input type="submit" value="Inloggen">
                    </form>
                    <a href="registerPage.php" class="registerlink">Nog geen account?</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>