<?php
$post_id = get_the_ID();
?>
<section class="banner-dark white">
    <div class="banner-dark__img">
        <?php
        if ( wp_is_mobile() ) {
            ?>
            <img src="<?php echo the_field('kartinka_bannera_mob', $post_id)?>">
            <?php
        } else {
            ?>
            <img src="<?php echo the_field('kartinka_bannera', $post_id)?>">
            <?php
        }
        ?>

    </div>
    <div class="banner-dark__container main-container">
        <?php
        if (is_page(822)){
            ?>
            <div class="banner-dark__subtitle white">
                <?php the_field('podzagolovok_banera', $post_id)?>
            </div>
            <?php
            if (get_field('aktivator_pokaza_zagolovka', 'option') == 'true'){
                ?>
                <h1 class="banner-dark__title white"><?php the_field('tekst_vremennogo_zagolovka', 'option') ?></h1>
                <?php
            } else {
                ?>
                <h1 class="banner-dark__title white"><?php the_field('zagolovok_banera', $post_id)?></h1>
                <?php
            }

        } else {
            if (get_field('aktivator_pokaza_zagolovka', 'option') == 'true'){
                ?>
                <h1 class="banner-dark__title white"><?php the_field('tekst_vremennogo_zagolovka', 'option') ?></h1>
                <?php
            } else {
                ?>
                <h1 class="banner-dark__title white"><?php the_field('zagolovok_banera', $post_id)?></h1>
                <?php
            }
            ?>
                <div class="banner-dark__subtitle white">
                    <?php the_field('podzagolovok_banera', $post_id)?>
                </div>
            <?php
        }

        ?>

        <div class="banner-dark__lnk button js-form">
            <span><?php the_field('tekst_na_knopke', $post_id)?></span>
        </div>
    </div>
</section>