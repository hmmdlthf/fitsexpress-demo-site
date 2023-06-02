<?php

$header_list = ['home', 'about', 'services', 'contact'];

?>

<header>
    <div class="header" data-aos="fade-up">
        <div class="header__logo">
            <img src="/images/FitsEx-1-1.png" alt="">
        </div>
        <div class="header__navBtn">
            <div class="icon__btn" onclick="toggleNavBtn()">
                <div class="top__line"></div>
                <div class="middle__line"></div>
                <div class="bottom__line"></div>
            </div>

        </div>
        <nav class="header__nav">
            <ul>
                <?php foreach ($header_list as $item) { ?>
                    <?php if ($item == $selected_item) { ?>
                        <?php if ($item == 'home') { ?>
                            <li>
                                <a href="/" class="active"><?php echo $item ?></a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="/<?php echo $item ?>.php" class="active"><?php echo $item ?></a>
                            </li>
                        <?php } ?>

                    <?php } else { ?>
                        <?php if ($item == 'home') { ?>
                            <li>
                                <a href="/"><?php echo $item ?></a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="/<?php echo $item ?>.php"><?php echo $item ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </ul>
        </nav>
        <script>
            function toggleNavBtn() {
                document.querySelector('.icon__btn').classList.toggle('close');
                document.querySelector('.header__nav').classList.toggle('active');
            }
        </script>
    </div>
</header>