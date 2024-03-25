<?php
$post_id = get_the_ID();
?>
<section class="comfort">
    <div class="comfort__container main-container">
        <div class="comfort__title section-title">
            <?php the_field('zagolovok_bloka_konfort' , $post_id)?>
        </div>
        <div class="comfort__list">
            <?php
            if( have_rows('galereya_komforta' , $post_id )):
                while( have_rows('galereya_komforta' , $post_id ) ) : the_row();
                    $image = get_sub_field('fotografiya_komforta');
                    ?>
                    <div class="comfort__list-item">
                        <img src="<?php echo $image; ?>" alt="<?php the_field('zagolovok_bloka_konfort' , $post_id)?>">
                    </div>
                    <?php
                endwhile
                ?>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
