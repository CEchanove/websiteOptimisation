<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <title>Bike King Borders</title>
</head>


<body>
<?php include "header.php"; ?>
    <main class="bike-main">
        <h2 class="bike-header">Bikes</h2>
        <h5 class="cat-header">CATEGORIES</h5>
        <div class="bike-container">
            <figure class="cat-spacing">
                <a href="childbike.php"><img src="elements/saleBikeKids1.jpg" alt="kids bikes" class="bike-cat"></a>
                <figcaption class="cat-kids">Kids</figcaption>
            </figure>
            <figure class="cat-spacing">
                <a href="bikesmen.php"><img src="elements/adultbike2.jpg" alt="mens bikes" class="bike-cat"></a>
                <figcaption class="cat-men"><u>Men</u></figcaption>
            </figure>
            <figure class="cat-spacing">
                <a href="womanbike.php"><img src="elements/racingBike.jpg" alt="women's bikes" class="bike-cat"></a>
                <figcaption class="cat-woman">Woman</figcaption>
            </figure>
        </div>

    </main>
    <article class="bike-background">
        <div class="bike-head">
            <h2>Ridgeway Adventurer</h2>
        </div>
        <section class="tiagra-desktop">
            <img src="elements/bike6.png" alt="bicycle" class="tiagra-img">

            <div class="bike-text">

                <h5>£425</h5>
                <p>The Ridgeway bike is ready for an adventure whenever you are! Lightweight, hydraulic disc brakes,
                    comfort enhancing suspension fork, comfortable women's specific, all features will give you a top
                    performing bike for many years to come.
                    The Step-thru frame has all the same design features as the unisex version but with the added
                    benefit of a partially dropped top tube. </p>
                <br>
                <p><strong>Features</strong></p>
                <ul>
                    <li>Weight: 13.5kg</li>
                    <li>Saddle: Whyte custom women's fit, triple panel design</li>
                    <li>Chain: KMC CN-HG-53 9 speed</li>
                    <li>Handlebar: High rise 30mm, 31.8mm, 620mm wide</li>
                </ul>
            </div>
        </section>
    </article>

    <?php include("footer.php"); ?>
</body>

</html>