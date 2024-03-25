<?php
$post_id = get_the_ID();
?>
<section class="banner banner__about">
    <div class="banner__container">
        <div class="banner__left padding-left-part">
<!--            <img class="banner__about-title" src="--><?php //the_field('logotip_v_banner', $post_id)?><!--" alt="">-->
            <h1 class="banner__title">
                <?php the_field('podzagolovok_v_baner', $post_id)?>
            </h1>
            <div class="banner__subtitle">
                <?php the_field('podzagolovok_desc', $post_id)?>
            </div>
            <div class="banner__button">
                <?php
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
                ?>

            </div>
        </div>
        <div class="banner__right">
            <img src="<?php the_field('fotografiya_v_baner', $post_id)?>" alt="">
        </div>
        <div class="banner__logo">
            <img src="<?php the_field('nadpis_po_seridine', $post_id)?>" alt="">
        </div>
    </div>
</section>
