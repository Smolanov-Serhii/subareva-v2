<?php
/**
Template Name: Стоматология
 */


get_header();

?>
    <!-- Meta Pixel Code -->
<!--    <script>-->
<!--        !function(f,b,e,v,n,t,s)-->
<!--        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?-->
<!--            n.callMethod.apply(n,arguments):n.queue.push(arguments)};-->
<!--            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';-->
<!--            n.queue=[];t=b.createElement(e);t.async=!0;-->
<!--            t.src=v;s=b.getElementsByTagName(e)[0];-->
<!--            s.parentNode.insertBefore(t,s)}(window, document,'script',-->
<!--            'https://connect.facebook.net/en_US/fbevents.js');-->
<!--        fbq('init', '676280260679080');-->
<!--        fbq('track', 'PageView');-->
<!--    </script>-->
<!--    <noscript><img height="1" width="1" style="display:none"-->
<!--                   src="https://www.facebook.com/tr?id=676280260679080&ev=PageView&noscript=1"-->
<!--        /></noscript>-->
    <!-- End Meta Pixel Code -->
    <main id="main" class="main">
        <?php get_template_part( 'template-parts/content', 'carusel' ); ?>
        <?php get_template_part( 'template-parts/content', 'banner-main' ); ?>
        <?php get_template_part( 'template-parts/content', 'digits' ); ?>
        <?php get_template_part( 'template-parts/content', 'directions' ); ?>
        <!--        --><?php //get_template_part( 'template-parts/content', 'services-big' ); ?>
        <?php get_template_part( 'template-parts/content', 'our-services' ); ?>
        <?php get_template_part( 'template-parts/content', 'premium' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment-new' ); ?>
        <?php
        if (is_page(369)){
            ?>
            <?php get_template_part( 'template-parts/content', 'innovation' ); ?>
            <?php
        }
        ?>
        <?php $params = [ 'type' => 'stomatologiya'];
        get_template_part( 'template-parts/content', 'team-new', $params ); ?>
        <?php get_template_part( 'template-parts/content', 'waranty' ); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'comform' ); ?>
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
        <?php get_template_part( 'template-parts/content', 'reviews' ); ?>
        <?php get_template_part( 'template-parts/content', 'appointment' ); ?>
    </main>
<?php

get_footer();