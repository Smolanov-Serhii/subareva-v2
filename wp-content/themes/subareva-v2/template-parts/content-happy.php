<?php
$post_id = get_the_ID();
?>
<section class="happy">
    <div class="happy__container medium-container">
        <h2 class="history__title">
            <?php the_field('zagolovok_slajdera_paczientov' , $post_id)?>
        </h2>
        <?php
        if( have_rows('foto_slajder_paczientov' , $post_id )):
            ?>
            <div class="happy__list swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    while( have_rows('foto_slajder_paczientov' , $post_id ) ) : the_row();
                        $image = get_sub_field('fotografiya_paczienta');
                        ?>
                        <div class="happy__item swiper-slide">
                            <img src="<?php echo $image; ?>" alt="<?php the_field('zagolovok_slajdera_paczientov' , $post_id)?>">
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    while( have_rows('foto_slajder_paczientov' , $post_id ) ) : the_row();
                        $image = get_sub_field('fotografiya_paczienta');
                        ?>
                        <div class="happy__item swiper-slide">
                            <img src="<?php echo $image; ?>" alt="<?php the_field('zagolovok_slajdera_paczientov' , $post_id)?>">
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    while( have_rows('foto_slajder_paczientov' , $post_id ) ) : the_row();
                        $image = get_sub_field('fotografiya_paczienta');
                        ?>
                        <div class="happy__item swiper-slide">
                            <img src="<?php echo $image; ?>" alt="<?php the_field('zagolovok_slajdera_paczientov' , $post_id)?>">
                        </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>
