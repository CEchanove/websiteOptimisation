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
            <h2>Superfly Mountain</h2>
        </div>
        <section class="tiagra-desktop">
            <img src="elements/bike3.png" alt="bicycle" class="tiagra-img">

            <div class="bike-text">

                <h5>£299</h5>
                <p>The Superfly continues to this day to be a market leader. With it's super light weight aluminium
                    frame, this bike was made for speed and zips through the trails in lightening times. The Superfly is
                    the best of the best for cross country speed and efficient rides.</p>
                <br>
                <p><strong>Features</strong></p>
                <ul>
                    <li>Hydro formed super light frame</li>
                    <li>Race geometry for lower position and shortened chain stays</li>
                    <li>Frame butted at multiple point for strength</li>
                    <li>Custom offset fork for precise steering at low speed</li>
                </ul>
            </div>
        </section>
    </article>

    <?php include("footer.php"); ?>
</body>

</html>