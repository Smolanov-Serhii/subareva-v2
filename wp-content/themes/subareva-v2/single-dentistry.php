<?php
/**
 * The template for displaying all pages
 */

get_header();
$post_id = get_the_ID();
?>
<main class="main">
    <?php get_template_part( 'template-parts/content', 'banner-service' ); ?>
    <section class="vstavka service-vstavka">
        <div class="vstavka__container">
            <div class="vstavka__left padding-left-part">
                <h2 class="vstavka__title">
                    <?php the_field('zagolovok_bloka_vstavka' , 102)?>
                </h2>
                <div class="vstavka__subtitle">
                    <?php the_field('podzagolovok_bloka_vstavka' , 102)?>
                </div>
            </div>
            <div class="vstavka__right">
                <?php
                if( have_rows('nomera_telefonov', 102) ):
                    ?>
                    <?php
                    while( have_rows('nomera_telefonov', 102) ) : the_row();
                        $phone = get_sub_field('nomer_telefona');
                        ?>
                        <a href="tel:<?php echo $phone?>" class="vstavka__phone"><?php echo $phone?></a>
                    <?php
                    endwhile;
                    ?>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>
    <div class="current-team">
        <div class="current-team__container main-container">
            <h2 class="current-team__title section-title">
                <?php the_field('stomatologiya_zagolovok' , 'options')?>
            </h2>
            <div class="current-team__list stomatology">
                <?php
                if( have_rows('speczialisty_stomatologii', 'options') ):
                    ?>
                    <?php
                    $counter =1;
                    while( have_rows('speczialisty_stomatologii' , 'options') ) : the_row();
                        $image = get_sub_field('fotografiya');
                        $name = get_sub_field('fio');
                        $work = get_sub_field('dolzhnost');
                        ?>
                        <div class="team__item">
                            <div class="team__photo">
                                <img src="<?php echo $image?>" alt="<?php echo $name?>">
                            </div>
                            <div class="team__person">
                                <p class="team__name"><?php echo $name?></p>
                                <p class="team__work"><?php echo $work?></p>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
    <?php get_template_part( 'template-parts/content', 'reviews' ); ?>
</main>
<?php get_footer();?>
<?php wp_footer(); ?>
</body>
</html>