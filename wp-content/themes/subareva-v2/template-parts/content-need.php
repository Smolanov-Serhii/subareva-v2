<?php
$post_id = get_the_ID();
?>
<section class="need">
    <div class="need__img">
        <?php
        if (get_field('video_dlya_uslugi', $post_id)){
        ?>
        <video class="autoplay" width="100%" height="100%" poster="<?php echo the_field('kartinka_need', $post_id)?>" autoplay preload="metadata" loop  muted playsinline>
            <source src="<?php the_field('video_dlya_uslugi', $post_id);?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <?php
            } else{
                ?>
                    <img src="<?php echo the_field('kartinka_need', $post_id)?>" alt="<?php the_field('zagolovok_need', $post_id)?>">
                <?php
            }
        ?>

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