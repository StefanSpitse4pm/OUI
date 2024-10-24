<?php 

    require '../functies/validation.php';
    require '../functies/loginfunction.php';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        
        $username = filter_input(INPUT_POST, "username");
        if ($username == False) {
            $username = "error";
        }
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if ($email == False) {
            $email = "error";
        }
        $password = filter_input(INPUT_POST, "password");
        $passwordRepeat = filter_input(INPUT_POST, "passwordRepeat");
        $tos = filter_input(INPUT_POST, "TOS", FILTER_VALIDATE_BOOL);
        $gender = filter_input(INPUT_POST, "gender");
        $usernameError = generalFieldValidation($username, "username", 4);
        $emailError = generalFieldValidation($email, "email", 6);
        $passwordError = passwordValidation($password, $passwordRepeat);  
        if (empty($usernameError)) {
            if (empty($emailError)) {
                if (empty($passwordError)) {
                    if (!empty($tos)) {
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $email = $_POST['email'];
                            $gender = $_POST['gender'];
                        
                            // Add the new user to the $users array
                            $users[$username] = [
                                "email" => $email,
                                "password" => $password,
                                "gender" => $gender
                            ];
                        
                            // Save the updated $users array back to the PHP file
                            file_put_contents('users.php', '<?php $users = ' . var_export($users, true) . ';');
                            header("Location: loginPage.php");
                    } else {
                        $error = "<h2>The terms of service is required</h2>";
                        // tos empty
                    }
                } else {
                    $error = $passwordError;
                        // password error
                    }
                } else {
                    $error = $emailError;
                    // email error
    
                }
            }   else {
                $error = $usernameError; 
                // username error
            }
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
    <link rel="stylesheet" href="../css/registerPage.css" type="text/css"> 
    <link rel="stylesheet" href="../css/frontpage.css" type="text/css">
</head>
<body>
    <main>
        <?php include '../functies/samenvoeg-nav-offpage.php'?>    
        <div class="loginContent">
            <div class="loginfoto">
                <img src="../Img/loginPage-foto.png" alt="coffee-drinking-image">
            </div>
            <div class="login">
                <h1>Registratie</h1>
                <hr>
                <div class="loginform">
                    <form action="registerPage.php" method="POST">
                        <label for="username">Gebruikersnaam</label>
                        <input type="text" name="username" id="username" required>
                        <label for="email">Emailadres</label>
                        <input type="text   " name="email" id="email" required>
                        <label for="password">Wachtwoord</label>
                        <input type="password" name="password" id="password" required>
                        <label for="passwordRepeat">Herhaal Wachtwoord</label>
                        <input type="password" name="passwordRepeat" id="passwordRepeat" required>
                        <label for="gender">Gender: </label>
                        <select name="gender" id="gender" required>
                            <option value="man">Man</option>
                            <option value="vrouw">Vrouw</option>
                            <option value="anders">Andere</option>
                            <option value="None">zeg ik liever niet</option>    
                        </select>
                        <div class="checkboxbox">
                            <input type="checkbox" value='true' name="TOS" id="TOS" required>
                            <label for="TOS">Ik ga akkoord met de <a href="">algemene voorwaarden</a></label>
                        </div>
                        <div class="checkboxbox">
                            <input type="checkbox" name="nieuwsbrief" id="nieuwsbrief">
                            <label for="nieuwsbrief">Ja, ik wil me inschrijven voor updates en het laatste nieuws van Café OUI!</label>
                        </div>
                        <input type="submit" value="Submit">
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
    <?php include '../functies/samenvoeg-footer-offpage.php'?> 
</body>
</html>