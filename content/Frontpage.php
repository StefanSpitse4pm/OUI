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
    <link rel="stylesheet" href="../css/frontpage.css" type="text/css">
    <title>Caffee OUI</title>
</head>
<body>
    <?php include 'functies/samenvoeg-nav.php'?> 

    <div class="homepage_box">
            <div class="homepage_content">
                <h2 class="home_titel">Café Oui: Waar Smaak en Sfeer Samenkomen</h2>
                <p class="home_text">Hoog in de bergen van Ethiopië, het thuisland van koffie, begint de reis van
                de bijzondere bonen die in uw kopje beëindigen. Ethiopië land, rijk aan traditie
                en cultuur, biedt een ideaal klimaat en vruchtbare grond, perfect voor de
                bouw van koffie. De lokale boeren plukken de koffiebonen met de hand, waarbij
                ze elke boon zorgvuldig selecteren. Deze ethische aanpak levert bonen op met
                unieke smaken van bloemig en fruitig tot vol en complex.

                De koffie uit Ethiopië is vaak gecertificeerd volgens Fair Trade principes, wat
                betekent dat de boeren een eerlijke prijs ontvangen voor hun harde werk.
                Hierdoor worden niet alleen hun levensomstandigheden verbeterd, maar
                wordt ook de gemeenschap als geheel gesteund. Na de oogst maken de bonen
                een lange reis naar koffieshops over de hele wereld, waar ze met zorg worden
                gebrand en geserveerd. Iedere slok brengt u terug naar het betoverende
                Ethiopië, de geboortegrond van koffie.
                </p>

                <div class="ondek_meer">
                    <a class="ondek_meer_text" href="ondek meer">ondek meer</a>
                </div>
            </div>
    </div>
    <?php include 'functies/samenvoeg-footer.php'?> 
</body>
</html>
