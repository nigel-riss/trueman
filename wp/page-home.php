<?php
    /*
        Template Name: Home Page
    */

    // SEO vars
    $meta_description   = get_field("meta-description");
    $ga_counter         = get_field("ga-counter");
    $ym_counter         = get_field("ym-counter");

    // About vars
    $bshop_desc         = get_field("bshop-desc");
    $bshop_photo        = get_field("bshop-photo");

    // Contacts vars
    $phone_view         = get_field("phone-view");
    $phone_link         = get_field("phone-link");
    $address_header     = get_field("address-header");
    $address_footer     = get_field("address-footer");
    $work_time          = get_field("work-time");
    
    // Prices vars
    $short_price_left   = get_field("short-price-left");
    $short_price_right  = get_field("short-price-right");

    // Map vars
    $map_photo          = get_field("map-photo");
    $map_address        = get_field("map-address");
    $map_latitude       = get_field("map-latitude");
    $map_longitude      = get_field("map-longitude");

    // Social vars
    $instagram_link     = get_field("instagram-link");
    $facebook_link      = get_field("facebook-link");
    $vkontakte_link     = get_field("vkontakte-link");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="<?php echo $meta_description; ?>" />

    <!-- OG -->
    <meta property="og:title" content="TRUEMAN Барбершоп">
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

    <title>TRUEMAN Барбрершоп</title>

    <?php wp_head(); ?>

    <?php echo $ym_counter; ?>
</head>

