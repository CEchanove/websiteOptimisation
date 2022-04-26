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
                <figcaption class="cat-kids"><u>Kids</u></figcaption>
            </figure>
            <figure class="cat-spacing">
                <a href="bikesmen.php"><img src="elements/adultbike2.jpg" alt="mens bikes" class="bike-cat"></a>
                <figcaption class="cat-men">Men</figcaption>
            </figure>
            <figure class="cat-spacing">
                <a href="womanbike.php"><img src="elements/racingBike.jpg" alt="women's bikes" class="bike-cat"></a>
                <figcaption class="cat-woman">Woman</figcaption>
            </figure>
        </div>

    </main>
    <article class="bike-background">
        <div class="mens-head">
            <h2>Kids Bikes</h2>
        </div>
        <div class="bike-selection">
            <figure>
                <a href="kid240.php"><img src="elements/kidsbike1.jpg" alt="bicycle" class="selection-size kids-selection"></a>
                <figcaption>Kid 240</figcaption>
                <figcaption>£160</figcaption>
                <br>
            </figure>
            <figure>
                <a href="kidsuperfly.php"><img src="elements/kidsbike2.jpg" alt="bicycle" class="selection-size kids-selection"></a>
                <figcaption>Kids Superfly</figcaption>
                <figcaption>£179</figcaption>
                <br>
            </figure>
        </div>
    </article>
    <?php include("footer.php"); ?>
</body>

</html>