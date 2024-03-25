<?php

if (is_page(102)){
    $post_id = 2;
} else {
    $post_id = get_the_ID();
}
?>
<section class="services">
    <div class="services__container main-container">
        <h2 class="services__title section-title">
            <?php the_field('zagolovok_bloka_uslugi' , $post_id)?>
        </h2>
        <div class="services__list">
            <div class="services__kosm services__group">
                <?php
                if ( wp_is_mobile() ) {

                } else {
                    ?>
                    <div class="services__group-image">
                        <img src="<?php the_field('kartinka_dlya_uslug_kosmetologii' , $post_id)?>" alt="<?php the_field('tekst_bloka_uslug_kosmetologii' , $post_id)?>">
                        <div class="services__group-name">
                            <?php the_field('tekst_bloka_uslug_kosmetologii' , $post_id)?>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="services__group-list">
                    <h3 class="services__group-title">
                        <a href="<?php echo get_home_url() . '/kosmetologiya' ?>"><?php the_field('tekst_bloka_uslug_kosmetologii' , $post_id)?></a>
                    </h3>
                    <?php
                    if ( wp_is_mobile() ) {
                        ?>
                        <div class="services__group-image">
                            <img src="<?php the_field('kartinka_dlya_bloka_uslug_kosmetologii_mobajl' , $post_id)?>" alt="<?php the_field('tekst_bloka_uslug_kosmetologii' , $post_id)?>">
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    $args = array(
                        'post_type' 	 => 'cosmetology'
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <a href="<?php the_permalink();?>" class="services__group-item"><?php the_title();?></a>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="services__stom services__group">
                <?php
                if ( wp_is_mobile() ) {

                } else {
                    ?>
                    <div class="services__group-image">
                        <img src="<?php the_field('kartinka_dlya_bloka_uslug_stomatologii' , $post_id)?>" alt="<?php the_field('tekst_bloka_uslug_stomalogii' , $post_id)?>">
                        <div class="services__group-name">
                            <?php the_field('tekst_bloka_uslug_stomalogii' , $post_id)?>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="services__group-list">
                    <h3 class="services__group-title">
                        <a href="<?php echo get_home_url() . '/dentistry' ?>"><?php the_field('tekst_bloka_uslug_stomalogii' , $post_id)?></a>
                    </h3>
                    <?php
                    if ( wp_is_mobile() ) {
                        ?>
                        <div class="services__group-image">
                            <img src="<?php the_field('kartinka_dlya_bloka_uslug_stomatologii_mobajl' , $post_id)?>" alt="<?php the_field('tekst_bloka_uslug_stomalogii' , $post_id)?>">
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    $args = array(
                        'post_type' 	 => 'dentistry'
                    );
                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                            <a href="<?php the_permalink();?>" class="services__group-item"><?php the_title();?></a>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
