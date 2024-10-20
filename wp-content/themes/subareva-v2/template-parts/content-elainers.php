<?php
$post_id = get_the_ID();
?>
<section class="elainers">
    <div class="elainers__container main-container">
        <div class="elainers__first">
            <h2 class="elainers__title section-title">
                <?php the_field('zagolovok_bloka_elajnery', $post_id)?>
            </h2>
            <div class="elainers__desc">
                <?php the_field('opisanie_bloka_elajnery', $post_id)?>
            </div>
            <img src="<?php the_field('kartinka_v_pervyj_blok', $post_id)?>">
        </div>
        <div class="elainers__second">
            <img src="<?php the_field('kartinka_v_vtoroj_blok', $post_id)?>">
        </div>
    </div>
</section>
