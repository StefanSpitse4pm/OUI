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
    <link rel="stylesheet" href="../css/reviewPage.css"  type="text/css">
</head>
<body>
    <?php include "Frontpage.php" ?>
    <?php include "Aboutus.html" ?>
    <?php include "laCarte.html" ?>
    <?php include "reviewPage.php" ?>
    <?php include "footer.html" ?>
</body>
</html>