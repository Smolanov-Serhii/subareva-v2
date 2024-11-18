<?php
$post_id = get_the_ID();
?>
<section class="banner-2c2">
    <div class="banner-2c2__container medium-container">
        <div class="banner-2c2__content">
            <h2 class="banner-2c2__title">
                <?php the_field('zagolovok_bloka_2' , $post_id)?>
            </h2>
            <div class="banner-2c2__subtitle">
                <?php the_field('opisanie_bloka_2' , $post_id)?>
            </div>
        </div>
        <div class="banner-2c2__img">
            <img src="<?php echo the_field('izobrazheni_1_yuloka_2' , $post_id)?>" alt="<?php the_field('zagolovok_bloka_2' , $post_id)?>">
        </div>
        <div class="banner-2c2__img">
            <img src="<?php echo the_field('izobrazhenie_2_bloka_2' , $post_id)?>" alt="<?php the_field('zagolovok_bloka_2' , $post_id)?>">
        </div>
    </div>
</section>
