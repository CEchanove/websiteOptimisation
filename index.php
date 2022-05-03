<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bike King Borders is a highly reputable one stop shop for all things biking. From buying or hiring to bike services and repairs. Visit in-store or shop online.">
    <meta name="keywords" content="bikes, bicycles, cycling, mountain bike, MTB, shop, hire, servicing, repairs">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <title>BKB | Home</title>
</head>

<body>

    <?php include "header.php"; ?>

    <main class="heroImage">
        <div class="heroContents">
            <h1>Welcome</h1>
            <p class="index-text">We have more than 100 hire bikes available at Bike King Borders, including top end
                demo models, full
                suspension trail bikes, hard-tails, kids bike and tagalongs so we have something for all the family.</p>
            
        </div>
    </main>
    <article class="service-wrap">
        <div class="service-container">
            <section class="service-icons">
                <a href="shop.php"><img src="elements/CircleButton.png" class="icon" alt="shop icon">
                <h3>Shop</h3></a>
                <p class="icon-text">Brand new bikes in stock from top quality brands like Trek, Orange, Genesis and
                    Santa
                    Cruz and an extensive range of clothing and accessories from brands including Gore Bike Wear,
                    Endura,
                    Shimano, Hope and Bontrager the shop will cater for a wide range of visitors to the forest.
                </p>
            </section>
            <section class="service-icons">
            <a href="service.php"><img src="elements/tools.png" class="icon" alt="service and repair icon">
                <h3>Service & Repair</h3></a>
                <p class="icon-text">Full repair and servicing facilities will be onsite to take care of any mechanical
                    problems that occur on the trail - our qualified staff will do their best to keep you riding for as
                    long
                    as possible!
                </p>
            </section>
            <section class="service-icons">
            <a href="#local-trails"><img src="elements/Map.png"  class="icon" alt="local trails icon">
                <h3>Local Trails</h3></a>
                <p class="icon-text">Our staff are all experienced riders and know the trails well - call in and ask
                    their
                    advice on the best routes and current trail conditions.
                </p>
            </section>
        </div>
        <section class="desktop-text">
            <p class="service-text">
                With brand new bikes in stock from top quality brands like Trek, Orange, Genesis and Santa Cruz and an
                extensive range of clothing and accessories from brands including Gore Bike Wear, Endura, Shimano, Hope
                and Bontrager the shop will cater for a wide range of visitors to the forest.<br><br>
        Full repair and servicing facilities will be onsite to take care of any mechanical
                problems that occur
                on the trail - our qualified staff will do their best to keep you riding for as long as possible!<Br><br>
                Our staff are all experienced riders and know the trails well - call in and ask their advice on the best
                routes and current trail conditions.
                
</p>


        </section>
    </article>
    <article class="sale">

        <h2 class="sale-head">On Sale this week</h2>

        <section class="sale-container">
            <figure class="row">
                <img src="elements/saleBike.jpg" class="saleImage1" alt="A Black and white bike.">
                <figcaption class="product-name">Ridgeway</figcaption>
                <figcaption class="product-name">£425</figcaption>
            </figure>
            <figure class="row">
                <img src="elements/saleBike6.jpg" class="saleImage1" alt="A Purple metallic bike">
                <figcaption class="product-name">Attain Road</figcaption>
                <figcaption class="product-name">£499</figcaption>
            </figure>
        </section>
        <section class="sale-container">
            <figure class="row">
                <img src="elements/saleBike1.jpg" class="saleImage" alt="A Silver bike">
                <figcaption class="product-name">Tiagra</figcaption>
                <figcaption class="product-name">£550</figcaption>
            </figure>
            <figure class="row">
                <img src="elements/saleBike2.jpg" class="saleImage" alt="A neon pink bike">
                <figcaption class="product-name">Attain</figcaption>
                <figcaption class="product-name">£599</figcaption>
            </figure>
            <figure class="row">
                <img src="elements/saleBike3.jpg" class="saleImage" alt="A Black bike">
                <figcaption class="product-name">Superfly Mountain</figcaption>
                <figcaption class="product-name">£299</figcaption>
            </figure>
        </section>
    </article>
    <aside id="local-trails">
        <h2>Local Trails</h2>
        <div class=" video-container">
        <iframe class="video" src='https://www.youtube.com/embed/bwtIyN9NfGI' frameborder='0' allowfullscreen></iframe>
        </div>
        <section class="video-text">
            <p class="trail-text">Wilderness Forest is a mountain biking Mecca deep in the heart of the stunning Borders. The biking experience here includes Green, Blue, Red or Black graded trails, as well as a magnificent multi-graded free-ride area. In the unlikely event that Wilderness fails to meet your thirst for biking exhilaration, you are only a short hop from Innerleithen's famous Red Bull down-hill and cross country trails. <br><br>
Our Shop We have more than 100 hire bikes available at Bike King Borders, including top end demo models, full suspension trail bikes, hard-tails, kids bikes and tagalongs so we have something for all the family.
With brand new bikes in stock from top quality brands like Trek, Orange, Genesis and Santa Cruz and an extensive range of clothing and accessories from brands including Gore Bike Wear, Endura, Shimano, Hope and Bontrager the shop will cater for a wide range of visitors to the forest.<br><br>
Full repair and servicing facilities will be onsite to take care of any mechanical problems that occur on the trail - our qualified staff will do their best to keep you riding for as long as possible!<br><br>
Our staff are all experienced riders and know the trails well - call in and ask their advice on the best routes and current trail conditions
            </p>

        </section>
    </aside>
    <aside class="subscribe">
        <div class="sub-container">
            <div class="sub-head">
                <h6>Join Our Newsletter</h6>
            </div>
            <div class="sub-form">
                <form class="form-main">
                    <div>
                        <input class="main-form" type="email" placeholder="Your Email" required>
                    </div>
                    <div>
                        <input class="main-form" type="submit" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
    </aside>
    <?php include "footer.php"; ?>
</body>

</html>