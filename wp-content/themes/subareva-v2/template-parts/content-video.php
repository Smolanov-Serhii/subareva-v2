<?php
$post_id = get_the_ID();
?>
<section class="video-section">
    <div class="video-section__container main-container">
        <?php
        if (get_field('fajl_video_block_video', $post_id)){
            ?>
            <video width="100%" height="100%" poster="<?php echo the_field('oblozhka_dlya_video_block_video', $post_id);?>" autoplay preload="metadata" loop  muted playsinline>
                <source src="<?php the_field('fajl_video_block_video', $post_id);?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <?php
        }
        ?>
    </div>
</section>
