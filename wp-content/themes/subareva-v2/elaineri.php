<?php
/**
Template Name: Элайнеры
 */


get_header();

$post_id = get_the_ID();

?>
    <main id="main" class="main">
        <?php get_template_part( 'template-parts/content', 'banner-dark' ); ?>
        <?php get_template_part( 'template-parts/content', 'why-elainers' ); ?>
        <?php get_template_part( 'template-parts/content', 'procedure' ); ?>
        <?php get_template_part( 'template-parts/content', 'technology' ); ?>
        <?php get_template_part( 'template-parts/content', 'elainers' ); ?>
        <section class="imp-faq">
            <div class="imp-faq__container padding-left-part">
                <div class="imp-faq__text">
                    <h2 class="imp-faq__title section-title">
                        <?php the_field('zagolovok_bloka_garantii', $post_id)?>
                    </h2>
                    <div class="imp-faq__desc">
                        <?php the_field('opisanie_bloka_garantii', $post_id)?>
                    </div>
                </div>
            </div>
            <div class="imp-faq__img">
                <img src="<?php echo the_field('kartinka_pochemu_stoit_vybrat', $post_id)?>" alt="<?php the_field('zagolovok_pochemu_stoit_vybrat_nashu_kliniku', $post_id)?>">
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'doctor' ); ?>
        <?php get_template_part( 'template-parts/content', 'reviews' ); ?>
        <?php get_template_part( 'template-parts/content', 'map' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment-new' ); ?>
    </main>
<?php

get_footer();