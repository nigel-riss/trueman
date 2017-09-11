<?php
    // SEO vars
    $meta_description   = get_field("meta-description");
    $ga_counter         = get_field("ga-counter");
    $ym_counter         = get_field("ym-counter");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="<?php echo $meta_description; ?>" />

    <!-- OG -->
    <meta property="og:title" content="<?php the_title(); ?> - TRUEMAN Барбершоп">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/trueman.jpg">
    <meta propepty="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta propepty="og:locale" content="ru_RU">
    <meta property="og:site_name" content="TRUEMAN Барбершоп">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("stylesheet_directory"); ?>/apple-touch-icon.png?v=dLmJ6POrEb" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/favicon-32x32.png?v=dLmJ6POrEb" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("stylesheet_directory"); ?>/favicon-16x16.png?v=dLmJ6POrEb" />
    <link rel="manifest" href="<?php bloginfo("stylesheet_directory"); ?>/manifest.json?v=dLmJ6POrEb" />
    <link rel="mask-icon" href="<?php bloginfo("stylesheet_directory"); ?>/safari-pinned-tab.svg?v=dLmJ6POrEb" color="#5bbad5" />
    <link rel="shortcut icon" href="<?php bloginfo("stylesheet_directory"); ?>/favicon.ico?v=dLmJ6POrEb" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;amp;subset=cyrillic,cyrillic-ext" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>?v=3" />

    <title>TRUEMAN — <?php the_title(); ?></title>

    <?php wp_head(); ?>

    <?php echo $ga_counter; ?>
</head>

<body>
    <?php echo $ym_counter; ?>
    <!-- Header -->
    <header class="inner-header">
        <div class="inner-header__border"></div>

        <div class="menu-icon">
            <div class="menu-icon__middle"></div>
        </div>

        <div class="contacts contacts--inner">
            <p class="contacts__phone"><a href="tel:+375296396000">+375 296 396 000</a></p>
            <p class="contacts__address">Минск, пр. Независимости, 46<br>район пл. Я. Коласа<br>Ежедневно с 10 до 22</p>
            <div class="contacts__checkin">
                <a class="button button--white ms_booking" href="#">Запись онлайн</a>
            </div>
        </div>

        <div class="logo logo--inner">
            <p class="logo__text">Barbershop Trueman</p>
            <a class="logo__image" href="<?php echo esc_url(home_url("/")); ?>">
                <img src="<?php bloginfo("stylesheet_directory");?>/img/logo.svg" alt="Trueman Barbershop Logo"/>
            </a>
        </div>

        <nav class="main-menu">
            <div class="main-menu__logo"><img src="<?php bloginfo("stylesheet_directory");?>/img/logo.svg" alt="Trueman Barbershop Logo" /></div>
            <ul class="main-menu__list">
                <li><a href="<?php echo esc_url(home_url("/")); ?>about">О нас</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#services">Услуги</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#prices">Прайс-лист</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#team">Мастера</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>#contacts">Контакты</a></li>
            </ul>
        </nav>
    </header>