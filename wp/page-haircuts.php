<?php
    /*
        Template Name: Haircuts Page
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
                <img src="<?php echo $page_photo; ?>" alt="Барбершоп Труман причёски" />
            </div>

            <?php 
                the_post();
                the_content(); 
            ?>
        </div>
    </section>

    <?php
        $args = array(
            "category_name" => "haircut" 
        );

        query_posts($args);

        if (have_posts()) {
            while(have_posts()) {
                the_post();

                // vars
                $haircut_name       = get_field("haircut-name");
                $haircut_photo      = get_field("haircut-photo");
    ?>

    <section class="shaving">
        <header class="shaving__header">
            <h2 class="shaving__title"><?php echo $haircut_name; ?></h2>
        </header>
        <div class="shaving__image">
            <img src="<?php echo $haircut_photo; ?>" alt="<?php echo $haircut_name; ?>" />
        </div>
        <div class="shaving__content">
            <?php the_content(); ?>
        </div>
    </section>

    <?php
            }
        }
    ?>

<?php
    get_footer();
?>