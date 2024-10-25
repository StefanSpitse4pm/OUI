<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require "content/users.php";
$gender = $users['moi']['gender'];
$_SESSION['gender'] = $gender;
?>

<?php if ($_SESSION['gender'] == 'man'): ?>
    <div class="genderdeal">
        <img src="Img/Logo-yellow.png" alt="logo" class="genderdeal-image">
        <span class="genderdeal-text">Cafe OUI heeft Men's Night op 30 November!</span>
        <img src="Img/Logo-yellow.png" alt="logo" class="genderdeal-image">
        <form method="post" style="display:inline;" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="submit" name="close_genderdeal" value="X" class="genderdeal-close">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['close_genderdeal'])) {
            echo '<style>.genderdeal { display: none; }</style>';
        }
        ?>
    </div>
<?php elseif ($_SESSION['gender'] == 'vrouw'): ?>
    <div class="genderdeal vrouw">
        <img src="Img/Logo-yellow.png" alt="logo" class="genderdeal-image">
        <span class="genderdeal-text">Cafe OUI heeft Women Night op 30 December!</span>
        <img src="Img/Logo-yellow.png" alt="logo" class="genderdeal-image">
        <form method="POST" style="display:inline;" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="submit" name="close_genderdeal" value="X" class="genderdeal-close">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['close_genderdeal'])) {
            $_SESSION['show_genderdeal'] = false;
            echo '<style>.genderdeal { display: none; }</style>';
        }
        ?>
    </div>
<?php endif; ?>
