<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fits Express | Home</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/single_class_styles.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/section_hero.css">
    <link rel="stylesheet" href="/css/sections.css">
    <link rel="stylesheet" href="/css/floating_btns.css">
    <link rel="stylesheet" href="/css/whatsapp_chat_box.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body onload="startWhatsappBtnAppearWorker()">
    <?php
    $selected_item = 'home';
    include 'header.php';
    ?>

    <div class="section__hero">
        <div class="section__top">
            <img src="/images/home/photo-1606964212858-c215029db704.png" alt="" data-aos="fade-up">
            <div class="sub__img" data-aos="fade-up"></div>
            <div class="sub__img" data-aos="fade-up">
                <img src="/images/ups-logo.svg" alt="">
            </div>
        </div>
        <div class="section__bottom">
            <h1 data-aos="fade-up">Efficient Supply Chain Solutions with FITS Express</h1>
            <div class="section__sub" data-aos="fade-up">Your Partner for Global Trade</div>
        </div>
    </div>

    <div class="section">
        <div class="section__top">
            <img src="/images/home/photo-1565891741441-64926e441838.png" alt="" data-aos="fade-up">
            <img src="/images/home/cruising-4057617_1920.jpg" alt="" class="sub__img" data-aos="fade-up">
        </div>
        <div class="section__bottom">
            <div class="section__sub" data-aos="fade-up">first of all</div>
            <div class="section__title" data-aos="fade-up">Welcome to FITS Express</div>
            <div class="section__text" data-aos="fade-up">FITS Express (Pvt.) Ltd. is your trusted partner for all your logistics requirements. We specialize in providing supply chain solutions that are tailored to meet your specific needs. With a broad range of services that includes air and ocean freight, international trade facilitation and advanced technology solutions, we help you manage your business more effectively. Our door-to-door express delivery service covers over 220 destinations worldwide. We are proud to be the authorized service contractor for UPS in Sri Lanka.</div>
        </div>
    </div>

    <div class="section section__reverse">
        <div class="section__top">
            <img src="/images/home/photo-1627309366653-2dedc084cdf1.png" alt="" data-aos="fade-up">
            <img src="/images/home/ship-yard-1911609_1920.jpg" alt="" class="sub__img" data-aos="fade-up">
            <img src="/images/home/airbus-4454338_1920.jpg" alt="" class="sub__img" data-aos="fade-up">
        </div>
        <div class="section__bottom">
            <div class="section__sub" data-aos="fade-up">NOT TO MENTION</div>
            <div class="section__title" data-aos="fade-up">Our Services</div>
            <div class="section__text" data-aos="fade-up">At FITS Express, we are committed to providing our customers with comprehensive supply chain solutions. Our services include air and ocean freight, international trade facilitation, and state-of-the-art technology to effectively manage your business needs. We offer door-to-door express delivery to over 220 destinations worldwide, ensuring that your shipments arrive on time and in pristine condition.</div>
            <a href="/services.php"><div class="btn" data-aos="fade-up">Learn more</div></a>
        </div>
    </div>

    <div class="section">
        <div class="section__top">
            <img src="/images/home/ship-6778742_1920.jpg" alt="" data-aos="fade-up">
            <img src="/images/home/world-4057615_1920.jpg" alt="" class="sub__img" data-aos="fade-up">
        </div>
        <div class="section__bottom">
            <div class="section__sub" data-aos="fade-up">AND LET'S NOT FORGET</div>
            <div class="section__title" data-aos="fade-up">Authorized UPS Service Contractor</div>
            <div class="section__text" data-aos="fade-up">As of September 2016, FITS Express has been appointed as the authorized service contractor for UPS in Sri Lanka. This partnership allows us to further expand our services and provide our customers with even more options for their supply chain needs. With the support of UPS, we are able to offer world-class shipping solutions and exceptional customer service.</div>
        </div>
    </div>

    <div class="section section__reverse">
        <div class="section__bottom">
            <div class="section__title" data-aos="fade-up">About FITS Express</div>
            <div class="section__text" data-aos="fade-up">FITS Express (Pvt.) Ltd. is a Sri Lankan logistics company that provides end-to-end supply chain solutions to businesses worldwide. With a focus on air and ocean freight, international trade facilitation, and advanced technology, we help our customers succeed in the global marketplace. As the authorized service contractor for UPS in Sri Lanka, we are committed to delivering efficient, reliable, and innovative logistics solutions.</div>
            <a href="/about.php"><div class="btn" data-aos="fade-up">Learn more</div></a> 
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <?php include 'fbtns.php'; ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>