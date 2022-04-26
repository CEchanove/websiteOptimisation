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
               <img src="elements/saleBikeKids1.jpg"  class="bike-cat">
                <figcaption class="cat-kids">Kids</figcaption>
            </figure>
            <figure class="cat-spacing">
             <img src="elements/adultbike2.jpg"  class="bike-cat">
                <figcaption class="cat-men"><u>Men</u></figcaption>
            </figure>
            <figure class="cat-spacing">
            <img src="elements/racingBike.jpg"  class="bike-cat">
                <figcaption class="cat-woman">Woman</figcaption>
            </figure>
        </div>

    </main>
    <article class="bike-background">
        <div class="mens-head">
            <p>Mens Bikes</p>
        </div>

        <div class="bike-selection">

            <figure>
               <img src="elements/bike1.png"  class="selection-size">
                <figcaption>Tiagra</figcaption>
                <figcaption>£550</figcaption>
                <br>
            </figure>
            <figure>
                <img src="elements/bike2.png"  class="selection-size">
                <figcaption>Attain</figcaption>
                <figcaption>£599</figcaption>
                <br>
            </figure>
            <figure>
               <img src="elements/bike3.png" class="selection-size">
                <figcaption>Superfly Mountain</figcaption>
                <figcaption>£299</figcaption>
                <br>
            </figure>

        </div>


    </article>

    <?php include "footer.php"; ?>
</body>

</html>