<body>
    <?php echo $ga_counter; ?>
    <!-- Header -->
    <header class="main-header">
        <div class="main-header__border"></div>

        <div class="menu-icon">
            <div class="menu-icon__middle"></div>
        </div>

        <div class="contacts">
            <p class="contacts__phone">
                <a href="tel:<?php echo $phone_link; ?>"><?php echo $phone_view; ?></a>
            </p>
            <p class="contacts__address"><?php echo $address_header; ?><br><?php echo $work_time; ?></p>
        </div>

        <div class="logo">
            <p class="logo__text">Barbershop Trueman</p>
            <div class="logo__image">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="Trueman Barbershop Logo" />
            </div>
        </div>

        <nav class="main-menu">
            <div class="main-menu__logo">
                <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="Trueman Barbershop Logo" />
            </div>
            <ul class="main-menu__list">
                <li><a href="<?php echo esc_url(home_url("/")); ?>about">О нас</a></li>
                <li><a href="#services">Услуги</a></li>
                <li><a href="#prices">Прайс-лист</a></li>
                <li><a href="#team">Мастера</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </nav>

        <div class="caption">
            <div class="caption__content">
                <p class="caption__subtitle">Барбершоп по&#8209;настоящему</p>
                <h1 class="caption__title">Стрижки<br>&<br>Бритьё</h1>
                <a class="button ms_booking" href="#">Запись онлайн</a>
            </div>
        </div>

        <div class="main-header__deco">
            <img src="<?php bloginfo("stylesheet_directory"); ?>/img/deco.svg" alt="" />
        </div>
    </header>

    <!-- About -->
    <section class="about">
        <header class="about__header">
            <p class="about__subtitle">О барбершопе</p>
            <h2 class="about__title">Добро пожаловать в&nbsp;Trueman</h2>
        </header>

        <div class="about__content">
            <div class="about__image"><img src="<?php echo $bshop_photo; ?>" alt="Барбершоп Труман интерьер" /></div>
            <p class="about__description"><?php echo $bshop_desc; ?></p>
            <div class="about__more">
                <a class="button button--simple" href="<?php echo esc_url(home_url("/")); ?>about">Подробнее</a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section section--services" id="services">
        <header class="section__header">
            <h2>Мы предлагаем</h2>
        </header>

        <div class="section__content section__content--services">
            <article class="service">
                <header class="service__header">
                    <div class="service__icon">
                        <img class="service__icon-white" src="<?php bloginfo("stylesheet_directory"); ?>/img/services/scisors-white.svg" alt="TRUEMAN Scissors Icon White" />
                        <img class="service__icon-black" src="<?php bloginfo("stylesheet_directory"); ?>/img/services/scisors.svg" alt="TRUEMAN Scissors Icon" />
                    </div>
                    <h3 class="service__title">Стрижка</h3>
                    <p class="service__subtitle">Мужская и Детская</p>
                    <div class="service__more"><a href="<?php echo esc_url(home_url("/")); ?>haircut">Подробнее</a></div>
                </header>
                <div class="service__cover"></div>
                <div class="service__image">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/services/haircut.jpg" alt="Мужская стрижка" />
                </div>
            </article>

            <article class="service">
                <header class="service__header">
                    <div class="service__icon">
                        <img class="service__icon-white" src="<?php bloginfo("stylesheet_directory"); ?>/img/services/razor-white.svg" alt="TRUEMAN Razor Icon White" />
                        <img class="service__icon-black" src="<?php bloginfo("stylesheet_directory"); ?>/img/services/razor.svg" alt="TRUEMAN Razor Icon" />
                    </div>
                    <h3 class="service__title">Бритьё</h3>
                    <p class="service__subtitle">Классическое и Королевское</p>
                    <div class="service__more"><a href="<?php echo esc_url(home_url("/")); ?>shaving">Подробнее</a></div>
                </header>
                <div class="service__cover"></div>
                <div class="service__image">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/services/shave.jpg" alt="Бритьё бороды" />
                </div>
            </article>

            <article class="service">
                <header class="service__header">
                    <div class="service__icon">
                        <img class="service__icon-white" src="<?php bloginfo("stylesheet_directory"); ?>/img/services/lotion-white.svg" alt="TRUEMAN Cosmetics Icon White" />
                        <img class="service__icon-black" src="<?php bloginfo("stylesheet_directory"); ?>/img/services/lotion.svg" alt="TRUEMAN Cosmetics Icon " />
                    </div>
                    <h3 class="service__title">Магазин</h3>
                    <p class="service__subtitle">Уход и Аксессуары</p>
                </header>
                <div class="service__cover"></div>
                <div class="service__image">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/services/shop.jpg" alt="Магазин аксессуаров барбершопа" />
                </div>
            </article>
        </div>
    </section>

    <!-- Price List -->
    <section class="section section--prices" id="prices">
        <header class="section__header">
            <h2>Прайс-лист</h2>
        </header>

        <div class="section__content section__content--prices">
            <div class="prices-wrapper">
                <div class="price-inner__column">
                    <?php echo $short_price_left; ?>
                </div>
                
                <div class="price-inner__column price-inner__column--right">
                    <?php echo $short_price_right; ?>
                </div>

                <div class="price-logo">
                    <p class="price-logo__text">Barbershop Trueman</p>
                    <div class="price-logo__image">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo-black.svg" alt="Trueman Barbershop Logo" />
                    </div>
                </div>
                <a class="button" href="<?php echo esc_url(home_url("/")); ?>services">Все услуги</a>
            </div>
        </div>
    </section>

    <section class="section section--team" id="team">
        <header class="section__header">
            <h2>Мастера</h2>
        </header>

        <div class="section__content section__content--team">
            <?php
                $args = array(
                    "category_name" => "team"
                );

                query_posts($args);

                if (have_posts()) {
                    while(have_posts()) {
                        the_post();

                        // vars
                        $member_position    = get_field("member-position");
                        $member_name        = get_field("member-name");
                        $member_photo       = get_field("member-photo");
            ?>

            <article class="member">
                <header class="member__header">
                    <p class="member__position"><?php echo $member_position; ?></p>
                    <h3 class="member__name"><?php echo $member_name; ?></h3>
                </header>
                <div class="member__cover"></div>
                <div class="member__photo">
                    <img src="<?php echo $member_photo; ?>" alt="<?php echo $member_name; ?> барбер барбершопа TRUEMAN" />
                </div>
            </article>

            <?php
                    }
                }
            ?>

            <article class="member member--join">
                <header class="member__header">
                    <h3 class="member__title">Присоединяйся<br>к нашей команде</h3>
                </header>
                <div class="member__cover member__cover--join"></div>
                <div class="member__photo"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/barbers/join.jpg" alt="" /></div>
            </article>
        </div>
    </section>

    <!-- Partners -->
    <section class="section section--partners">
        <header class="section__header">
            <h2>Партнёры</h2>
        </header>

        <div class="section__content section__content--partners">
            <?php
                $counter = 0;
                $args = array(
                    "category_name" => "partner" 
                );

                query_posts($args);

                if (have_posts()) {
                    while(have_posts()) {
                        the_post();

                        // vars
                        $partner_logo = get_field("partner-logo");
                        $partner_name = get_field("partner-name");

            ?>

            <div class="partner"><img src="<?php echo $partner_logo; ?>" alt="<?php echo $partner_name; ?> logo" /></div>

            <?php
                    $counter++;
                    if (($counter % 3) == 0) { echo "<br>"; }
                    }
                }
            ?>
        </div>
    </section>

    <!-- Location -->
    <section class="location" id="contacts">
        <div class="map-label">
            <header class="map-label__header">
                <p class="map-label__city">Минск</p>
                <h2 class="map-label__title">Барбершоп Trueman</h2>
                <p class="map-label__address"><?php echo $map_address; ?></p>
                <div class="map-label__logo">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo-black.svg" alt="Trueman Barbershop logo" />
                </div>
            </header>
            <div class="map-label__photo">
                <img src="<?php echo $map_photo; ?>" alt="Trueman Barbershop photo" />
            </div>
        </div>

        <div class="location__map" id="map"></div>
    </section>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-footer__content">
            <div class="footer-logo">
                <p class="footer-logo__text">Barbershop Trueman</p>
                <div class="footer-logo__image">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="Trueman Barbershop Logo" />
                </div>
            </div>

            <div class="footer-block">
                <div class="footer-info">
                    <h3 class="footer-info__title">Контакты</h3>
                    <a class="footer-info__tel" href="tel:<?php echo $phone_link; ?>"><?php echo $phone_view; ?></a>
                    <p class="footer-info__text"><?php echo $address_footer; ?><br>ООО «Труман групп»</p>
                </div>

                <div class="footer-info">
                    <h3 class="footer-info__title">Часы работы</h3>
                    <p class="footer-info__text"><?php echo $work_time; ?></p>
                </div>
            </div>

            <div class="footer-block footer-block--right">
                <div class="social">
                    <h3 class="social__title">Мы в соцсетях</h3>
                    <div class="social__content">
                        <a class="social-icon icon-instagram" href="<?php echo $instagram_link; ?>">Instagram</a>
                        <a class="social-icon icon-facebook" href="<?php echo $facebook_link; ?>">Facebook</a>
                        <a class="social-icon icon-vkontakte" href="<?php echo $vkontakte_link; ?>">Vkontakte</a>
                    </div>
                </div>

                <div class="copyrights">
                    <p>© Барбершоп Trueman</p>
                    <p>Сделано студией <a href="http://agonstudio.ru/">Агонь</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="//w79413.yclients.com/widgetJS" charset="UTF-8"></script>
    <script>
        ;
        function initMap() {
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 17,
                center: {lat: <?php echo $map_latitude; ?>, lng: <?php echo $map_longitude; ?>},
                disableDefaultUI:true,
                scrollwheel: false,
                zoomControl: true,
                scaleControl: false
            });

            var marker = new google.maps.Marker({
                map: map,
                position: {lat: <?php echo $map_latitude; ?>, lng: <?php echo $map_longitude; ?>}
            });
        }
    </script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/app.js"></script>
    <script async="async" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap"></script>

    <?php wp_footer(); ?>
</body>
</html>