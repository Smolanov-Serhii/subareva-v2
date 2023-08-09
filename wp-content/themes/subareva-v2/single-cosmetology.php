<?php
/**
 * The template for displaying all pages
 */

get_header();
$post_id = get_the_ID();
?>
<main class="main">
    <?php get_template_part( 'template-parts/content', 'banner-service' ); ?>
    <?php get_template_part( 'template-parts/content', 'appointment' ); ?>
</main>
<?php get_footer();?>
<?php wp_footer(); ?>
</body>
</html>