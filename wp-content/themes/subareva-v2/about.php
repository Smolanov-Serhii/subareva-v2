<?php
/**
Template Name: О клинике
 */


get_header();
?>
    <main class="main">
        <?php get_template_part( 'template-parts/content', 'about-banner' ); ?>
        <?php get_template_part( 'template-parts/content', 'digits' ); ?>
        <?php get_template_part( 'template-parts/content', 'team' ); ?>
        <?php get_template_part( 'template-parts/content', 'vstavka' ); ?>
        <?php get_template_part( 'template-parts/content', 'params' ); ?>
        <?php get_template_part( 'template-parts/content', 'reviews' ); ?>
        <?php get_template_part( 'template-parts/content', 'waranty' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment' ); ?>
    </main>
<?php

get_footer();