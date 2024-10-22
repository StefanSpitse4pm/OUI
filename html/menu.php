<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menukaart</title>
    <link rel="stylesheet" href="../css/menu.css" type="text/css">
</head>
<body class="menuBody">
    <main class="manuMain">
    
        <div class="backgroundMenu">

            <div class="koffieDrankenUp">
                <div class="koffieContentUp"> <p>Koffie & Dranken</p> </div>
            </div>
                <div class="koffieDrankenDown"> 
                    <div class="koffieContentDown"> 

                        <p class="bigger"> Espresso </p>

                        <p class="regular">Rijk en gedurfd, een klassiek shot espresso.</p>
                       
                    
                        <p class="bigger"> Café au Lait </p>

                        <p class="regular">Smeuïge koffie met gestoomde melk.</p>
                       
                    
                        <p class="bigger"> Cappuccino </p>

                        <p class="regular"> Espresso met gestoomde melk en een dikke laag schuim.</p>
                    
                    
                        <p class="bigger"> Latte </p>

                        <p class="regular">Romige espresso met gestoomde melk en een licht schuim.</p>
                      
                    
                        <p class="bigger"> Mokka </p>

                        <p class="regular">Espresso met chocolade, gestoomde melk en slagroom.</p>
                    
                    
                        <p class="bigger"> Macchiato </p>

                        <p class="regular">Espresso met een klodder opgeschuimde melk.</p>

                     
                        <p class="bigger"> Warme chocolademelk </p>

                        <p class="regular">Fluweelzacht, gemaakt met echte chocolade.</p>

                      
                        <p class="bigger"> Theeselectie </p>

                        <p class="regular">Een verscheidenheid aan fijne theesoorten, waaronder Earl Grey, Kamille en Groene thee.</p>
                     

                        <div class="extrasContent"> 
                        <p class="bigger"> Voeg iets extra's toe </p>
               
                        <p class="extraRegular"> Gearomatiseerde siropen - Vanille, karamel, hazelnoot.</p>
          
                        <p class="extraRegular"> Melkopties - Vol, magere, amandel, soja, haver.</p> </div>
                </div>
            </div>

            <div class="gebakSnoepUp">
                <div class="gebakContentUp"> <p> Gebak & Snoep</p> </div>
            </div>
                <div class="gebakSnoepDown">
                    <div class="gebakContentDown">

                        <p class="bigger">Croissant</p>
    
                        <p class="regular">Schilferig, boterachtig en vers gebakken.</p>
                     
                    
                        <p class="bigger">Pain au Chocolat</p>
                    
                        <p class="regular">Croissantdeeg gevuld met rijke chocolade.</p>
                      
                    
                        <p class="bigger">Macarons</p>
                    
                        <p class="regular">Delicate amandel meringue koekjes in diverse smaken.</p>
                        
                    
                        <p class="bigger">Éclair</p>
                    
                        <p class="regular">Soezendeeg gevuld met room en gegarneerd met chocolade.</p>
                        
                    
                        <p class="bigger">Tarte Tatin</p> 
                    
                        <p class="regular">Gekarameliseerde appeltaart.</p>
                     
                    
                        <p class="bigger">Madeleines</p>
                    
                        <p class="regular">Lichte en luchtige biscuitgebak in de vorm van een schelp.</p>
                    
                    
                        <p class="bigger">Crème Brûlée</p>
                    
                        <p class="regular">Romige vla met een gekarameliseerde suikerkorst.</p>
                     
                    
                        <p class="bigger">Financiers</p>
                    
                        <p class="regular">Kleine amandelkoekjes, perfect bij de koffie.</p>
                    </div>
                </div> 

                <div class="menuOfDay">
                    <div class="whiteRowUp"></div> 
                    <p class="menuOfDayContentUp">Gerecht van de dag:</p>

                    <p class = "menuOfDayContentDown">
                        
                    <?php
                    $today = date('l');

                    $foodDrinks [0] = "Croissant";
                    $foodDrinks [1] = "Thee naar keuze";
                    $foodDrinks [2] = "Cappuccino";
                    $foodDrinks [3] = "Macarons";
                    $foodDrinks [4] = "Mokka";
                    $foodDrinks [5] = "Warme chocolademelk";
                    $foodDrinks [6] = "Crème Brûlée";


                    if ($today == "Monday")
                    {
                        echo $foodDrinks[0]; 
                    }

                    elseif ($today == "Tuesday")
                    {
                        echo $foodDrinks[1];
                    }

                    elseif ($today == "Wednesday")
                    {
                        echo $foodDrinks[2];
                    }

                    elseif ($today == "Thursday")
                    {
                        echo $foodDrinks[3];
                    }

                    elseif ($today == "Friday")
                    {
                        echo $foodDrinks[4];
                    }

                    elseif ($today == "Saturday")
                    {
                        echo $foodDrinks [5];
                    }

                    elseif ($today == "Sunday")
                    {
                        echo $foodDrinks [6];
                    }

                    ?>
                    </p>
                    <div class="whiteRowDown"></div>

                </div>
        </div>
    </main>
    
</body>
</html>