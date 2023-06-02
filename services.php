<?php

$file = file_get_contents('text/services.json');
$file_json = json_decode($file, true);
$items = $file_json['services'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fits Express | Services</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/services.css">
    <link rel="stylesheet" href="/css/sections.css">
    <link rel="stylesheet" href="/css/floating_btns.css">
    <link rel="stylesheet" href="/css/whatsapp_chat_box.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body onload="startWhatsappBtnAppearWorker()">
    <?php
    $selected_item = 'services';
    include 'header.php';
    ?>

    <div class="hero">
        <h1 class="title" data-aos="fade-up">Our services</h1>
        <div class="des" data-aos="fade-up">FITS Express is a leading courier service company dedicated to providing a comprehensive range of efficient and reliable delivery solutions.</div>
    </div>


    <div class="services">
        <?php foreach ($items as $item) { ?>
            <div class="service">
                <img src="<?php echo $item['img']; ?>" alt="" data-aos="fade-up">
                <h2 class="service__title" data-aos="fade-up"><?php echo $item['title']; ?></h2>
                <div class="service__des" data-aos="fade-up"><?php echo $item['des']; ?></div>
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