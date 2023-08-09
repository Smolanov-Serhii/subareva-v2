<?php
/**
Template Name: Главная
 */


get_header();
?>
    <main id="main" class="main">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'digits' ); ?>
        <?php get_template_part( 'template-parts/content', 'about' ); ?>
        <?php get_template_part( 'template-parts/content', 'services' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment' ); ?>
    </main>
<?php

get_footer();