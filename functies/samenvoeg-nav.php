<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<header>
        <nav>
            <hr class="nav_line_top">
            <div class="page_logo">
                <a href="Frontpage.html">
                    <img class="oui_koffie" src="../Img/illustrations_blue green_coffee.png" alt="coffie logo">
                </a>
                <a href="Frontpage.html">
                    <img class="oui_logo" src="../Img/Logo-04.png" alt="oui_logo">
                </a>
            </div>
            <ul class="link">
                <li><a class="nav-link" href="Frontpage.html">Home</a></li>
                <li><a class="nav-link" href="aboutus.html">About</a></li>
                <li><a class="nav-link" href="menu.html">Menu</a></li>
                <li><a class="nav-link" href="reviewPage.html">Reviews</a></li>
                <li><a class="nav-link" href="contact">Contact</a></li>
            </ul>

            <?php if (!empty($_SESSION['username'] )): ?>
                
                <a href="../functies/logoutfunction.php" class="profile-logo"><img class="logout-logo" src="../img/logout-logo.svg" alt="logout-logo" ></a>
                
            <?php else:?>
                    <a href="../html/loginPage.php" class="logout-logo-a"><img class="login-logo" src="../img/login-logo.svg" alt="login-logo"></a>

            <?php endif;?>
            <hr class="nav_line_bottom">
        </nav>
    </header>
</body>
</html>