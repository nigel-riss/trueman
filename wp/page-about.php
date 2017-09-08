<?php
    /*
        Template Name: About Page
    */

    // Page vars
    $page_subtitle      = get_field("page-subtitle");
    $page_title      = get_field("page-title");
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


        <div class="about__partners">
            <div class="partner"><img src="./img/partners/oldboy.png" alt="Oldboy logo" /></div>
            <div class="partner"><img src="./img/partners/yacht.png" alt="Yacht Event logo" /></div>
            <div class="partner"><img src="./img/partners/american-crew.png" alt="American Crew logo" /></div><br>
            <div class="partner"><img src="./img/partners/g-tonic.png" alt="Gentlemens tonic logo" /></div>
            <div class="partner"><img src="./img/partners/truefitt-and-hill.png" alt="Truefitt &amp; Hill logo" /></div>
            <div class="partner"><img src="./img/partners/proraso.png" alt="Proraso logo" /></div>
        </div>
    </section>

<?php
    get_footer();
?>