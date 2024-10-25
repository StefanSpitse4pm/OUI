<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}   

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe OUI</title>
    <link rel="stylesheet" href="css/Frontpage.css"  type="text/css">
    <link rel="stylesheet" href="css/Aboutus.css"  type="text/css">
    <link rel="stylesheet" href="css/laCarte.css"  type="text/css">
    <link rel="stylesheet" href="css/reviewPage.css"  type="text/css">
    <link rel="stylesheet" href="css/footer.css"  type="text/css">
    <link rel="stylesheet" href="css/genderdeal.css"  type="text/css">
    
</head>
    
<body>
    <?php include 'functies/genderdeal.php'?>   
    <?php include "content/Frontpage.php" ?>
    <?php include "content/Aboutus.html" ?>
    <?php include "content/laCarte.html" ?>
    <?php include "content/reviewPage.php" ?>
    <?php include "content/footer.html" ?>
</body>
</html>