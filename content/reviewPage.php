<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $name = filter_input(INPUT_POST, "name");
    $lastName = filter_input(INPUT_POST, "lastName");
    $review = filter_input(INPUT_POST, "review");
    $rating = filter_input(INPUT_POST, "rating");

    // Foutmelding array
    if (!empty($email)) 
    {

    }
    else 
    {
        "Fout: U moet een geldig e-mailadres invullen.";
    }
}
?>

<div class="reviewPage">
    <img src="img/frenchflag.png" alt="frankrijkVlag" class="frankrijkVlag" id="review">
    <main>
        <section class="reviewsSection">
            <div class="reviewCard">
                <div class="reviewHeader">
                    <h3>Klanten review</h3>
                    <div class="rating">★★★★★</div>
                </div>
                <hr>
                <div class="reviewText">
                    <p>Gezellige sfeer met een modern tintje, heerlijke cappuccino en vriendelijk personeel. Een verborgen parel voor koffieliefhebbers!</p>
                    <div class="reviewUser">
                        <p><em>— Robbin Schipper</em></p>
                    </div>
                </div>
            </div>

            <div class="reviewCard" >
                <div class="reviewHeader">
                    <h3>Klanten review</h3>
                    <div class="rating">★★★★★</div>
                </div>
                <hr>
                <div class="reviewText">
                    <p>Heerlijke koffie, knusse Parijse sfeer en supervriendelijke service. Een stukje Frankrijk in elke slok!</p>
                    <div class="reviewUser">
                        <p><em>— Henk Warrek</em></p>
                    </div>
                </div>
            </div>

            <div class="reviewCard">
                <div class="reviewHeader">
                    <h3>Klanten review</h3>
                    <div class="rating">★★★★★</div>
                </div>
                <hr>
                <div class="reviewText">
                    <p>De sfeer is echt geweldig; het voelt alsof ik in een gezellig Frans cafe sta. Het roept helemaal die 
                        typische Franse sfeer op en brengt me echt in gedachten terug naar Frankrijk.</p>
                    <div class="reviewUser">
                        <p><em>— Bo Ter Ham</em></p>
                    </div>
                </div>
            </div>

            <div class="reviewCard">
                <div class="reviewHeader">
                    <h3>Klanten review</h3>
                    <div class="rating">★★★★★</div>
                </div>
                <hr>
                <div class="reviewText">
                    <p>Authentieke Franse ambiance, verrukkelijke espresso en charmante bediening. Een must-visit voor koffieliefhebbers!</p>
                    <div class="reviewUser">
                        <p><em>— Hans Frans</em></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="reviewButton">
            <a href="https://nl.trustpilot.com/">Lees hier al onze reviews</a>
        </div>
        <img src="img/frenchflag.png" alt="frankrijkVlag" class="frankrijkVlagMiddle">
        <div class="reviewFormulier">
            <div class="formulierTitle">
                <h2>Plaats uw eigen review!</h2>
            </div>
            <hr>
            <div class="userReviewSection">
            <form action="" method="POST" class="">
                <label for="name">Voornaam:</label>
                <input type="text" id="name" name="name">

                <label for="lastName">Achternaam:</label>
                <input type="text" id="lastName" name="lastName">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email">  

                <label for="review">Uw review:</label>
                <textarea id="review" name="review" rows="20"></textarea>

                <label for="rating">Uw beoordeling:</label>
                <div class="starRating">
                    <input type="radio" id="star5" name="rating" value="five" />
                    <label for="star5" title="5 sterren">&#9733;</label>
                    <input type="radio" id="star4" name="rating" value="four" />
                    <label for="star4" title="4 sterren">&#9733;</label>
                    <input type="radio" id="star3" name="rating" value="three" />
                    <label for="star3" title="3 sterren">&#9733;</label>
                    <input type="radio" id="star2" name="rating" value="two" />
                    <label for="star2" title="2 sterren">&#9733;</label>
                    <input type="radio" id="star1" name="rating" value="one" />
                    <label for="star1" title="1 ster">&#9733;</label>
                </div>

                <input type="submit" value="Review Versturen">
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST")   
                        // Controle voornaam
                        if (!empty($name))
                        {
                            // Controle achternaam
                            if  (!empty($lastName))
                            {
                                // Controle email
                                if (!empty($email))
                                {
                                    // Controle review
                                    if (!empty($review))
                                    {
                                        // Controle ratings
                                        if (!empty($rating))
                                        {
                                            echo "Bedankt voor uw review!";
                                        }
                                        else
                                        {
                                            echo "Graag een sterren rating achterlaten.";
                                        }
                                    }
                                    else
                                    {
                                        echo "Graag een review achterlaten.";
                                    }
                                }
                                else 
                                {
                                    echo "U moet een geldig e-mailadres invullen.";
                                }
                            }
                            else
                            {
                                echo "Graag uw achternaam invullen.";
                            }
                        }
                        else 
                        {
                            echo "<h3>Graag uw voornaam invullen.</h3>";
                        }
                    else
                    {
                        // Doe niks
                        ;
                    }
                ?>
            </form>
        </div>
    </main>
</div>