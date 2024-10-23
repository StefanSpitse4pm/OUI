<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();


    $users = [
    "user" => [ "email" => "user@user.com", "password" => "user", "gender" => "man"]
];
    $gender = $users["user"]["gender"];
    $_SESSION['gender'] = $gender;
}

require '../ProjectOuiGithub/functies/loginfunction.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($_SESSION['gender'] == 'man'):?>
        <div class="genderdeal">

        </div>
    <?php elseif ($_SESSION['gender'] == 'vrouw'):?>
        <div class="genderdeal">

        </div>
    <?php endif;?>
</body>
</html>