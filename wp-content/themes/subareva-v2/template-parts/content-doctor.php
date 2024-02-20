<?php
$post_id = get_the_ID();
?>
<section class="doctor">
    <div class="doctor__container padding-right-part">
        <div class="doctor__img">
            <img src="<?php echo the_field('foto_doktora', $post_id)?>" alt="<?php the_field('fio_doktora', $post_id)?>">
        </div>
        <div class="doctor__text">
            <h2 class="doctor__title section-title">
                <?php the_field('fio_doktora', $post_id)?>
            </h2>
            <p class="doctor__subtitle"><?php the_field('dolzhnost_doktora', $post_id)?></p>
            <div class="doctor__desc">
                <?php the_field('opisanie_doktora', $post_id)?>
            </div>
            <div class="button button-white js-form">
                <span><?php the_field('nadpis_na_knopke', $post_id)?></span>
            </div>
        </div>
    </div>
    <img class="decoration" src="<?php echo the_field('dekorativnyj_element', $post_id)?>" alt="<?php the_field('fio_doktora', $post_id)?>">
</section>