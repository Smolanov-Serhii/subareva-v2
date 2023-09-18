<?php
$post_id = get_the_ID();
?>
<section class="services-animate">
    <div class="services-animate__container">
        <div class="services-animate__wrapper">
            <div class="services-animate__block padding-left-part">
                <h2 class="services-animate__title section-title">
                    <?php the_field('zagolovok_bloka_uslugi' , $post_id)?>
                </h2>
                <div class="services-animate__list">
                    <?php
                    $service = 'dentistry';
                    if ($post_id == 447){
                        $service = 'cosmetology';
                    } else {
                        $service = 'dentistry';
                    }
                    $args = array(
                        'post_type' 	 => $service
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <a href="<?php the_permalink();?>" class="services-animate__lnk"><?php the_title();?></a>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="services-animate__image">
                <img src="<?php the_field('kartinka_v_blok' , $post_id)?>" alt="<?php the_field('zagolovok_bloka_uslugi' , $post_id)?>">
            </div>
        </div>
    </div>
</section>
