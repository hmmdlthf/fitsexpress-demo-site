<?php

$file = file_get_contents('text/team.json');
$file_json = json_decode($file, true);
$items = $file_json['team'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fits Express | About</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/single_class_styles.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/sections.css">
    <link rel="stylesheet" href="/css/floating_btns.css">
    <link rel="stylesheet" href="/css/whatsapp_chat_box.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body onload="startWhatsappBtnAppearWorker()">
    <?php
    $selected_item = 'contact';
    include 'header.php';
    ?>

    <div class="hero">
        <h1 class="title" data-aos="fade-up">Contact Us</h1>
        <div class="des" data-aos="fade-up">Feel free to contact us with any questions or concerns. You can use the form on our website or email us directly. We appreciate your interest and look forward to hearing from you.</div>
    </div>

    <form action="contact-email.php">
        <div class="form__group">
            <div class="form__control" data-aos="fade-up">
                <label for="name">name</label>
                <input type="text" placeholder="Your name" name="name" id="name">
            </div>
        </div>
        <div class="form__group">
            <div class="form__control" data-aos="fade-up">
                <label for="lname">lname</label>
                <input type="text" placeholder="Your last name" name="lname" id="lname">
            </div>
        </div>
        <div class="form__group">
            <div class="form__control" data-aos="fade-up">
                <label for="email">email</label>
                <input type="text" placeholder="Your email address" name="email" id="email" required>
            </div>
        </div>
        <div class="form__group">
            <div class="form__control" data-aos="fade-up">
                <label for="message">message</label>
                <textarea name="message" placeholder="Enter your message" id="message" cols="30" rows="10" required></textarea>
            </div>
        </div>
        <div class="form__group">
            <div class="form__control" data-aos="fade-up">
                <button type="submit" class="btn">Submit</button>
            </div>
        </div>
    </form>

    <div class="section__ribon">
        <div class="items">
            <div class="item" data-aos="fade-up">
                <div class="title">Contacts</div>
                <div class="email">info@fitsexpress.com</div>
                <div class="phone">123-456-7890</div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="title">Address</div>
                <div class="address">3721 Single Street Quincy, MA 02169</div>
            </div>
            <div class="item" data-aos="fade-up">
                <div class="title">Opening hours</div>
                <div class="hour">Monday - Friday: 9:00 - 18:00</div>
                <div class="hour">Saturday: 9:00 - 16:00</div>
                <div class="hour">Sunday: Closed</div>
            </div>
        </div>
    </div>

    <div class="section__ribon" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506778.62264705246!2d79.87909226786768!3d7.101876843925657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25987f74f8913%3A0xfb938b9185dbc529!2sUPS%20-%20Fits%20Express%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1685669122943!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <img src="/images/about/UPSImage-2.jpg" alt="">
    </div>

    <?php include 'footer.php'; ?>

    <?php include 'fbtns.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>