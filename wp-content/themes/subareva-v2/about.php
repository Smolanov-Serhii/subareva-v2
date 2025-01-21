<?php
/**
Template Name: О клинике
 */


get_header();
?>
    <main class="main">
        <?php get_template_part( 'template-parts/content', 'about-banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'services' ); ?>
        <?php get_template_part( 'template-parts/content', 'params' ); ?>
        <?php
        $params = [ 'type' => ''];
        get_template_part( 'template-parts/content', 'team-new',  $params);
        ?>
        <?php get_template_part( 'template-parts/content', 'innovation' ); ?>
        <?php get_template_part( 'template-parts/content', 'premium' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'digits' ); ?>
        <?php get_template_part( 'template-parts/content', 'waranty' ); ?>
        <section class="grid-photo">
            <div class="grid-photo__container main-container">
                <h2 class="grid-photo__title section-title">
                    <?php the_field('zagolovok_bloka_foto', 1136)?>
                </h2>
                <div class="grid-photo__list">
                    <?php
                    if( have_rows('perechen_fotografij_bloka_foto' , 1136 )):
                        while( have_rows('perechen_fotografij_bloka_foto' , 1136 ) ) : the_row();
                            $img = get_sub_field('fotografiya_dlya_bloka_foto');
                            ?>
                            <div class="grid-photo__item">
                                <img src="<?php echo $img; ?>" alt="">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </section>
<!--        --><?php //get_template_part( 'template-parts/content', 'comform' ); ?>
        <?php get_template_part( 'template-parts/content', 'reviews' ); ?>
        <?php get_template_part( 'template-parts/content', 'map' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment-new' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'vstavka' ); ?>
    </main>
<?php

get_footer();