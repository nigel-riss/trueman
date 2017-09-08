<?php
    /*
        Template Name: Services Page
    */

    // Page vars
    $page_subtitle      = get_field("page-subtitle");
    $page_title         = get_field("page-title");
    $page_photo         = get_field("page-photo");

    // Price vars
    $full_price_left    = get_field("full-price-left");
    $full_price_right   = get_field("full-price-right");

    get_header();
?>

    <section class="about about--inner">
        <header class="about__header">
            <p class="about__subtitle"><?php echo $page_subtitle; ?></p>
            <h1 class="about__title"><?php echo $page_title; ?></h1>
        </header>

        <div class="price-inner">
            <div class="price-inner__column">
                <?php echo $full_price_left; ?>
            </div>
            <div class="price-inner__column price-inner__column--right">
                <?php echo $full_price_right; ?>
            </div>
            <div class="price-inner__deco"></div>
        </div>
    </section>

<?php
    get_footer();
?>