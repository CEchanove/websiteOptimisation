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
                <figcaption class="cat-men">Men</figcaption>
            </figure>
            <figure class="cat-spacing">
                <a href="womanbike.php"><img src="elements/racingBike.jpg" alt="women's bikes" class="bike-cat"></a>
                <figcaption class="cat-woman"><u>Woman</u></figcaption>
            </figure>
        </div>

    </main>
    <article class="bike-background">
        <div class="mens-head">
            <h2>Woman's Bikes</h2>
        </div>

        <div class="bike-selection">

            <figure>
                <a href="ridgewaybike.php"><img src="elements/bike6.png" alt="bicycle" class="selection-size"></a>
                <figcaption>Ridgeway</figcaption>
                <figcaption>£425</figcaption>
                <br>
            </figure>
            <figure>
                <a href="attainbike.php"><img src="elements/bike2.png" alt="bicycle" class="selection-size"></a>
                <figcaption>Attain</figcaption>
                <figcaption>£599</figcaption>
                <br>
            </figure>
            <figure>
                <a href="superflyadultbike.php"><img src="elements/bike3.png" alt="bicycle" class="selection-size"></a>
                <figcaption>Superfly Mountain</figcaption>
                <figcaption>£299</figcaption>
                <br>
            </figure>

        </div>


    </article>

    <?php include("footer.php"); ?>
</body>

</html>