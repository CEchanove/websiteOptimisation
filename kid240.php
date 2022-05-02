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
        <div class="bike-head">
            <h2>Kids 240 Mountain</h2>
        </div>
        <section class="tiagra-desktop">
            <img src="elements/kidsbike1.jpg" alt="bicycle" class="tiagra-img">

            <div class="bike-text">

                <h5>£160</h5>
                <p>Halfway between a kid's bike and a mountain bike for adults, the Kid 240 has all the features of a
                    full-sized bike - which makes it the ideal choice for growing riders who want to keep up with their
                    friends and parents. With a suspension fork, powerful v-brakes, 21 gears, a high quality aluminium
                    frame and geometry optimised for youngsters, there's nothing standing in the way of an off-road
                    adventure.</p>
                <br>
                <p><strong>Features</strong></p>
                <ul>
                    <li>Lightweight aluminium <frame>
                    </li>
                    <li>24" Wheels ideal for kids 130-160cm in height</li>
                    <li>7 speed triple transmission</li>
                </ul>
            </div>
        </section>
    </article>

    <?php include("footer.php"); ?>
</body>

</html>