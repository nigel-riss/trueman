<?php
    /*
        Template Name: About Page
    */

    // Page vars
    $page_subtitle      = get_field("page-subtitle");
    $page_title         = get_field("page-title");
    $page_photo         = get_field("page-photo");

    get_header();
?>

    <section class="about about--inner">
        <header class="about__header">
            <p class="about__subtitle"><?php echo $page_subtitle; ?></p>
            <h1 class="about__title"><?php echo $page_title; ?></h1>
        </header>

        <div class="about__content">
            <div class="about__image about__image--inner">
                <img src="<?php echo $page_photo; ?>" alt="Барбершоп Труман интерьер" />
            </div>

            <?php 
                the_post();
                the_content(); 
            ?>
        </div>

        <div class="about__gallery">
            <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '67' ); } ?>
        </div>

        <div class="about__partners">
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

<?php
    get_footer();
?>