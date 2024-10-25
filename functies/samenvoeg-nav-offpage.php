<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<header>
    <nav>
        <hr class="nav_line_top">
        <div class="page_logo">
            <a href="../index.php">
                <img class="oui_koffie" src="../Img/illustrations_blue green_coffee.png" alt="coffie logo">
            </a>
            <a href="../index.php">
                <img class="oui_logo" src="../Img/Logo-04.png" alt="oui_logo">
            </a>
        </div>
        <ul class="link">
            <li><a class="nav-link" href="../index.php">Home</a></li>
            <li><a class="nav-link" href="../index.php#aboutus" onclick="scrollToPage('aboutus')">About</a></li>
            <li><a class="nav-link" href="../index.php#menu" onclick="scrollToPage('menu')">Menu</a></li>
            <li><a class="nav-link" href="../index.php#review" onclick="scrollToPage('review')">Reviews</a></li>
            <li><a class="nav-link" href="../index.php#footer" onclick="scrollToPage('footer')">Contact</a></li>
        </ul>

        <?php if (!empty($_SESSION['username'] )): ?>
            
            <a href="../functies/logoutfunction.php" class="profile-logo"><img class="logout-logo" src="../Img/logout-logo.svg" alt="logout-logo" ></a>
            
        <?php else:?>
                <a href="loginPage.php" class="logout-logo-a"><img class="login-logo" src="../Img/login-logo.svg" alt="login-logo"></a>

        <?php endif;?>
        <hr class="nav_line_bottom">
    </nav>
</header>

<script>
    function scrollToPage(id) {
    const element = document.getElementById(id);
    element.scrollIntoView({ behavior: 'smooth' });
    }
</script>
