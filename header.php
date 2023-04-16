<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>
        <?php if (is_home() || is_front_page()) {
            echo "Home Page";
        } else {
            wp_title('Task1 > ');
        } ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <?php wp_head() ?>
</head>

<body>
    <header class="c-header">
        <div class="l-container">
            <div class="c-header__top">
                <div class="logo">
                    <a href="<?php bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="税理士法人下平会計事務所"></a>
                </div>
                <div class="contact">
                    <img src="<?php echo get_template_directory_uri() ?>/img/hed_tel.png" alt=""><br />
                    <img src="<?php echo get_template_directory_uri() ?>/img/hed_con_no.png" alt="" class="js-imglink">

                </div>
            </div>
            <?php
            ?>
                <?php
                wp_nav_menu(array(
                    'theme-location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'c-gnav',
                ))
                ?>
        </div>
    </header>