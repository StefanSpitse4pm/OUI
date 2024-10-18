<?php 
    if (empty($_SESSION['username'])) {
        header("Location: ../html/loginPage.php");
        exit();
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
                <li><a href="Frontpage.html">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="reviewPage.html">Reviews</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <?php if (!empty($_SESSION['username'] )): ?>
                <div class="logout_foto_container">
                    <a href="../functies/logoutfunction.php"><img class="logout-logo" src="../img/logout-logo.svg" alt="logout-logo"></a>
                </div>
            <?php else:?>
                <div class="Login_foto_container">
                    <a href="../html/loginPage.php"><img class="login-logo" src="../img/login-logo.svg" alt="login-logo"></a>
                </div>
            <?php endif;?>
            <hr class="nav_line_bottom">
        </nav>
    </header>
</body>
</html>