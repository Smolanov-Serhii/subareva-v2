<?php
$post_id = get_the_ID();
?>
<section class="banner-dark">
    <div class="banner-dark__img">
        <img src="<?php echo the_field('kartinka_bannera', $post_id)?>" alt="<?php the_field('zagolovok_banera', $post_id)?>">
    </div>
    <div class="banner-dark__container main-container">
        <h1 class="banner-dark__title">
            <?php the_field('zagolovok_banera', $post_id)?>
        </h1>
        <div class="banner-dark__subtitle">
            <?php the_field('podzagolovok_banera', $post_id)?>
        </div>
        <div class="banner-dark___lnk button button-white js-form">
            <span><?php the_field('tekst_na_knopke', $post_id)?></span>
        </div>
    </div>
</section>