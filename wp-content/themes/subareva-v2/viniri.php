<?php
/**
Template Name: Виниры
 */


get_header();

?>
    <main id="main" class="main">
        <?php get_template_part( 'template-parts/content', 'banner-white' ); ?>
        <?php get_template_part( 'template-parts/content', 'total' ); ?>
        <?php get_template_part( 'template-parts/content', 'need' ); ?>
        <?php get_template_part( 'template-parts/content', 'prich-new' ); ?>
        <?php get_template_part( 'template-parts/content', 'procedure' ); ?>
        <?php get_template_part( 'template-parts/content', 'vinirs' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-faq' ); ?>
        <?php get_template_part( 'template-parts/content', 'doctor' ); ?>
        <?php get_template_part( 'template-parts/content', 'compare' ); ?>
        <?php get_template_part( 'template-parts/content', 'reviews' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'price' ); ?>
        <?php get_template_part( 'template-parts/content', 'map' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment-new' ); ?>
    </main>
<?php

get_footer();