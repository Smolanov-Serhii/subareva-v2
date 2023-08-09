<?php
$post_id = get_the_ID();
?>
<section class="waranty">
    <div class="waranty__container main-container">
        <div class="waranty__left">
            <h2 class="waranty__title section-title">
                <?php the_field('zagolovok_bloka_garantii' , $post_id)?>
            </h2>
            <div class="waranty__content">
                <?php the_field('opisanie_bloka_garantii' , $post_id)?>
            </div>
        </div>
        <div class="waranty__right">
            <img src="<?php the_field('izobrazhenie_bloka_garantii' , $post_id)?>" alt="<?php the_field('zagolovok_bloka_garantii' , $post_id)?>">
        </div>
    </div>
</section>
