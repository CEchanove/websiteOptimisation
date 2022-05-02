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
                <a href="childbike.html"><img src="elements/saleBikeKids1.jpg" alt="kids bikes" class="bike-cat"></a>
                <figcaption class="cat-kids">Kids</figcaption>
            </figure>
            <figure class="cat-spacing">
                <a href="bikesmen.html"><img src="elements/adultbike2.jpg" alt="mens bikes" class="bike-cat"></a>
                <figcaption class="cat-men"><u>Men</u></figcaption>
            </figure>
            <figure class="cat-spacing">
                <a href="womanbike.html"><img src="elements/racingBike.jpg" alt="women's bikes" class="bike-cat"></a>
                <figcaption class="cat-woman">Woman</figcaption>
            </figure>
        </div>

    </main>
    <article class="bike-background">
        <div class="bike-head">
            <h2>Attain Performance</h2>
        </div>
        <section class="tiagra-desktop">
            <img src="elements/bike2.png" alt="bicycle" class="tiagra-img">

            <div class="bike-text">

                <h5>£599</h5>
                <p>The Attain provides exceptional comfort in the saddle due to its perfectly dialled geometry,
                    lightweight performance from its advanced aluminium frame and incredible braking performance with
                    the new disc brake system. It also adds a reassuring dose of all-weather reliability for race or
                    training rides, allowing you
                    to concentrate on your performance without worrying about wet roads.
                </p>
                <br>
                <p><strong>Features</strong></p>
                <ul>
                    <li>Aluminium frame</li>
                    <li>Integrated cable routing</li>
                    <li>press fit BB</li>
                    <li>Tapered Head Tube</li>
                </ul>
            </div>
        </section>
    </article>

    <?php include("footer.php"); ?>
</body>

</html>