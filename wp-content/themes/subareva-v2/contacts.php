<?php
/**
Template Name: Контакты
 */


get_header();
?>
    <main class="main">
        <?php get_template_part( 'template-parts/content', 'maps' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment' ); ?>
    </main>
<?php

get_footer();