<?php
$post_id = get_the_ID();
?>
<section class="need">
    <div class="need__img">
        <img src="<?php echo the_field('kartinka_need', $post_id)?>" alt="<?php the_field('zagolovok_need', $post_id)?>">
    </div>
    <div class="need__container padding-right-part">
        <div class="need__text">
            <h2 class="need__title section-title">
                <?php the_field('zagolovok_need', $post_id)?>
            </h2>
            <div class="need__desc">
                <?php the_field('opisanie_need', $post_id)?>
            </div>
        </div>
    </div>
</section>