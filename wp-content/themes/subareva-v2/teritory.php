<?php
/**
Template Name: Территория красивых людей
 */


get_header();

?>
    <main id="main" class="main">
        <?php get_template_part( 'template-parts/content', 'banner-2c1' ); ?>
        <?php get_template_part( 'template-parts/content', 'banner-2c2' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment-new' ); ?>
        <?php get_template_part( 'template-parts/content', 'acservice' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment-new' ); ?>
        <?php get_template_part( 'template-parts/content', 'history' ); ?>
        <?php get_template_part( 'template-parts/content', 'happy' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment-new' ); ?>
    </main>
<?php

get_footer();