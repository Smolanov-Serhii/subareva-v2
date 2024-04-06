<?php
$post_id = get_the_ID();
?>
<section class="premium">
    <div class="premium__container padding-left-part">
        <?php
            if (get_field('zagolovok_premialnoe_obsluzhivanie' , $post_id)){
                ?>
                    <div class="premium__title section-title">
                        <?php the_field('zagolovok_premialnoe_obsluzhivanie' , $post_id)?>
                    </div>
                <?php
            }
        ?>
        <div class="premium__wrapper">
            <div class="premium__text">
                <?php the_field('opisanie_premialnyh' , $post_id)?>
            </div>
            <?php
            $counter = 1;
            if( have_rows('galereya_primealnyh' , $post_id )):
                ?>
                <div class="premium__images swiper">
                    <div class="premium__list swiper-wrapper">
                        <?php
                        while( have_rows('galereya_primealnyh' , $post_id ) ) : the_row();
                            $image = get_sub_field('kartinka_dlya_premialnyh');
                            if ($counter == 1 || $counter == 4 || $counter == 7){
                                echo '<div class="premium__list-group swiper-slide">';
                            }
                            ?>
                            <div class="premium__item">
                                <img src="<?php echo $image; ?>" alt="<?php the_field('zagolovok_premialnoe_obsluzhivanie' , $post_id)?>">
                            </div>
                        <?php
                        if ($counter == 3 || $counter == 6 || $counter == 9){
                            echo '</div>';
                        }
                        $counter++;
                        endwhile
                        ?>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>
