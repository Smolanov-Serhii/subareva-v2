<?php
$post_id = get_the_ID();
?>
<section class="technology">
    <div class="technology__container main-container">
        <div class="technology__first">
            <div class="technology__header">
                <h2 class="technology__title section-title">
                    <?php the_field('zagolovok_nashi_tehnologii', $post_id)?>
                </h2>
                <p class="technology__desc">
                    <?php the_field('opisanie_nashi_tehnologii', $post_id)?>
                </p>
            </div>
            <img src="<?php the_field('kartinka_1', $post_id)?>">
            <img src="<?php the_field('kartinka_2', $post_id)?>">
        </div>
        <div class="technology__second">
            <img src="<?php the_field('kartinka_3', $post_id)?>">
            <img src="<?php the_field('kartinka_4', $post_id)?>">
            <img src="<?php the_field('kartinka_5', $post_id)?>">
        </div>
    </div>
</section>
