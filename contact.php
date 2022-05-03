<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact us by phone or email. We are open 7 days a week, 9.30am - 6pm.">
    <meta name="keywords" content="bike, bicycle, mountain bike, MTB, contact, emails, phone, opening times">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" rel="stylesheet">
    <title>BKB | Contact Us</title>
</head>


<body>
<?php include "header.php"; ?>
    <main class="contact-hero">
        <div class="contacthero-text">
            <h1>Contact</h1>
        </div>
    </main>

    <article>
        <h2 class="contactmain-head">Contact us</h2>
        <section class="contact-main">

            <div class="contact-text">
                <div class="contact-info">
                    <h3 class="hours-head">Hours</h3>
                    <p id="hours">Monday 09:30 – 18:00</p>
                    <p id="hours">Tuesday 09:30 – 18:00</p>
                    <p id="hours">Wednesday 09:30 – 18:00</p>
                    <p id="hours">Thursday 09:30 – 18:00</p>
                    <p id="hours">Friday 09:30 – 18:00</p>
                    <p id="hours">Saturday 09:00 – 18:00</p>
                    <p id="hours">Sunday 09:00 – 18:00</p>
                </div>
                <div class="contact-info">
                    <h3 class="hours-head">Address</h3>
                    <p>Bike King Borders</p>
                    <p>Unit 2</p>
                    <p>Wilderness Forest</p>
                    <p>Borders</p>
                    <p>Scotland</p>
                    <p>EH99 6TT</p>
                </div>
            </div>
            <div class="container">
                <form action="#">
                    <ul class="flex-outer">
                        <li>
                            <input type="text" placeholder="First name here" required>
                        </li>
                        <li>
                            <input type="text" placeholder="Last name here">
                        </li>
                        <li>
                            <input type="email" placeholder="Email here" required>
                        </li>
                        <li>
                            <input type="tel" placeholder="Phone here" required>
                        </li>
                        <li>
                            <textarea rows="6" placeholder="Your message here" required></textarea>
                        </li>
                        <li>
                            <button type="submit">Submit</button>
                        </li>
                    </ul>
                </form>
            </div>
        </section>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d578138.8301286426!2d-3.3482852000425467!3d55.5261889046127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488786b51be264f9%3A0x30c681a0642b2f0!2sScottish%20Borders!5e0!3m2!1sen!2suk!4v1609370376909!5m2!1sen!2suk"
                width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </article>

    <?php include "footer.php"; ?>
</body>

</html>