<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <title>BKB | Shop</title>
</head>


<body>
    <?php include "header.php"; ?>
    <secion class="bike-main">
        <h2 class="bike-header">Bikes</h2>
        <h5 class="cat-header">CATEGORIES</h5>
        <div class="bike-container">
            <figure class="cat-spacing">
            <a href="kid-bikes.php"><img src="elements/saleBikeKids1.jpg"  class="bike-cat"></a>
                <figcaption class="cat-kids">Kids</figcaption>
            </figure>
            <figure class="cat-spacing">
             <img src="elements/adultbike2.jpg"  class="bike-cat">
                <figcaption class="cat-men"><u>Male</u></figcaption>
            </figure>
            <figure class="cat-spacing">
            <a href="womanbike.php"><img src="elements/racingBike.jpg"  class="bike-cat"></a>
                <figcaption class="cat-woman">Female</figcaption>
            </figure>
        </div>

</section>
    <article class="bike-background">
        <div class="mens-head">
            <h2>Men Bikes</h2>
        </div>

        <div class="bike-selection">

            <figure>
               <a href="tiagrabike.php"><img src="elements/bike1.png"  class="selection-size">
                <figcaption>Tiagra</figcaption>
                <figcaption>£550</figcaption></a>
                <br>
            </figure>
            <figure>
                <a href="attainbike.php"><img src="elements/bike2.png"  class="selection-size">
                <figcaption>Attain</figcaption>
                <figcaption>£599</figcaption></a>
                <br>
            </figure>
            <figure>
               <a href="superflyadultbike.php"><img src="elements/bike3.png" class="selection-size">
                <figcaption>Superfly Mountain</figcaption>
                <figcaption>£299</figcaption></a>
                <br>
            </figure>

        </div>


    </article>

    <?php include "footer.php"; ?>
</body>

</html>