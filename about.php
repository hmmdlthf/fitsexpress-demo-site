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
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/sections.css">
    <link rel="stylesheet" href="/css/floating_btns.css">
    <link rel="stylesheet" href="/css/whatsapp_chat_box.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body onload="startWhatsappBtnAppearWorker()">
    <?php
    $selected_item = 'about';
    include 'header.php';
    ?>

    <h1 class="title" data-aos="fade-up">Get to know us</h1>

    <div class="section">
        <div class="section__top">
            <h2 data-aos="fade-up">Services and history</h2>
        </div>
        <div class="section__bottom">
            <div class="section__text" data-aos="fade-up">
                <p>We started as a statement against the sloppy professional standards that dominated the field of construction services 20 years ago. We wanted to set a new, high standard and work as consultants, solving our client's problems.</p>
                <p>The company quickly grew and cemented itself as the new golden standard in commercial construction. Today we continue to build on that legacy and strive for excellence in everything we do.</p>
            </div>
        </div>
    </div>

    <div class="section__ribon">
        <img src="/images/about/UPSImage-2.jpg" alt="" data-aos="fade-up">
        <img src="/images/about/Fits-Team-1-768x432.jpeg" alt="" data-aos="fade-up">
        <img src="/images/about/UPS-courier-service.png" alt="" data-aos="fade-up">
        <img src="/images/about/ON-BK754_UPSTru_G_20150529171540.jpg" alt="" data-aos="fade-up">
    </div>

    <div class="section">
        <div class="section__top">
            <h2 data-aos="fade-up">People and culture</h2>
        </div>
        <div class="section__bottom">
            <div class="section__text" data-aos="fade-up">
                <p>Our people are what make us unique. Rather than outsourcing our construction engineers from questionable outsourcing establishments, we provide them with an environment that supports professional growth.</p>
                <p>We are strong believers in giving our employees a voice. Our teams are put together with the help of our resident psychologist to ensure maximum productivity and engagement.</p>
            </div>
        </div>
    </div>

    <div class="section__ribon">
        <?php foreach ($items as $item) { ?>
            <div class="team__item">
                <img src="<?php echo $item['img']; ?>" alt="" data-aos="fade-up">
                <div class="item__title" data-aos="fade-up"><?php echo $item['name']; ?></div>
                <div class="item__role" data-aos="fade-up"><?php echo $item['role']; ?></div>
            </div>
        <?php } ?>

    </div>

    <?php include 'footer.php'; ?>

    <?php include 'fbtns.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>