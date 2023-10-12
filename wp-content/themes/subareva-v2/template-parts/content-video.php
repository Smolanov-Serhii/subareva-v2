<?php
$post_id = get_the_ID();
?>
<section class="video">
    <div class="video__container main-container">
        <?php
        if (get_field('fajl_video_block_video', $post_id)){
            ?>
            <video muted width="100%" height="100%" autoplay preload="metadata" loop poster="<?php echo the_field('oblozhka_dlya_video_block_video', $post_id);?>">
                <source src="<?php the_field('fajl_video_block_video', $post_id);?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <?php
        }
        ?>
    </div>
</section>
