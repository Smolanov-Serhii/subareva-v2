<?php
$post_id = get_the_ID();
?>
<section class="banner banner__about">
    <div class="banner__container">
        <div class="banner__left padding-left-part">
<!--            <img class="banner__about-title" src="--><?php //the_field('logotip_v_banner', $post_id)?><!--" alt="">-->
            <?php
            if (get_field('aktivator_pokaza_zagolovka', 'option') == 'true' && !is_page( 1136 )){
                ?>
                    <h1 class="banner__title"><?php the_field('tekst_vremennogo_zagolovka', 'option') ?></h1>
                <?php
            } else {
                ?>
                    <h1 class="banner__title"><?php the_field('podzagolovok_v_baner', $post_id)?></h1>
                <?php
            }
            if (get_field('melkij_tekst', $post_id)){
                ?>
                <p class="banner__small-text"><?php the_field('melkij_tekst', $post_id)?></p>
                <?php
            }
            ?>

            <div class="banner__subtitle">
                <?php the_field('podzagolovok_desc', $post_id)?>
            </div>
            <div class="banner__button">
                <?php
                if (is_page( 1136 )){
                    ?>
                        <div class="button js-vac">
                            <span><?php the_field('tekst_na_knopke', $post_id)?></span>
                        </div>
                    <?php
                } else {
                    if ( wp_is_mobile() ) {
                        ?>
                        <a href="tel:<?php the_field('nomer_telefona', 'option')?>" class="button">
                            <span><?php the_field('tekst_na_knopke', 2)?></span>
                        </a>
                        <?php
                    } else {
                        ?>
                        <div class="button js-form">
                            <span><?php the_field('tekst_na_knopke', 2)?></span>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
        <div class="banner__right">
            <?php
                if (is_page( 1136 )){
                    if ( wp_is_mobile() ) {
                        ?>
                        <img src="<?php echo the_field('fotografiya_v_baner_mob', $post_id)?>" alt="">
                        <?php
                    } else {
                        ?>
                        <img src="<?php the_field('fotografiya_v_baner', $post_id)?>" alt="">
                        <?php
                    }
                } else {
                    ?>
                        <img src="<?php the_field('fotografiya_v_baner', $post_id)?>" alt="">
                    <?php
                }

            ?>

        </div>
        <div class="banner__logo">
            <img src="<?php the_field('nadpis_po_seridine', $post_id)?>" alt="">
        </div>
    </div>
</section>
